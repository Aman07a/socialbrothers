<?php
/*
Template Name: Custom Search Results
*/

defined('ABSPATH') || exit('Forbidden');

get_header();
?>

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

    <div class="row card-container row-gap">
        <!-- Row 1 -->
        <div class="col-xl-4 col-lg-6 auto">
            <div class="card auto">
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
        <div class="col-xl-4 col-lg-6 auto">
            <div class="card auto">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/39c8d2527922794a1572cd77d584f5d9d8b56a16.jpg'; ?>" class="card-img-top" alt="">
                <div class="card-img-overlay card-overlay d-flex flex-column justify-content-end">
                    <form class="card-type-form card-type-interview">
                        <button class="card-type-button" disabled>
                            utrecht
                        </button>
                    </form>
                </div>
                <div class="event-date">
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
                    Social Brothers voor Dummies: wat <br />
                    is een API
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
                <img src="<?php echo get_template_directory_uri() . '/assets/images/3a370dde00787da50c0c065d68c672423e24a9e5.jpg'; ?>" class="card-img-top" alt="">
                <div class="card-img-overlay card-overlay d-flex flex-column justify-content-end">
                    <form class="card-type-form card-type-interview">
                        <button class="card-type-button" disabled>
                            interview
                        </button>
                    </form>
                </div>
                <p class="card-title">
                    Werken bij Social Brothers, <br />
                    volgens developer Matthijs
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
                <img src="<?php echo get_template_directory_uri() . '/assets/images/48c89c9f0f057003d04b45e1f43714e6c3daad21.jpg'; ?>" class="card-img-top" alt="">
                <div class="card-img-overlay card-overlay d-flex flex-column justify-content-end">
                    <form class="card-type-form card-type-interview">
                        <button class="card-type-button" disabled>
                            utrecht
                        </button>
                    </form>
                </div>
                <p class="card-title">
                    10 development trends die in de <br />
                    toekomst het verschil gaan maken
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

        <!-- Row 3 -->
        <div class="col-xl-4 col-lg-6 auto">
            <div class="card auto">
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
                    volgens developer Iris
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
        <div class="col-xl-4 col-lg-6 auto"></div>
        <div class="col-xl-4 col-lg-6 auto"></div>
    </div>
</div>

<?php

get_footer();
