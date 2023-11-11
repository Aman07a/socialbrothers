<?php defined('ABSPATH') || exit('Forbidden');

get_header();
?>

<!-- Large Banner -->
<div class="lg-banner">
    <img src="<?php echo get_template_directory_uri().'/assets/images/2cbdc7b29b8b729db1b0ad933d96d3cbc1f83268.jpg'; ?>"
        alt="Image" class="img-fluid lg-banner__img">
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

    <div class="row card-container row-gap">
        <?php
    // WP_Query for Blogs
    $blog_args = [
        'post_type' => 'blog', // Specify your custom post type here
        'posts_per_page' => 3, // Display only 3 posts
        'orderby' => 'date',  // Order by date
        'order' => 'ASC',  // Order in descending order
    ];

$blog_query = new WP_Query($blog_args);
if ($blog_query->have_posts()) {
    // Create an array to store post data
    $blogs_posts_array = [];

    // Loop through the posts and add data to the array
    while ($blog_query->have_posts()) {
        $blog_query->the_post();

        // Get the categories for the current post
        $categories = get_the_category(get_the_ID());

        // Initialize an array to store category names
        $category_names = [];

        // Loop through the categories and add names to the array
        foreach ($categories as $category) {
            $category_names[] = $category->name;
        }

        // Check if the post has any of the specified types
        if (has_term('blogs', 'type', get_the_ID())) {
            $post_data = [
                'ID' => get_the_ID(),
                'post_title' => get_the_title(),
                'post_content' => get_the_content(),
                'post_name' => get_post_field('post_name'),
                'type' => wp_get_post_terms(get_the_ID(), 'type'),
                'categories' => $category_names,
                'featured_image' => get_the_post_thumbnail_url(
                    get_the_ID(),
                    'full'
                ),
            ];

            $blogs_posts_array[] = $post_data;
        }
    }

    // Reset post data to the main query
    wp_reset_postdata();

    // Convert the array to JSON
    $json_blogs_data = json_encode(
        $blogs_posts_array,
        JSON_PRETTY_PRINT
    );

    // Decode the JSON data
    $blogs_posts_data = json_decode($json_blogs_data, true);

    // Check if there are posts
    if (!empty($blogs_posts_data)) {
        // Loop through the posts
        foreach ($blogs_posts_data as $post) {
            ?>
        <div class="col-xl-4 col-lg-6 auto">
            <div class="card auto">
                <img src="<?php echo esc_html($post['featured_image']); ?>" class="card-img-top card__img--cover"
                    alt="">
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
                <form action="<?php echo get_home_url().'/blog/'.esc_html($post['post_name']); ?>" class="card__form">
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
    <div class="row card-container row-gap">
       <?php
    // WP_Query for Events
    $event_args = [
        'post_type' => 'event', // Specify your custom post type here
        'posts_per_page' => 3, // Display only 3 posts
        'orderby' => 'date',  // Order by date
        'order' => 'ASC',  // Order in descending order
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
            $post_data = [
                'ID' => get_the_ID(),
                'post_title' => get_the_title(),
                'post_content' => get_the_content(),
                'post_name' => get_post_field('post_name'),
                'type' => wp_get_post_terms(get_the_ID(), 'type'),
                'categories' => $category_names,
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
                <img src="<?php echo esc_html($post['featured_image']); ?>" class="card-img-top card__img--cover"
                    alt="">
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
                <form action="<?php echo get_home_url().'/event/'.esc_html($post['post_name']); ?>" class="card__form">
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