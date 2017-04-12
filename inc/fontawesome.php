<?php

/* 
enque fontawesome from a CDN
 */
function amit_theme_enqueue_fa()

{
wp_register_style( 'fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' );
wp_enqueue_style('fontawesome');    
}

wp_enqueue_script('fontawesome');