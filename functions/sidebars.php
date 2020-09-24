<?php

//Add theme support to widget editing buttons (defaut widgets)
add_theme_support('customize-selective-refresh-widgets' );


/*
 * REGISTER SIDEBARS/WIDGET AREAS
 *
 */
function xiong_widgets_init() {



//POST SIDEBAR
	register_sidebar( array(
		'name'          => 'post_sidebar',
		'id'            => 'post_sidebar',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="rounded">',
		'after_title'   => '</h3>',
	) );

//FRONT SIDEBAR
register_sidebar( array(
        'name'          => 'Front sidebar',
        'id'            => 'front_sidebar',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="rounded">',
        'after_title'   => '</h3>',
    ) );


}
add_action( 'widgets_init', 'xiong_widgets_init' );




?>