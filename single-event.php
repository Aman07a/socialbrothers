<?php defined('ABSPATH') || exit('Forbidden');

get_header();
?>

<!-- Medium Width Banner -->
<div class="md-w-banner">
    <div class="image-container">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/809d99094cf8f61e5777b3f1ca16f603ac613fe7.jpg'; ?>" alt="Image" class="img-fluid">
    </div>
</div>

<div class="container">
    <div class="event-detail-container">
        <div class="event-detail__header">
            <div class="row">
                <!-- 12 Columns -->
                <div class="col">
                    <?php
                    // Get the categories for the current page
                    $categories = get_the_category(get_the_ID());

                    // Check if there are categories
                    if (!empty($categories)) {
                    ?>
                        <form class="card__type-form card__type-<?php echo esc_attr($categories[0]->slug); ?>">
                            <button class="card__type-button" disabled>
                                <?php echo esc_html($categories[0]->name); ?>
                            </button>
                        </form>
                    <?php } ?>
                </div>
                <div class="col-2">
                    <?php
                    // Get custom field (e.g., event date)
                    $event_date = get_post_meta(get_the_ID(), '_event_date', true);

                    // Display the event date
                    if (!empty($event_date)) {
                    ?>
                        <div class="event__date">
                            <?php echo esc_html($event_date); ?>
                        </div>
                    <?php } ?>
                </div>
                <div class="col"></div>
                <div class="col"></div>
                <div class="col"></div>
                <div class="col"></div>
                <div class="col"></div>
                <div class="col"></div>
                <div class="col"></div>
                <div class="col"></div>
                <div class="col"></div>
            </div>

            <h3 class="event-detail__title">
                <?php the_title(); ?>
            </h3>
        </div>

        <p class="event-detail__text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do tempor incidunt ut labore et <br />
            dolore magna aliqua. Magnis dis parturient montes nascetur ridiculus mus mauris vitae ultricies. Commodo <br />
            odio aenean sed adipiscing diam donec adipiscing tristique risus. Eu sem integer vitae justo eget magna <br />
            fermentum. Tellus molestie nunc non blandit massa enim nec dui.
        </p>

        <h4 class="event-detail__subtitle">Kom verkleed</h4>

        <p class="event-detail__text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do tempor incidunt ut labore et <br />
            dolore magna aliqua. Magnis dis parturient montes nascetur ridiculus mus mauris vitae ultricies. Commodo <br />
            odio aenean sed adipiscing diam donec adipiscing tristique risus. Eu sem integer vitae justo eget magna <br />
            fermentum. Tellus molestie nunc non blandit massa enim nec dui.
        </p>

        <p class="event-detail__text">
            Tellus id interdum velit laoreet id donec. Eu scelerisque felis imperdiet proin. Blandit libero volutpat sed <br />
            cras ornare arcu dui. Euismod in pellentes massa placerat duis. Dolor sed vivera ipsum nunc aliquet <br />
            bibendum enim facilisis gravida. At elementum eu facilisis sed odio morbi quis commodo.
        </p>

        <h4 class="event-detail__subtitle">Wat kan je winnen?</h4>

        <p class="event-detail__text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do tempor incidunt ut labore et <br />
            dolore magna aliqua. Magnis dis parturient montes nascetur ridiculus mus mauris vitae ultricies. Commodo <br />
            odio aenean sed adipiscing diam donec adipiscing tristique risus. Eu sem integer vitae justo eget magna <br />
            fermentum. Tellus molestie nunc non blandit massa enim nec dui.
        </p>

        <p class="event-detail__text">
            Tellus id interdum velit laoreet id donec. Eu scelerisque felis imperdiet proin. Blandit libero volutpat sed <br />
            cras ornare arcu dui. Euismod in pellentes massa placerat duis. Dolor sed vivera ipsum nunc aliquet <br />
            bibendum enim facilisis gravida. At elementum eu facilisis sed odio morbi quis commodo.
        </p>

        <div class="event-detail__header">
            <h3 class="event-detail__title">
                Eerst volgende evenementen in Utrecht
            </h3>

            <div class="row card-container row-gap">
                <?php
                // Get current page
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                // WP_Query for Events
                $event_args = [
                    'post_type' => 'event',
                    'posts_per_page' => 3,
                    'orderby' => 'date',
                    'order' => 'ASC',
                    'paged' => $paged,
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'category',
                            'field' => 'slug',
                            'terms' => 'utrecht',
                        ),
                    ),
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
        </div>
    </div>
</div>
</div>

<?php

get_footer();
?>