<?php

function gearupsaisd_setup() {
  add_editor_style('css/editor-style.css');
  add_theme_support('post-thumbnails');
  update_option('thumbnail_size_w', 170);
  update_option('medium_size_w', 470);
  update_option('large_size_w', 970);
  add_image_size( 'page-featured', 1200, 350, true ); // (cropped)
  add_image_size( 'blog-featured', 523, 165, true ); // (cropped)
  add_image_size( 'blog-exceprt', 80, 80, true ); // (cropped)

}
add_action('init', 'gearupsaisd_setup');

if (! isset($content_width))
	$content_width = 600;

function gearupsaisd_search_form( $form ) {
    $form = '<form class="form-inline" role="search" method="get" id="searchform" action="' . home_url('/') . '" >
    <div class="form-group">
		    <input class="form-control" type="text" value="' . get_search_query() . '" name="s" id="s" />
    </div>
		<button type="submit" id="searchsubmit" value="'. esc_attr__('Search') .'" class="btn btn-default"><i class="glyphicon glyphicon-search"></i> '. esc_attr__('Search') .'</button>
    </form>';
    return $form;
}
add_filter( 'get_search_form', 'gearupsaisd_search_form' );

/*
function gearupsaisd_excerpt_readmore() {
    return '&nbsp; <a href="'. get_permalink() . '">' . '&hellip; Read more <i class="glyphicon glyphicon-arrow-right"></i>' . '</a></p>';
}
add_filter('excerpt_more', 'gearupsaisd_excerpt_readmore');
*/


function new_excerpt_more( $more ) {
	return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('... read more', 'your-text-domain') . '</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


/*  Browser detection body_class() output
/* ------------------------------------  
function gearupsaisd_browser_body_class( $classes ) {
    global $is_lynx, $is_gecko, $is_IE, $is_opera, $is_NS4, $is_safari, $is_chrome, $is_iphone;
 
    if($is_lynx) $classes[] = 'lynx';
    elseif($is_gecko) $classes[] = 'gecko';
    elseif($is_opera) $classes[] = 'opera';
    elseif($is_NS4) $classes[] = 'ns4';
    elseif($is_safari) $classes[] = 'safari';
    elseif($is_chrome) $classes[] = 'chrome';
    elseif($is_IE) {
        $browser = $_SERVER['HTTP_USER_AGENT'];
        $browser = sugearupsaisdr( "$browser", 25, 8);
        if ($browser == "MSIE 7.0"  ) {
            $classes[] = 'ie7';
            $classes[] = 'ie';
        } elseif ($browser == "MSIE 6.0" ) {
            $classes[] = 'ie6';
            $classes[] = 'ie';
        } elseif ($browser == "MSIE 8.0" ) {
            $classes[] = 'ie8';
            $classes[] = 'ie';
        } elseif ($browser == "MSIE 9.0" ) {
            $classes[] = 'ie9';
            $classes[] = 'ie';
        } else {
            $classes[] = 'ie';
        }
    }
    else $classes[] = 'unknown';
 
    if( $is_iphone ) $classes[] = 'iphone';
 
    return $classes;
}
add_filter( 'body_class', 'gearupsaisd_browser_body_class' ); */

add_theme_support( 'woocommerce' );

//Sweb Functions
function my_em_event_placeholder( $replace, $EM_Event, $result ){
	if ( $result == '#_EVENTLINK' ) {
		$event_link = esc_url( $EM_Event->get_permalink() );
		$event_shortname = substr($EM_Event->event_name, 0, 40 );
		if ( strlen( $EM_Event->event_name ) > 30 ) $event_shortname .= '&hellip;';
		$replace = '<a href="' . $event_link . '" title="' . esc_attr( $EM_Event->event_name ) . '">' . esc_attr( $event_shortname ) . '</a>';
	}
	return $replace;
}
add_filter( 'em_event_output_placeholder', 'my_em_event_placeholder', 1, 3 );

remove_filter( 'widget_title', 'esc_html' );

add_filter( 'widget_title', 'your_html_widget_title' );
 
/**
 * html_widget_title function.
 * 
 * @access public
 * @param mixed $title
 * @return void
 */
 
function your_html_widget_title( $title ) { //HTML tag opening/closing brackets
 
	$title = str_replace( '[', '<', $title );
	$title = str_replace( '[/', '</', $title );
	$title = str_replace( ']', '>', $title );
 
	return $title;
}