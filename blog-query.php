<?php
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
                'paged' => $paged,
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