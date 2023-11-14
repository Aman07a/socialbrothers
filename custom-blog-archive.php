<?php
/*
Template Name: Custom Blog Archive
*/

defined('ABSPATH') || exit('Forbidden');

get_header();
?>

<!-- Small Banner -->
<div class="sm-banner">
    <img src="<?php echo get_template_directory_uri() . '/assets/images/719d7119b323a629a782fa92dd43e21e888590ab.jpg'; ?>" alt="Image" class="img-fluid">
    <div class="sm-banner-cover">
        <h2 class="sm-banner-cover__title">Blogs</h2>
    </div>
</div>

<div class="container">
    <!-- Blog -->
    <div class="blog-container__header"></div>

    <div class="row card-container row__gap">
        <?php
        // Get current page
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

        // WP_Query for Blogs
        $blog__args = [
            'post_type' => 'blog',
            'posts_per_page' => 9,
            'orderby' => 'date',
            'order' => 'ASC',
            'paged' => $paged,
        ];

        include get_template_directory() . '/blog-query.php';
        ?>
    </div>

    <div class="pagination">
        <div class="pagination-container">
            <?php
            if (isset($blog__query->max_num_pages)) {
                echo paginate_links([
                    'total' => $blog__query->max_num_pages,
                    'current' => max(1, get_query_var('paged')),
                    'prev_text' => '<i class="fa-sharp fa-solid fa-chevron-left"></i>',
                    'next_text' => '<i class="fa-sharp fa-solid fa-chevron-right"></i>',
                ]);
            }
            ?>
        </div>
    </div>
</div>

<?php

get_footer();
