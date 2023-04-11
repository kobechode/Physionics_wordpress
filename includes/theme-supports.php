<?php



function Physionicss_support(){

    register_nav_menus(array(

          'header-menu' => __('Header Menu', 'text_domain')

    ));

    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme','Physionicss_support');



