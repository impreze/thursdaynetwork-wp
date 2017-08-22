<?php 

// Add featured image support in posts/pages and custom thumbnail sizes
add_theme_support( 'post-thumbnails' );
add_image_size( 'posts-page-thumb', 600, 300, true); 

// View Custom Images sizes on media page
function display_custom_image_sizes( $sizes ) {
  global $_wp_additional_image_sizes;
  if ( empty($_wp_additional_image_sizes) )
    return $sizes;

  foreach ( $_wp_additional_image_sizes as $id => $data ) {
    if ( !isset($sizes[$id]) )
      $sizes[$id] = ucfirst( str_replace( '-', ' ', $id ) );
  }

  return $sizes;
}
add_filter( 'image_size_names_choose', 'display_custom_image_sizes' );

/**
 * Updates the medium_large image size. 
 * It's only necessary to execute this code once.
 * Ideally you'd want some kind of UI to allow the dimensions to be specified by the user.
 */
function wpse238808_update_image_size_medium_large() {
    update_option( 'medium_large_size_w', 0 );
    update_option( 'medium_large_size_h', 0 );
}
add_action( 'init', 'wpse238808_update_image_size_medium_large' );


// Changing excerpt length
function new_excerpt_length($length) {
	return (is_front_page()) ? 15 : 55;
}
add_filter('excerpt_length', 'new_excerpt_length');

// Changing excerpt more
function new_excerpt_more($more) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

/**
 * Post Widgets
**/
register_sidebar(array('name' => 'Footer Widget 1','before_widget' => '<div class="widget">', 'after_widget' => '</div>', 'before_title' => '<h4>', 'after_title' => '</h4>',));
register_sidebar(array('name' => 'Footer Widget 2','before_widget' => '<div class="widget">', 'after_widget' => '</div>', 'before_title' => '<h4>', 'after_title' => '</h4>',));
register_sidebar(array('name' => 'Footer Widget 3','before_widget' => '<div class="widget">', 'after_widget' => '</div>', 'before_title' => '<h4>', 'after_title' => '</h4>',));
register_sidebar(array('name' => 'Footer Widget 4','before_widget' => '<div class="widget">', 'after_widget' => '</div>', 'before_title' => '<h4>', 'after_title' => '</h4>',));

// Loading JQuery
function wpbootstrap_scripts_with_jquery()
{
    // Register the script like this for a theme:
    wp_enqueue_script( 'bootstrap-js', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ) );
    wp_enqueue_script( 'bootstrap-css', get_stylesheet_directory_uri() . '/css/bootstrap.min.css' );
    
    wp_enqueue_script( 'bootstrap-js' );
    wp_enqueue_style( 'bootstrap-css' );
}

add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );



// MENU //

function seb_theme_register_theme_menu() {
    register_nav_menu( 'primary', 'Primary Menu' );
}
add_action( 'init', 'seb_theme_register_theme_menu' );


// PAGINATION //

if ( !function_exists( 'wpex_pagination' ) ) {
	
	function wpex_pagination() {
		
		$prev_arrow = is_rtl() ? '&rarr;' : '&larr;';
		$next_arrow = is_rtl() ? '&larr;' : '&rarr;';
		
		global $wp_query;
		$total = $wp_query->max_num_pages;
		$big = 999999999; // need an unlikely integer
		if( $total > 1 )  {
			 if( !$current_page = get_query_var('paged') )
				 $current_page = 1;
			 if( get_option('permalink_structure') ) {
				 $format = 'page/%#%/';
			 } else {
				 $format = '&paged=%#%';
			 }
			echo paginate_links(array(
				'base'			=> str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format'		=> $format,
				'current'		=> max( 1, get_query_var('paged') ),
				'total' 		=> $total,
				'mid_size'		=> 3,
				'type' 			=> 'list',
				'prev_text'		=> $prev_arrow,
				'next_text'		=> $next_arrow,
			 ) );
		}
	}
}
