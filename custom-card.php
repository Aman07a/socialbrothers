<?php
/*
Template Name: Custom Card
*/

defined('ABSPATH') || exit('Forbidden');

get_header();
?>

<style>
    .card-container {
        margin-top: 0.9rem;
    }

    .card {
        display: flex;
        flex-direction: column;
        overflow: hidden;
        width: 348px;
        height: 442px;
        border: none;
    }

    .card img {
        overflow: hidden;
        object-fit: fill;
        border-radius: 6px;
        opacity: 1;
        background-size: 100%;
        width: 348px;
        height: 240px;
    }

    .cover {
        object-fit: cover !important;
    }

    .card-overlay {
        height: 15.4rem;
    }

    .card-type-form {
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        border-radius: 4px;
        opacity: 1;
        background-color: rgba(237, 237, 237, 1);
        margin-left: -5px;
        width: 94px;
        height: 32px;
    }

    .card-type-interview {
        width: 85px !important;
    }

    .card-type-whitepaper {
        width: 94px !important;
    }

    .card-type-blog {
        width: 64px !important;
    }

    .card-type-button {
        opacity: 1;
        color: rgba(20, 20, 20, 1);
        font-family: "Roboto-Medium", sans-serif;
        font-size: 12px;
        font-weight: 600;
        font-style: normal;
        letter-spacing: 0px;
        text-align: center;
        line-height: 24px;
        text-transform: uppercase;
        border: none;
        width: auto;
        height: 24px;
    }

    .card-title {
        opacity: 1;
        color: rgba(0, 0, 0, 1);
        font-family: "Roboto-Medium", sans-serif;
        font-size: 20px;
        font-weight: 600;
        font-style: normal;
        letter-spacing: 0.26px;
        text-align: left;
        width: 348px;
        height: 48px;

        line-height: 1.4rem;
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .card-text {
        opacity: 1;
        color: rgba(0, 0, 0, 1);
        font-family: "OpenSans", sans-serif;
        font-size: 16px;
        font-weight: 400;
        font-style: normal;
        letter-spacing: 0.2px;
        text-align: left;
        width: 349px;
        height: 72px;
    }

    .card-form {
        opacity: 1;
        color: rgba(25, 25, 25, 1);
        font-family: 'Roboto-Medium', sans-serif;
        font-size: 16px;
        font-weight: 500;
        font-style: normal;
        letter-spacing: 0.2px;
        text-align: left;
        line-height: 24px;
        width: 103px;
        height: 24px;
    }

    .card-form button {
        opacity: 1;
        color: rgba(20, 20, 20, 1);
        font-family: "Roboto-Medium", sans-serif;
        font-size: 15px;
        font-weight: 600;
        font-style: normal;
        letter-spacing: 0px;
        text-align: left;
        line-height: 24px;
        border: none;
        background-color: #fff;
    }

    .fa-arrow-right {
        opacity: 1;
        color: rgba(20, 20, 20, 1);
        font-family: 'FontAwesome5Pro-Solid', sans-serif;
        font-size: 13px;
        font-weight: 400;
        font-style: normal;
        letter-spacing: 0.22px;
        text-align: center;
        margin-left: 10px;
    }

    .card-date {
        opacity: 1;
        color: rgba(180, 180, 180, 1);
        font-family: "OpenSans";
        font-size: 12px;
        font-weight: 400;
        font-style: normal;
        letter-spacing: 0px;
        text-align: left;
        margin-top: 0.75rem;
        margin-bottom: -0.5rem;
        width: 80px;
        height: 17px;
    }

    .card.no-card-date .card-title {
        margin-top: 30px;
        margin-bottom: 11px;
    }
</style>

<div class="container">
    <div class="row card-container">
        <div class="col-md-4">
            <!-- Card: Blog -->
            <div class="card">
                <!-- Card Image -->
                <img src="<?php echo get_template_directory_uri() . '/assets/images/a921bc847707d8528e4f5e00a324136d69807ae9.jpg'; ?>" class="card-img-top" alt="" />
                <!-- Card Overlay -->
                <div class="card-img-overlay card-overlay d-flex flex-column justify-content-end">
                    <!-- Card Form -->
                    <form class="card-type-form card-type-interview">
                        <!-- Card Button -->
                        <button class="card-type-button" disabled>utrecht</button>
                    </form>
                </div>
                <!-- Card Title -->
                <p class="card-title">
                    Type something en dan ook een <br />
                    hele lange titel
                </p>
                <!-- Card Text -->
                <p class="card-text">
                    Lorem ipsum dolor sit amet, consectetur <br />
                    adipiscing elit. Praesent luctus velit id ex <br />
                    vestibulum, in tristique risus tincidunt.
                </p>
                <!-- Card Details -->
                <form action="#" class="card-form">
                    <!-- Card Button -->
                    <button>
                        <!-- Card Arrow Right -->
                        Lees meer <i class="fa-sharp fa-solid fa-arrow-right"></i>
                    </button>
                </form>
            </div>
        </div>

        <div class="col-md-4">
            <!-- Card: Events -->
            <div class="card">
                <!-- Card Image -->
                <img src="<?php echo get_template_directory_uri() . '/assets/images/a921bc847707d8528e4f5e00a324136d69807ae9.jpg'; ?>" class="card-img-top" alt="" />
                <!-- Card Overlay -->
                <div class="card-img-overlay card-overlay d-flex flex-column justify-content-end">
                    <!-- Card Form -->
                    <form class="card-type-form card-type-interview">
                        <!-- Card Button -->
                        <button class="card-type-button" disabled>utrecht</button>
                    </form>
                </div>
                <!-- Card Date -->
                <div class="card-date">01-01-2023</div>
                <!-- Card Title -->
                <p class="card-title">
                    Type something en dan ook een <br />
                    hele lange titel
                </p>
                <!-- Card Text -->
                <p class="card-text">
                    Lorem ipsum dolor sit amet, consectetur <br />
                    adipiscing elit. Praesent luctus velit id ex <br />
                    vestibulum, in tristique risus tincidunt.
                </p>
                <!-- Card Details -->
                <form action="#" class="card-form">
                    <!-- Card Button -->
                    <button>
                        <!-- Card Arrow Right -->
                        Lees meer <i class="fa-sharp fa-solid fa-arrow-right"></i>
                    </button>
                </form>
            </div>
        </div>

        <!-- Card: Empty -->
        <div class="col-md-4"></div>
    </div>
</div>

<script>
    const cards = document.querySelectorAll('.card');

    cards.forEach(card => {
        if (!card.querySelector('.card-date')) {
            card.classList.add('no-card-date');
        }
    });
</script>

<?php

get_footer();
