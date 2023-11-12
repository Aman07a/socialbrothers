<?php defined('ABSPATH') || exit('Forbidden'); ?>

</main>

<footer class="container-fluid">
  <div class="container">
    <!-- Footer Menu -->
    <?php
    wp_nav_menu(array(
      'theme_location' => 'footer-menu',
      'menu_class'     => 'footer-menu navbar-nav',
      'container' => '',
      'li_class' => 'footer-item',
      'a_class' => 'footer-link',
    ));
    ?>
  </div>
</footer>