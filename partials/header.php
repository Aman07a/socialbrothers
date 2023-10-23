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
        <i class="fa-solid fa-magnifying-glass"></i>
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

<main>