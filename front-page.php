<?php defined('ABSPATH') || exit('Forbidden');

get_header();

while (have_posts()) {
    the_post();
?>
    <div class="container">
        <!-- Large Banner -->
        <div class="lg-banner">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/2cbdc7b29b8b729db1b0ad933d96d3cbc1f83268.jpg'; ?>" alt="Image" class="img-fluid">
            <div class="lg-banner-cover">
                <h2 class="lg-banner-title">Welkom bij de <br /> Social Brothers case!</h2>
                <p class="lg-banner-desc">
                    Deze opdracht dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut <br />
                    labore et dolore magna aliqua. Magnis dis parturient montes nascetur ridiculus mus mauris vitae <br />
                    ultricies. Commodo odio aenean sed adipiscing diam donec adipiscing tristique risus.
                </p>
            </div>
        </div>
    </div>
<?php
}

get_footer();
