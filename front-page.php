<?php defined('ABSPATH') || exit('Forbidden');

get_header();

while (have_posts()) {
    the_post();
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
            <h3 class="blog__title">De nieuwste blogs</h3>
        </div>

        <div class="row card-container row-gap">
            <div class="col-xl-4 col-lg-6 auto">
                <div class="card auto">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/8d6cb4608c3a0c50624325b0a2b4d0142822345b.jpg'; ?>" class="card-img-top card__img--cover" alt="">
                    <div class="card-img-overlay card__overlay d-flex flex-column justify-content-end">
                        <form class="card__type-form card__type-interview">
                            <button class="card__type-button" disabled>
                                interview
                            </button>
                        </form>
                    </div>
                    <p class="card__title">
                        Werken bij Social Brothers, <br />
                        volgens developer Ryence
                    </p>
                    <p class="card__text">
                        Lorem ipsum dolor sit amet, consectetur <br />
                        adipiscing elit. Praesent luctus velit id ex <br />
                        vestibulum, in tristique risus tincidunt.
                    </p>
                    <form action="/blog1" class="card__form">
                        <button>
                            Lees meer <i class="fa-sharp fa-solid fa-arrow-right"></i>
                        </button>
                    </form>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 auto">
                <div class="card auto">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/c9affda65b1530ebfde2cb412de6009da9e6a477.jpg'; ?>" class="card-img-top" alt="">
                    <div class="card-img-overlay card__overlay d-flex flex-column justify-content-end">
                        <form class="card__type-form card__type-whitepaper">
                            <button class="card__type-button" disabled>
                                whitepaper
                            </button>
                        </form>
                    </div>
                    <p class="card__title">
                        Hoe stimuleer je winkelbezoek <br />
                        met technologie?
                    </p>
                    <p class="card__text">
                        Lorem ipsum dolor sit amet, consectetur <br />
                        adipiscing elit. Praesent luctus velit id ex <br />
                        vestibulum, in tristique risus tincidunt.
                    </p>
                    <form action="#blog" class="card__form">
                        <button disabled>
                            Lees meer <i class="fa-sharp fa-solid fa-arrow-right"></i>
                        </button>
                    </form>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 auto">
                <div class="card auto">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/a8eb6babda033968f38e01469c8e86b536a9008f.jpg'; ?>" class="card-img-top" alt="">
                    <div class="card-img-overlay card__overlay d-flex flex-column justify-content-end">
                        <form class="card__type-form card__type-blog">
                            <button class="card__type-button" disabled>
                                blog
                            </button>
                        </form>
                    </div>
                    <p class="card__title">
                        Locatie gebaseerde pushberichten <br />
                        sturen
                    </p>
                    <p class="card__text">
                        Lorem ipsum dolor sit amet, consectetur <br />
                        adipiscing elit. Praesent luctus velit id ex <br />
                        vestibulum, in tristique risus tincidunt.
                    </p>
                    <form action="#blog" class="card__form">
                        <button disabled>
                            Lees meer
                            <i class="fa-sharp fa-solid fa-arrow-right"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Events: Filter -->
        <div class="filter-container">
            <div class="event-filter__header">
                <h3 class="event__title">Opkomende events</h3>
            </div>

            <div class="filter">
                <form action="#utrecht" class="event-filter-form event-filter--selected">
                    <button class="event-filter-button event-button--selected" disabled>
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
        <div class="row card-container row-gap">
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
                    <form action="#cards" class="card__form">
                        <button disabled>
                            Lees meer
                            <i class="fa-sharp fa-solid fa-arrow-right"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php
}

get_footer();
