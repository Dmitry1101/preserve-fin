<?php

// Recommended plugins installer
require_once 'include/plugins/init.php';
require_once('include/wpadmin/admin-addons.php');

function style_js()
{
    wp_enqueue_script( 'googlemaps', '//maps.googleapis.com/maps/api/js?key=AIzaSyDJDJXR-HrdxKzxVn0HhmRyjnLLvTZU4cU', array(), '', false );
    wp_enqueue_script('all', get_template_directory_uri() . '/js/all.js', array('jquery'), '1.0', true);
    wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css');


}
add_action('wp_enqueue_scripts', 'style_js');

// HTML5 support for IE
function wp_IEhtml5_js () {
    global $is_IE;
    if ($is_IE)
        echo '<!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><script src="//css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script><![endif]--><!--[if lte IE 9]><link href="'.theme().'/style/animations-ie-fix.css" rel="stylesheet" /><![endif]-->';
}
add_action('wp_head', 'wp_IEhtml5_js');

// Custom theme url
function theme($filepath = NULL){
    return preg_replace( '(https?://)', '//', get_stylesheet_directory_uri() . ($filepath?'/' . $filepath:'') );
}

//register menus
register_nav_menus(array(
    'main_menu' => 'Main menu',
    'foot_menu' => 'Footer menu',

));

//register sidebar
$reg_sidebars = array (
    'page_sidebar'     => 'Page Sidebar',
    'blog_sidebar'     => 'Blog Sidebar',
    'footer_sidebar'   => 'Footer Area'
);
foreach ( $reg_sidebars as $id => $name ) {
    register_sidebar(
        array (
            'name'          => __( $name ),
            'id'            => $id,
            'before_widget' => '<div class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="widgetTitle">',
            'after_title'   => '</h2>',
        )
    );
}

if(function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
}

add_theme_support( 'post-thumbnails' );

//images sizes
add_image_size( 'free', '1920', '', true );
add_image_size( '337x228', '337', '228', true );
add_image_size( '54x54', '54', '54', true );
add_image_size( '370x370', '370', '370', true );
add_image_size( '370x323', '370', '323', true );
add_image_size( '400x270', '400', '270', true );

//light function fo wp_get_attachment_image_src()
function image_src($id, $size = 'full', $background_image = false, $height = false) {
    if ($image = wp_get_attachment_image_src($id, $size, true)) {
        return $background_image ? 'background-image: url('.$image[0].');' . ($height?'min-height:'.$image[2].'px':'') : $image[0];
    }
}

//clear wp_head

remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'wp_shortlink_wp_head' );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head' );
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rel_canonical');
//remove_action('wp_head', 'qtrans_header', 10, 0);
add_action('widgets_init', 'my_remove_recent_comments_style');
function my_remove_recent_comments_style() {
    global $wp_widget_factory;
    remove_action('wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style'));
}
// Remove Emoji js/styles
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

// Remove wp version param from any enqueued scripts
function vc_remove_wp_ver_css_js( $src ) {
    if ( strpos( $src, 'ver=' ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'style_loader_src', 'vc_remove_wp_ver_css_js', 9999 );
add_filter( 'script_loader_src', 'vc_remove_wp_ver_css_js', 9999 );

/* BEGIN: Theme config section*/
define ('HOME_PAGE_ID', get_option('page_on_front'));
define ('BLOG_ID', get_option('page_for_posts'));
define ('POSTS_PER_PAGE', get_option('posts_per_page'));
if(class_exists('Woocommerce')) :
    define ('SHOP_ID', get_option('woocommerce_shop_page_id'));
    define ('ACCOUNT_ID', get_option('woocommerce_myaccount_page_id'));
    define ('CART_ID', get_option('woocommerce_cart_page_id'));
    define ('CHECKOUT_ID', get_option('woocommerce_checkout_page_id'));
    require_once('woocommerce.php');
endif;
/* END: Theme config section*/

//New Body Classes
function new_body_classes( $classes ){
    if( is_page() ){
        global $post;
        $temp = get_page_template();
        if ( $temp != null ) {
            $path = pathinfo($temp);
            $tmp = $path['filename'] . "." . $path['extension'];
            $tn= str_replace(".php", "", $tmp);
            $classes[] = $tn;
        }
        if (is_active_sidebar('sidebar')) {
            $classes[] = 'with_sidebar';
        }
        foreach($classes as $k => $v) {
            if(
                $v == 'page-template' ||
                $v == 'page-id-'.$post->ID ||
                $v == 'page-template-default' ||
                $v == 'woocommerce-page' ||
                ($temp != null?($v == 'page-template-'.$tn.'-php' || $v == 'page-template-'.$tn):'')) unset($classes[$k]);
        }
    }
    if( is_single() ){
        global $post;
        $f = get_post_format( $post->ID );
        foreach($classes as $k => $v) {
            if($v == 'postid-'.$post->ID || $v == 'single-format-'.(!$f?'standard':$f)) unset($classes[$k]);
        }
    }
    global $is_lynx, $is_gecko, $is_IE, $is_opera, $is_NS4, $is_safari, $is_chrome, $is_iphone;
    $browser = $_SERVER[ 'HTTP_USER_AGENT' ];
    // Mac, PC ...or Linux
    if ( preg_match( "/Mac/", $browser ) ){
        $classes[] = 'macos';
    } elseif ( preg_match( "/Windows/", $browser ) ){
        $classes[] = 'windows';
    } elseif ( preg_match( "/Linux/", $browser ) ) {
        $classes[] = 'linux';
    } else {
        $classes[] = 'unknown-os';
    }
    // Checks browsers in this order: Chrome, Safari, Opera, MSIE, FF
    if ( preg_match( "/Chrome/", $browser ) ) {
        $classes[] = 'chrome';
        preg_match( "/Chrome\/(\d.\d)/si", $browser, $matches);
        @$classesh_version = 'ch' . str_replace( '.', '-', $matches[1] );
        $classes[] = $classesh_version;
    } elseif ( preg_match( "/Safari/", $browser ) ) {
        $classes[] = 'safari';
        preg_match( "/Version\/(\d.\d)/si", $browser, $matches);
        $sf_version = 'sf' . str_replace( '.', '-', $matches[1] );
        $classes[] = $sf_version;
    } elseif ( preg_match( "/Opera/", $browser ) ) {
        $classes[] = 'opera';
        preg_match( "/Opera\/(\d.\d)/si", $browser, $matches);
        $op_version = 'op' . str_replace( '.', '-', $matches[1] );
        $classes[] = $op_version;
    } elseif ( preg_match( "/MSIE/", $browser ) ) {
        $classes[] = 'msie';
        if( preg_match( "/MSIE 6.0/", $browser ) ) {
            $classes[] = 'ie6';
        } elseif ( preg_match( "/MSIE 7.0/", $browser ) ){
            $classes[] = 'ie7';
        } elseif ( preg_match( "/MSIE 8.0/", $browser ) ){
            $classes[] = 'ie8';
        } elseif ( preg_match( "/MSIE 9.0/", $browser ) ){
            $classes[] = 'ie9';
        }
    } elseif ( preg_match( "/Firefox/", $browser ) && preg_match( "/Gecko/", $browser ) ) {
        $classes[] = 'firefox';
        preg_match( "/Firefox\/(\d)/si", $browser, $matches);
        $ff_version = 'ff' . str_replace( '.', '-', $matches[1] );
        $classes[] = $ff_version;
    } else {
        $classes[] = 'unknown-browser';
    }
    //qtranslate classes
    if(defined('QTX_VERSION')) {
        $classes[] = 'qtrans-' . qtranxf_getLanguage();
    }
    return $classes;
}
add_filter( 'body_class', 'new_body_classes' );

//remove ID in menu list
add_filter('nav_menu_item_id', 'clear_nav_menu_item_id', 10, 3);
function clear_nav_menu_item_id($id, $item, $args) {
    return "";
}

function content_btn($atts,$content){
    extract(shortcode_atts(array(
        'text' => 'Learn More',
        'link' => site_url(),
        'class' => false,
        'target' => false
    ), $atts ));
    return '<a href="' . $link . '" class="button'.($class?' '.$class:'').'" '.($target?'target="'.$target.'"':'').'>' . $text . '</a>';
}
add_shortcode("button", "content_btn");

//custom SEO title
function seo_title(){
    global $post;
    if(!defined('WPSEO_VERSION')) {
        if(is_404()) {
            echo '404 Page not found - ';
        } elseif((is_single() || is_page()) && $post->post_parent) {
            $parent_title = get_the_title($post->post_parent);
            echo wp_title('-', true, 'right') . $parent_title.' - ';
        } elseif(class_exists('Woocommerce') && is_shop()) {
            echo get_the_title(SHOP_ID) . ' - ';
        } else {
            wp_title('-', true, 'right');
        }
        bloginfo('name');
    } else {
        wp_title();
    }
}

/* Update wp-scss setings
   ========================================================================== */
if (class_exists('Wp_Scss_Settings')) {
    $wpscss = get_option('wpscss_options');
    if (empty($wpscss['css_dir']) && empty($wpscss['scss_dir'])) {
        update_option('wpscss_options', array('css_dir' => '/style/', 'scss_dir' => '/style/', 'compiling_options' => 'scss_formatter_compressed'));
    }
}

function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

function wpa_fix_svg_thumb() {
    echo '<style>td.media-icon img[src$=".svg"], img[src$=".svg"].attachment-post-thumbnail {width: 100% !important;height: auto !important}</style>';
}
add_action('admin_head', 'wpa_fix_svg_thumb');

// Contact form 7 remove AUTOTOP
if(defined('WPCF7_VERSION')) {
    function maybe_reset_autop( $form ) {
        $form_instance = WPCF7_ContactForm::get_current();
        $manager = WPCF7_ShortcodeManager::get_instance();
        $form_meta = get_post_meta( $form_instance->id(), '_form', true );
        $form = $manager->do_shortcode( $form_meta );
        $form_instance->set_properties( array(
            'form' => $form
        ) );
        return $form;
    }
    add_filter( 'wpcf7_form_elements', 'maybe_reset_autop' );
}

/* ACF Repeater Styles */
function acf_repeater_even() {
    $scheme = get_user_option( 'admin_color' );
    $color = '';
    if($scheme == 'fresh') {
        $color = '#0073aa';
    } else if($scheme == 'light') {
        $color = '#d64e07';
    } else if($scheme == 'blue') {
        $color = '#52accc';
    } else if($scheme == 'coffee') {
        $color = '#59524c';
    } else if($scheme == 'ectoplasm') {
        $color = '#523f6d';
    } else if($scheme == 'midnight') {
        $color = '#e14d43';
    } else if($scheme == 'ocean') {
        $color = '#738e96';
    } else if($scheme == 'sunrise') {
        $color = '#dd823b';
    }
    echo '<style>.acf-repeater > table > tbody > tr:nth-child(even) > td.order {color: #fff !important;background-color: '.$color.' !important; text-shadow: none}.acf-fc-layout-handle {color: #fff !important;background-color: #23282d!important; text-shadow: none}</style>';
}
add_action('admin_footer', 'acf_repeater_even');

function some() {
    $some = get_field('some', 'option');
    $soc = '';
    if($some) {
        $soc .= '<div class="some">';
        foreach($some as $sm) {
            $soc .= '<a class="i-'.$sm['icon'].'" target="_blank" href="'.$sm['link'].'" rel="nofollow"></a>';
        }
        $soc .= '</div>';
    }
    return $soc;
}
add_shortcode("social", "some");

function menuBox() { ?>
    <div class="topp__nav">
        <div class="topp__nav-blck blck-1">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <img src="<?php echo theme(); ?>/img/logo.png" alt="">
            </a>
        </div>
        <div class="topp__nav-blck blck-2">
            <a href="tel:<?php the_field('phone', 'option'); ?>" class="topp__nav-phone"><?php the_field('phone', 'option'); ?></a>
            <span class="topp__nav-butt">
			<button class="hamburger hamburger--collapse" type="button">
			  <span class="hamburger-box">
			    <span class="hamburger-inner"></span>
			  </span>
			</button>
		</span>
        </div>
    </div>
<? }