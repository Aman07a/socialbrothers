<?php
/*
Template Name: Custom Search Results
*/

defined('ABSPATH') || exit('Forbidden');

get_header();
?>

<!-- Medium Width Banner -->
<div class="sm-w-banner">
    <div class="image-container">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/215d1c7002ed987517e77ded5f92d0e6489e9f01.jpg'; ?>" alt="Image" class="img-fluid">
        <div class="search-banner-container">
            <div class="search-banner-cover">
                <h2 class="search-banner-title">Zoekresultaten</h2>
            </div>
        </div>
    </div>
</div>

Search Results

<?php

get_footer();
