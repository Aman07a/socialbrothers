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

<div class="container">
    <div class="search-results-header"></div>
    <form action="#search-results?search=development" class="search-results-form">
        <div class="search-results-input-border">
            <input type="text" name="search" id="search" class="search-results-input" placeholder="development" disabled>
        </div>
        <div class="search-results-button-border">
            <button class="search-results-button">
                Zoeken
            </button>
        </div>
    </form>

    <div class="search-results-header">
        <div class="search-results-title">
            Alle zoekresultaten voor “development”
        </div>
    </div>

    <div class="search-results-text">
        7 resultaten
    </div>
</div>

Search Results

<?php

get_footer();
