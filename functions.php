<?php

/*-- Root Directory-Define --*/
define('ROOT', get_template_directory() );
define('IMAGE', get_template_directory_uri().'/assets/images/' );
define('CSS_FILE', get_template_directory_uri().'/assets/css/' );
define('JS_FILE', get_template_directory_uri().'/assets/js/' );



/*-- Includes --*/
require_once( ROOT . '/includes/front/enqueue.php' );
require_once( ROOT . '/includes/front/setup.php' );

/*-- Action & Filter Hooks --*/
add_action( 'after_setup_theme' , 'qsoft_after_setup' );

add_action( 'wp_enqueue_scripts' , 'qsoft_enqueue_style' );

add_action( 'wp_enqueue_scripts' , 'qsoft_enqueue_scripts' );



?>