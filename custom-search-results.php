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
    <?php
    $default__tag = isset($_GET['search']) ? sanitize_text_field($_GET['search']) : 'development';
    ?>
    <div class="search-results__header">
        <form action="<?php echo esc_url(home_url('search-results')); ?>" method="get" class="search-results__form">
            <div class="search-results__input-border">
                <input type="text" name="search" id="search" class="search-results__input" placeholder="Zoek hier...">
            </div>
            <div class="search-results__button-border">
                <button class="search-results__button">
                    Zoeken
                </button>
            </div>
        </form>
    </div>

    <div class="search-results__header">
        <div class="search-results__title">
            Alle zoekresultaten voor “<?php echo $default__tag; ?>”
        </div>
    </div>

    <div class="search-results__text">
        <?php
        // Custom WP_Query to get posts with the specified tag for 'blog' and 'event' post types
        $tag__query = new WP_Query([
            'tag' => $default__tag,
            'post_type' => ['blog', 'event'],
            'posts_per_page' => -1,
        ]);

        echo $tag__query->found_posts . ' resultaten';
        ?>
    </div>

    <div class="row card-container row__gap">
        <?php
        // Get current page
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

        // WP_Query for Events
        $search__args = [
            'post_type' => ['blog', 'event'],
            'posts_per_page' => -1,
            'orderby' => 'date',
            'order' => 'ASC',
            'paged' => $paged,
            'tax_query' => [
                [
                    'taxonomy' => 'post_tag',
                    'field' => 'name',
                    'terms' => $default__tag,
                ],
            ],
        ];

        $search__query = new WP_Query($search__args);
        if ($search__query->have_posts()) {
            // Create arrays to store post data
            $blogs__posts__array = [];
            $events__posts__array = [];

            // Loop through the posts and add data to the arrays
            while ($search__query->have_posts()) {
                $search__query->the_post();

                // Get the categories for the current post
                $categories = get_the_category(get_the_ID());

                // Initialize an array to store category names
                $category__names = [];

                // Loop through the categories and add names to the array
                foreach ($categories as $category) {
                    $category__names[] = $category->name;
                }

                // Get tags for the current post
                $tags = get_the_tags();
                $tag__names = [];

                // Loop through the tags and add names to the array
                if ($tags) {
                    foreach ($tags as $tag) {
                        $tag__names[] = $tag->name;
                    }
                }

                if (has_term('blogs', 'type', get_the_ID())) {
                    $blog__data = [
                        'ID' => get_the_ID(),
                        'post_title' => get_the_title(),
                        'post_content' => get_the_content(),
                        'post_name' => get_post_field('post_name'),
                        'type' => wp_get_post_terms(get_the_ID(), 'type'),
                        'categories' => $category__names,
                        'tags' => $tag__names,
                        'featured_image' => get_the_post_thumbnail_url(get_the_ID(), 'full'),
                    ];

                    $blogs__posts__array[] = $blog__data;
                }

                if (has_term('events', 'type', get_the_ID())) {
                    $event__date = get_post_meta(get_the_ID(), '_event_date', true);

                    $formatted__event__date = date('d-m-Y', strtotime($event__date));

                    $events__data = [
                        'ID' => get_the_ID(),
                        'post_title' => get_the_title(),
                        'post_content' => get_the_content(),
                        'post_name' => get_post_field('post_name'),
                        'type' => wp_get_post_terms(get_the_ID(), 'type'),
                        'categories' => $category__names,
                        'tags' => $tag__names,
                        'date' => $formatted__event__date,
                        'featured_image' => get_the_post_thumbnail_url(get_the_ID(), 'full'),
                    ];

                    $events__posts__array[] = $events__data;
                }
            }

            // Reset post data to the main query
            wp_reset_postdata();

            $search__posts__array = array_merge($blogs__posts__array, $events__posts__array);

            // Convert the array to JSON
            $json__search__data = json_encode(
                $search__posts__array,
                JSON_PRETTY_PRINT
            );

            // Decode the JSON data
            $search__posts__data = json_decode($json__search__data, true);

            // Check if there are posts
            if (!empty($search__posts__data)) {
                // Loop through the posts
                foreach ($search__posts__data as $search) {
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
                                <?php echo substr(strip_tags($search['post_content']), 0, 200); ?>
                            </p>
                            <form action="<?php echo get_home_url() . '/' . esc_html(str_replace('s', '', $search['type'][0]['name'])) . '/' . esc_html($search['post_name']); ?>" class="card__form">
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