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
        <h2 class="sm-banner-title">Events</h2>
    </div>
</div>

<div class="container">
    <!-- Events: Filter -->
    <div class="filter-container">
        <div class="event-archive-header"></div>

        <div class="filter">
            <form action="#utrecht" class="event-filter-form event-filter-selected">
                <button class="event-filter-button event-button-selected">
                    events utrecht
                </button>
            </form>
            <form action="#rotterdam" class="event-filter-form">
                <button class="event-filter-button">
                    events rotterdam
                </button>
            </form>
            <form action="#leiden" class="event-filter-form">
                <button class="event-filter-button">
                    events leiden
                </button>
            </form>
        </div>
    </div>

    <!-- Events -->
    <div class="blog-container">
        <div class="row event-container row-gap">
            <!-- Row 1 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/a921bc847707d8528e4f5e00a324136d69807ae9.jpg'; ?>" class="card-img-top" alt="">
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
            <div class="col-md-4">
                <div class="card">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/09430a3f35a25fe2ba038840a7d4b99ba6e39942.jpg'; ?>" class="card-img-top" alt="">
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
                        Bootcamp op de donderdagavond <br />
                        met Biku
                    </p>
                    <p class="card-text">
                        Lorem ipsum dolor sit amet, consectetur <br />
                        adipiscing elit. Praesent luctus velit id ex <br />
                        vestibulum, in tristique risus tincidunt.
                    </p>
                    <form action="#cards" class="card-form">
                        <button>
                            Lees meer <i class="fa-sharp fa-solid fa-arrow-right"></i>
                        </button>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/7bf8b7439accaae1dbcb6690298ed5dd6b196eb0.jpg'; ?>" class="card-img-top" alt="">
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
                        Blijf up to date met de <br />
                        maandafsluiting
                    </p>
                    <p class="card-text">
                        Lorem ipsum dolor sit amet, consectetur <br />
                        adipiscing elit. Praesent luctus velit id ex <br />
                        vestibulum, in tristique risus tincidunt.
                    </p>
                    <form action="#cards" class="card-form">
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
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/09430a3f35a25fe2ba038840a7d4b99ba6e39942.jpg'; ?>" class="card-img-top" alt="">
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
                        Bootcamp op de donderdagavond <br />
                        met Biku
                    </p>
                    <p class="card-text">
                        Lorem ipsum dolor sit amet, consectetur <br />
                        adipiscing elit. Praesent luctus velit id ex <br />
                        vestibulum, in tristique risus tincidunt.
                    </p>
                    <form action="#cards" class="card-form">
                        <button>
                            Lees meer <i class="fa-sharp fa-solid fa-arrow-right"></i>
                        </button>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/7bf8b7439accaae1dbcb6690298ed5dd6b196eb0.jpg'; ?>" class="card-img-top" alt="">
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
                        Blijf up to date met de <br />
                        maandafsluiting
                    </p>
                    <p class="card-text">
                        Lorem ipsum dolor sit amet, consectetur <br />
                        adipiscing elit. Praesent luctus velit id ex <br />
                        vestibulum, in tristique risus tincidunt.
                    </p>
                    <form action="#cards" class="card-form">
                        <button>
                            Lees meer
                            <i class="fa-sharp fa-solid fa-arrow-right"></i>
                        </button>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/a921bc847707d8528e4f5e00a324136d69807ae9.jpg'; ?>" class="card-img-top" alt="">
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
            <!-- Spaces Between Rows -->

            <!-- Row 3 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/7bf8b7439accaae1dbcb6690298ed5dd6b196eb0.jpg'; ?>" class="card-img-top" alt="">
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
                        Blijf up to date met de <br />
                        maandafsluiting
                    </p>
                    <p class="card-text">
                        Lorem ipsum dolor sit amet, consectetur <br />
                        adipiscing elit. Praesent luctus velit id ex <br />
                        vestibulum, in tristique risus tincidunt.
                    </p>
                    <form action="#cards" class="card-form">
                        <button>
                            Lees meer
                            <i class="fa-sharp fa-solid fa-arrow-right"></i>
                        </button>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/a921bc847707d8528e4f5e00a324136d69807ae9.jpg'; ?>" class="card-img-top" alt="">
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
            <div class="col-md-4">
                <div class="card">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/09430a3f35a25fe2ba038840a7d4b99ba6e39942.jpg'; ?>" class="card-img-top" alt="">
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
                        Bootcamp op de donderdagavond <br />
                        met Biku
                    </p>
                    <p class="card-text">
                        Lorem ipsum dolor sit amet, consectetur <br />
                        adipiscing elit. Praesent luctus velit id ex <br />
                        vestibulum, in tristique risus tincidunt.
                    </p>
                    <form action="#cards" class="card-form">
                        <button>
                            Lees meer <i class="fa-sharp fa-solid fa-arrow-right"></i>
                        </button>
                    </form>
                </div>
            </div>
            <!-- Spaces Between Rows -->
        </div>
    </div>
</div>

<?php

get_footer();
