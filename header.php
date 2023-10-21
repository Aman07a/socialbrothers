<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

  <?php wp_head(); ?>

  <style>
    body {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      grid-template-rows: 81px 1fr 80px;
      grid-auto-columns: 1fr;
      grid-auto-rows: 1fr;
      gap: 0px 0px;
      grid-auto-flow: column;
      grid-template-areas:
        "header header header"
        "main main main"
        "footer footer footer";
      height: 94.5vh;
    }

    header {
      display: grid;
      grid-template-columns: 1fr;
      grid-template-rows: 1fr;
      gap: 0px 0px;
      grid-auto-flow: row;
      grid-template-areas:
        "header__container";
      grid-area: header;
    }

    .header__container {
      display: grid;
      grid-template-columns: 1fr;
      grid-template-rows: 1fr;
      gap: 0px 0px;
      grid-auto-flow: row;
      grid-template-areas:
        "header__wrapper";
      grid-area: header__container;
    }

    .header__wrapper {
      display: grid;
      grid-template-columns: 0.5fr 1fr;
      grid-template-rows: 1fr;
      gap: 0px 0px;
      grid-auto-flow: row;
      grid-template-areas:
        "header__brand header__navigation";
      grid-area: header__wrapper;
    }

    .header__brand {
      display: grid;
      grid-template-columns: 187px;
      grid-template-rows: 1fr;
      gap: 0px 0px;
      grid-auto-flow: row;
      justify-content: center;
      grid-template-areas:
        "header__logo";
      justify-self: stretch;
      align-self: center;
      grid-area: header__brand;
    }

    .header__logo {
      justify-self: center;
      align-self: center;
      grid-area: header__logo;
    }

    .header__navigation {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      grid-template-rows: 1fr;
      gap: 0px 0px;
      grid-auto-flow: row;
      justify-content: space-evenly;
      align-content: space-evenly;
      grid-template-areas:
        "header__blog header__events header__search header__login";
      grid-area: header__navigation;
    }

    .header__blog {
      justify-self: center;
      align-self: center;
      grid-area: header__blog;
    }

    .header__events {
      justify-self: center;
      align-self: center;
      grid-area: header__events;
    }

    .header__search {
      justify-self: center;
      align-self: center;
      grid-area: header__search;
    }

    .header__login {
      justify-self: center;
      align-self: center;
      grid-area: header__login;
    }

    main {
      display: grid;
      grid-template-columns: 1fr;
      grid-template-rows: 1fr;
      gap: 0px 0px;
      grid-auto-flow: row;
      grid-template-areas:
        "container";
      grid-area: main;
    }

    .container {
      grid-area: container;
    }

    footer {
      grid-area: footer;
    }
  </style>
</head>

<body <?php body_class(); ?>>

  <?php

  do_action('after_body');

  get_template_part('partials/header');
