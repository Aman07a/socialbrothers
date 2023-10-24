<?php
/*
Template Name: Custom Search Results
*/

defined('ABSPATH') || exit('Forbidden');

get_header();
?>

<style>
    .event-detail-date {
        margin-bottom: -14px;
        margin-top: 3px;
        opacity: 1;
        color: rgba(180, 180, 180, 1);
        font-family: "OpenSans", sans-serif;
        font-size: 12px;
        font-weight: 400;
        font-style: normal;
        letter-spacing: 0px;
        text-align: left;
    }
</style>

<!-- Medium Width Banner -->
<div class="sm-w-banner">
    <div class="image-container">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/215d1c7002ed987517e77ded5f92d0e6489e9f01.jpg'; ?>" alt="Image" class="img-fluid">
        <div class="search-banner-container">
            <div class="search-banner-cover">
                <h2 class="search-banner-title">Zoekresultaten</h2>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="search-results-header"></div>
    <form action="#search-results?search=development" class="search-results-form">
        <div class="search-results-input-border">
            <input type="text" name="search" id="search" class="search-results-input" placeholder="development" disabled>
        </div>
        <div class="search-results-button-border">
            <button class="search-results-button" disabled>
                Zoeken
            </button>
        </div>
    </form>

    <div class="search-results-header">
        <div class="search-results-title">
            Alle zoekresultaten voor “development”
        </div>
    </div>

    <div class="search-results-text">
        7 resultaten
    </div>

    <div class="row card-container">
        <!-- Row 1 -->
        <div class="col-md-4">
            <div class="card">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/3842730d227ca41a9eacec4c1ef38b12c1d9acfd.jpg'; ?>" class="card-img-top" alt="">
                <div class="card-img-overlay card-overlay d-flex flex-column justify-content-end">
                    <form class="card-type-form card-type-blog">
                        <button class="card-type-button" disabled>
                            blog
                        </button>
                    </form>
                </div>
                <p class="card-title">
                    10 development trends die in 2022 <br />
                    het verchil gaan maken
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
                <img src="<?php echo get_template_directory_uri() . '/assets/images/39c8d2527922794a1572cd77d584f5d9d8b56a16.jpg'; ?>" class="card-img-top" alt="">
                <div class="card-img-overlay card-overlay d-flex flex-column justify-content-end">
                    <form class="card-type-form card-type-interview">
                        <button class="card-type-button" disabled>
                            utrecht
                        </button>
                    </form>
                </div>
                <div class="event-detail-date">
                    01-01-2023
                </div>
                <p class="card-title">
                    Het jaarlijkse bierpongtournooi van <br />
                    Social Brothers
                </p>
                <p class="card-text">
                    Lorem ipsum dolor sit amet, consectetur <br />
                    adipiscing elit. Praesent luctus velit id ex <br />
                    vestibulum, in tristique risus tincidunt.
                </p>
                <form action="/event1" class="card-form">
                    <button>
                        Lees meer <i class="fa-sharp fa-solid fa-arrow-right"></i>
                    </button>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
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

        <!-- Spaces Between Rows -->

        <!-- Row 2 -->
        <div class="col-md-4">
            <div class="card">
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
                <form action="#blogs" class="card-form">
                    <button>
                        Lees meer <i class="fa-sharp fa-solid fa-arrow-right"></i>
                    </button>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
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
                <form action="#blogs" class="card-form">
                    <button>
                        Lees meer <i class="fa-sharp fa-solid fa-arrow-right"></i>
                    </button>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/019712613e0c43bf858dc67dcb48df9ad9b9b8fb.jpg'; ?>" class="card-img-top" alt="">
                <div class="card-img-overlay card-overlay d-flex flex-column justify-content-end">
                    <form class="card-type-form card-type-interview">
                        <button class="card-type-button" disabled>
                            utrecht
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
                <form action="#blogs" class="card-form">
                    <button>
                        Lees meer
                        <i class="fa-sharp fa-solid fa-arrow-right"></i>
                    </button>
                </form>
            </div>
        </div>

        <!-- Spaces Between Rows -->

        <!-- Row 3 -->
        <div class="col-md-4">
            <div class="card">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/9d88703d51b5aff2bfaf980e38bedfb8eb018779.jpg'; ?>" class="card-img-top" alt="">
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
                <form action="#blogs" class="card-form">
                    <button>
                        Lees meer <i class="fa-sharp fa-solid fa-arrow-right"></i>
                    </button>
                </form>
            </div>
        </div>
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
    </div>
</div>

<?php

get_footer();
