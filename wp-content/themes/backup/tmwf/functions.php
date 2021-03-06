<?php

if (!isset($content_width))
{
    $content_width = 900;
}

if (function_exists('add_theme_support'))
{
    // Add Menu Support
    add_theme_support('menus');

    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');
    add_image_size('large', 700, '', true); // Large Thumbnail
    add_image_size('medium', 250, '', true); // Medium Thumbnail
    add_image_size('small', 120, '', true); // Small Thumbnail
    add_image_size('custom-size', 700, 200, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');

    // Add Support for Custom Backgrounds - Uncomment below if you're going to use
    /*add_theme_support('custom-background', array(
	'default-color' => 'FFF',
	'default-image' => get_template_directory_uri() . '/img/bg.jpg'
    ));*/

    // Add Support for Custom Header - Uncomment below if you're going to use
    /*add_theme_support('custom-header', array(
	'default-image'			=> get_template_directory_uri() . '/img/headers/default.jpg',
	'header-text'			=> false,
	'default-text-color'		=> '000',
	'width'				=> 1000,
	'height'			=> 198,
	'random-default'		=> false,
	'wp-head-callback'		=> $wphead_cb,
	'admin-head-callback'		=> $adminhead_cb,
	'admin-preview-callback'	=> $adminpreview_cb
    ));*/

    // Enables post and comment RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Localisation Support
    load_theme_textdomain('html5blank', get_template_directory() . '/languages');
}

/*------------------------------------*\
	Functions
\*------------------------------------*/

// HTML5 Blank navigation
function html5blank_nav()
{
	wp_nav_menu(
	array(
		'theme_location'  => 'header-menu',
		'menu'            => '',
		'container'       => 'div',
		'container_class' => 'menu-{menu slug}-container',
		'container_id'    => '',
		'menu_class'      => 'menu',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul>%3$s</ul>',
		'depth'           => 0,
		'walker'          => ''
		)
	);
}

function aboutus_nav()
{
	wp_nav_menu(
	array(
		'theme_location'  => 'extra-menu',
		'menu'            => '',
		'container'       => 'div',
		'container_class' => 'menu-{menu slug}-container',
		'container_id'    => '',
		'menu_class'      => 'menu',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul>%3$s</ul>',
		'depth'           => 0,
		'walker'          => ''
		)
	);
}

function events_nav()
{
	wp_nav_menu(
	array(
		'theme_location'  => 'events-menu',
		'menu'            => '',
		'container'       => 'div',
		'container_class' => 'menu-{menu slug}-container',
		'container_id'    => '',
		'menu_class'      => 'menu',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul>%3$s</ul>',
		'depth'           => 0,
		'walker'          => ''
		)
	);
}

function get_involved_menu()
{
	wp_nav_menu(
	array(
		'theme_location'  => 'get-involved',
		'menu'            => '',
		'container'       => 'div',
		'container_class' => 'menu-{menu slug}-container',
		'container_id'    => '',
		'menu_class'      => 'menu',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul>%3$s</ul>',
		'depth'           => 0,
		'walker'          => ''
		)
	);
}


function custom_events_menu() {
  register_nav_menu('events-menu',__( 'Events menu' ));
}
add_action( 'init', 'custom_events_menu' );

function custom_get_involved_menu() {
    register_nav_menu('get-involved',__( 'Get involved menu' ));
  }
  add_action( 'init', 'custom_get_involved_menu' );

// Load HTML5 Blank scripts (header.php)
function html5blank_header_scripts()
{
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {

    	wp_register_script('conditionizr', get_template_directory_uri() . '/js/lib/conditionizr-4.3.0.min.js', array(), '4.3.0'); // Conditionizr
        wp_enqueue_script('conditionizr'); // Enqueue it!

        wp_register_script('modernizr', get_template_directory_uri() . '/js/lib/modernizr-2.7.1.min.js', array(), '2.7.1'); // Modernizr
        wp_enqueue_script('modernizr'); // Enqueue it!

        wp_register_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.0'); // Custom scripts
        wp_enqueue_script('scripts'); // Enqueue it!

        wp_register_script('owlscripts', get_template_directory_uri() . '/js/lib/owl.carousel.min.js', array('jquery'), '1.0.0'); // Owl scripts
        wp_enqueue_script('owlscripts'); // Enqueue it!

        wp_register_script('fontawesome', 'https://kit.fontawesome.com/2071e14eb3.js', array('jquery'), '1.0.0'); // Font awesome
        wp_enqueue_script('fontawesome'); // Enqueue it!

        wp_register_script('lightboxscripts', get_template_directory_uri() . '/js/lib/lightbox-plus-jquery.min.js', array('jquery'), '2.11.1'); // LightBox
        wp_enqueue_script('lightboxscripts'); // Enqueue it!

        wp_register_script('isotope', get_template_directory_uri() . '/js/lib/isotope.pkgd.min.js', array('jquery'), '3.0.6'); // Isotope
        wp_enqueue_script('isotope'); // Enqueue it!

        wp_register_script('il', get_template_directory_uri() . '/js/lib/imagesloaded.pkgd.min.js', array('jquery'), '4.1.4'); // Imagesloaded
        wp_enqueue_script('il'); // Enqueue it!

    }
}

// Load HTML5 Blank conditional scripts
function html5blank_conditional_scripts()
{
    if (is_page('pagenamehere')) {
        wp_register_script('scriptname', get_template_directory_uri() . '/js/scriptname.js', array('jquery'), '1.0.0'); // Conditional script(s)
        wp_enqueue_script('scriptname'); // Enqueue it!
    }
}

// Load HTML5 Blank styles
function html5blank_styles()
{
    wp_register_style('normalize', get_template_directory_uri() . '/normalize.css', array(), '1.0', 'all');
    wp_enqueue_style('normalize'); // Enqueue it!

    wp_register_style('default', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
    wp_enqueue_style('default'); // Enqueue it!

    wp_register_style('styles', get_template_directory_uri() . '/css/styles.css', array(), '1.0', 'all');
    wp_enqueue_style('styles'); // Enqueue it!

    wp_register_style('owlmin', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), '1.0', 'all');
    wp_enqueue_style('owlmin'); // Enqueue it!

    wp_register_style('owldefault', get_template_directory_uri() . '/css/owl.theme.default.min.css', array(), '1.0', 'all');
    wp_enqueue_style('owldefault'); // Enqueue it!

    wp_register_style('lightbox', get_template_directory_uri() . '/css/lightbox.min.css', array(), '2.11.1', 'all');
    wp_enqueue_style('lightbox'); // Enqueue it!

}

// Register HTML5 Blank Navigation
function register_html5_menu()
{
    register_nav_menus(array( // Using array to specify more menus if needed
        'header-menu' => __('Header Menu', 'html5blank'), // Main Navigation
        'sidebar-menu' => __('Sidebar Menu', 'html5blank'), // Sidebar Navigation
        'extra-menu' => __('Extra Menu', 'html5blank') // Extra Navigation if needed (duplicate as many as you need!)
    ));
}

// Remove the <div> surrounding the dynamic navigation to cleanup markup
function my_wp_nav_menu_args($args = '')
{
    $args['container'] = false;
    return $args;
}

// Remove Injected classes, ID's and Page ID's from Navigation <li> items
function my_css_attributes_filter($var)
{
    return is_array($var) ? array() : '';
}

// Remove invalid rel attribute values in the categorylist
function remove_category_rel_from_category_list($thelist)
{
    return str_replace('rel="category tag"', 'rel="tag"', $thelist);
}

// Add page slug to body class, love this - Credit: Starkers Wordpress Theme
function add_slug_to_body_class($classes)
{
    global $post;
    if (is_home()) {
        $key = array_search('blog', $classes);
        if ($key > -1) {
            unset($classes[$key]);
        }
    } elseif (is_page()) {
        $classes[] = sanitize_html_class($post->post_name);
    } elseif (is_singular()) {
        $classes[] = sanitize_html_class($post->post_name);
    }

    return $classes;
}

// If Dynamic Sidebar Exists
if (function_exists('register_sidebar'))
{
    // Define Sidebar Widget Area 1
    register_sidebar(array(
        'name' => __('Widget Area 1', 'html5blank'),
        'description' => __('Description for this widget-area...', 'html5blank'),
        'id' => 'widget-area-1',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    // Define Sidebar Widget Area 2
    register_sidebar(array(
        'name' => __('Widget Area 2', 'html5blank'),
        'description' => __('Description for this widget-area...', 'html5blank'),
        'id' => 'widget-area-2',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}

// Remove wp_head() injected Recent Comment styles
function my_remove_recent_comments_style()
{
    global $wp_widget_factory;
    remove_action('wp_head', array(
        $wp_widget_factory->widgets['WP_Widget_Recent_Comments'],
        'recent_comments_style'
    ));
}

// Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
function html5wp_pagination()
{
    global $wp_query;
    $big = 999999999;
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages
    ));
}

// Custom Excerpts
function html5wp_index($length) // Create 20 Word Callback for Index page Excerpts, call using html5wp_excerpt('html5wp_index');
{
    return 20;
}

// Create 40 Word Callback for Custom Post Excerpts, call using html5wp_excerpt('html5wp_custom_post');
function html5wp_custom_post($length)
{
    return 40;
}

// Create the Custom Excerpts callback
function html5wp_excerpt($length_callback = '', $more_callback = '')
{
    global $post;
    if (function_exists($length_callback)) {
        add_filter('excerpt_length', $length_callback);
    }
    if (function_exists($more_callback)) {
        add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>' . $output . '</p>';
    echo $output;
}

// Custom View Article link to Post
function html5_blank_view_article($more)
{
    global $post;
    return '... <a class="view-article" href="' . get_permalink($post->ID) . '">' . __('View Article', 'html5blank') . '</a>';
}

// Remove Admin bar
function remove_admin_bar()
{
    return false;
}

// Remove 'text/css' from our enqueued stylesheet
function html5_style_remove($tag)
{
    return preg_replace('~\s+type=["\'][^"\']++["\']~', '', $tag);
}

// Remove thumbnail width and height dimensions that prevent fluid images in the_thumbnail
function remove_thumbnail_dimensions( $html )
{
    $html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
    return $html;
}

// Custom Gravatar in Settings > Discussion
function html5blankgravatar ($avatar_defaults)
{
    $myavatar = get_template_directory_uri() . '/img/gravatar.jpg';
    $avatar_defaults[$myavatar] = "Custom Gravatar";
    return $avatar_defaults;
}

// Threaded Comments
function enable_threaded_comments()
{
    if (!is_admin()) {
        if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
            wp_enqueue_script('comment-reply');
        }
    }
}

// Custom Comments Callback
function html5blankcomments($comment, $args, $depth)
{
	$GLOBALS['comment'] = $comment;
	extract($args, EXTR_SKIP);

	if ( 'div' == $args['style'] ) {
		$tag = 'div';
		$add_below = 'comment';
	} else {
		$tag = 'li';
		$add_below = 'div-comment';
	}
?>
<!-- heads up: starting < for the html tag (li or div) in the next line: -->
<<?php echo $tag ?> <?php comment_class(empty( $args['has_children'] ) ? '' : 'parent') ?>
    id="comment-<?php comment_ID() ?>">
    <?php if ( 'div' != $args['style'] ) : ?>
    <div id="div-comment-<?php comment_ID() ?>" class="comment-body">
        <?php endif; ?>
        <div class="comment-author vcard">
            <?php if ($args['avatar_size'] != 0) echo get_avatar( $comment, $args['180'] ); ?>
            <?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>
        </div>
        <?php if ($comment->comment_approved == '0') : ?>
        <em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.') ?></em>
        <br />
        <?php endif; ?>

        <div class="comment-meta commentmetadata"><a
                href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">
                <?php
			printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'),'  ','' );
		?>
        </div>

        <?php comment_text() ?>

        <div class="reply">
            <?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
        </div>
        <?php if ( 'div' != $args['style'] ) : ?>
    </div>
    <?php endif; ?>
    <?php }


// ACF first request
function acf_loadmore( $field, $ppp, $current, $template ) {

	if( $field && $ppp ){

		// get array with all reapeter items
		$queryField = get_sub_field($field);
		// count items
		$count = count($queryField);
		// count pages
		$pages = ceil($count / $ppp);
		// limit array by calculate ppp with current page
		$last = $ppp * ($current + 1 );
		// start array depending on the current page
		$start = $last - $ppp;

		if ( $count >= $ppp ) {

			echo '<script>var maxpage = '.$pages.'</script>';

			$fieldArray = array_slice($queryField, $start, $last);

			if( $fieldArray ) : foreach( $fieldArray as $item ) :
		
				include(locate_template('sections/'.$template.'.php'));

			endforeach; endif;

		}else {
            echo '<script>var maxpage = '.$pages.'</script>';

			$fieldArray = array_slice($queryField, $start, $last);

			if( $fieldArray ) : foreach( $fieldArray as $item ) :
		
				include(locate_template('sections/'.$template.'.php'));

			endforeach; endif;
        }

	}

}

// ACF Repeater Load More
add_action('wp_ajax_request_loadmore', 'request_loadmore');
add_action('wp_ajax_nopriv_request_loadmore', 'request_loadmore');
function request_loadmore(){

	$field = $_POST['field'];
	$ppp = $_POST['postcount'];
	$current = $_POST['currentpage'];
	$template = $_POST['template'];
	$pageid = $_POST['pageid'];
	
	// get array with all reapeter items
	$queryField = get_field($field, $pageid);
	// count items
	$count = count($queryField);
	// count pages
	$pages = $count / $ppp;
	// limit array by calculate ppp with current page
	$last = $ppp * ($current + 1 );
	// start array depending on the current page
	$start = $last - $ppp;

	if ( $count > $ppp ) {

		$fieldArray = array_slice($queryField, $start, $last);

		if( $fieldArray ) : foreach( $fieldArray as $item ) :
	
			include(locate_template('sections/'.$template.'.php'));

		endforeach; endif;

	}

	if ( ($current + 1) == $pages ){
		//remove button
	}

	die();

}

// ACF selection
add_action('wp_ajax_request_gallery', 'request_gallery');
add_action('wp_ajax_nopriv_request_gallery', 'request_gallery');
function request_gallery(){

    $gallery = $_POST['gallery'];
    $ajax = 1;
    
    include(locate_template('sections/section-gallery.php'));
    
    die();

}

/*------------------------------------*\
	Actions + Filters + ShortCodes
\*------------------------------------*/

// Add Actions
add_action('init', 'html5blank_header_scripts'); // Add Custom Scripts to wp_head
add_action('wp_print_scripts', 'html5blank_conditional_scripts'); // Add Conditional Page Scripts
add_action('get_header', 'enable_threaded_comments'); // Enable Threaded Comments
add_action('wp_enqueue_scripts', 'html5blank_styles'); // Add Theme Stylesheet
add_action('init', 'register_html5_menu'); // Add HTML5 Blank Menu
add_action('init', 'create_post_type_trustees'); // Add trustees custom post type
add_action('init', 'create_post_type_patrons'); // Add patrons custom post type
add_action('init', 'create_post_type_partners'); // Add partners custom post type
add_action('init', 'create_post_type_leaderboards'); // Add leaderboards custom post type
add_action('init', 'create_post_type_annualreviews'); // Add leaderboards custom post type
add_action('widgets_init', 'my_remove_recent_comments_style'); // Remove inline Recent Comment Styles from wp_head()
add_action('init', 'html5wp_pagination'); // Add our HTML5 Pagination

// Remove Actions
remove_action('wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
remove_action('wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
remove_action('wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action('wp_head', 'wlwmanifest_link'); // Display the link to the Windows Live Writer manifest file.
remove_action('wp_head', 'index_rel_link'); // Index link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // Prev link
remove_action('wp_head', 'start_post_rel_link', 10, 0); // Start link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // Display relational links for the posts adjacent to the current post.
remove_action('wp_head', 'wp_generator'); // Display the XHTML generator that is generated on the wp_head hook, WP version
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

// Add Filters
add_filter('avatar_defaults', 'html5blankgravatar'); // Custom Gravatar in Settings > Discussion
add_filter('body_class', 'add_slug_to_body_class'); // Add slug to body class (Starkers build)
add_filter('widget_text', 'do_shortcode'); // Allow shortcodes in Dynamic Sidebar
add_filter('widget_text', 'shortcode_unautop'); // Remove <p> tags in Dynamic Sidebars (better!)
add_filter('wp_nav_menu_args', 'my_wp_nav_menu_args'); // Remove surrounding <div> from WP Navigation
// add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected classes (Commented out by default)
// add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected ID (Commented out by default)
// add_filter('page_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> Page ID's (Commented out by default)
add_filter('the_category', 'remove_category_rel_from_category_list'); // Remove invalid rel attribute
add_filter('the_excerpt', 'shortcode_unautop'); // Remove auto <p> tags in Excerpt (Manual Excerpts only)
add_filter('the_excerpt', 'do_shortcode'); // Allows Shortcodes to be executed in Excerpt (Manual Excerpts only)
add_filter('excerpt_more', 'html5_blank_view_article'); // Add 'View Article' button instead of [...] for Excerpts
add_filter('show_admin_bar', 'remove_admin_bar'); // Remove Admin bar
add_filter('style_loader_tag', 'html5_style_remove'); // Remove 'text/css' from enqueued stylesheet
add_filter('post_thumbnail_html', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to thumbnails
add_filter('image_send_to_editor', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to post images

// Remove Filters
remove_filter('the_excerpt', 'wpautop'); // Remove <p> tags from Excerpt altogether

// Shortcodes
add_shortcode('html5_shortcode_demo', 'html5_shortcode_demo'); // You can place [html5_shortcode_demo] in Pages, Posts now.
add_shortcode('html5_shortcode_demo_2', 'html5_shortcode_demo_2'); // Place [html5_shortcode_demo_2] in Pages, Posts now.

// Shortcodes above would be nested like this -
// [html5_shortcode_demo] [html5_shortcode_demo_2] Here's the page title! [/html5_shortcode_demo_2] [/html5_shortcode_demo]

/*------------------------------------*\
	Custom Post Types
\*------------------------------------*/

// Trustees custom post type
function create_post_type_trustees()
{
    register_taxonomy_for_object_type('category', 'trustees'); // Register Taxonomies for Category
    register_taxonomy_for_object_type('post_tag', 'trustees');
    register_post_type('trustees', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('Trustees', 'trustees'), // Rename these to suit
            'singular_name' => __('Trustees', 'trustees'),
            'add_new' => __('Add New', 'trustees'),
            'add_new_item' => __('Add New Trustees', 'trustees'),
            'edit' => __('Edit', 'trustees'),
            'edit_item' => __('Edit Trustees', 'trustees'),
            'new_item' => __('New Trustees', 'trustees'),
            'view' => __('View Trustees', 'trustees'),
            'view_item' => __('View Trustees', 'trustees'),
            'search_items' => __('Search Trustees', 'trustees'),
            'not_found' => __('No Trustees found', 'trustees'),
            'not_found_in_trash' => __('No Trustees found in Trash', 'trustees')
        ),
        'public' => true,
        'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => true,
        'supports' => array(
            'title',
            'editor',
            'thumbnail',
            'excerpt',
        ), // Go to Dashboard Custom HTML5 Blank post for supports
        'can_export' => true, // Allows export in Tools > Export
        'taxonomies' => array(
            'post_tag',
            'category'
        ) // Add Category and Post Tags support
    ));
}

// Patrons custom post type
function create_post_type_patrons()
{
    register_taxonomy_for_object_type('category', 'patrons'); // Register Taxonomies for Category
    register_taxonomy_for_object_type('post_tag', 'patrons');
    register_post_type('patrons', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('Patrons', 'patrons'), // Rename these to suit
            'singular_name' => __('Patrons', 'patrons'),
            'add_new' => __('Add New', 'patrons'),
            'add_new_item' => __('Add New Patrons', 'patrons'),
            'edit' => __('Edit', 'patrons'),
            'edit_item' => __('Edit Patrons', 'patrons'),
            'new_item' => __('New Patrons', 'patrons'),
            'view' => __('View Patrons', 'patrons'),
            'view_item' => __('View Patrons', 'patrons'),
            'search_items' => __('Search Patrons', 'patrons'),
            'not_found' => __('No Patrons found', 'patrons'),
            'not_found_in_trash' => __('No Patrons found in Trash', 'patrons')
        ),
        'public' => true,
        'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => true,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail'
        ), // Go to Dashboard Custom HTML5 Blank post for supports
        'can_export' => true, // Allows export in Tools > Export
        'taxonomies' => array(
            'post_tag',
            'category'
        ) // Add Category and Post Tags support
    ));
}

// Partners custom post type
function create_post_type_partners()
{
    register_taxonomy_for_object_type('category', 'partners'); // Register Taxonomies for Category
    register_taxonomy_for_object_type('post_tag', 'partners');
    register_post_type('partners', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('Partners', 'partners'), // Rename these to suit
            'singular_name' => __('Partners', 'partners'),
            'add_new' => __('Add New', 'partners'),
            'add_new_item' => __('Add New Partners', 'partners'),
            'edit' => __('Edit', 'partners'),
            'edit_item' => __('Edit Partners', 'partners'),
            'new_item' => __('New Partners', 'partners'),
            'view' => __('View Partners', 'partners'),
            'view_item' => __('View Partners', 'partners'),
            'search_items' => __('Search Partners', 'partners'),
            'not_found' => __('No Partners found', 'partners'),
            'not_found_in_trash' => __('No Partners found in Trash', 'partners')
        ),
        'public' => true,
        'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => true,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail'
        ), // Go to Dashboard Custom HTML5 Blank post for supports
        'can_export' => true, // Allows export in Tools > Export
        'taxonomies' => array(
            'post_tag',
            'category'
        ) // Add Category and Post Tags support
    ));
}

// Trustees custom post type
function create_post_type_leaderboards()
{
    register_taxonomy_for_object_type('category', 'leaderboards'); // Register Taxonomies for Category
    register_taxonomy_for_object_type('post_tag', 'leaderboards');
    register_post_type('leaderboards', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('Leaderboards', 'leaderboards'), // Rename these to suit
            'singular_name' => __('Leaderboards', 'leaderboards'),
            'add_new' => __('Add New', 'leaderboards'),
            'add_new_item' => __('Add New leaderboards', 'leaderboards'),
            'edit' => __('Edit', 'leaderboards'),
            'edit_item' => __('Edit Leaderboards', 'leaderboards'),
            'new_item' => __('New Leaderboards', 'leaderboards'),
            'view' => __('View Leaderboards', 'leaderboards'),
            'view_item' => __('View Leaderboards', 'leaderboards'),
            'search_items' => __('Search Leaderboards', 'leaderboards'),
            'not_found' => __('No Leaderboards found', 'leaderboards'),
            'not_found_in_trash' => __('No Leaderboards found in Trash', 'leaderboards')
        ),
        'public' => true,
        'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => true,
        'supports' => array(
            'title',
        ), // Go to Dashboard Custom HTML5 Blank post for supports
        'can_export' => true, // Allows export in Tools > Export
        'taxonomies' => array(
            'post_tag',
            'category'
        ) // Add Category and Post Tags support
    ));
}

// Annual Reviews custom post type
function create_post_type_annualreviews()
{
    register_taxonomy_for_object_type('category', 'annualreviews'); // Register Taxonomies for Category
    register_taxonomy_for_object_type('post_tag', 'annualreviews');
    register_post_type('annualreviews', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('Annual Reviews', 'annualreviews'), // Rename these to suit
            'singular_name' => __('Annual Reviews', 'annualreviews'),
            'add_new' => __('Add New', 'leaderboards'),
            'add_new_item' => __('Add New leaderboards', 'annualreviews'),
            'edit' => __('Edit', 'leaderboards'),
            'edit_item' => __('Edit Annual Reviews', 'annualreviews'),
            'new_item' => __('New Annual Reviews', 'annualreviews'),
            'view' => __('View Annual Reviews', 'annualreviews'),
            'view_item' => __('View Annual Reviews', 'annualreviews'),
            'search_items' => __('Search Annual Reviews', 'annualreviews'),
            'not_found' => __('No Annual Reviews found', 'annualreviews'),
            'not_found_in_trash' => __('No Annual Reviews found in Trash', 'annualreviews')
        ),
        'public' => true,
        'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => true,
        'supports' => array(
            'title',
            'thumbnail'
        ), // Go to Dashboard Custom HTML5 Blank post for supports
        'can_export' => true, // Allows export in Tools > Export
        'taxonomies' => array(
            'post_tag',
            'category'
        ) // Add Category and Post Tags support
    ));
}

/*------------------------------------*\
	ShortCode Functions
\*------------------------------------*/

// Shortcode Demo with Nested Capability
function html5_shortcode_demo($atts, $content = null)
{
    return '<div class="shortcode-demo">' . do_shortcode($content) . '</div>'; // do_shortcode allows for nested Shortcodes
}

// Shortcode Demo with simple <h2> tag
function html5_shortcode_demo_2($atts, $content = null) // Demo Heading H2 shortcode, allows for nesting within above element. Fully expandable.
{
    return '<h2>' . $content . '</h2>';
}

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}

function new_excerpt_more($more) {
    global $post;
    remove_filter('excerpt_more', 'new_excerpt_more'); 
    return '';
    }
    add_filter('excerpt_more','new_excerpt_more',11);
    
    function tn_custom_excerpt_length( $length ) {
    return 15;
    }
    add_filter( 'excerpt_length', 'tn_custom_excerpt_length', 999 );
    
    function misha_my_load_more_scripts() {
     
        global $wp_query; 
     
        // In most cases it is already included on the page and this line can be removed
        wp_enqueue_script('jquery');
     
        // register our main script but do not enqueue it yet
        //wp_register_script( 'my_loadmore', get_stylesheet_directory_uri() . '/myloadmore.js', array('jquery') );
     
        // now the most interesting part
        // we have to pass parameters to myloadmore.js script but we can get the parameters values only in PHP
        // you can define variables directly in your HTML but I decided that the most proper way is wp_localize_script()
        wp_localize_script( 'jquery', 'misha_loadmore_params', array(
            'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php', // WordPress AJAX
            'posts' => json_encode( $wp_query->query_vars ), // everything about your loop is here
            'current_page' => get_query_var( 'paged' ) ? get_query_var('paged') : 1,
            'max_page' => $wp_query->max_num_pages
        ) );
     
         wp_enqueue_script( 'my_loadmore' );
    }
     
    add_action( 'wp_enqueue_scripts', 'misha_my_load_more_scripts' );
    
    function misha_loadmore_ajax_handler(){
     
        // prepare our arguments for the query
        $args = json_decode( stripslashes( $_POST['query'] ), true );
        $args['paged'] = $_POST['page'] + 1; // we need next page to be loaded
        $args['post_status'] = 'publish';
     
        // it is always better to use WP_Query but not here
        query_posts( $args );
     
        if( have_posts() ) :
     
            // run the loop
            while( have_posts() ): the_post();
     
                // look into your theme code how the posts are inserted, but you can use your own HTML of course
                // do you remember? - my example is adapted for Twenty Seventeen theme
                get_template_part( 'sections/news-single');
                // for the test purposes comment the line above and uncomment the below one
                // the_title();
     
     
            endwhile;
     
        endif;
        die; // here we exit the script and even no wp_reset_query() required!
    }
     
     
     
    add_action('wp_ajax_loadmore', 'misha_loadmore_ajax_handler'); // wp_ajax_{action}
    add_action('wp_ajax_nopriv_loadmore', 'misha_loadmore_ajax_handler'); // wp_ajax_nopriv_{action}

?>