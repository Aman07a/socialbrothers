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
        <div class="event-archive-header"></div>

        <div class="filter">
            <form action="#utrecht" class="event-filter-form event-filter-selected">
                <button class="event-filter-button event-button-selected" disabled>
                    events utrecht
                </button>
            </form>
            <form action="#rotterdam" class="event-filter-form">
                <button class="event-filter-button" disabled>
                    events rotterdam
                </button>
            </form>
            <form action="#leiden" class="event-filter-form">
                <button class="event-filter-button" disabled>
                    events leiden
                </button>
            </form>
        </div>
    </div>

    <!-- Events -->
    <div class="row event-container row-gap">
        <!-- Row 1 -->
        <div class="col-xl-4 col-lg-6 auto">
            <div class="card auto">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/a921bc847707d8528e4f5e00a324136d69807ae9.jpg'; ?>" class="card-img-top" alt="">
                <div class="card-img-overlay card__overlay d-flex flex-column justify-content-end">
                    <form class="card__type-form card__type-interview">
                        <button class="card__type-button" disabled>
                            utrecht
                        </button>
                    </form>
                </div>
                <div class="event-date">
                    01-01-2023
                </div>
                <p class="card__title">
                    Het jaarlijkse bierpongtournooi van <br />
                    Social Brothers
                </p>
                <p class="card__text">
                    Lorem ipsum dolor sit amet, consectetur <br />
                    adipiscing elit. Praesent luctus velit id ex <br />
                    vestibulum, in tristique risus tincidunt.
                </p>
                <form action="/event1" class="card__form">
                    <button>
                        Lees meer <i class="fa-sharp fa-solid fa-arrow-right"></i>
                    </button>
                </form>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 auto">
            <div class="card auto">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/09430a3f35a25fe2ba038840a7d4b99ba6e39942.jpg'; ?>" class="card-img-top" alt="">
                <div class="card-img-overlay card__overlay d-flex flex-column justify-content-end">
                    <form class="card__type-form card__type-interview">
                        <button class="card__type-button" disabled>
                            utrecht
                        </button>
                    </form>
                </div>
                <div class="event-date">
                    01-01-2023
                </div>
                <p class="card__title">
                    Bootcamp op de donderdagavond <br />
                    met Biku
                </p>
                <p class="card__text">
                    Lorem ipsum dolor sit amet, consectetur <br />
                    adipiscing elit. Praesent luctus velit id ex <br />
                    vestibulum, in tristique risus tincidunt.
                </p>
                <form action="#cards" class="card__form">
                    <button disabled>
                        Lees meer <i class="fa-sharp fa-solid fa-arrow-right"></i>
                    </button>
                </form>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 auto">
            <div class="card auto">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/7bf8b7439accaae1dbcb6690298ed5dd6b196eb0.jpg'; ?>" class="card-img-top" alt="">
                <div class="card-img-overlay card__overlay d-flex flex-column justify-content-end">
                    <form class="card__type-form card__type-interview">
                        <button class="card__type-button" disabled>
                            utrecht
                        </button>
                    </form>
                </div>
                <div class="event-date">
                    01-01-2023
                </div>
                <p class="card__title">
                    Blijf up to date met de <br />
                    maandafsluiting
                </p>
                <p class="card__text">
                    Lorem ipsum dolor sit amet, consectetur <br />
                    adipiscing elit. Praesent luctus velit id ex <br />
                    vestibulum, in tristique risus tincidunt.
                </p>
                <form action="#cards" class="card__form">
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
                <img src="<?php echo get_template_directory_uri() . '/assets/images/09430a3f35a25fe2ba038840a7d4b99ba6e39942.jpg'; ?>" class="card-img-top" alt="">
                <div class="card-img-overlay card__overlay d-flex flex-column justify-content-end">
                    <form class="card__type-form card__type-interview">
                        <button class="card__type-button" disabled>
                            utrecht
                        </button>
                    </form>
                </div>
                <div class="event-date">
                    01-01-2023
                </div>
                <p class="card__title">
                    Bootcamp op de donderdagavond <br />
                    met Biku
                </p>
                <p class="card__text">
                    Lorem ipsum dolor sit amet, consectetur <br />
                    adipiscing elit. Praesent luctus velit id ex <br />
                    vestibulum, in tristique risus tincidunt.
                </p>
                <form action="#cards" class="card__form">
                    <button disabled>
                        Lees meer <i class="fa-sharp fa-solid fa-arrow-right"></i>
                    </button>
                </form>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 auto">
            <div class="card auto">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/7bf8b7439accaae1dbcb6690298ed5dd6b196eb0.jpg'; ?>" class="card-img-top" alt="">
                <div class="card-img-overlay card__overlay d-flex flex-column justify-content-end">
                    <form class="card__type-form card__type-interview">
                        <button class="card__type-button" disabled>
                            utrecht
                        </button>
                    </form>
                </div>
                <div class="event-date">
                    01-01-2023
                </div>
                <p class="card__title">
                    Blijf up to date met de <br />
                    maandafsluiting
                </p>
                <p class="card__text">
                    Lorem ipsum dolor sit amet, consectetur <br />
                    adipiscing elit. Praesent luctus velit id ex <br />
                    vestibulum, in tristique risus tincidunt.
                </p>
                <form action="#cards" class="card__form">
                    <button disabled>
                        Lees meer
                        <i class="fa-sharp fa-solid fa-arrow-right"></i>
                    </button>
                </form>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 auto">
            <div class="card auto">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/a921bc847707d8528e4f5e00a324136d69807ae9.jpg'; ?>" class="card-img-top" alt="">
                <div class="card-img-overlay card__overlay d-flex flex-column justify-content-end">
                    <form class="card__type-form card__type-interview">
                        <button class="card__type-button" disabled>
                            utrecht
                        </button>
                    </form>
                </div>
                <div class="event-date">
                    01-01-2023
                </div>
                <p class="card__title">
                    Het jaarlijkse bierpongtournooi van <br />
                    Social Brothers
                </p>
                <p class="card__text">
                    Lorem ipsum dolor sit amet, consectetur <br />
                    adipiscing elit. Praesent luctus velit id ex <br />
                    vestibulum, in tristique risus tincidunt.
                </p>
                <form action="#event" class="card__form">
                    <button disabled>
                        Lees meer <i class="fa-sharp fa-solid fa-arrow-right"></i>
                    </button>
                </form>
            </div>
        </div>

        <!-- Row 3 -->
        <div class="col-xl-4 col-lg-6 auto">
            <div class="card auto">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/7bf8b7439accaae1dbcb6690298ed5dd6b196eb0.jpg'; ?>" class="card-img-top" alt="">
                <div class="card-img-overlay card__overlay d-flex flex-column justify-content-end">
                    <form class="card__type-form card__type-interview">
                        <button class="card__type-button" disabled>
                            utrecht
                        </button>
                    </form>
                </div>
                <div class="event-date">
                    01-01-2023
                </div>
                <p class="card__title">
                    Blijf up to date met de <br />
                    maandafsluiting
                </p>
                <p class="card__text">
                    Lorem ipsum dolor sit amet, consectetur <br />
                    adipiscing elit. Praesent luctus velit id ex <br />
                    vestibulum, in tristique risus tincidunt.
                </p>
                <form action="#event" class="card__form">
                    <button disabled>
                        Lees meer
                        <i class="fa-sharp fa-solid fa-arrow-right"></i>
                    </button>
                </form>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 auto">
            <div class="card auto">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/a921bc847707d8528e4f5e00a324136d69807ae9.jpg'; ?>" class="card-img-top" alt="">
                <div class="card-img-overlay card__overlay d-flex flex-column justify-content-end">
                    <form class="card__type-form card__type-interview">
                        <button class="card__type-button" disabled>
                            utrecht
                        </button>
                    </form>
                </div>
                <div class="event-date">
                    01-01-2023
                </div>
                <p class="card__title">
                    Het jaarlijkse bierpongtournooi van <br />
                    Social Brothers
                </p>
                <p class="card__text">
                    Lorem ipsum dolor sit amet, consectetur <br />
                    adipiscing elit. Praesent luctus velit id ex <br />
                    vestibulum, in tristique risus tincidunt.
                </p>
                <form action="#event" class="card__form">
                    <button disabled>
                        Lees meer <i class="fa-sharp fa-solid fa-arrow-right"></i>
                    </button>
                </form>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 auto">
            <div class="card auto">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/09430a3f35a25fe2ba038840a7d4b99ba6e39942.jpg'; ?>" class="card-img-top" alt="">
                <div class="card-img-overlay card__overlay d-flex flex-column justify-content-end">
                    <form class="card__type-form card__type-interview">
                        <button class="card__type-button" disabled>
                            utrecht
                        </button>
                    </form>
                </div>
                <div class="event-date">
                    01-01-2023
                </div>
                <p class="card__title">
                    Bootcamp op de donderdagavond <br />
                    met Biku
                </p>
                <p class="card__text">
                    Lorem ipsum dolor sit amet, consectetur <br />
                    adipiscing elit. Praesent luctus velit id ex <br />
                    vestibulum, in tristique risus tincidunt.
                </p>
                <form action="#event" class="card__form">
                    <button disabled>
                        Lees meer <i class="fa-sharp fa-solid fa-arrow-right"></i>
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
