<?php

// adding functionality for nav menus on the admin area

add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' ); 

function register_theme_menus () {

	register_nav_menus(
		array(
				'primary-menu' => __( 'Primary Menu' )
			)
		);
}

add_action( 'init', 'register_theme_menus' );

add_filter('single_template', create_function('$t', 'foreach( (array) get_the_category() as $cat ) { if ( file_exists(TEMPLATEPATH . "/single-{$cat->term_id}.php") ) return TEMPLATEPATH . "/single-{$cat->term_id}.php"; } return $t;' ));

if ( function_exists( 'register_sidebar' ) ) {
  register_sidebar( array (
    'name' => __( 'About Us', 'about-sidebar' ),
    'id' => 'about-widget-area',
    'description' => __( 'About Us sidebar', 'dir' ),
  ) );
}

if ( function_exists( 'register_sidebar' ) ) {
  register_sidebar( array (
    'name' => __( 'What We Do', 'what-sidebar' ),
    'id' => 'what-we-do-widget-area',
    'description' => __( 'What We Do sidebar', 'dir' ),
    'before_widget' => '<div class="widget">',
    'after_widget' => "</div>",
    'before_title' => '<h2 class="widgettitle">',
    'after_title' => '</h2>',
  ) );
}

if ( function_exists( 'register_sidebar' ) ) {
  register_sidebar( array (
    'name' => __( 'Insight', 'insight-sidebar' ),
    'id' => 'insight-widget-area',
    'description' => __( 'Insight sidebar', 'dir' ),
    'before_widget' => '<div class="widget">',
    'after_widget' => "</div>",
    'before_title' => '<h2 class="widgettitle">',
    'after_title' => '</h2>',
  ) );
}
if ( function_exists( 'register_sidebar' ) ) {
  register_sidebar( array (
    'name' => __( 'CSR', 'csr-sidebar' ),
    'id' => 'csr-widget-area',
    'description' => __( 'CSR sidebar', 'dir' ),
    'before_widget' => '<div class="widget">',
    'after_widget' => "</div>",
    'before_title' => '<h2 class="widgettitle">',
    'after_title' => '</h2>',
  ) );
}
if ( function_exists( 'register_sidebar' ) ) {
  register_sidebar( array (
    'name' => __( 'Members', 'members-sidebar' ),
    'id' => 'members-widget-area',
    'description' => __( 'Members sidebar', 'dir' ),
    'before_widget' => '<div class="widget">',
    'after_widget' => "</div>",
    'before_title' => '<h2 class="widgettitle">',
    'after_title' => '</h2>',
  ) );
}

function remove_admin_bar_style_frontend() { 
  echo '<style type="text/css" media="screen">
  html { margin-top: 0px !important; }
  * html body { margin-top: 0px !important; }
  </style>';
}

add_action( 'init', 'my_add_excerpts_to_pages' );
function my_add_excerpts_to_pages() {
     add_post_type_support( 'page', 'excerpt' );
}

add_filter('wp_head','remove_admin_bar_style_frontend', 99);


function pagination($pages = '', $range = 4) {
     $showitems = ($range * 2)+1;  
 
     global $paged;
     if(empty($paged)) $paged = 1;
 
     if($pages == '') {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages) {
             $pages = 1;
         }
     }   
 
     if(1 != $pages) {
         echo "<div class=\"pagination\"><span>Page ".$paged." of ".$pages."</span>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a>";
 
         for ($i=1; $i <= $pages; $i++) {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )) {
                 echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
             }
         }
 
         if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">Next &rsaquo;</a>";
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Last &raquo;</a>";
         echo "</div>\n";
     }
}

function change_footer_admin () {
  echo 'The Fitzrovia Partnership';
}  
add_filter('admin_footer_text', 'change_footer_admin');


//Yoast UK 
add_filter('wpseo_locale', 'override_og_locale');
function override_og_locale($locale)
{
    return "en_GB";
}

function custom_loginlogo() {
echo '<style type="text/css">
h1 a {background-image: url('.get_bloginfo('template_directory').'/img/site-login-logo.png) !important; }
</style>';
}
add_action('login_head', 'custom_loginlogo');


function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'The Fitzrovia Partnership';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

?>