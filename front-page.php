<?php defined('ABSPATH') || exit('Forbidden');

get_header();
?>

<!-- Large Banner -->
<div class="lg-banner">
    <img src="<?php echo get_template_directory_uri() . '/assets/images/2cbdc7b29b8b729db1b0ad933d96d3cbc1f83268.jpg'; ?>" alt="Image" class="img-fluid lg-banner__img">
    <div class="lg-banner-cover">
        <h2 class="lg-banner-cover__title">Welkom bij de <br /> Social Brothers case!</h2>
        <p class="lg-banner-cover__desc">
            Deze opdracht dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut <br />
            labore et dolore magna aliqua. Magnis dis parturient montes nascetur ridiculus mus mauris vitae <br />
            ultricies. Commodo odio aenean sed adipiscing diam donec adipiscing tristique risus.
        </p>
    </div>
</div>

<div class="container">
    <!-- Blog -->
    <div class="blog-container__header">
        <h3 class="blog-container__title">De nieuwste blogs</h3>
    </div>

    <div class="row card-container row__gap">
        <?php
        // WP_Query for Blogs
        $blog__args = [
            'post_type'      => 'blog',
            'posts_per_page' => 3,
            'orderby'        => 'date',
            'order'          => 'ASC',
        ];

        $blog__query = new WP_Query($blog__args);
        if ($blog__query->have_posts()) {
            // Create an array to store post data
            $blogs_posts_array = [];

            // Loop through the posts and add data to the array
            while ($blog__query->have_posts()) {
                $blog__query->the_post();

                // Get the categories for the current post
                $categories = get_the_category(get_the_ID());

                // Initialize an array to store category names
                $blog__category__names = [];

                // Loop through the categories and add names to the array
                foreach ($categories as $category) {
                    $blog__category__names[] = $category->name;
                }

                // Check if the post has any of the specified types
                if (has_term('blogs', 'type', get_the_ID())) {
                    $blog__post__data = [
                        'ID' => get_the_ID(),
                        'post_title' => get_the_title(),
                        'post_content' => get_the_content(),
                        'post_name' => get_post_field('post_name'),
                        'type' => wp_get_post_terms(get_the_ID(), 'type'),
                        'categories' => $blog__category__names,
                        'featured_image' => get_the_post_thumbnail_url(
                            get_the_ID(),
                            'full'
                        ),
                    ];

                    $blogs__posts__array[] = $blog__post__data;
                }
            }

            // Reset post data to the main query
            wp_reset_postdata();

            // Convert the array to JSON
            $json__blogs__data = json_encode(
                $blogs__posts__array,
                JSON_PRETTY_PRINT
            );

            // Decode the JSON data
            $blogs__posts__data = json_decode($json__blogs__data, true);

            // Check if there are posts
            if (!empty($blogs__posts__data)) {
                // Loop through the posts
                foreach ($blogs__posts__data as $post) {
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
                            <p class="card__title">
                                <?php echo esc_html($post['post_title']); ?>
                            </p>
                            <p class="card__text">
                                <?php echo esc_html($post['post_content']); ?>
                            </p>
                            <form action="<?php echo get_home_url('blog') . '/' . esc_html($post['post_name']); ?>" class="card__form">
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

    <!-- Events: Filter -->
    <div class="filter-container">
        <div class="event-filter__header">
            <h3 class="event__title">Opkomende events</h3>
        </div>

        <?php
        $default__category__event = isset($_GET['events']) ? sanitize_text_field($_GET['events']) : 'utrecht';
        ?>

        <form action="<?php echo esc_url(home_url()); ?>" method="get" class="filter">
            <div class="event-filter__form <?php echo ($default__category__event === 'utrecht') ? 'event-filter--selected' : ''; ?>">
                <button class="event-filter__button <?php echo ($default__category__event === 'utrecht') ? 'event-button--selected' : ''; ?>" name="events" value="utrecht">
                    events utrecht
                </button>
            </div>
            <div class="event-filter__form <?php echo ($default__category__event === 'rotterdam') ? 'event-filter--selected' : ''; ?>">
                <button class="event-filter__button <?php echo ($default__category__event === 'rotterdam') ? 'event-button--selected' : ''; ?>" name="events" value="rotterdam">
                    events rotterdam
                </button>
            </div>
            <div class="event-filter__form <?php echo ($default__category__event === 'leiden') ? 'event-filter--selected' : ''; ?>">
                <button class="event-filter__button <?php echo ($default__category__event === 'leiden') ? 'event-button--selected' : ''; ?>" name="events" value="leiden">
                    events leiden
                </button>
            </div>
        </form>
    </div>

    <!-- Events -->
    <div class="row card-container row__gap">
        <?php
        // WP_Query for Events
        $event_args = [
            'post_type' => 'event',
            'posts_per_page' => 3,
            'orderby' => 'date',
            'order' => 'ASC',
            'tax_query' => [
                [
                    'taxonomy' => 'category',
                    'field' => 'name',
                    'terms' => $default__category__event,
                ],
            ],
        ];

        $event__query = new WP_Query($event_args);
        if ($event__query->have_posts()) {
            // Create an array to store post data
            $events__posts__array = [];

            // Loop through the posts and add data to the array
            while ($event__query->have_posts()) {
                $event__query->the_post();

                // Get the categories for the current post
                $categories = get_the_category(get_the_ID());

                // Initialize an array to store category names
                $event_category_names = [];

                // Loop through the categories and add names to the array
                foreach ($categories as $category) {
                    $event_category_names[] = $category->name;
                }

                // Check if the post has any of the specified types
                if (has_term('events', 'type', get_the_ID())) {
                    $event__date = get_post_meta(get_the_ID(), '_event_date', true);

                    $formatted__event__date = date('d-m-Y', strtotime($event__date));

                    $event__post__data = [
                        'ID' => get_the_ID(),
                        'post_title' => get_the_title(),
                        'post_content' => get_the_content(),
                        'post_name' => get_post_field('post_name'),
                        'type' => wp_get_post_terms(get_the_ID(), 'type'),
                        'categories' => $event_category_names,
                        'date' => $formatted__event__date,
                        'featured_image' => get_the_post_thumbnail_url(
                            get_the_ID(),
                            'full'
                        ),
                    ];

                    $events__posts__array[] = $event__post__data;
                }
            }

            // Reset post data to the main query
            wp_reset_postdata();

            // Convert the array to JSON
            $json__events__data = json_encode(
                $events__posts__array,
                JSON_PRETTY_PRINT
            );

            // Decode the JSON data
            $events__posts__data = json_decode($json__events__data, true);

            // Check if there are posts
            if (!empty($events__posts__data)) {
                // Loop through the posts
                foreach ($events__posts__data as $post) {
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
                            <form action="<?php echo home_url('event') . '/' . esc_html($post['post_name']); ?>" class="card__form">
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

<script>
    // Set the default selected category to "utrecht"
    var defaultCategory = 'utrecht';

    function toggleCategory(button) {
        var isSelected = button.classList.contains('event-button--selected');

        var formContainer = button.closest('.event-filter__form');
        var isSelectedDiv = formContainer.classList.contains('event-filter--selected');

        var buttons = document.querySelectorAll('.event-filter__button');
        var divs = document.querySelectorAll('.event-filter__form');

        buttons.forEach(function(btn) {
            btn.classList.remove('event-button--selected');
        });

        divs.forEach(function(div) {
            div.classList.remove('event-filter--selected');
        });

        if (!isSelected) {
            button.classList.add('event-button--selected');
        }

        if (!isSelectedDiv) {
            formContainer.classList.add('event-filter--selected');
            updateSelectedCategory(button.getAttribute('data-category'));
        }
    }

    function updateSelectedCategory(category) {
        // Update the default category to the selected category
        defaultCategory = category;
    }
</script>

<?php

get_footer();
?>