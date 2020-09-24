<?php


//Connection types (posts 2 posts plugin)



function page_to_kronologia() {
    p2p_register_connection_type( array(
        'name' => 'page_to_kronologia',
        'from' => 'page',
        'to' => 'kronologia'
    ) );
}
add_action( 'p2p_init', 'page_to_kronologia' );

function post_to_kronologia() {
    p2p_register_connection_type( array(
        'name' => 'post_to_kronologia',
        'from' => 'post',
        'to' => 'kronologia'
    ) );
}
add_action( 'p2p_init', 'post_to_kronologia' );


?>