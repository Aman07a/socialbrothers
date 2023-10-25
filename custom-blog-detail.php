<?php
/*
Template Name: Custom Blog Detail
*/

defined('ABSPATH') || exit('Forbidden');

get_header();
?>
<!-- Medium Banner -->
<div class="md-banner">
    <div class="image-container">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/8d6cb4608c3a0c50624325b0a2b4d0142822345b.jpg'; ?>" alt="Image" class="img-fluid">
    </div>
</div>

<div class="container">
    <div class="blog-container">
        <div class="blog-header">
            <form class="card-type-form card-type-interview">
                <button class="card-type-button" disabled>
                    interview
                </button>
            </form>
            <h3 class="blog-title">
                Werken bij Social Brothers, <br />
                volgens developer Ryence
            </h3>
        </div>

        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do tempor incidunt ut labore et <br />
            dolore magna aliqua. Magnis dis parturient montes nascetur ridiculus mus mauris vitae ultricies. Commodo <br />
            odio aenean sed adipiscing diam donec adipiscing tristique risus. Eu sem integer vitae justo eget magna <br />
            fermentum. Tellus molestie nunc non blandit massa enim nec dui.
        </p>

        <h4>Wordpress</h4>

        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do tempor incidunt ut labore et <br />
            dolore magna aliqua. Magnis dis parturient montes nascetur ridiculus mus mauris vitae ultricies. Commodo <br />
            odio aenean sed adipiscing diam donec adipiscing tristique risus. Eu sem integer vitae justo eget magna <br />
            fermentum. Tellus molestie nunc non blandit massa enim nec dui.
        </p>

        <p>
            Tellus id interdum velit laoreet id donec. Eu scelerisque felis imperdiet proin. Blandit libero volutpat sed <br />
            cras ornare arcu dui. Euismod in pellentes massa placerat duis. Dolor sed vivera ipsum nunc aliquet <br />
            bibendum enim facilisis gravida. At elementum eu facilisis sed odio morbi quis commodo.
        </p>

        <h4>Tafeltennis</h4>

        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do tempor incidunt ut labore et <br />
            dolore magna aliqua. Magnis dis parturient montes nascetur ridiculus mus mauris vitae ultricies. Commodo <br />
            odio aenean sed adipiscing diam donec adipiscing tristique risus. Eu sem integer vitae justo eget magna <br />
            fermentum. Tellus molestie nunc non blandit massa enim nec dui.
        </p>

        <p>
            Tellus id interdum velit laoreet id donec. Eu scelerisque felis imperdiet proin. Blandit libero volutpat sed <br />
            cras ornare arcu dui. Euismod in pellentes massa placerat duis. Dolor sed vivera ipsum nunc aliquet <br />
            bibendum enim facilisis gravida. At elementum eu facilisis sed odio morbi quis commodo.
        </p>
    </div>

    <div class="blog-header">
        <h3 class="blog-title">
            Gerelateerde blogs
        </h3>

        <div class="row card-container row-gap">
            <div class="col-xl-4 col-lg-6 auto">
                <div class="card auto">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/9a4c5e7ca7beb10f9911b04ae5a9019ca806488d.jpg'; ?>" class="card-img-top" alt="">
                    <div class="card-img-overlay card-overlay d-flex flex-column justify-content-end">
                        <form class="card-type-form card-type-interview">
                            <button class="card-type-button" disabled>
                                interview
                            </button>
                        </form>
                    </div>
                    <p class="card-title">
                        Werken bij Social Brothers, <br />
                        volgens developer Bas
                    </p>
                    <p class="card-text">
                        Lorem ipsum dolor sit amet, consectetur <br />
                        adipiscing elit. Praesent luctus velit id ex <br />
                        vestibulum, in tristique risus tincidunt.
                    </p>
                    <form action="/blog1" class="card-form">
                        <button>
                            Lees meer <i class="fa-sharp fa-solid fa-arrow-right"></i>
                        </button>
                    </form>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 auto">
                <div class="card auto">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/53c8722145b6fd9e358adfe7b3d05479c10aa9d5.jpg'; ?>" class="card-img-top" alt="">
                    <div class="card-img-overlay card-overlay d-flex flex-column justify-content-end">
                        <form class="card-type-form card-type-interview">
                            <button class="card-type-button" disabled>
                                interview
                            </button>
                        </form>
                    </div>
                    <p class="card-title">
                        Werken bij Social Brothers, <br />
                        volgens developer Lisa
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
            <div class="col-xl-4 col-lg-6 auto">
                <div class="card auto">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/ed25aee744d9f6b5be4295767984a2151c31fb7f.jpg'; ?>" class="card-img-top" alt="">
                    <div class="card-img-overlay card-overlay d-flex flex-column justify-content-end">
                        <form class="card-type-form card-type-interview">
                            <button class="card-type-button" disabled>
                                interview
                            </button>
                        </form>
                    </div>
                    <p class="card-title">
                        Werken bij Social Brothers, <br />
                        volgens developer Wendy
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

    <?php

    get_footer();
