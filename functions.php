<?php

defined('ABSPATH') || exit('Forbidden');

// Require theme files
require_once get_template_directory() . '/lib/init.php';

/*
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
        $page = [
            'post_title' => 'Archive Blog',
            'post_content' => 'This is the content of your custom page.',
            'post_status' => 'publish',
            'post_type' => 'page',
            'post_name' => $page_slug, // Set the slug for your custom page
        ];

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

function create_event_post_type()
{
    $labels = [
        'name' => _x('Events', 'post type general name', '_SBB'),
        'singular_name' => _x('Event', 'post type singular name', '_SBB'),
        'menu_name' => _x('Events', 'admin menu', '_SBB'),
        'name_admin_bar' => _x('Event', 'add new on admin bar', '_SBB'),
        'add_new' => _x('Add New', 'event', '_SBB'),
        'add_new_item' => __('Add New Event', '_SBB'),
        'new_item' => __('New Event', '_SBB'),
        'edit_item' => __('Edit Event', '_SBB'),
        'view_item' => __('View Event', '_SBB'),
        'all_items' => __('All Events', '_SBB'),
        'search_items' => __('Search Events', '_SBB'),
        'parent_item_colon' => __('Parent Events:', '_SBB'),
        'not_found' => __('No events found.', '_SBB'),
        'not_found_in_trash' => __('No events found in Trash.', '_SBB'),
    ];

    $args = [
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => ['slug' => 'events'],
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => ['title', 'editor', 'thumbnail'],
        'show_in_rest' => true,
        'taxonomies' => ['category', 'type'],
        'register_meta_box_cb' => 'add_event_date_metabox', // Callback function to add meta box
    ];

    register_post_type('event', $args);
}

// Callback function to add meta box for event_date
function add_event_date_metabox()
{
    add_meta_box(
        'event_date_metabox',
        __('Event Date', '_SBB'),
        'render_event_date_metabox',
        'event',
        'side',
        'default'
    );
}

// Callback function to render the content of the event_date meta box
function render_event_date_metabox($post)
{
    // Retrieve the current value of the event_date meta field
    $event_date = get_post_meta($post->ID, '_event_date', true);

    // Output the HTML input field
?>
    <label for="event_date"><?php _e('Event Date:', '_SBB'); ?></label>
    <input type="date" id="event_date" name="event_date" value="<?php echo esc_attr($event_date); ?>" />
<?php
}

// Save the meta box data
add_action('save_post_event', 'save_event_date_metabox');
function save_event_date_metabox($post_id)
{
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (isset($_POST['event_date'])) {
        update_post_meta($post_id, '_event_date', sanitize_text_field($_POST['event_date']));
    }
}

// Register the custom meta field for REST API
register_rest_field('event', 'event_date', [
    'get_callback' => 'get_event_date',
    'update_callback' => 'update_event_date',
    'schema' => null,
]);

// Callback function to get the value of the event_date field
function get_event_date($object, $field_name, $request)
{
    return get_post_meta($object['id'], '_event_date', true);
}

// Callback function to update the value of the event_date field
function update_event_date($value, $object, $field_name)
{
    if (is_string($value) && strtotime($value)) {
        update_post_meta($object->ID, '_event_date', $value);

        return true;
    }

    return false;
}

add_action('init', 'create_event_post_type');

function enable_tags_for_blog()
{
    register_taxonomy_for_object_type('post_tag', 'blog');
}
add_action('init', 'enable_tags_for_blog');

function enable_tags_for_event()
{
    register_taxonomy_for_object_type('post_tag', 'event');
}
add_action('init', 'enable_tags_for_event');

add_theme_support('menus');

register_nav_menus(array(
    'top-menu' => __('Top Menu', 'theme')
));
function add_class_li($classes, $item, $args)
{
    if (isset($args->li_class)) {
        $classes[] = $args->li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_class_li', 10, 3);
function add_anchor_class($attr, $item, $args)
{
    if (isset($args->a_class)) {
        $attr['class'] = $args->a_class;
    }
    return $attr;
}
add_filter('nav_menu_link_attributes', 'add_anchor_class', 10, 3);
