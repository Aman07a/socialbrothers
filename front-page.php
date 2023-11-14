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