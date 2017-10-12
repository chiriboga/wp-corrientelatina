<?php
/**
 * CorrienteLatina functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package CorrienteLatina
 */

if ( ! function_exists( 'corrientelatina_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function corrientelatina_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on CorrienteLatina, use a find and replace
	 * to change 'corrientelatina' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'corrientelatina', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'corrientelatina' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'corrientelatina_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'corrientelatina_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function corrientelatina_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'corrientelatina_content_width', 640 );
}
add_action( 'after_setup_theme', 'corrientelatina_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function corrientelatina_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'corrientelatina' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'corrientelatina' ),
        'class'         => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
    register_sidebar( array(
		'name' => 'Footer Sidebar 1',
		'id' => 'footer-sidebar-1',
		'description' => 'Appears in the footer area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => 'Footer Sidebar 2',
		'id' => 'footer-sidebar-2',
		'description' => 'Appears in the footer area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => 'Footer Sidebar 3',
		'id' => 'footer-sidebar-3',
		'description' => 'Appears in the footer area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
  register_sidebar( array(
		'name' => 'Homepage Sidebar',
		'id' => 'homepage-sidebar',
		'description' => 'Appears ONLY on the homepage',
    'class'         => 'cl-homepage-sidebar',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
  register_sidebar( array(
		'name' => 'Search Sidebar',
		'id' => 'search-sidebar',
		'description' => 'Appears ONLY on the Search Pages',
    'class'         => 'cl-search',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => 'Page Sidebar',
		'id' => 'page-sidebar',
		'description' => 'Appears ONLY on the Actual Pages',
    'class'         => 'cl-pages',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}
add_action( 'widgets_init', 'corrientelatina_widgets_init' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Add new image sizes to the theme
 */
add_image_size( 'corrientelatina-800', 1000, 500, true );
add_image_size( 'corrientelatina-800', 800, 400, true );
add_image_size( 'corrientelatina-800', 600, 300, true );
add_image_size( 'corrientelatina-325', 325, 170, true );
add_image_size( 'corrientelatina-480', 480, 250, true );
add_image_size( 'corrientelatina-545', 545, 273, true );
add_image_size( 'corrientelatina-335', 335, 168, true );
add_image_size( 'corrientelatina-280', 280, 140, true );
add_image_size( 'corrientelatina-220', 220, 115, true );

/**
 * Add new image sizes to the media dropdown box
 */
add_filter( 'image_size_names_choose', 'corrientelatina_custom_image_sizes' );

function corrientelatina_custom_image_sizes( $sizes ) {
    return array_merge( $sizes, array(
        'corrientelatina-785' => __('1000px by 500px'),
        'corrientelatina-785' => __('800px by 400px'),
		'corrientelatina-785' => __('600px by 300px'),
        'corrientelatina-480' => __('480px by 250px'),
		'corrientelatina-325' => __('325px by 170px'),
		'corrientelatina-545' => __('545px by 273px'),
		'corrientelatina-335' => __('335px by 168px'),
		'corrientelatina-280' => __('280px by 140px'),
		'corrientelatina-220' => __('220px by 115px'),
    ) );
}


/**
 * IF there is no featured image, it will be able to grab the first image within the content and use that.
 */
function catch_that_image() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches [1] [0];

  if(empty($first_img)){ //Defines a default image
    $first_img = get_site_url()."/wp-content/uploads/2015/09/no-image-found.jpg";
  }
  return $first_img;
}




function search_filter($query) {
  if ( !is_admin() && $query->is_main_query() ) {
    if ($query->is_search) {
      $query->set('post_type', array( 'post','page','artist','music','video','picture' ) );
    }
  }
}

add_action('pre_get_posts','search_filter');

function modify_contact_methods($profile_fields) {

	// Add new fields
	$profile_fields['facebook'] = 'Facebook URL';
	$profile_fields['twitter'] = 'Twitter Username (no @)';
	$profile_fields['youtube'] = 'Youtube URL';
	$profile_fields['gplus'] = 'Google+ URL';
	$profile_fields['pinterest'] = 'Pinterest URL';
	$profile_fields['soundcloud'] = 'Soundcloud URL';
	$profile_fields['instagram'] = 'Instagram URL';
	return $profile_fields;
}
add_filter('user_contactmethods', 'modify_contact_methods');

function contributors() {
	global $wpdb;

	$authors = $wpdb->get_results("SELECT ID, user_nicename from $wpdb->users WHERE display_name <> 'admin' AND ID !='2' ORDER BY display_name");

	foreach ($authors as $author )
	{
		$avatar = get_avatar( $author->ID, 200, null, null, array('class' => array('img-rounded') ) );
		if(get_the_author_meta('twitter', $author->ID)){$twitter="<li class='twitter'><a target='_blank' href='//www.twitter.com/".get_the_author_meta('twitter', $author->ID)."'><i class='fa fa-twitter'></i> twitter</a></li>"; }
		else { $twitter = "";}
		if(get_the_author_meta('facebook', $author->ID)){$facebook = "<li class='facebook'><a target='_blank' href='".get_the_author_meta('facebook', $author->ID)."'><i class='fa fa-facebook'></i> facebook</a></li>"; }
		else{$facebook = "";}
		if(get_the_author_meta('youtube', $author->ID)){$youtube = "<li class='youtube'><a target='_blank' href='".get_the_author_meta('youtube', $author->ID)."'><i class='fa fa-youtube'></i> youtube</a></li>"; }
		else{$youtube = "";}
		if(get_the_author_meta('gplus', $author->ID)){$gplus = "<li class='googleplus'><a target='_blank' href='".get_the_author_meta('gplus', $author->ID)."'><i class='fa fa-google-plus'></i> gplus</a></li>"; }
		else{$gplus = "";}
		if(get_the_author_meta('pinterest', $author->ID)){$pinterest = "<li class='pinterest'><a target='_blank' href='".get_the_author_meta('pinterest', $author->ID)."'><i class='fa fa-pinterest'></i> pinterest</a></li>";}
		else{$pinterest = "";}
		if(get_the_author_meta('soundcloud', $author->ID)){$soundcloud = "<li class='soundcloud'><a target='_blank' href='".get_the_author_meta('soundcloud', $author->ID)."'><i class='fa fa-soundcloud'></i> soundcloud</a></li>";}
		else{$soundcloud = "";}
		if(get_the_author_meta('instagram', $author->ID)){$soundcloud = "<li class='soundcloud'><a target='_blank' href='".get_the_author_meta('instagram', $author->ID)."'><i class='fa fa-instagram'></i> soundcloud</a></li>";}
		else{$soundcloud = "";}




		$user = new WP_User( $author->ID );
		if ( !empty( $user->roles ) && is_array( $user->roles ) ) {
			foreach ( $user->roles as $role )
				$user_role = $role;
		}
		if( !empty( $user_role )  && ($user_role != "subscriber") )
		{
			echo "<div class='row'>";
				echo "<div class='col-lg-3 col-md-3 col-sm-3 col-xs-4'>";
					echo "<a class='thumbnail' href='".home_url()."/author/";
					the_author_meta('user_nicename', $author->ID);
					echo "'>";
					echo $avatar ;
					echo "</a>";
				echo "</div>";
				echo "<div class='col-lg-9 col-md-9 col-sm-9 col-xs-8'>";
						echo "<div class='title'>";
						echo "<a classs = 'thumbnail' href=\"".home_url()."/author/";
							the_author_meta('user_nicename', $author->ID);
						echo "/\">";
						echo "<h3 style='margin-left:0 !important;padding:0 10px 0 0 !important'>";
							the_author_meta('display_name', $author->ID);
						echo "</h3>";
						echo "</a>";
						echo "</div>";
						echo "<div class='social_profiles clearfix'>
								<ul class='list-inline'>
								".$twitter."".$facebook."".$youtube."".$gplus."".$pinterest."".$soundcloud."
								</ul>
							</div>
							";
					echo the_author_meta('user_description', $author->ID);
				echo "</div>";
			echo "</div>";
			echo "<div class='clear clearfix clear20'></div>";
		}
	}
}



function content_spot()  {

	$labels = array(
	'name'                       => _x( 'Content Spots', 'Taxonomy General Name', 'corrientelatina' ),
	'singular_name'              => _x( 'Content Spots', 'Taxonomy Singular Name', 'corrientelatina' ),
	'menu_name'                  => __( 'Content Spots', 'corrientelatina' ),
	'all_items'                  => __( 'All Spots', 'corrientelatina' ),
	'parent_item'                => __( 'Parent Type', 'corrientelatina' ),
	'parent_item_colon'          => __( 'Parent Type:', 'corrientelatina' ),
	'new_item_name'              => __( 'New Content Spot Name', 'corrientelatina' ),
	'add_new_item'               => __( 'Add New Content Spot', 'corrientelatina' ),
	'edit_item'                  => __( 'Edit Content Spot', 'corrientelatina' ),
	'update_item'                => __( 'Update Content Spot', 'corrientelatina' ),
	'separate_items_with_commas' => __( 'Separate Content Spots with commas', 'corrientelatina' ),
	'search_items'               => __( 'Search Content Spots', 'corrientelatina' ),
	'add_or_remove_items'        => __( 'Add or remove Content Spots', 'corrientelatina' ),
	'choose_from_most_used'      => __( 'Choose from the most used Content Spots', 'corrientelatina' ),
	);
	$rewrite = array(
		'slug'                       => 'content-spot',
		'with_front'                 => true,
		'hierarchical'               => true,
	);
	$args = array(
	'labels'                     => $labels,
	'hierarchical'               => true,
	'public'                     => true,
	'show_ui'                    => true,
	'show_admin_column'          => true,
	'show_in_nav_menus'          => true,
	'show_tagcloud'              => true,
	'query_var'                  => 'content_spot',
	'rewrite'                    => $rewrite,
	);
	register_taxonomy( 'content_spot', array( 'post' ), $args );

}

// Hook into the 'init' action
add_action( 'init', 'content_spot', 0 );





define ('EMPTY_TRASH_DAYS', 1);


add_action( 'inject_ads', function( $i ){
    if( 5 === $i % 6 )
    {
        echo '
        <hr/>
        <div class="well well-small" style="margin-bottom:0">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <h3 style="margin-top:10px">SIGN UP FOR OUR NEWSLETTER!</h3>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <a href="https://corrientelatina.com/newsletter/" class="btn btn-block btn-lg btn-info">Sign Up!</a>
                </div>
            </div>
        </div>
        ';
    }
});



// loading modernizr and jquery, and reply script
function corrientelatina_scripts_and_styles() {
	global $wp_styles; // call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way
	if (!is_admin()) {

		wp_register_style( 'bootstrap','https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', array(), false, 'all' ); // register bootstrap
		wp_register_style( 'font-awesome','https://use.fontawesome.com/f43c38078b.css', array(), '', 'all' ); // register font-awesome
		wp_register_style( 'corrientelatina-stylesheet-base', get_stylesheet_directory_uri() . '/style.css', array(), '', 'all' ); // register style.css
		wp_register_style( 'corrientelatina-stylesheet-custom', get_stylesheet_directory_uri() . '/css/corrientelatina.css', array(), '', 'all' ); // register main stylesheet
		wp_register_style( 'corrientelatina-google-font','https://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic,700italic', array(), '', 'all' ); // register main stylesheet

		//adding scripts file in the footer
		wp_register_script( 'corrientelatina-js-jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js', array(), '', false );
		wp_register_script( 'corrientelatina-js-bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array(), '', false );
        wp_register_script( 'corrientelatina-js-custom',get_template_directory_uri().'/js/corrientelatina.js', array(), '', false );
		// enqueue styles and scripts
		wp_enqueue_style( 'bootstrap' );
		wp_enqueue_style( 'font-awesome' );
		wp_enqueue_style( 'corrientelatina-stylesheet-base' );
		wp_enqueue_style( 'corrientelatina-google-font' );
		wp_enqueue_style( 'corrientelatina-stylesheet-custom' );
		wp_enqueue_script( 'corrientelatina-js-jquery' );
		wp_enqueue_script( 'corrientelatina-js-bootstrap' );
		wp_enqueue_script( 'corrientelatina-js-custom' );
	}
}
  add_action( 'wp_enqueue_scripts', 'corrientelatina_scripts_and_styles', 999 );



function add_async_attribute($tag, $handle) {
   // add script handles to the array below
   $scripts_to_async = array('corrientelatina-js-bootstrap','corrientelatina-js-custom');

   foreach($scripts_to_async as $async_script) {
      if ($async_script === $handle) {
         return str_replace(' src', ' async="async" src', $tag);
      }
   }
   return $tag;
}
add_filter('script_loader_tag', 'add_async_attribute', 10, 2);

// Remove WP Version From Styles
add_filter( 'style_loader_src', 'sdt_remove_ver_css_js', 9999 );
// Remove WP Version From Scripts
add_filter( 'script_loader_src', 'sdt_remove_ver_css_js', 9999 );

// Function to remove version numbers
function sdt_remove_ver_css_js( $src ) {
	if ( strpos( $src, 'ver=' ) )
		$src = remove_query_arg( 'ver', $src );
	return $src;
}

/* begin related posts function */
function ci_get_related_posts( $post_id, $related_count, $args = array() ) {
    $args = wp_parse_args( (array) $args, array(
        'orderby' => 'rand',
        'return'  => 'query', // Valid values are: 'query' (WP_Query object), 'array' (the arguments array)
    ) );

    $related_args = array(
        'post_type'      => get_post_type( $post_id ),
        'posts_per_page' => $related_count,
        'post_status'    => 'publish',
        'post__not_in'   => array( $post_id ),
        'orderby'        => $args['orderby'],
        'tax_query'      => array()
    );

    $post       = get_post( $post_id );
    $taxonomies = get_object_taxonomies( $post, 'names' );

    foreach ( $taxonomies as $taxonomy ) {
        $terms = get_the_terms( $post_id, $taxonomy );
        if ( empty( $terms ) ) {
            continue;
        }
        $term_list                   = wp_list_pluck( $terms, 'slug' );
        $related_args['tax_query'][] = array(
            'taxonomy' => $taxonomy,
            'field'    => 'slug',
            'terms'    => $term_list
        );
    }

    if ( count( $related_args['tax_query'] ) > 1 ) {
        $related_args['tax_query']['relation'] = 'OR';
    }

    if ( $args['return'] == 'query' ) {
        return new WP_Query( $related_args );
    } else {
        return $related_args;
    }
}
/* end related posts function */


function shapeSpace_feed_featured_image($content) {

	global $post;

	if (has_post_thumbnail($post->ID)) {
		$content = get_the_post_thumbnail($post->ID, array( 600, 300)) . $content;
	}

	return $content;

}
add_filter('the_excerpt_rss',  'shapeSpace_feed_featured_image');
add_filter('the_content_feed', 'shapeSpace_feed_featured_image');





function my_login_logo_one() {
echo '<style type="text/css">body.login div#login h1 a {background-image: url(https://pbs.twimg.com/profile_images/578748075923120128/GAaFb72p_400x400.jpeg); padding-bottom: 30px;}</style>';
}
add_action( 'login_enqueue_scripts', 'my_login_logo_one' );




function adcode_add_custom_user_profile_fields( $user ) {
?>
	<h3><?php _e('Author Ad Information', 'corrientelatina'); ?></h3>
	<table class="form-table">
		<tr>
			<th>
				<label for="ad_code"><?php _e('Ad Code', 'corrientelatina'); ?>
			</label></th>
			<td>
			    <textarea id="ad_code" name="ad_code" rows="5" cols="30"><?php echo esc_attr( get_the_author_meta( 'ad_code', $user->ID ) );?></textarea><br />
				<span class="description"><?php _e('Please use responsive ads.', 'corrientelatina'); ?></span>
			</td>
		</tr>
	</table>
<?php }

function adcode_save_custom_user_profile_fields( $user_id ) {

	if ( !current_user_can( 'edit_user', $user_id ) )
		return FALSE;

	update_usermeta( $user_id, 'ad_code', $_POST['ad_code'] );
}

add_action( 'show_user_profile', 'adcode_add_custom_user_profile_fields' );
add_action( 'edit_user_profile', 'adcode_add_custom_user_profile_fields' );

add_action( 'personal_options_update', 'adcode_save_custom_user_profile_fields' );
add_action( 'edit_user_profile_update', 'adcode_save_custom_user_profile_fields' );



/**
* Only keeps 3 Post revisions in Database
*/
define( 'WP_POST_REVISIONS', 3 );


/**
* REMOVE WP EMOJI
*/
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );


/**
 * Remove Wordpress Version Number
 */
function wpb_remove_version() {
return '';
}
add_filter('the_generator', 'wpb_remove_version');


/**
 * Add Custom Dashboard Widget
 */
add_action('wp_dashboard_setup', 'my_custom_dashboard_widgets');

function my_custom_dashboard_widgets() {
global $wp_meta_boxes;

wp_add_dashboard_widget('custom_help_widget', 'Theme Support', 'custom_dashboard_help');
}

function custom_dashboard_help() {
echo '<p>Welcome to the Avon Breast Cancer Crusade Theme! Need help? Contact the developer <a href="mailto:it@avonbcc.org">it@avonbcc.org</a></p>';
}


/**
 * Hide Login Errors
 */
function no_wordpress_errors(){
  return 'Something is wrong!';
}
add_filter( 'login_errors', 'no_wordpress_errors' );



/**
 * Remove Welcome Panel
 */
 remove_action('welcome_panel', 'wp_welcome_panel');


 /**
 * Enable shortcodes in text widgets
 */
add_filter( 'widget_text', 'shortcode_unautop' );
add_filter( 'widget_text', 'do_shortcode' );


 /**
 * Remove junk from head
 */
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);

/**
* Dequeue jQuery Migrate script in WordPress.
*/
function isa_remove_jquery_migrate( &$scripts) {
    if(!is_admin()) {
        $scripts->remove( 'jquery');
        $scripts->add( 'jquery', false, array( 'jquery-core' ), '1.12.4' );
    }
}
add_filter( 'wp_default_scripts', 'isa_remove_jquery_migrate' );

// Add Shortcode
function email_cloaking_shortcode( $atts ) {

	// Attributes
	$atts = shortcode_atts(
		array(
			'email' => '',
		),
		$atts,
		'cloak'
	);

	// Return cloaked email
	return antispambot( $atts['email'] );

}
add_shortcode( 'cloak', 'email_cloaking_shortcode' );





// Add Shortcode
function custom_shortcode_test() {

	$newsletter_code = '<strong>THE NEWSLETTER FORM SHOULD APPEAR HERE</strong>';
	return $newsletter_code;

}
add_shortcode( 'testing_shortcode', 'custom_shortcode_test' );
