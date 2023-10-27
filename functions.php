<?php defined('ABSPATH') || exit('Forbidden');

// Require theme files
require_once get_template_directory() . "/lib/init.php";

/**
 * Disable Gutenberg block editor
 * 
 * @see https://developer.wordpress.org/reference/hooks/use_block_editor_for_post/
 */
add_filter('use_block_editor_for_post', '__return_false', 10, 0);

function enqueue_bootstrap_css()
{
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/dist/bootstrap.min.css');
}
add_action('wp_enqueue_scripts', 'enqueue_bootstrap_css');

function create_custom_page()
{
    $page_slug = 'archive-blog';

    if (!get_page_by_path($page_slug)) {
        $page = array(
            'post_title'   => 'Archive Blog',
            'post_content' => 'This is the content of your custom page.',
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'post_name'    => $page_slug // Set the slug for your custom page
        );

        // Insert the page into the database
        wp_insert_post($page);
    }
}

function create_custom_page_on_theme_activation()
{
    create_custom_page();
}

add_action('after_switch_theme', 'create_custom_page_on_theme_activation');

function custom_page_rewrite_rule()
{
    $page_slug = 'archive-blog';

    add_rewrite_rule("$page_slug/?$", "index.php?pagename=$page_slug", 'top');
    add_rewrite_rule("$page_slug/$page_slug/?$", "index.php?pagename=$page_slug&template=$page_slug", 'top');
}

add_action('init', 'custom_page_rewrite_rule');

function custom_rewrite_rules()
{
    add_rewrite_rule('^blogs/([^/]+)/?$', 'index.php?pagename=blogs&blog_slug=$matches[1]', 'top');
}
add_action('init', 'custom_rewrite_rules');

function custom_rewrite_tag()
{
    add_rewrite_tag('%blog_slug%', '([^/]+)');
}
add_action('init', 'custom_rewrite_tag');
