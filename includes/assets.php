<?php

function Physionics_assets(){

    wp_enqueue_style('Physionics',get_template_directory_uri() .'/css/main.css',microtime());
} 

add_action('wp_enqueue_scripts','Physionics_assets')


?>