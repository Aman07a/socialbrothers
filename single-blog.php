<?php defined('ABSPATH') || exit('Forbidden');

get_header();
?>

<!-- Medium Banner -->
<div class="md-h-banner">
    <div class="image-container">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/8d6cb4608c3a0c50624325b0a2b4d0142822345b.jpg'; ?>" alt="Image" class="img-fluid">
    </div>
</div>

<div class="container">
    <div class="blog-container">
        <div class="blog-container__header">
            <?php
            $categories = get_the_category();
            if (!empty($categories)) {
                $first_category = $categories[0];
            ?>
                <form class="card__type-form card__type-<?php echo esc_attr($first_category->slug); ?> card__ml">
                    <button class="card__type-button" disabled>
                        <?php echo esc_html($first_category->name); ?>
                    </button>
                </form>
            <?php } ?>
            <h3 class="blog__title">
                <?php the_title(); ?>
            </h3>
        </div>

        <p class="blog__text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do tempor incidunt ut labore et <br />
            dolore magna aliqua. Magnis dis parturient montes nascetur ridiculus mus mauris vitae ultricies. Commodo <br />
            odio aenean sed adipiscing diam donec adipiscing tristique risus. Eu sem integer vitae justo eget magna <br />
            fermentum. Tellus molestie nunc non blandit massa enim nec dui.
        </p>

        <h4 class="blog__subtitle">Wordpress</h4>

        <p class="blog__text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do tempor incidunt ut labore et <br />
            dolore magna aliqua. Magnis dis parturient montes nascetur ridiculus mus mauris vitae ultricies. Commodo <br />
            odio aenean sed adipiscing diam donec adipiscing tristique risus. Eu sem integer vitae justo eget magna <br />
            fermentum. Tellus molestie nunc non blandit massa enim nec dui.
        </p>

        <p class="blog__text">
            Tellus id interdum velit laoreet id donec. Eu scelerisque felis imperdiet proin. Blandit libero volutpat sed <br />
            cras ornare arcu dui. Euismod in pellentes massa placerat duis. Dolor sed vivera ipsum nunc aliquet <br />
            bibendum enim facilisis gravida. At elementum eu facilisis sed odio morbi quis commodo.
        </p>

        <h4 class="blog__subtitle">Tafeltennis</h4>

        <p class="blog__text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do tempor incidunt ut labore et <br />
            dolore magna aliqua. Magnis dis parturient montes nascetur ridiculus mus mauris vitae ultricies. Commodo <br />
            odio aenean sed adipiscing diam donec adipiscing tristique risus. Eu sem integer vitae justo eget magna <br />
            fermentum. Tellus molestie nunc non blandit massa enim nec dui.
        </p>

        <p class="blog__text">
            Tellus id interdum velit laoreet id donec. Eu scelerisque felis imperdiet proin. Blandit libero volutpat sed <br />
            cras ornare arcu dui. Euismod in pellentes massa placerat duis. Dolor sed vivera ipsum nunc aliquet <br />
            bibendum enim facilisis gravida. At elementum eu facilisis sed odio morbi quis commodo.
        </p>
    </div>

    <div class="blog-container__header">
        <h3 class="blog__title">
            Gerelateerde blogs
        </h3>

        <div class="row card-container row-gap">
            <?php
            // Get current page
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

            // WP_Query for Blogs with category filter and order
            $blog_args = [
                'post_type' => 'blog',
                'posts_per_page' => 3,
                'orderby' => 'category_name',
                'order' => 'DESC',
                'paged' => $paged,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'category',
                        'field' => 'slug',
                        'terms' => 'interview',
                    ),
                ),
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
                                <form action="<?php echo get_home_url() . '/blog/' . esc_html($post['post_name']); ?>" class="card__form">
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

<?php

get_footer();
?>