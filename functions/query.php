<?php


function custom_posts_per_page($query) {
    if (is_home()) {
        $query->set('posts_per_page', 6);
    }

    if ( $query->is_home() && $query->is_main_query() ) {
        $query->set('posts_per_page', 12);
    } 
    if (    $query->is_category() 
    ) {
        $query->set('posts_per_page', 100);
    } 
} 

//this adds the function above to the 'pre_get_posts' action     
add_action('pre_get_posts', 'custom_posts_per_page');


?>