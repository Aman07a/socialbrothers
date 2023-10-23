<?php defined('ABSPATH') || exit('Forbidden'); ?>

<header>
  <!-- Header Container -->
  <div class="container">
    <!-- 12 Columns -->
    <div class="row header__row">
      <div class="col header__col">
        <a href="/">
          <img class="header__logo" src="https://socialbrothers.nl/wp-content/uploads/2021/11/sb-logo.svg">
        </a>
      </div>
      <div class="col header__col"></div>
      <div class="col header__col"></div>
      <div class="col header__col"></div>
      <div class="col header__col"></div>
      <div class="col header__col"></div>
      <div class="col header__col"></div>
      <a href="/archive-blog" class="col header__col header__blog">
        Blog
      </a>
      <div class="col header__col header__events">
        Events
      </div>
      <div class="col header__col header__search">
        <button type="button" class="border-0 modal-button" data-bs-toggle="modal" data-bs-target="#exampleModal">
          <i class="fa-solid fa-magnifying-glass"></i>
        </button>
      </div>
      <?php if (is_user_logged_in()) { ?>
        <a href="<?php echo wp_logout_url(home_url('/')); ?>" class="col header__col header__border">
          <div class="header__border__login">
            Logout
          </div>
        </a>
      <?php } else { ?>
        <a href="login" class="col header__col header__border">
          <div class="header__border__login">
            Login
          </div>
        </a>
      <?php } ?>
      <div class="col header__col hidden">
      </div>
    </div>
  </div>
</header>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content popup-container border-0">
      <div class="modal-header border-bottom-0">
        <button type="button" class="btn-close popup-button-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="popup-header">
        <div class="popup-title">
          Waar ben je naar op zoek?
        </div>
      </div>
      <div class="popup-text">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent <br />
        luctus velit id ex vestibulum, in tristique risus tincidunt.
      </div>
      <form action="" class="popup-form">
        <div class="popup-input-border">
          <input type="text" name="search" id="search" class="popup-input" placeholder="Ik ben op zoek naar ..." disabled>
        </div>
        <div class="popup-button-border">
          <button class="popup-button">
            Zoeken
          </button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- <div class="popup-container">
  <div class="popup-header">
    <div class="popup-title">
      Waar ben je naar op zoek?
    </div>
    <div class="popup-button-close">
      <i class="fa-solid fa-x"></i>
    </div>
  </div>
  <div class="popup-text">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent <br />
    luctus velit id ex vestibulum, in tristique risus tincidunt.
  </div>
  <div class="popup-form">
    <div class="popup-input-border">
      <input type="text" name="search" id="search" class="popup-input" placeholder="Ik ben op zoek naar ..." disabled>
    </div>
    <div class="popup-button-border">
      <button class="popup-button">
        Zoeken
      </button>
    </div>
  </div>
</div> -->

<main>