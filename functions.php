<?php
/**
 * WP Bootstrap Starter functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WP_Bootstrap_Starter
 */

if ( ! function_exists( 'wp_bootstrap_starter_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function wp_bootstrap_starter_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on WP Bootstrap Starter, use a find and replace
	 * to change 'wp-bootstrap-starter' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'wp-bootstrap-starter', get_template_directory() . '/languages' );

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
		'primary' => esc_html__( 'Primary', 'wp-bootstrap-starter' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'wp_bootstrap_starter_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

    function wp_boostrap_starter_add_editor_styles() {
        add_editor_style( 'custom-editor-style.css' );
    }
    add_action( 'admin_init', 'wp_boostrap_starter_add_editor_styles' );

}
endif;
add_action( 'after_setup_theme', 'wp_bootstrap_starter_setup' );


/**
 * Add Welcome message to dashboard
 */
function wp_bootstrap_starter_reminder(){
        $theme_page_url = 'https://afterimagedesigns.com/wp-bootstrap-starter/?dashboard=1';

            if(!get_option( 'triggered_welcomet')){
                $message = sprintf(__( 'Welcome to WP Bootstrap Starter Theme! Before diving in to your new theme, please visit the <a style="color: #fff; font-weight: bold;" href="%1$s" target="_blank">theme\'s</a> page for access to dozens of tips and in-depth tutorials.', 'wp-bootstrap-starter' ),
                    esc_url( $theme_page_url )
                );

                printf(
                    '<div class="notice is-dismissible" style="background-color: #6C2EB9; color: #fff; border-left: none;">
                        <p>%1$s</p>
                    </div>',
                    $message
                );
                add_option( 'triggered_welcomet', '1', '', 'yes' );
            }

}
add_action( 'admin_notices', 'wp_bootstrap_starter_reminder' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wp_bootstrap_starter_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wp_bootstrap_starter_content_width', 1170 );
}
add_action( 'after_setup_theme', 'wp_bootstrap_starter_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wp_bootstrap_starter_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'wp-bootstrap-starter' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-starter' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer 1', 'wp-bootstrap-starter' ),
        'id'            => 'footer-1',
        'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-starter' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer 2', 'wp-bootstrap-starter' ),
        'id'            => 'footer-2',
        'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-starter' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer 3', 'wp-bootstrap-starter' ),
        'id'            => 'footer-3',
        'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-starter' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'wp_bootstrap_starter_widgets_init' );


/**
 * Enqueue scripts and styles.
 */
function wp_bootstrap_starter_scripts() {
	// load bootstrap css
    if ( get_theme_mod( 'cdn_assets_setting' ) === 'yes' ) {
        wp_enqueue_style( 'wp-bootstrap-starter-bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css' );
        wp_enqueue_style( 'wp-bootstrap-starter-fontawesome-cdn', 'https://use.fontawesome.com/releases/v5.10.2/css/all.css' );
    } else {
        wp_enqueue_style( 'wp-bootstrap-starter-bootstrap-css', get_template_directory_uri() . '/inc/assets/css/bootstrap.min.css' );
        wp_enqueue_style( 'wp-bootstrap-starter-fontawesome-cdn', get_template_directory_uri() . '/inc/assets/css/fontawesome.min.css' );
    }
	// load bootstrap css
	// load AItheme styles
	// load WP Bootstrap Starter styles
	wp_enqueue_style( 'wp-bootstrap-starter-style', get_stylesheet_uri() );
    if(get_theme_mod( 'theme_option_setting' ) && get_theme_mod( 'theme_option_setting' ) !== 'default') {
        wp_enqueue_style( 'wp-bootstrap-starter-'.get_theme_mod( 'theme_option_setting' ), get_template_directory_uri() . '/inc/assets/css/presets/theme-option/'.get_theme_mod( 'theme_option_setting' ).'.css', false, '' );
    }
    if(get_theme_mod( 'preset_style_setting' ) === 'poppins-lora') {
        wp_enqueue_style( 'wp-bootstrap-starter-poppins-lora-font', 'https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i|Poppins:300,400,500,600,700' );
    }
    if(get_theme_mod( 'preset_style_setting' ) === 'montserrat-merriweather') {
        wp_enqueue_style( 'wp-bootstrap-starter-montserrat-merriweather-font', 'https://fonts.googleapis.com/css?family=Merriweather:300,400,400i,700,900|Montserrat:300,400,400i,500,700,800' );
    }
    if(get_theme_mod( 'preset_style_setting' ) === 'poppins-poppins') {
        wp_enqueue_style( 'wp-bootstrap-starter-poppins-font', 'https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700' );
    }
    if(get_theme_mod( 'preset_style_setting' ) === 'roboto-roboto') {
        wp_enqueue_style( 'wp-bootstrap-starter-roboto-font', 'https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i' );
    }
    if(get_theme_mod( 'preset_style_setting' ) === 'arbutusslab-opensans') {
        wp_enqueue_style( 'wp-bootstrap-starter-arbutusslab-opensans-font', 'https://fonts.googleapis.com/css?family=Arbutus+Slab|Open+Sans:300,300i,400,400i,600,600i,700,800' );
    }
    if(get_theme_mod( 'preset_style_setting' ) === 'oswald-muli') {
        wp_enqueue_style( 'wp-bootstrap-starter-oswald-muli-font', 'https://fonts.googleapis.com/css?family=Muli:300,400,600,700,800|Oswald:300,400,500,600,700' );
    }
    if(get_theme_mod( 'preset_style_setting' ) === 'montserrat-opensans') {
        wp_enqueue_style( 'wp-bootstrap-starter-montserrat-opensans-font', 'https://fonts.googleapis.com/css?family=Montserrat|Open+Sans:300,300i,400,400i,600,600i,700,800' );
    }
    if(get_theme_mod( 'preset_style_setting' ) === 'robotoslab-roboto') {
        wp_enqueue_style( 'wp-bootstrap-starter-robotoslab-roboto', 'https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700|Roboto:300,300i,400,400i,500,700,700i' );
    }
    if(get_theme_mod( 'preset_style_setting' ) && get_theme_mod( 'preset_style_setting' ) !== 'default') {
        wp_enqueue_style( 'wp-bootstrap-starter-'.get_theme_mod( 'preset_style_setting' ), get_template_directory_uri() . '/inc/assets/css/presets/typography/'.get_theme_mod( 'preset_style_setting' ).'.css', false, '' );
    }
    //custom style (from scss)
    wp_enqueue_style( 'custom-style', get_stylesheet_directory_uri() . '/inc/assets/scss/style.css' );
    wp_enqueue_style( 'swiper-style', get_stylesheet_directory_uri() . '/inc/assets/css/swiper.min.css' );
    wp_enqueue_style( 'step-style', get_stylesheet_directory_uri() . '/inc/assets/css/style-step.css' );

    //Color Scheme
    /*if(get_theme_mod( 'preset_color_scheme_setting' ) && get_theme_mod( 'preset_color_scheme_setting' ) !== 'default') {
        wp_enqueue_style( 'wp-bootstrap-starter-'.get_theme_mod( 'preset_color_scheme_setting' ), get_template_directory_uri() . '/inc/assets/css/presets/color-scheme/'.get_theme_mod( 'preset_color_scheme_setting' ).'.css', false, '' );
    }else {
        wp_enqueue_style( 'wp-bootstrap-starter-default', get_template_directory_uri() . '/inc/assets/css/presets/color-scheme/blue.css', false, '' );
    }*/

	wp_enqueue_script('jquery');

    // Internet Explorer HTML5 support
    wp_enqueue_script( 'html5hiv',get_template_directory_uri().'/inc/assets/js/html5.js', array(), '3.7.0', false );
    wp_script_add_data( 'html5hiv', 'conditional', 'lt IE 9' );

	// load bootstrap js
    if ( get_theme_mod( 'cdn_assets_setting' ) === 'yes' ) {
        wp_enqueue_script('wp-bootstrap-starter-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.15.0/dist/umd/popper.min.js', array(), '', true );
    	wp_enqueue_script('wp-bootstrap-starter-bootstrapjs', 'https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js', array(), '', true );
    } else {
        wp_enqueue_script('wp-bootstrap-starter-popper', get_template_directory_uri() . '/inc/assets/js/popper.min.js', array(), '', true );
        wp_enqueue_script('wp-bootstrap-starter-bootstrapjs', get_template_directory_uri() . '/inc/assets/js/bootstrap.min.js', array(), '', true );
    }
    wp_enqueue_script('wp-bootstrap-starter-themejs', get_template_directory_uri() . '/inc/assets/js/theme-script.min.js', array(), '', true );
	wp_enqueue_script( 'wp-bootstrap-starter-skip-link-focus-fix', get_template_directory_uri() . '/inc/assets/js/skip-link-focus-fix.min.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
    }
    //custom style (from scss)
    wp_enqueue_script( 'custom-scripts', get_stylesheet_directory_uri() . '/inc/assets/js/script.js' , array( 'jquery' ) );
    wp_enqueue_script( 'swiper-scripts', get_stylesheet_directory_uri() . '/inc/assets/js/swiper.min.js' );
    wp_enqueue_script( 'step-scripts', get_stylesheet_directory_uri() . '/inc/assets/js/jquery.steps.js' );
    wp_enqueue_script( 'step-main-scripts', get_stylesheet_directory_uri() . '/inc/assets/js/main-step.js' );
    wp_enqueue_script( 'js-step-main-scripts', get_stylesheet_directory_uri() . '/inc/assets/js/jquery-3.3.1.min.js' );


}
add_action( 'wp_enqueue_scripts', 'wp_bootstrap_starter_scripts' );



/**
 * Add Preload for CDN scripts and stylesheet
 */
function wp_bootstrap_starter_preload( $hints, $relation_type ){
    if ( 'preconnect' === $relation_type && get_theme_mod( 'cdn_assets_setting' ) === 'yes' ) {
        $hints[] = [
            'href'        => 'https://cdn.jsdelivr.net/',
            'crossorigin' => 'anonymous',
        ];
        $hints[] = [
            'href'        => 'https://use.fontawesome.com/',
            'crossorigin' => 'anonymous',
        ];
    }
    return $hints;
} 

add_filter( 'wp_resource_hints', 'wp_bootstrap_starter_preload', 10, 2 );



function wp_bootstrap_starter_password_form() {
    global $post;
    $label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
    $o = '<form action="' . esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" method="post">
    <div class="d-block mb-3">' . __( "To view this protected post, enter the password below:", "wp-bootstrap-starter" ) . '</div>
    <div class="form-group form-inline"><label for="' . $label . '" class="mr-2">' . __( "Password:", "wp-bootstrap-starter" ) . ' </label><input name="post_password" id="' . $label . '" type="password" size="20" maxlength="20" class="form-control mr-2" /> <input type="submit" name="Submit" value="' . esc_attr__( "Submit", "wp-bootstrap-starter" ) . '" class="btn btn-primary"/></div>
    </form>';
    return $o;
}
add_filter( 'the_password_form', 'wp_bootstrap_starter_password_form' );



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
 * Load plugin compatibility file.
 */
require get_template_directory() . '/inc/plugin-compatibility/plugin-compatibility.php';

/**
 * Load custom WordPress nav walker.
 */
if ( ! class_exists( 'wp_bootstrap_navwalker' )) {
    require_once(get_template_directory() . '/inc/wp_bootstrap_navwalker.php');
}


//
// Stylowanie admin menu
//
add_action('admin_head', 'custom_admin_style');

function custom_admin_style() {
  echo '<style>
    #wpadminbar
    {
        background: #002346;
    }
    #adminmenu .wp-has-current-submenu .wp-submenu, #adminmenu .wp-has-current-submenu .wp-submenu.sub-open, #adminmenu .wp-has-current-submenu.opensub .wp-submenu, #adminmenu a.wp-has-current-submenu:focus+.wp-submenu, .no-js li.wp-has-current-submenu:hover .wp-submenu
    {
        background-color: #002346;
    }
    #adminmenu, #adminmenu .wp-submenu, #adminmenuback, #adminmenuwrap
    {
        background-color: #002E5B;
    }
    #adminmenu .wp-has-current-submenu .wp-submenu .wp-submenu-head, #adminmenu .wp-menu-arrow, #adminmenu .wp-menu-arrow div, #adminmenu li.current a.menu-top, #adminmenu li.wp-has-current-submenu a.wp-has-current-submenu, .folded #adminmenu li.current.menu-top, .folded #adminmenu li.wp-has-current-submenu
    {
        background: #DD4A00;
    }
    #adminmenu li.menu-top:hover, #adminmenu li.opensub>a.menu-top, #adminmenu li>a.menu-top:focus 
    {
    background-color: #002346;
    color: #fff;
    }
    #adminmenu .wp-submenu a:focus, #adminmenu .wp-submenu a:hover, #adminmenu a:hover, #adminmenu li.menu-top>a:focus 
    {
    color: #e0d5d2;
    }
    #adminmenu li a:focus div.wp-menu-image:before, #adminmenu li.opensub div.wp-menu-image:before, #adminmenu li:hover div.wp-menu-image:before
    {
    color: #e0d5d2;
    }
    #collapse-button:hover {
    color: #e0d5d2;
    font-weight: bold;
    }
    #adminmenu li.wp-has-submenu.wp-not-current-submenu.opensub:hover:after 
    {
    border-right-color: #DD4A00;
    }
    #wpadminbar .menupop .ab-sub-wrapper, #wpadminbar .shortlink-input {
    margin: 0;
    padding: 0;
    box-shadow: 0 3px 5px rgba(0,0,0,.2);
    background: #002346;
    display: none;
    position: absolute;
    float: none;
    }
    #wpadminbar .ab-top-menu>li.hover>.ab-item, #wpadminbar.nojq .quicklinks .ab-top-menu>li>.ab-item:focus, #wpadminbar:not(.mobile) .ab-top-menu>li:hover>.ab-item, #wpadminbar:not(.mobile) .ab-top-menu>li>.ab-item:focus {
    background: #002346;
    color: #00b9eb;
}
#wpadminbar{

    background: #002346;
}

  </style>';
}

//
// Dodanie informacji o autorze
//

function dawidkawalec_add_dashboard_widget() {
 wp_add_dashboard_widget( 'webinsider_add_dashboard_widget', 'Osoba odpowiedzialna za wdrożenie:', 'dawidkawalec_dashboard_widget_info' );
}
add_action( 'wp_dashboard_setup', 'dawidkawalec_add_dashboard_widget' );

function dawidkawalec_dashboard_widget_info() {
 echo "<ul>
 <li><strong>Wdrożenie projektu: </strong>Dawid Kawalec</li>
 <li><strong>Kontakt: </strong><a href='mailto:kontakt@dawidkawalec.pl'>kontakt@dawidkawalec.pl</a></li>
 </ul>";
}

//
// Usuwanie stopki standardowej
//
function remove_footer_admin () {
 
echo 'Fueled by <a href="http://www.wordpress.org" target="_blank">WordPress</a> || Wdrożenie: <a href="mailto:kontakt@dawidkawalec.pl" target="_blank">Dawid Kawalec</a></p>';
 
}
 
add_filter('admin_footer_text', 'remove_footer_admin');  




// Custom function to return the post slug
function the_slug($echo=true){
  $slug = basename(get_permalink());
  do_action('before_slug', $slug);
  $slug = apply_filters('slug_filter', $slug);
  if( $echo ) echo $slug;
  do_action('after_slug', $slug);
  return $slug;
}
 if (function_exists('the_slug')) { the_slug(); } 



 

 //
// custom wypadki
//
function dodanie_wypadkow_dawid() {
	$labels = array(
		'name'                => __( 'Wypadki' ),
		'singular_name'       => __( 'Wypadek'),
		'menu_name'           => __( 'Wypadek'),
		'parent_item_colon'   => __( 'Wypadek rodzic'),
		'all_items'           => __( 'Wszystkie Wypadki'),
		'view_item'           => __( 'Zobacz Wypadek '),
		'add_new_item'        => __( 'Nowy Wypadek'),
		'add_new'             => __( 'Dodaj'),
		'edit_item'           => __( 'Edytuj Wypadek'),
		'update_item'         => __( 'Zaktualizuj Wypadek'),
		'search_items'        => __( 'Poszuaj Wypadek'),
		'not_found'           => __( 'Nie znaleziono'),
        'not_found_in_trash'  => __( 'Nie znaleziono w smieciach')
        
        
	);
	$args = array(
		'label'               => __( 'Wypadki'),
		'description'         => __( 'Wszystkie Wypadeki'),
		'labels'              => $labels,
		'supports'            => array( 'title', 'excerpt', 'author', 'thumbnail', 'revisions'),
		'public'              => true,
		'hierarchical'        => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'has_archive'         => true,
		'can_export'          => true,
		'exclude_from_search' => false,
	        'yarpp_support'       => true,
		'taxonomies' 	      => array('post_tag'),
		'publicly_queryable'  => true,
        'capability_type'     => 'page',
        'rewrite'  => array( 'slug' => 'odszkodowania-uk', 'with_front' => false )
    );
	register_post_type( 'wypadki', $args );
}
add_action( 'init', 'dodanie_wypadkow_dawid', 0 );
//
// Wypadki texonomia
//
add_action( 'init', 'dodanie_taxonomii_wypadki_dawid', 0 );
 
//create a custom taxonomy name it "type" for your posts
function dodanie_taxonomii_wypadki_dawid() {
 
  $labels = array(
    'name' => _x( 'rodzaje_wypadkow', 'taxonomy general name' ),
    'singular_name' => _x( 'Rodzaj wypadku', 'taxonomy singular name' ),
    'search_items' =>  __( 'Wyszukaj rodzaje' ),
    'all_items' => __( 'Wszystkie rodzaje' ),
    'parent_item' => __( 'Rodziaje rodzic ' ),
    'parent_item_colon' => __( 'Rodzaj wypadku:' ),
    'edit_item' => __( 'Eytuj rodzaj' ), 
    'update_item' => __( 'Zaktualizuj' ),
    'add_new_item' => __( 'Dodaj nowy rodzaj wypadku' ),
    'new_item_name' => __( 'Dodaj nowy' ),
    'menu_name' => __( 'Rodzaje wypadkow' ),
  ); 	
 
  register_taxonomy('rodzaje_wypadkow',array('wypadki'), array(
    'hierarchical' => true,
    'rewrite'  => array( 'slug' => 'rodzaje-wypadkow', 'with_front' => false ),
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
  ));
}



//
// custom FAQ
//
function dodanie_faq_dawid() {
	$labels = array(
		'name'                => __( 'FAQ pytania' ),
		'singular_name'       => __( 'FAQ pytania'),
		'menu_name'           => __( 'FAQ pytania'),
		'parent_item_colon'   => __( 'FAQ pytania rodzic'),
		'all_items'           => __( 'Wszystkie FAQ pytania'),
		'view_item'           => __( 'Zobacz FAQ pytania'),
		'add_new_item'        => __( 'Nowy FAQ pytania'),
		'add_new'             => __( 'Dodaj'),
		'edit_item'           => __( 'Edytuj FAQ pytania'),
		'update_item'         => __( 'Zaktualizuj FAQ pytania'),
		'search_items'        => __( 'Poszuaj FAQ pytania'),
		'not_found'           => __( 'Nie znaleziono'),
        'not_found_in_trash'  => __( 'Nie znaleziono w smieciach')
        
	);
	$args = array(
		'label'               => __( 'FAQ pytania'),
		'description'         => __( 'Wszystkie FAQ pytania'),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions'),
		'public'              => true,
		'hierarchical'        => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'has_archive'         => true,
		'can_export'          => true,
		'exclude_from_search' => false,
	        'yarpp_support'       => true,
		'taxonomies' 	      => array('post_tag'),
		'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
	register_post_type( 'faq-pytania', $args );
}
add_action( 'init', 'dodanie_faq_dawid', 0 );
//
// FAQ texonomia
//
add_action( 'init', 'dodanie_taxonomii_faq_dawid', 0 );
 
//create a custom taxonomy name it "type" for your posts
function dodanie_taxonomii_faq_dawid() {
 
  $labels = array(
    'name' => _x( 'rodzaje_faq', 'taxonomy general name' ),
    'singular_name' => _x( 'Rodzaj FAQ', 'taxonomy singular name' ),
    'search_items' =>  __( 'Wyszukaj rodzaje' ),
    'all_items' => __( 'Wszystkie rodzaje' ),
    'parent_item' => __( 'Rodziaje rodzic ' ),
    'parent_item_colon' => __( 'Rodzaj FAQ:' ),
    'edit_item' => __( 'Eytuj rodzaj' ), 
    'update_item' => __( 'Zaktualizuj' ),
    'add_new_item' => __( 'Dodaj nowy rodzaj FAQ' ),
    'new_item_name' => __( 'Dodaj nowy' ),
    'menu_name' => __( 'Rodzaje FAQ' ),
  ); 	
 
  register_taxonomy('rodzaje_faq',array('faq-pytania'), array(
    'hierarchical' => true,
    'rewrite'  => array( 'slug' => 'faq-rodzaje' ),
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
  ));
}


//
//
// Pytania forum
//
//


//
// custom Pytania forum
//
function dodanie_forum_dawid() {
	$labels = array(
		'name'                => __( 'Forum pytania' ),
		'singular_name'       => __( 'Forum pytania'),
		'menu_name'           => __( 'Forum pytania'),
		'parent_item_colon'   => __( 'Forum pytania rodzic'),
		'all_items'           => __( 'Wszystkie Forum pytania'),
		'view_item'           => __( 'Zobacz Forum pytania'),
		'add_new_item'        => __( 'Nowy Forum pytania'),
		'add_new'             => __( 'Dodaj'),
		'edit_item'           => __( 'Edytuj Forum pytania'),
		'update_item'         => __( 'Zaktualizuj Forum pytania'),
		'search_items'        => __( 'Poszuaj Forum pytania'),
		'not_found'           => __( 'Nie znaleziono'),
        'not_found_in_trash'  => __( 'Nie znaleziono w smieciach')
        
	);
	$args = array(
		'label'               => __( 'Forum pytania'),
		'description'         => __( 'Wszystkie Forum pytania'),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions'),
		'public'              => true,
		'hierarchical'        => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'has_archive'         => true,
		'can_export'          => true,
		'exclude_from_search' => false,
	        'yarpp_support'       => true,
		'taxonomies' 	      => array('post_tag'),
		'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
	register_post_type( 'porady', $args );
}
add_action( 'init', 'dodanie_forum_dawid', 0 );
//
// forum texonomia
//
add_action( 'init', 'dodanie_taxonomii_forum_dawid', 0 );
 
//create a custom taxonomy name it "type" for your posts
function dodanie_taxonomii_forum_dawid() {
 
  $labels = array(
    'name' => _x( 'rodzaje_forum_pytania', 'taxonomy general name' ),
    'singular_name' => _x( 'Rodzaj Forum', 'taxonomy singular name' ),
    'search_items' =>  __( 'Wyszukaj rodzaje' ),
    'all_items' => __( 'Wszystkie rodzaje' ),
    'parent_item' => __( 'Rodziaje rodzic ' ),
    'parent_item_colon' => __( 'Rodzaj Forum:' ),
    'edit_item' => __( 'Eytuj rodzaj' ), 
    'update_item' => __( 'Zaktualizuj' ),
    'add_new_item' => __( 'Dodaj nowy rodzaj Forum' ),
    'new_item_name' => __( 'Dodaj nowy' ),
    'menu_name' => __( 'Rodzaje Forum' ),
  ); 	
 
  register_taxonomy('rodzaje_forum_pytania',array('porady'), array(
    'hierarchical' => true,
    'rewrite'  => array( 'slug' => 'forum-rodzaje' ),
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
  ));
}

add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init() {

    // Check function exists.
    if( function_exists('acf_add_options_page') ) {

        // Add parent.
        $parent = acf_add_options_page(array(
            'page_title'  => __('Personalizacja motywu'),
            'menu_title'  => __('Personalizacja motywu'),
            'redirect'    => false,
        ));

        // Add sub page.
        $child = acf_add_options_page(array(
            'page_title'  => __('Opinie'),
            'menu_title'  => __('Opinie'),
            'parent_slug' => $parent['menu_slug'],
        ));
        // Add sub page.
        $child2 = acf_add_options_page(array(
            'page_title'  => __('Zespół'),
            'menu_title'  => __('Zespół'),
            'parent_slug' => $parent['menu_slug'],
        ));
        // Add sub page.
        $child3 = acf_add_options_page(array(
            'page_title'  => __('Porady'),
            'menu_title'  => __('Porady'),
            'parent_slug' => $parent['menu_slug'],
        ));
    }
}