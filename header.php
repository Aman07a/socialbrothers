<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

  <?php wp_head(); ?>

  <!-- Styling -->
  <style>
    /* Basics */
    h1 {
      box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.166329763986014);
      opacity: 1;
      color: rgba(255, 255, 255, 1);
      font-family: "Roboto-Bold", sans-serif;
      font-size: 72px;
      font-weight: 700;
      font-style: normal;
      letter-spacing: 0px;
      text-align: center;
      line-height: 72px;
    }

    h2 {
      box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.166329763986014);
      opacity: 1;
      color: rgba(255, 255, 255, 1);
      font-family: "Roboto-Bold", sans-serif;
      font-size: 72px;
      font-weight: 700;
      font-style: normal;
      letter-spacing: 0px;
      text-align: center;
      line-height: 72px;
    }

    h3 {
      opacity: 1;
      color: rgba(20, 20, 20, 1);
      font-family: "Roboto-Bold", sans-serif;
      font-size: 36px;
      font-weight: 700;
      font-style: normal;
      letter-spacing: 0px;
      text-align: left;
      line-height: 56px;
    }

    h4 {
      opacity: 1;
      color: rgba(0, 0, 0, 1);
      font-family: "Roboto-Medium", sans-serif;
      font-size: 21px;
      font-weight: 500;
      font-style: normal;
      letter-spacing: 0.26px;
      text-align: left;
    }

    h5 {
      opacity: 1;
      color: rgba(0, 0, 0, 1);
      font-family: "Roboto-Medium", sans-serif;
      font-size: 18px;
      font-weight: 500;
      font-style: normal;
      letter-spacing: 0px;
      text-align: left;
      line-height: 24px;
    }

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

    .blog-container {
      overflow: hidden;
      /* border: 1px solid black; */
    }

    .blog-header {
      margin-top: 3.6rem;
      margin-bottom: 1rem;
    }

    .card {
      width: 348px;
      height: 442px;
      overflow: hidden;
      display: flex;
      flex-direction: column;
      border: none;
    }

    .card img {
      border-radius: 6px;
      opacity: 1;
      background-size: 100%;
      width: 348px;
      height: 240px;
      overflow: hidden;
      object-fit: cover;
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
      font-family: "Roboto-Medium", sans-serif;
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
      font-family: "FontAwesome5Pro-Solid", sans-serif;
      font-size: 13px;
      font-weight: 400;
      font-style: normal;
      letter-spacing: 0.22px;
      text-align: center;
      margin-left: 10px;
    }
  </style>

</head>

<body <?php body_class(); ?>>

  <?php

  do_action('after_body');

  get_template_part('partials/header');
