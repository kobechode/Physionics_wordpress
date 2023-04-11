<?php


function Physionics_custom_post(){


$Physionics_label = array (

'name'              =>__('Physionics Post','textdomain'),
'singular_name'              =>__('Physionics Post','textdomain'),
'add_new'              =>__('Physionics','textdomain'),
'add_new_item'              =>__('Physionics  Post','textdomain'),
 'edit_item'              =>__('Edit Physionics Post','textdomain'),
 'all_items'              =>__('Physionics Post','textdomain'),

);

$Physionics_args = array (

    'labels' => $Physionics_label,
    'public' => true,
    'capability_type' => 'post',
    'show_ui'  => true,
    'taxonomies' => array ('post_tag','category'),
    'supports'   => array('title','editor','thumbnail','excerpt')

);

register_post_type ('Physionics' , $Physionics_args);

// $LatestStories_label = array (
    
//     'name'              =>__('Latest Post','textdomain'),
//     'singular_name'              =>__('Blog Post','textdomain'),
//     'add_new'              =>__('Add Blog Post','textdomain'),
//     'add_new_item'              =>__('Add New  Blog Post','textdomain'),
//      'edit_item'              =>__('Edit Blog Post','textdomain'),
//      'all_items'              =>__('Blog Post','textdomain'),
    
//     );
    
//     $LatestStories_args = array (
    
//         'labels' => $LatestStories_label,
//         'public' => true,
//         'capability_type' => 'post',
//         'show_ui'  => true,
//         'taxonomies' => array('post_tag','category'),
//         'supports'   => array('title','editor','thumbnail','excerpt')
    
//     );
    
//     register_post_type ('latestStories' , $LatestStories_args);



 
//     $featurePost_label = array(
//             'name'          => __('Feature Post', 'textdomain'),
//             'singular_name' => __('Feature Post', 'textdomain'),
//             'add_new'       => __('Add Feature Post', 'textdomain'),
//             'add_new_item'  => __('Add New Feature Post', 'textdomain'),
//             'edit_item'     => __('Edit Feature Post', 'textdomain'),
//             'all_items'     => __('Feature Post', 'textdomain')
//         );
    
//         $featurePost_args = array(
//             'labels'            => $featurePost_label,
//             'public'            => true,
//             'capability_type'   => 'post',
//             'show_ui'           => true,
//             'taxonomies'        => array('post_tag', 'category'),
//             'supports'          => array('title', 'editor', 'thumbnail', 'excerpt')
//         );


//         register_post_type ('featurePost' , $featurePost_args);

}



 










add_action('init','Physionics_custom_post');
 




