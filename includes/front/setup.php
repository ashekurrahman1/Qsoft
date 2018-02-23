<?php
/*-- After-Setup-Theme --*/
if( ! function_exists('qsoft_after_setup') ){
    function qsoft_after_setup(){
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
    }
}