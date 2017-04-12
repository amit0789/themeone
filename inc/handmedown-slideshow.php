function _s_slideshow_scripts(){
 function _amit_theme_slideshow_scripts(){
  	wp_register_script('bxslider', STYLESHEETPATH . 'js/bx-slider.js');
  	wp_enqueue_script('bxslider');
  }
  
 add_action( 'wp_enqueue_scripts', '_s_slideshow_scripts' );
 add_action( 'wp_enqueue_scripts', '_amit_theme_slideshow_scripts' ); and css only on singular templates (single post, single custom post type, etc)