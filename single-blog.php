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
                $first__category = $categories[0];
            ?>
                <form class="card__type-form card__type-<?php echo esc_attr($first__category->slug); ?> card__ml">
                    <button class="card__type-button" disabled>
                        <?php echo esc_html($first__category->name); ?>
                    </button>
                </form>
            <?php } ?>
            <h3 class="blog__title">
                <?php the_title(); ?>
            </h3>
        </div>

        <?php the_content(); ?>
    </div>

    <div class="blog-container__header">
        <h3 class="blog__title">
            Gerelateerde blogs
        </h3>

        <div class="row card-container row__gap">
            <?php
            // Get current page
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

            // WP_Query for Blogs with category filter and order
            $blog__args = [
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

            include get_template_directory() . '/blog-query.php';
            ?>
        </div>
    </div>
</div>

<?php

get_footer();
?>