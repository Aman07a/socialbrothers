<?php defined('ABSPATH') || exit('Forbidden');

get_header();

while (have_posts()) {
    the_post();
?>
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


    <!-- Blog -->
    <div class="container">
        <div class="blog-container">
            <div class="blog-header">
                <h3 class="blog-title">De nieuwste blogs</h3>
            </div>

            <div class="row card-container">
                <div class="col-md-4">
                    <div class="card">
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/8d6cb4608c3a0c50624325b0a2b4d0142822345b.jpg'; ?>" class="card-img-top" alt="">
                        <div class="card-img-overlay card-overlay d-flex flex-column justify-content-end">
                            <form class="card-type-form card-type-interview">
                                <button class="card-type-button" disabled>
                                    interview
                                </button>
                            </form>
                        </div>
                        <p class="card-title">
                            Werken bij Social Brothers, <br />
                            volgens developer Ryence
                        </p>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet, consectetur <br />
                            adipiscing elit. Praesent luctus velit id ex <br />
                            vestibulum, in tristique risus tincidunt.
                        </p>
                        <form action="#blogs" class="card-form">
                            <button>
                                Lees meer <i class="fa-sharp fa-solid fa-arrow-right"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/c9affda65b1530ebfde2cb412de6009da9e6a477.jpg'; ?>" class="card-img-top" alt="">
                        <div class="card-img-overlay card-overlay d-flex flex-column justify-content-end">
                            <form class="card-type-form card-type-whitepaper">
                                <button class="card-type-button" disabled>
                                    whitepaper
                                </button>
                            </form>
                        </div>
                        <p class="card-title">
                            Hoe stimuleer je winkelbezoek <br />
                            met technologie?
                        </p>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet, consectetur <br />
                            adipiscing elit. Praesent luctus velit id ex <br />
                            vestibulum, in tristique risus tincidunt.
                        </p>
                        <form action="#blogs" class="card-form">
                            <button>
                                Lees meer <i class="fa-sharp fa-solid fa-arrow-right"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/a8eb6babda033968f38e01469c8e86b536a9008f.jpg'; ?>" class="card-img-top" alt="">
                        <div class="card-img-overlay card-overlay d-flex flex-column justify-content-end">
                            <form class="card-type-form card-type-blog">
                                <button class="card-type-button" disabled>
                                    blog
                                </button>
                            </form>
                        </div>
                        <p class="card-title">
                            Locatie gebaseerde pushberichten <br />
                            sturen
                        </p>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet, consectetur <br />
                            adipiscing elit. Praesent luctus velit id ex <br />
                            vestibulum, in tristique risus tincidunt.
                        </p>
                        <form action="#blogs" class="card-form">
                            <button>
                                Lees meer
                                <i class="fa-sharp fa-solid fa-arrow-right"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}

get_footer();
