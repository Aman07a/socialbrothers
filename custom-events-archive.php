<?php
/*
Template Name: Custom Events Archive
*/

defined('ABSPATH') || exit('Forbidden');

get_header();
?>

<!-- Small Banner -->
<div class="sm-banner">
    <img src="<?php echo get_template_directory_uri() . '/assets/images/719d7119b323a629a782fa92dd43e21e888590ab.jpg'; ?>" alt="Image" class="img-fluid">
    <div class="sm-banner-cover">
        <h2 class="sm-banner-cover__title">Events</h2>
    </div>
</div>

<div class="container">
    <!-- Events: Filter -->
    <div class="filter-container">
        <div class="event-archive__header"></div>

        <div class="filter">
            <form action="#utrecht" class="event-filter__form event-filter--selected">
                <button class="event-filter__button event-button--selected" disabled>
                    events utrecht
                </button>
            </form>
            <form action="#rotterdam" class="event-filter__form">
                <button class="event-filter__button" disabled>
                    events rotterdam
                </button>
            </form>
            <form action="#leiden" class="event-filter__form">
                <button class="event-filter__button" disabled>
                    events leiden
                </button>
            </form>
        </div>
    </div>

    <!-- Events -->
    <div class="row event-container row__gap">
        <?php
        // Get current page
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

        // WP_Query for Events
        $event_args = [
            'post_type' => 'event',
            'posts_per_page' => 9,
            'orderby' => 'date',
            'order' => 'ASC',
            'paged' => $paged,
        ];

        $event_query = new WP_Query($event_args);
        if ($event_query->have_posts()) {
            // Create an array to store post data
            $events_posts_array = [];

            // Loop through the posts and add data to the array
            while ($event_query->have_posts()) {
                $event_query->the_post();

                // Get the categories for the current post
                $categories = get_the_category(get_the_ID());

                // Initialize an array to store category names
                $category_names = [];

                // Loop through the categories and add names to the array
                foreach ($categories as $category) {
                    $category_names[] = $category->name;
                }

                // Check if the post has any of the specified types
                if (has_term('events', 'type', get_the_ID())) {
                    $event_date = get_post_meta(get_the_ID(), '_event_date', true);

                    $post_data = [
                        'ID' => get_the_ID(),
                        'post_title' => get_the_title(),
                        'post_content' => get_the_content(),
                        'post_name' => get_post_field('post_name'),
                        'type' => wp_get_post_terms(get_the_ID(), 'type'),
                        'categories' => $category_names,
                        'date' => $event_date,
                        'featured_image' => get_the_post_thumbnail_url(
                            get_the_ID(),
                            'full'
                        ),
                    ];

                    $events_posts_array[] = $post_data;
                }
            }

            // Reset post data to the main query
            wp_reset_postdata();

            // Convert the array to JSON
            $json_events_data = json_encode(
                $events_posts_array,
                JSON_PRETTY_PRINT
            );

            // Decode the JSON data
            $events_posts_data = json_decode($json_events_data, true);

            // Check if there are posts
            if (!empty($events_posts_data)) {
                // Loop through the posts
                foreach ($events_posts_data as $post) {
        ?>
                    <div class="col-xl-4 col-lg-6 auto">
                        <div class="card auto">
                            <img src="<?php echo esc_html($post['featured_image']); ?>" class="card-img-top card__img--cover" alt="">
                            <div class="card-img-overlay card__overlay d-flex flex-column justify-content-end">
                                <form class="card__type-form card__type-<?php echo esc_html($post['categories'][0]); ?>">
                                    <button class="card__type-button" disabled>
                                        <?php echo esc_html($post['categories'][0]); ?>
                                    </button>
                                </form>
                            </div>
                            <?php if (isset($post['date'])) { ?>
                                <p class="event__date">
                                    <?php echo esc_html($post['date']); ?>
                                </p>
                            <?php  } ?>
                            <p class="card__title">
                                <?php echo esc_html($post['post_title']); ?>
                            </p>
                            <p class="card__text">
                                <?php echo esc_html($post['post_content']); ?>
                            </p>
                            <form action="<?php echo get_home_url() . '/event/' . esc_html($post['post_name']); ?>" class="card__form">
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

    <!-- Pagination outside the loop and card container -->
    <div class="pagination">
        <div class="pagination-container">
            <?php
            echo paginate_links([
                'total' => $event_query->max_num_pages,
                'current' => max(1, get_query_var('paged')),
                'prev_text' => '<i class="fa-sharp fa-solid fa-chevron-left"></i>',
                'next_text' => '<i class="fa-sharp fa-solid fa-chevron-right"></i>',
            ]);
            ?>
        </div>
    </div>
</div>

<?php

get_footer();
