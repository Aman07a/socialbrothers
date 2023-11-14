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
                <?php
                // Get the categories for the current page
                $categories = get_the_category(get_the_ID());

                // Check if there are categories
                if (!empty($categories)) {
                ?>
                    <form class="card__type-form card__type-<?php echo esc_attr($categories[0]->slug); ?> card__type-form_ml">
                        <button class="card__type-button" disabled>
                            <?php echo esc_html($categories[0]->name); ?>
                        </button>
                    </form>
                <?php } ?>

                <?php
                // Get custom field (e.g., event date)
                $event__date = get_post_meta(get_the_ID(), '_event_date', true);

                // Display the event date
                if (!empty($event__date)) {
                ?>
                    <div class="mr-2 event__date">
                        <?php echo esc_html($event__date); ?>
                    </div>
                <?php } ?>
            </div>

            <h3 class="event-detail__title">
                <?php the_title(); ?>
            </h3>
        </div>

        <?php the_content(); ?>

        <div class="event-detail__header">
            <h3 class="event-detail__title">
                Eerst volgende evenementen in Utrecht
            </h3>

            <div class="row card-container row__gap">
                <?php
                // Get current page
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                // WP_Query for Events
                $event__args = [
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

                include get_template_directory() . '/event-query.php';
                ?>
            </div>
        </div>
    </div>
</div>

<?php

get_footer();
?>