<?php

/*-- Incloude-Script-Files --*/
if( ! function_exists('qsoft_enqueue_style') ){
    function qsoft_enqueue_style(){
        /*-- CSS-Files --*/
        wp_enqueue_style('bootstrap', CSS_FILE.'bootstrap.min.css');
        wp_enqueue_style('font-awesome', CSS_FILE.'font-awesome.min.css');
        wp_enqueue_style('owl-carousel', CSS_FILE.'owl.carousel.min.css');
        wp_enqueue_style('qsoft-theme', CSS_FILE.'theme.css');
        wp_enqueue_style('qsoft-stylesheet', get_stylesheet_uri() );
        wp_enqueue_style('qsoft-responsive', CSS_FILE.'responsive.css');
    }
}

if( !function_exists('qsoft_enqueue_scripts') ){
    function qsoft_enqueue_scripts(){
      /*-- JS-Files --*/
        wp_enqueue_script( 'bootstrap', JS_FILE.'vendor/bootstrap.min.js', array('jquery') , '3.3.7' , true );
        wp_enqueue_script( 'scrollUp', JS_FILE.'scrollUp.min.js', array('jquery') , '2.4.1' , true );
        wp_enqueue_script( 'owl-carousel', JS_FILE.'owl.carousel.min.js', array('jquery') , '2.7.1' , true );
        wp_enqueue_script( 'qsoft-script', JS_FILE.'main.js', array('jquery') , '1.0.0' , true );
    }
}