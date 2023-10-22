<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

  <?php wp_head(); ?>

  <!-- Styling -->
  <style>
    /* Header */
    .header__row {
      display: flex;
      align-items: center;
      justify-content: space-between;
      height: 81px;
      /* box-shadow: 0px 0px 10px 5px #d4d4d4; */
      opacity: 1;
    }

    .header__col {
      flex: 1;
      text-align: center;
    }

    .header__logo {
      opacity: 1;
      width: 187px;
      height: 40px;
    }

    .header__blog {
      opacity: 1;
      color: rgba(0, 0, 0, 1);
      font-family: "Roboto-Medium", sans-serif;
      font-size: 18px;
      font-weight: 600;
      font-style: normal;
      letter-spacing: 0px;
      text-align: center;
      line-height: 24px;
    }

    .header__events {
      opacity: 1;
      color: rgba(0, 0, 0, 1);
      font-family: "Roboto-Medium", sans-serif;
      font-size: 18px;
      font-weight: 600;
      font-style: normal;
      letter-spacing: 0px;
      text-align: center;
      line-height: 24px;
    }

    .header__search {
      opacity: 1;
      color: rgba(0, 0, 0, 1);
      font-family: "FontAwesome5Pro-Solid";
      font-size: 21px;
      font-weight: 400;
      font-style: normal;
      letter-spacing: 0px;
      text-align: center;
    }

    .header__border {
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 3px;
      border: 3px solid rgba(20, 20, 20, 1);
      opacity: 1;
      background-color: rgba(255, 255, 255, 1);
      width: 103px;
      height: 49px;
    }

    .header__border__login {
      opacity: 1;
      color: rgba(20, 20, 20, 1);
      font-family: "Roboto-Medium", sans-serif;
      font-size: 14px;
      font-weight: 600;
      font-style: normal;
      letter-spacing: 0px;
      line-height: 24px;
      width: 42px;
      height: 24px;
    }

    /* Large Banner */
    .lg-banner {
      overflow: hidden;
      width: 100%;
      height: 601px;
      position: relative;
    }

    .lg-banner::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.5);
    }

    .lg-banner img {
      height: 100%;
      width: 100%;
      object-fit: cover;
    }

    .lg-banner-cover {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      text-align: center;
      color: white;
      background: transparent;
      padding: 20px;
    }

    .lg-banner-title {
      font-family: 'Roboto', sans-serif;
      font-weight: 700;
      font-size: 72px;
      font-style: normal;
      letter-spacing: 0;
      line-height: 72px;
      color: #FFFFFF;
      text-align: center;
      vertical-align: top;
      width: 730px;
      height: 144px;
      margin-top: 10px;
      margin-left: 38px;
      margin-bottom: -16px;
    }

    .lg-banner-desc {
      font-family: 'Open Sans', sans-serif;
      font-weight: 400;
      font-size: 18px;
      font-style: normal;
      letter-spacing: 0;
      line-height: 24px;
      color: #FFFFFF;
      text-align: center;
      vertical-align: top;
      width: 823px;
      height: 108px;
      margin-top: 58px;
      margin-left: -38px;
      padding-right: 38px;
    }

    .container {
      border: 1px solid black;
    }
  </style>

</head>

<body <?php body_class(); ?>>

  <?php

  do_action('after_body');

  get_template_part('partials/header');
