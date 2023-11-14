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

        <?php include get_template_directory() . '/pagination.php'; ?>
    </div>

    <!-- Events -->
    <div class="row event-container row__gap">
        <?php
        // Get current page
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

        // WP_Query for Events
        $event__args = [
            'post_type' => 'event',
            'posts_per_page' => 9,
            'orderby' => 'date',
            'order' => 'ASC',
            'tax_query' => [
                [
                    'taxonomy' => 'category',
                    'field' => 'name',
                    'terms' => $default__category__event,
                ],
            ],
            'paged' => $paged,
        ];

        include get_template_directory() . '/event-query.php';
        ?>
    </div>

    <!-- Pagination outside the loop and card container -->
    <div class="pagination">
        <div class="pagination-container">
            <?php
            if (isset($event__query->max_num_pages)) {
                echo paginate_links([
                    'total' => $event__query->max_num_pages,
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
