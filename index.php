<?php defined('ABSPATH') || exit('Forbidden');

get_header();

while (have_posts()) {
  the_post();
?>
  <!-- Main Container -->
  <div class="container-fluid">
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
  </div>
<?php
}

get_footer();
