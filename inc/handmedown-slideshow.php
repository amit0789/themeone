<?php
  
 -function _amit_theme_slideshow_scripts(){
 -	wp_register_script('bxslider', STYLESHEETPATH . 'js/bx-slider.js');
 -	wp_enqueue_script('bxslider');
 +/**
 + * Enqueues bx-slider's styles and scripts
 + */
 +function _amit_theme_slideshow_scripts() {
 +
 +	// check if it is a single post of post type handmedown
 +	if ( is_singular( 'handmedown' ) ) {
 +
 +		wp_register_script( 'jquery-bxslider', get_stylesheet_directory_uri() . 'js/jquery.bxslider.js', array( 'jquery' ), '' );
 +
 +		wp_register_script( 'saurabh-slideshow', get_stylesheet_directory_uri() . 'js/slideshow.js', array( 'jquery-bxslider' ), '', true );
 +
 +		wp_enqueue_script( 'saurabh-slideshow' );
 +
 +
 +		wp_register_style( 'jquery-bxslider', get_stylesheet_directory_uri() . 'css/jquery.bxslider.css' );
 +
 +		wp_enqueue_style( 'jquery-bxslider' );
 +	}