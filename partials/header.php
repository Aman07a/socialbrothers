<?php defined('ABSPATH') || exit('Forbidden'); ?>

<header class="header">
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
      <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
        <img class="navigation__logo" src="https://socialbrothers.nl/wp-content/uploads/2021/11/sb-logo.svg" alt="Logo">
      </a>
      <div class="d-flex ms-auto ml-auto align-items-center justify-content-between" id="navbarText">
        <?php
        wp_nav_menu(array(
          'menu' => 'top-menu',
          'menu_class' => 'navigation-menu navbar-nav',
          'container' => '',
          'li_class' => 'nav-item',
          'active_class' => 'active',
          'a_class' => 'nav-link',
        ));
        ?>

        <div class="submenu">
          <!-- Bootstrap: Search -->
          <div class="navigation__search">
            <button type="button" class="modal-button border-0" id="modal-button" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <i class="fa-solid fa-magnifying-glass"></i>
            </button>
          </div>

          <!-- Only open modal on the home page; if not, will be redirected to the home page -->
          <?php if (!is_front_page()) { ?>
            <script>
              const modalButton = document.getElementById("modal-button");
              if (modalButton) {
                modalButton.addEventListener("click", function(event) {
                  if (!isFrontPage()) {
                    window.location.href = "/";
                  }
                });
              }

              function isFrontPage() {
                return window.location.pathname === "/";
              }
              if (!isFrontPage()) {
                modalButton.removeAttribute("data-bs-toggle");
                modalButton.removeAttribute("data-bs-target");
              }
            </script>
          <?php } ?>

          <!-- Validating if the user is already logged in -->
          <?php if (is_user_logged_in()) { ?>
            <a href="<?php echo wp_logout_url(home_url('/')); ?>" class="navigation__login">
              <div class="navigation__login__border">
                Logout
              </div>
            </a>
          <?php } else { ?>
            <a href="<?php echo esc_url(home_url('/login')); ?>" class="navigation__login">
              <div class="navigation__login__border">
                Login
              </div>
            </a>
          <?php } ?>
        </div>
    </nav>
  </div>
</header>

<header class="header">
  <div class="container">
    <div class="row header__row">
      <div class="col header__col">
        <a href="/">
          <img class="header__logo" src="https://socialbrothers.nl/wp-content/uploads/2021/11/sb-logo.svg" alt="Logo">
        </a>
      </div>
      <div class="col header__col"></div>
      <div class="col header__col"></div>
      <div class="col header__col"></div>
      <div class="col header__col"></div>
      <div class="col header__col"></div>
      <a href="/archive-blog" class="col header__col header__blog">
        Blog
      </a>
      <a href="/archive-events" class="col header__col header__events">
        Events
      </a>
      <div class="col header__col header__search">
        <button type="button" class="modal-button border-0" id="modal-button" data-bs-toggle="modal" data-bs-target="#exampleModal">
          <i class="fa-solid fa-magnifying-glass"></i>
        </button>
      </div>
      <?php if (is_user_logged_in()) { ?>
        <a href="<?php echo wp_logout_url(home_url('/')); ?>" class="col header__col header__border me-4">
          <div class="header__border__login">
            Logout
          </div>
        </a>
      <?php } else { ?>
        <a href="login" class="col header__col header__border me-4">
          <div class="header__border__login">
            Login
          </div>
        </a>
      <?php } ?>
    </div>
  </div>
</header>

<!-- Bootstrap: Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content popup border-0">
      <div class="modal-header border-bottom-0">
        <button type="button" class="btn-close popup__close-button" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="popup__header">
        <div class="popup__title">
          Waar ben je naar op zoek?
        </div>
      </div>
      <div class="popup__text">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent <br />
        luctus velit id ex vestibulum, in tristique risus tincidunt.
      </div>
      <form action="/search-results" class="popup__form">
        <div class="popup__input-border">
          <input type="text" name="search" id="search" class="popup__input" placeholder="Ik ben op zoek naar ..." disabled>
        </div>
        <div class="popup__button-border">
          <button class="popup__button">
            Zoeken
          </button>
        </div>
      </form>
    </div>
  </div>
</div>

<main>