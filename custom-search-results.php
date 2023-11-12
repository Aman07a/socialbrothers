<?php
/*
Template Name: Custom Search Results
 */

defined('ABSPATH') || exit('Forbidden');

get_header();
?>

<!-- Medium Width Banner -->
<div class="sm-w-banner">
    <div class="image-container">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/215d1c7002ed987517e77ded5f92d0e6489e9f01.jpg'; ?>" alt="Image" class="img-fluid">
        <div class="search-banner-container">
            <div class="search-banner-container__cover">
                <h2 class="search-banner-container__title">Zoekresultaten</h2>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="search-results__header">
        <form action="#search-results?search=development" class="search-results__form">
            <div class="search-results__input-border">
                <input type="text" name="search" id="search" class="search-results__input" placeholder="development" disabled>
            </div>
            <div class="search-results__button-border">
                <button class="search-results__button" disabled>
                    Zoeken
                </button>
            </div>
        </form>
    </div>

    <div class="search-results__header">
        <div class="search-results__title">
            Alle zoekresultaten voor “development”
        </div>
    </div>

    <div class="search-results__text">
        <?php
        $tag = 'development';

        // Custom WP_Query to get posts with the specified tag for 'blog' and 'evebnt' post types
        $tag_query = new WP_Query([
            'tag' => $tag,
            'post_type' => ['blog', 'event'], // Include multiple post types
            'posts_per_page' => -1, // Display all posts
        ]);

        echo $tag_query->found_posts . ' resultaten';
        ?>
    </div>

    <div class="row card-container row-gap">
        <?php
        // Get current page
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

        // WP_Query for Events
        $search_args = [
            'post_type' => ['blog', 'event'],
            'posts_per_page' => -1,
            'orderby' => 'date',
            'order' => 'ASC',
            'paged' => $paged,
            'tax_query' => [
                [
                    'taxonomy' => 'post_tag',
                    'field' => 'name',
                    'terms' => 'development',
                ],
            ],
        ];

        $search_query = new WP_Query($search_args);
        if ($search_query->have_posts()) {
            // Create arrays to store post data
            $blogs_posts_array = [];
            $events_posts_array = [];

            // Loop through the posts and add data to the arrays
            while ($search_query->have_posts()) {
                $search_query->the_post();

                // Get the categories for the current post
                $categories = get_the_category(get_the_ID());

                // Initialize an array to store category names
                $category_names = [];

                // Loop through the categories and add names to the array
                foreach ($categories as $category) {
                    $category_names[] = $category->name;
                }

                // Get tags for the current post
                $tags = get_the_tags();
                $tag_names = [];

                // Loop through the tags and add names to the array
                if ($tags) {
                    foreach ($tags as $tag) {
                        $tag_names[] = $tag->name;
                    }
                }

                if (has_term('blogs', 'type', get_the_ID())) {
                    $blog_data = [
                        'ID' => get_the_ID(),
                        'post_title' => get_the_title(),
                        'post_content' => get_the_content(),
                        'post_name' => get_post_field('post_name'),
                        'type' => wp_get_post_terms(get_the_ID(), 'type'),
                        'categories' => $category_names,
                        'tags' => $tag_names,
                        'featured_image' => get_the_post_thumbnail_url(get_the_ID(), 'full'),
                    ];

                    $blogs_posts_array[] = $blog_data;
                }

                if (has_term('events', 'type', get_the_ID())) {
                    $event_date = get_post_meta(get_the_ID(), '_event_date', true);

                    $events_data = [
                        'ID' => get_the_ID(),
                        'post_title' => get_the_title(),
                        'post_content' => get_the_content(),
                        'post_name' => get_post_field('post_name'),
                        'type' => wp_get_post_terms(get_the_ID(), 'type'),
                        'categories' => $category_names,
                        'tags' => $tag_names,
                        'date' => $event_date,
                        'featured_image' => get_the_post_thumbnail_url(get_the_ID(), 'full'),
                    ];

                    $events_posts_array[] = $events_data;
                }
            }

            // Reset post data to the main query
            wp_reset_postdata();

            $search_posts_array = array_merge($blogs_posts_array, $events_posts_array);

            // Convert the array to JSON
            $json_search_data = json_encode(
                $search_posts_array,
                JSON_PRETTY_PRINT
            );

            // echo $json_search_data;

            // Decode the JSON data
            $search_posts_data = json_decode($json_search_data, true);

            // Check if there are posts
            if (!empty($search_posts_data)) {
                // Loop through the posts
                foreach ($search_posts_data as $search) {
        ?>
                    <div class="col-xl-4 col-lg-6 auto">
                        <div class="card auto">
                            <img src="<?php echo esc_html($search['featured_image']); ?>" class="card-img-top card__img--cover" alt="">
                            <div class="card-img-overlay card__overlay d-flex flex-column justify-content-end">
                                <form class="card__type-form card__type-<?php echo esc_html($search['categories'][0]); ?>">
                                    <button class="card__type-button" disabled>
                                        <?php echo esc_html($search['categories'][0]); ?>
                                    </button>
                                </form>
                            </div>
                            <?php if (isset($search['date'])) { ?>
                                <p class="event__date">
                                    <?php echo esc_html($search['date']); ?>
                                </p>
                            <?php }
                            ?>
                            <p class="card__title">
                                <?php echo esc_html($search['post_title']); ?>
                            </p>
                            <p class="card__text">
                                <?php echo esc_html($search['post_content']); ?>
                            </p>
                            <form action="<?php echo get_home_url() . '/event/' . esc_html($search['post_name']); ?>" class="card__form">
                                <button>
                                    Lees meer <i class="fa-sharp fa-solid fa-arrow-right"></i>
                                </button>
                            </form>
                        </div>
                    </div>
        <?php
                }
            }
        }

        ?>
    </div>
</div>

<?php

get_footer();
?>