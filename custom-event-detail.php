<?php
/*
Template Name: Custom Event Detail
*/

defined('ABSPATH') || exit('Forbidden');

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
                <!-- 12 Columns -->
                <div class="col">
                    <form class="card__type-form card__type-interview">
                        <button class="card__type-button" disabled>
                            utrecht
                        </button>
                    </form>
                </div>
                <div class="col-2">
                    <div class="event__date">
                        01-01-2023
                    </div>
                </div>
                <div class="col"></div>
                <div class="col"></div>
                <div class="col"></div>
                <div class="col"></div>
                <div class="col"></div>
                <div class="col"></div>
                <div class="col"></div>
                <div class="col"></div>
                <div class="col"></div>
            </div>

            <h3 class="event-detail__title">
                Het jaarlijkse bierpongtournooi <br />
                van Social Brothers
            </h3>

            <p class="event-detail__text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do tempor incidunt ut labore et <br />
                dolore magna aliqua. Magnis dis parturient montes nascetur ridiculus mus mauris vitae ultricies. Commodo <br />
                odio aenean sed adipiscing diam donec adipiscing tristique risus. Eu sem integer vitae justo eget magna <br />
                fermentum. Tellus molestie nunc non blandit massa enim nec dui.
            </p>

            <h4 class="event-detail__subtitle">Kom verkleed</h4>

            <p class="event-detail__text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do tempor incidunt ut labore et <br />
                dolore magna aliqua. Magnis dis parturient montes nascetur ridiculus mus mauris vitae ultricies. Commodo <br />
                odio aenean sed adipiscing diam donec adipiscing tristique risus. Eu sem integer vitae justo eget magna <br />
                fermentum. Tellus molestie nunc non blandit massa enim nec dui.
            </p>

            <p class="event-detail__text">
                Tellus id interdum velit laoreet id donec. Eu scelerisque felis imperdiet proin. Blandit libero volutpat sed <br />
                cras ornare arcu dui. Euismod in pellentes massa placerat duis. Dolor sed vivera ipsum nunc aliquet <br />
                bibendum enim facilisis gravida. At elementum eu facilisis sed odio morbi quis commodo.
            </p>

            <h4 class="event-detail__subtitle">Wat kan je winnen?</h4>

            <p class="event-detail__text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do tempor incidunt ut labore et <br />
                dolore magna aliqua. Magnis dis parturient montes nascetur ridiculus mus mauris vitae ultricies. Commodo <br />
                odio aenean sed adipiscing diam donec adipiscing tristique risus. Eu sem integer vitae justo eget magna <br />
                fermentum. Tellus molestie nunc non blandit massa enim nec dui.
            </p>

            <p class="event-detail__text">
                Tellus id interdum velit laoreet id donec. Eu scelerisque felis imperdiet proin. Blandit libero volutpat sed <br />
                cras ornare arcu dui. Euismod in pellentes massa placerat duis. Dolor sed vivera ipsum nunc aliquet <br />
                bibendum enim facilisis gravida. At elementum eu facilisis sed odio morbi quis commodo.
            </p>

            <div class="event-detail__header">
                <h3 class="event-detail__title">
                    Eerst volgende evenementen in Utrecht
                </h3>

                <div class="row card-container row__gap">
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
                            <div class="event__date">
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
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/09430a3f35a25fe2ba038840a7d4b99ba6e39942.jpg'; ?>" alt="">
                            <div class="card-img-overlay card__overlay d-flex flex-column justify-content-end">
                                <form class="card__type-form card__type-interview">
                                    <button class="card__type-button" disabled>
                                        utrecht
                                    </button>
                                </form>
                            </div>
                            <div class="event__date">
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
                            <div class="event__date">
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
                </div>
            </div>
        </div>
    </div>
</div>

<?php

get_footer();
