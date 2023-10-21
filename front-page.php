<?php defined('ABSPATH') || exit('Forbidden');

get_header();

while (have_posts()) {
    the_post();
?>
    <div class="main">
        <div class="container">
            <h1>Homes</h1>
        </div>
    </div>
<?php
}

get_footer();
