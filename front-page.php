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
            'post_type' => 'blog',
            'posts_per_page' => 3,
            'orderby' => 'date',
            'order' => 'ASC',
        ];

        include get_template_directory() . '/blog-query.php';
        ?>
    </div>

    <!-- Events: Filter -->
    <div class="filter-container">
        <div class="event-filter__header">
            <h3 class="event__title">Opkomende events</h3>
        </div>

        <?php include get_template_directory() . '/pagination.php'; ?>
    </div>

    <!-- Events -->
    <div class="row card-container row__gap">
        <?php
        // WP_Query for Events
        $event__args = [
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

        include get_template_directory() . '/event-query.php';
        ?>
    </div>
</div>

<?php

get_footer();
?>