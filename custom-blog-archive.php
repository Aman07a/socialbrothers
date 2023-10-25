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
        <h2 class="sm-banner-title">Blogs</h2>
    </div>
</div>

<div class="container">
    <!-- Blog -->
    <div class="blog-header"></div>

    <div class="row card-container row-gap">
        <!-- Row 1 -->
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
                <form action="/blog1" class="card-form">
                    <button>
                        Lees meer <i class="fa-sharp fa-solid fa-arrow-right"></i>
                    </button>
                </form>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 auto">
            <div class="card auto">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/39c8d2527922794a1572cd77d584f5d9d8b56a16.jpg'; ?>" class="card-img-top" alt="">
                <div class="card-img-overlay card-overlay d-flex flex-column justify-content-end">
                    <form class="card-type-form card-type-blog">
                        <button class="card-type-button" disabled>
                            blog
                        </button>
                    </form>
                </div>
                <p class="card-title">
                    Hoe stimuleer je winkelbezoek met <br />
                    technologie?
                </p>
                <p class="card-text">
                    Lorem ipsum dolor sit amet, consectetur <br />
                    adipiscing elit. Praesent luctus velit id ex <br />
                    vestibulum, in tristique risus tincidunt.
                </p>
                <form action="#blog" class="card-form">
                    <button disabled>
                        Lees meer <i class="fa-sharp fa-solid fa-arrow-right"></i>
                    </button>
                </form>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 auto">
            <div class="card auto">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/bcfc80efb8ccf87d841167935c53e5c6110dfd0f.jpg'; ?>" class="card-img-top" alt="">
                <div class="card-img-overlay card-overlay d-flex flex-column justify-content-end">
                    <form class="card-type-form card-type-interview">
                        <button class="card-type-button" disabled>
                            interview
                        </button>
                    </form>
                </div>
                <p class="card-title">
                    Werken bij Social Brothers, <br />
                    volgens developer Romy
                </p>
                <p class="card-text">
                    Lorem ipsum dolor sit amet, consectetur <br />
                    adipiscing elit. Praesent luctus velit id ex <br />
                    vestibulum, in tristique risus tincidunt.
                </p>
                <form action="#blog" class="card-form">
                    <button disabled>
                        Lees meer
                        <i class="fa-sharp fa-solid fa-arrow-right"></i>
                    </button>
                </form>
            </div>
        </div>

        <!-- Row 2 -->
        <div class="col-xl-4 col-lg-6 auto">
            <div class="card auto">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/a11b35bea09068a555b885ee67a0275905f8e845.jpg'; ?>" class="card-img-top" alt="">
                <div class="card-img-overlay card-overlay d-flex flex-column justify-content-end">
                    <form class="card-type-form card-type-blog">
                        <button class="card-type-button" disabled>
                            blog
                        </button>
                    </form>
                </div>
                <p class="card-title">
                    8 voordelen van een chatbot wat je <br />
                    moet weten
                </p>
                <p class="card-text">
                    Lorem ipsum dolor sit amet, consectetur <br />
                    adipiscing elit. Praesent luctus velit id ex <br />
                    vestibulum, in tristique risus tincidunt.
                </p>
                <form action="#blog" class="card-form">
                    <button disabled>
                        Lees meer <i class="fa-sharp fa-solid fa-arrow-right"></i>
                    </button>
                </form>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 auto">
            <div class="card auto">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/c247e45bad64e7ce417b495ef5b5b97be96cfc9c.jpg'; ?>" class="card-img-top" alt="">
                <div class="card-img-overlay card-overlay d-flex flex-column justify-content-end">
                    <form class="card-type-form card-type-interview">
                        <button class="card-type-button" disabled>
                            interview
                        </button>
                    </form>
                </div>
                <p class="card-title">
                    Werken bij Social Brothers, <br />
                    volgens designer Maria
                </p>
                <p class="card-text">
                    Lorem ipsum dolor sit amet, consectetur <br />
                    adipiscing elit. Praesent luctus velit id ex <br />
                    vestibulum, in tristique risus tincidunt.
                </p>
                <form action="#blog" class="card-form">
                    <button disabled>
                        Lees meer <i class="fa-sharp fa-solid fa-arrow-right"></i>
                    </button>
                </form>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 auto">
            <div class="card auto">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/019712613e0c43bf858dc67dcb48df9ad9b9b8fb.jpg'; ?>" class="card-img-top" alt="">
                <div class="card-img-overlay card-overlay d-flex flex-column justify-content-end">
                    <form class="card-type-form card-type-whitepaper">
                        <button class="card-type-button" disabled>
                            whitepaper
                        </button>
                    </form>
                </div>
                <p class="card-title">
                    Lees je in over alle voordelen van <br />
                    HubSpot
                </p>
                <p class="card-text">
                    Lorem ipsum dolor sit amet, consectetur <br />
                    adipiscing elit. Praesent luctus velit id ex <br />
                    vestibulum, in tristique risus tincidunt.
                </p>
                <form action="#blog" class="card-form">
                    <button disabled>
                        Lees meer
                        <i class="fa-sharp fa-solid fa-arrow-right"></i>
                    </button>
                </form>
            </div>
        </div>

        <!-- Row 3 -->
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
                <form action="#blog" class="card-form">
                    <button disabled>
                        Lees meer <i class="fa-sharp fa-solid fa-arrow-right"></i>
                    </button>
                </form>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 auto">
            <div class="card auto">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/48c89c9f0f057003d04b45e1f43714e6c3daad21.jpg'; ?>" class="card-img-top" alt="">
                <div class="card-img-overlay card-overlay d-flex flex-column justify-content-end">
                    <form class="card-type-form card-type-blog">
                        <button class="card-type-button" disabled>
                            blog
                        </button>
                    </form>
                </div>
                <p class="card-title">
                    10 development trends die in 2022 <br />
                    het verschil gaan maken
                </p>
                <p class="card-text">
                    Lorem ipsum dolor sit amet, consectetur <br />
                    adipiscing elit. Praesent luctus velit id ex <br />
                    vestibulum, in tristique risus tincidunt.
                </p>
                <form action="#blog" class="card-form">
                    <button disabled>
                        Lees meer <i class="fa-sharp fa-solid fa-arrow-right"></i>
                    </button>
                </form>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 auto">
            <div class="card auto">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/3a370dde00787da50c0c065d68c672423e24a9e5.jpg'; ?>" class="card-img-top" alt="">
                <div class="card-img-overlay card-overlay d-flex flex-column justify-content-end">
                    <form class="card-type-form card-type-blog">
                        <button class="card-type-button" disabled>
                            blog
                        </button>
                    </form>
                </div>
                <p class="card-title">
                    Het belang van digitoegankelijk <br />
                    development
                </p>
                <p class="card-text">
                    Lorem ipsum dolor sit amet, consectetur <br />
                    adipiscing elit. Praesent luctus velit id ex <br />
                    vestibulum, in tristique risus tincidunt.
                </p>
                <form action="#blog" class="card-form">
                    <button disabled>
                        Lees meer
                        <i class="fa-sharp fa-solid fa-arrow-right"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>

    <div class="pagination">
        <div class="pagination-container">
            <i class="fa-sharp fa-solid fa-chevron-left"></i>
            <div class="block">1</div>
            <div class="block block-active">2</div>
            <div class="block">3</div>
            <div class="block">...</div>
            <div class="block">7</div>
            <i class="fa-sharp fa-solid fa-chevron-right"></i>
        </div>
    </div>
</div>

<?php

get_footer();
