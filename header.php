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
    h1,
    h2 {
      box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.166329763986014);
      opacity: 1;
      color: rgba(255, 255, 255, 1);
      font-family: 'Roboto-Bold', sans-serif;
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
      font-family: 'Roboto-Bold', sans-serif;
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
      font-family: 'Roboto-Medium', sans-serif;
      font-size: 21px;
      font-weight: 600;
      font-style: normal;
      letter-spacing: 0.26px;
      text-align: left;
    }

    h5 {
      opacity: 1;
      color: rgba(0, 0, 0, 1);
      font-family: 'Roboto-Medium', sans-serif;
      font-size: 18px;
      font-weight: 500;
      font-style: normal;
      letter-spacing: 0px;
      text-align: left;
      line-height: 24px;
    }

    a {
      text-decoration: none;
      color: #141414;
    }

    a:hover {
      color: #141414;
    }

    /* Container */
    .container {
      overflow: hidden;
    }

    main .container,
    header .container,
    footer .container {
      overflow: hidden;
    }

    /* Media Query for Screens up to 991px */
    @media (max-width: 991.9px) {

      main .container,
      header .container,
      footer .container {
        overflow: hidden;
        max-width: 100%;
      }
    }

    /* Media Query for Screens up to 1400px */
    @media (max-width: 1400px) {
      .container-fluid .container .footer__row .footer__spacing {
        flex: 2 !important;
      }
    }

    /* Header */
    header {
      background-color: #ffffff;
    }

    /* Naviagtion */
    nav {
      height: 81px;
    }

    .navigation__logo {
      opacity: 1;
      width: 187px;
      height: 40px;
    }

    .navigation-menu {
      display: flex;
      flex-direction: row;
      opacity: 1;
      color: rgba(0, 0, 0, 1);
      font-family: 'Roboto-Medium', sans-serif;
      font-size: 18px;
      font-weight: 600;
      font-style: normal;
      letter-spacing: 0px;
      text-align: start;
      gap: 3.3rem;
    }

    .submenu {
      display: flex;
      align-items: center;
      justify-content: space-between;
      height: 100%;
      margin-left: 3.3rem;
    }

    .navigation__search {
      display: flex;
      align-items: center;
      justify-content: center;
      opacity: 1;
      color: rgba(0, 0, 0, 1);
      font-family: 'FontAwesome5Pro-Solid', sans-serif;
      font-size: 21px;
      font-weight: 400;
      font-style: normal;
      letter-spacing: 0px;
      text-align: center;
      width: 4rem;
      height: 2.7rem;
      margin-right: 1.7rem;
    }

    .navigation__login {
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 3px;
      border: 3px solid rgba(20, 20, 20, 1);
      opacity: 1;
      background-color: rgba(255, 255, 255, 1);
      width: 124.83px;
      height: 49px;
      text-align: center;
      margin-right: 0.8rem;
    }

    .navigation__login__border {
      opacity: 1;
      color: rgba(20, 20, 20, 1);
      font-family: 'Roboto-Medium', sans-serif;
      font-size: 14px;
      font-weight: 600;
      font-style: normal;
      letter-spacing: 0px;
    }

    @media (min-width: 1199.5px) and (max-width: 1399.5px) {
      .navigation-menu {
        gap: 2.1rem;
      }

      .submenu {
        margin-left: 1.7rem;
      }

      .navigation__login {
        width: 100px;
      }
    }

    @media (max-width: 1199.49px) {
      .navigation-menu {
        gap: 1rem;
      }

      .submenu {
        margin-left: 0.7rem;
      }

      .navigation__search {
        margin-right: 0.5rem;
      }

      .navigation__login {
        width: 85px;
      }
    }

    @media (max-width: 991.5px) {
      .navigation-menu {
        gap: 2rem;
      }

      .submenu {
        margin-left: 1.5rem;
      }

      .navigation__search {
        margin-right: 0.9rem;
      }
    }

    /* Popup / Modal */
    .modal-button {
      background-color: #ffffff;
    }

    .popup {
      display: flex;
      flex-direction: column;
      align-items: stretch;
      border-radius: 6px;
      box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.5);
      opacity: 1;
      background-color: rgba(255, 255, 255, 1);
      width: 918px;
      height: 520px;
      top: 24rem;
      left: 50%;
      transform: translate(-50%, -50%);
    }

    .popup__close-button {
      opacity: 1;
      color: rgba(0, 0, 0, 1);
      font-family: 'FontAwesome5Pro-Solid', sans-serif;
      font-size: 34px;
      font-weight: 400;
      font-style: normal;
      letter-spacing: 0.45px;
      text-align: center;
      margin-top: -1rem !important;
      width: 26px;
      height: 37px;
    }

    .popup__header {
      overflow: hidden;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px 20px;
      width: 730px;
      height: 122px;
      margin: 0 auto;
      margin-top: 2.5rem;
    }

    .popup__title {
      opacity: 1;
      color: rgba(20, 20, 20, 1);
      font-family: 'Roboto-Bold', sans-serif;
      font-size: 48px;
      font-weight: 700;
      font-style: normal;
      letter-spacing: 0px;
      text-align: center;
      line-height: 56px;
      width: 100%;
      height: 100%;
    }

    .popup__text {
      opacity: 1;
      color: rgba(0, 0, 0, 1);
      font-family: 'OpenSans', sans-serif;
      font-size: 16px;
      font-weight: 400;
      font-style: normal;
      letter-spacing: 0.2px;
      text-align: center;
      line-height: 22px;
      width: 538px;
      height: 48px;
      margin: 0 auto;
    }

    .popup__form {
      overflow: hidden;
      display: flex;
      justify-content: center;
      align-items: center;
      margin-top: 4rem;
      height: 3rem;
    }

    .popup__input-border {
      display: flex;
      align-items: center;
      border-radius: 3px;
      border: 2px solid rgba(211, 211, 211, 1);
      opacity: 1;
      background-color: rgba(255, 255, 255, 1);
      width: 320px;
      height: 48px;
      padding: 10px;
      margin-right: 15px;
    }

    .popup__input {
      opacity: 32%;
      color: rgba(25, 25, 25, 1);
      font-family: 'Roboto-Medium', sans-serif;
      font-size: 16px;
      font-weight: 600;
      font-style: normal;
      letter-spacing: 0.2px;
      text-align: left;
      line-height: 24px;
      padding: 0;
      border: none;
      background-color: transparent;
      outline: none;
      width: 100%;
    }

    .popup__button-border {
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 3px;
      border: 2px solid #141414;
      opacity: 1;
      background-color: rgba(255, 255, 255, 1);
      width: 115px;
      height: 48px;
      padding: 10px;
    }

    .popup__button {
      opacity: 1;
      color: rgba(20, 20, 20, 1);
      font-family: 'Roboto-Medium', sans-serif;
      font-size: 15px;
      font-weight: 600;
      font-style: normal;
      letter-spacing: 0px;
      text-align: center;
      line-height: 24px;
      border: none;
      background-color: transparent;
    }

    /* Gap Between Elements Rows */
    .row-gap {
      row-gap: 6rem;
    }

    .row-gap:last-child {
      margin-bottom: 1rem;
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

    .lg-banner__img {
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
      color: #ffffff;
      background: transparent;
      padding: 20px;
    }

    .lg-banner-cover__title {
      font-family: 'Roboto', sans-serif;
      font-weight: 700;
      font-size: 72px;
      font-style: normal;
      letter-spacing: 0;
      line-height: 72px;
      color: #ffffff;
      text-align: center;
      vertical-align: top;
      width: 730px;
      height: 144px;
      margin-top: 10px;
      margin-left: 38px;
      margin-bottom: -16px;
    }

    .lg-banner-cover__desc {
      font-family: 'Open Sans', sans-serif;
      font-weight: 400;
      font-size: 18px;
      font-style: normal;
      letter-spacing: 0;
      line-height: 24px;
      color: #ffffff;
      text-align: center;
      vertical-align: top;
      width: 823px;
      height: 108px;
      margin-top: 58px;
      margin-left: -38px;
      padding-right: 38px;
    }

    /* Original Image */
    /* Width: 2000px */
    /* Height: 3000px */

    /* Medium Banner */
    .md-h-banner {
      overflow: hidden;
      width: 100%;
      position: relative;
      max-height: 450px;
      padding-bottom: 28.125%;
      background: #000;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .md-h-banner::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      /* background: rgba(0, 0, 0, 0.5); */
    }

    .md-h-banner .image-container {
      width: 100%;
      height: auto;
    }

    .md-h-banner .image-container img {
      width: 100%;
      height: auto;
      position: absolute;
      top: -145%;
      left: 0;
    }

    /* Original Image */
    /* Width: 3000px */
    /* Height: 2000px */

    /* Medium Width Banner */
    .md-w-banner {
      overflow: hidden;
      width: 100%;
      position: relative;
      max-height: 463px;
      padding-bottom: 30.08%;
      background: #000;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .md-w-banner::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.5);
    }

    .md-w-banner .image-container {
      width: 100%;
      height: auto;
    }

    .md-w-banner .image-container img {
      width: 100%;
      height: auto;
      position: absolute;
      top: -60.5%;
      left: 0;
    }

    /* Small Banner */
    .sm-banner {
      overflow: hidden;
      width: 100%;
      height: 252px;
      position: relative;
    }

    .sm-banner::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.5);
    }

    .sm-banner img {
      height: 100%;
      width: 100%;
      object-fit: cover;
    }

    .sm-banner-cover {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      text-align: center;
      color: #ffffff;
      background: transparent;
      padding: 20px;
    }

    .sm-banner-cover__title {
      font-family: 'Roboto', sans-serif;
      font-weight: 700;
      font-size: 72px;
      font-style: normal;
      letter-spacing: 0;
      line-height: 72px;
      color: #ffffff;
      text-align: center;
      vertical-align: top;
      width: 730px;
      margin-top: 10px;
      margin-left: 38px;
    }

    /* Small Width Banner */
    .sm-w-banner {
      overflow: hidden;
      width: 100%;
      height: 252px;
      position: relative;
    }

    .sm-w-banner::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      filter: blur(8px);
    }

    .sm-w-banner .image-container {
      width: 100%;
      height: 100%;
      position: relative;
    }

    .sm-w-banner .image-container img {
      width: 100%;
      height: auto;
      position: absolute;
      top: -388px;
      left: 0;
    }

    /* Blog */
    .blog-container {
      overflow: hidden;
    }

    .blog-container__header {
      margin-top: 3.6rem;
      margin-bottom: 1rem;
    }

    /* w-auto */
    .auto {
      width: auto !important;
    }

    /* Card */
    .card-container {
      margin-top: 0.9rem;
      width: auto;
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

    .card__img--cover {
      object-fit: cover !important;
    }

    .card__overlay {
      height: 15.4rem;
    }

    .card__type-form {
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

    .card__type-interview {
      width: 85px !important;
    }

    .card__type-whitepaper {
      width: 94px !important;
    }

    .card__type-blog {
      width: 64px !important;
    }

    .card__type-button {
      opacity: 1;
      color: rgba(20, 20, 20, 1);
      font-family: 'Roboto-Medium', sans-serif;
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

    .card__title {
      opacity: 1;
      color: rgba(0, 0, 0, 1);
      font-family: 'Roboto-Medium', sans-serif;
      font-size: 20px;
      font-weight: 600;
      font-style: normal;
      letter-spacing: 0.26px;
      text-align: left;
      line-height: 1.4rem;
      margin-top: 10px;
      margin-bottom: 10px;
      width: 348px;
      height: 48px;
    }

    .card__text {
      opacity: 1;
      color: rgba(0, 0, 0, 1);
      font-family: 'OpenSans', sans-serif;
      font-size: 16px;
      font-weight: 400;
      font-style: normal;
      letter-spacing: 0.2px;
      text-align: left;
      width: 349px;
      height: 72px;
    }

    .card__form {
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

    .card__form button {
      opacity: 1;
      color: rgba(20, 20, 20, 1);
      font-family: 'Roboto-Medium', sans-serif;
      font-size: 15px;
      font-weight: 600;
      font-style: normal;
      letter-spacing: 0px;
      text-align: left;
      line-height: 24px;
      border: none;
      background-color: #fff;
    }

    .card__ml {
      margin-left: 0.1rem;
    }

    @media (min-width: 500px) and (max-width: 992px) {
      .card-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: flex-start;
      }

      .card {
        width: auto;
        margin-right: 1rem;
      }

      .card:last-child {
        margin-right: 0;
      }
    }

    /* Events */
    .event-archive__header {
      margin-top: 1.6rem;
      margin-bottom: 0.5rem;
    }

    .event__date {
      opacity: 1;
      color: rgba(180, 180, 180, 1);
      font-family: 'OpenSans', sans-serif;
      font-size: 12px;
      font-weight: 400;
      font-style: normal;
      letter-spacing: 0px;
      text-align: left;
      margin-top: 0.55rem;
      margin-bottom: -0.5rem;
      width: 80px;
      height: 17px;
    }

    .card.no-event__date .card__title {
      margin-top: 30px;
      margin-bottom: 11px;
    }

    /* Filter */
    .filter-container {
      overflow: hidden;
    }

    .event-filter__header {
      margin-top: 3.6rem;
      margin-bottom: 0.5rem;
    }

    .filter {
      display: flex;
      gap: 10px;
      margin-bottom: 20px;
      border-radius: 5px;
    }

    .event-filter__form {
      overflow: hidden;
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 4px;
      opacity: 1;
      background-color: rgba(237, 237, 237, 1);
      width: auto;
      height: 32px;
      padding: 10px;
    }

    .event-filter__button {
      opacity: 1;
      color: rgba(20, 20, 20, 1);
      font-family: 'Roboto-Medium', sans-serif;
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

    .event-filter--selected {
      background-color: #ff470b;
      border: none;
    }

    .event-button--selected {
      color: #ffffff;
      background-color: #ff470b;
    }

    .event-filter__form:not(.event-filter--selected) {
      background-color: #ffffff;
      border: 1px solid #ededed;
    }

    .event-filter__button:not(.event-button--selected) {
      background-color: #ffffff;
      color: #141414;
    }

    /* Event Detail */
    .event-detail-container {
      overflow: hidden;
    }

    .event-detail__header {
      margin-top: 3.6rem;
      margin-bottom: 1rem;
    }

    /* Login */
    .login-container {
      width: 536px;
      height: 461px;
      margin: 0 auto;
      margin-top: 0;
      margin-bottom: 5rem;
    }

    .login-container__title {
      opacity: 1;
      color: rgba(20, 20, 20, 1);
      font-family: 'Roboto-Bold', sans-serif;
      font-size: 40px;
      font-weight: 700;
      font-style: normal;
      letter-spacing: 0px;
      text-align: left;
      line-height: 56px;
      margin-top: 4rem;
      width: 536px;
      height: 56px;
    }

    .login-container__text {
      opacity: 1;
      color: rgba(0, 0, 0, 1);
      font-family: 'OpenSans', sans-serif;
      font-size: 16px;
      font-weight: 400;
      font-style: normal;
      letter-spacing: 0.2px;
      text-align: left;
      width: 536px;
      height: 76px;
      margin-top: 1.5rem;
    }

    .login-container__input-border {
      display: flex;
      align-items: center;
      border-radius: 3px;
      border: 2px solid rgba(211, 211, 211, 1);
      opacity: 1;
      background-color: rgba(255, 255, 255, 1);
      width: 441px;
      height: 48px;
      padding: 10px;
    }

    .login-container__input {
      color: rgba(25, 25, 25, 1);
      font-family: 'Roboto-Medium', sans-serif;
      font-size: 16px;
      font-weight: 500;
      font-style: normal;
      letter-spacing: 0.2px;
      text-align: left;
      line-height: 24px;
      padding: 10px;
      width: 100%;
      height: 24px;
      border: none;
      background-color: #ffffff;
      outline: none;
    }

    .login-container__button-border {
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 3px;
      border: 3px solid rgba(20, 20, 20, 1);
      opacity: 1;
      background-color: rgba(255, 255, 255, 1);
      width: 102px;
      height: 49px;
    }

    .login-container__button {
      opacity: 1;
      color: rgba(20, 20, 20, 1);
      font-family: 'Roboto-Medium', sans-serif;
      font-size: 15px;
      font-weight: 500;
      font-style: normal;
      letter-spacing: 0px;
      text-align: center;
      line-height: 24px;
      width: 100%;
      height: 24px;
      border: none;
      background-color: #ffffff;
    }

    /* Search */
    .search-banner-container {
      position: absolute;
      display: flex;
      height: 100%;
      width: 100%;
      background-color: rgba(0, 0, 0, 0.54);
    }

    .search-banner-container__cover {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      text-align: center;
      color: #ffffff;
      background: transparent;
      padding: 20px;
    }

    .search-banner-container__title {
      box-shadow: none;
      opacity: 1;
      font-family: 'Roboto-Bold', sans-serif;
      font-weight: 700;
      font-size: 72px;
      font-style: normal;
      letter-spacing: 0;
      line-height: 72px;
      color: rgba(255, 255, 255, 1);
      text-align: center;
      vertical-align: top;
      width: 1108px;
      height: 72px;
      margin-top: 10px;
      margin-left: 38px;
    }

    /* Search Results */
    .search-results__header {
      margin-top: 3.6rem;
      margin-bottom: 1rem;
    }

    .search-results__title {
      opacity: 1;
      color: rgba(20, 20, 20, 1);
      font-family: 'Roboto-Bold', sans-serif;
      font-size: 48px;
      font-weight: 700;
      font-style: normal;
      letter-spacing: 0px;
      text-align: left;
      line-height: 56px;
      width: 1108px;
      height: 56px;
    }

    .search-results__text {
      opacity: 1;
      color: rgba(0, 0, 0, 1);
      font-family: 'OpenSans', sans-serif;
      font-size: 16px;
      font-weight: 400;
      font-style: normal;
      letter-spacing: 0.2px;
      text-align: center;
      line-height: 22px;
      width: 171px;
      height: 22px;
    }

    .search-results__form {
      overflow: hidden;
      display: flex;
      justify-content: start;
      align-items: center;
      width: 420px;
      height: 48px;
    }

    .search-results__input-border {
      display: flex;
      align-items: center;
      border-radius: 3px;
      border: 2px solid rgba(211, 211, 211, 1);
      opacity: 1;
      background-color: rgba(255, 255, 255, 1);
      width: 320px;
      height: 48px;
      padding: 10px;
      margin-right: 15px;
    }

    .search-results__input {
      opacity: 0.32;
      color: rgba(25, 25, 25, 1);
      font-family: 'Roboto-Medium', sans-serif;
      font-size: 16px;
      font-weight: 700;
      font-style: normal;
      letter-spacing: 0.2px;
      text-align: left;
      line-height: 24px;
      padding: 0;
      border: none;
      background-color: transparent;
      outline: none;
      width: 100%;
    }

    .search-results__button-border {
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 3px;
      border: 2px solid #141414;
      opacity: 1;
      background-color: rgba(255, 255, 255, 1);
      width: 115px;
      height: 48px;
      padding: 10px;
    }

    .search-results__button {
      opacity: 1;
      color: rgba(20, 20, 20, 1);
      font-family: 'Roboto-Medium', sans-serif;
      font-size: 15px;
      font-weight: 600;
      font-style: normal;
      letter-spacing: 0px;
      text-align: center;
      line-height: 24px;
      border: none;
      background-color: transparent;
    }

    @media (max-width: 1000px) {
      .search-results__title {
        font-size: 36px;
        line-height: 40px;
        width: 100%;
      }
    }

    /* Pagination */
    .pagination {
      margin-top: 1rem;
      height: auto;
    }

    .pagination-container {
      display: flex;
      align-items: center;
      justify-content: center;
      overflow: hidden;
      margin: 1rem auto;
      gap: 16px;
      width: 380px;
      height: 40px;
    }

    .page-numbers {
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 4px;
      border: 2px solid rgba(248, 248, 248, 1);
      opacity: 1;
      background-color: rgba(255, 255, 255, 1);
      margin: 0 5px;
      width: 40px;
      height: 40px;
    }

    .current {
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 4px;
      opacity: 1;
      color: white;
      background-color: rgba(255, 71, 11, 1);
      width: 40px;
      height: 40px;
    }

    .pagination i {
      font-size: 20px;
    }

    /* Font Awesome Icons */
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

    .fa-chevron-left,
    .fa-chevron-right {
      opacity: 0.24;
      color: rgba(20, 20, 20, 1);
      font-family: 'FontAwesome5Pro-Solid', sans-serif;
      font-size: 24px;
      font-weight: 400;
      font-style: normal;
      letter-spacing: 0px;
      text-align: left;
      transform: scale(1.25);
      width: 15px;
      height: 24px;
    }

    /* Footer */
    footer {
      display: flex;
      align-items: center;
      overflow: hidden;
      background-color: #141414;
      color: #ededed;
      margin-top: 40px;
      width: 100%;
      height: 80px;
    }

    .footer__row {
      display: flex;
      align-items: center;
      justify-content: space-between;
      height: 81px;
      opacity: 1;
      gap: 10px;
    }

    .footer__col {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
    }

    .footer__text {
      opacity: 1;
      color: rgba(255, 255, 255, 1);
      font-family: 'Roboto-Regular', sans-serif;
      font-size: 12px;
      font-weight: 400;
      font-style: normal;
      letter-spacing: 0px;
      text-align: center;
      white-space: nowrap;
      text-overflow: ellipsis;
      line-height: 16px;
      max-width: 160px;
    }
  </style>
</head>

<body <?php body_class(); ?>>

  <?php

  do_action('after_body');

  get_template_part('partials/header');
