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
      grid-template-columns: 1fr;
      grid-template-rows: repeat(3, 1fr);
      grid-auto-columns: 1fr;
      grid-auto-rows: 1fr;
      gap: 0px 0px;
      grid-auto-flow: column;
      grid-template-areas:
        "header"
        "main"
        "footer";
      width: 100%;
      height: 95.5vh;
    }

    header {
      display: grid;
      grid-template-columns: 1fr;
      grid-template-rows: 1fr;
      gap: 0px 0px;
      grid-auto-flow: row;
      grid-template-areas:
        "header__container";
      justify-self: stretch;
      align-self: stretch;
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
      grid-template-columns: repeat(2, 1fr);
      grid-template-rows: 1fr;
      gap: 0px 0px;
      grid-auto-flow: row;
      grid-template-areas:
        "header__brand header_navigation";
      grid-area: header__wrapper;
    }

    .header__brand {
      display: grid;
      grid-template-columns: 1fr;
      grid-template-rows: 1fr;
      gap: 0px 0px;
      grid-auto-flow: row;
      grid-template-areas:
        "header__logo";
      grid-area: header__brand;
    }

    .header__logo {
      grid-area: header__logo;
    }

    .header_navigation {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      grid-template-rows: 1fr;
      gap: 0px 0px;
      grid-auto-flow: row;
      grid-template-areas:
        "header__blog header__events header__search header_login";
      grid-area: header_navigation;
    }

    .header__blog {
      grid-area: header__blog;
    }

    .header__events {
      grid-area: header__events;
    }

    .header__search {
      grid-area: header__search;
    }

    .header_login {
      grid-area: header_login;
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
