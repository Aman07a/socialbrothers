<?php
$event__query = new WP_Query($event__args);
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