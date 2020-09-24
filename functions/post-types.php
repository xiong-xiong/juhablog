<?php


// CV

function jst_register_cv_post_type () {

//Variables
$singular = 'Cv';
$plural = 'Cv';
$object = 'Cv';
$labels = array(
'name'                  => $plural, 
'singular_name'         => $singular,
'add_name'              => 'Lisää uusi',
'add_new_item'          => 'Lisää uusi ' . $singular,
'edit'                  => 'Muokkaa',
'edit_item'             => 'Muokkaa ' . $object,
'new_item'              => 'Uusi ' .$singular,
'view'                  => 'Näytä ' . $singular,
'view_item'             => 'Näytä ' . $singular,
'search_term'           => 'Etsi ' . $object,
'not_found'             => 'Ei löytynyt ko. ' . $object,  
'not_found_in_trash'    => 'Ei löytynyt ko. ' . $object . ' roskiksesta'

);

$args = array(
'labels'    => $labels,
'public'    => true,
'show_in_rest' => true,
'publicly_queryable' => true,
'exclude_from_search'=> true,
'show_ui'            => true,
'show_in_menu'       => true,
'show_in_admin_bar'  => true,
'menu_position'      => 20,
'menu_icon'          => 'dashicons-id-alt',
'can_export'         => true,
'delete_with_user'   => false,
'hierarchical'       => false,
'has_archive'        => true, 
'query_var'          => true,
'capability_type'    => 'post',
'map_meta_cap'       => true,
'taxonomies'         => array(
        'post_tag',
        'category'
        ),
'rewrite'            => array( 
        'slug'          => 'cv', 
        'with_front'    => true,
        'pages'         => true, //sivutus sallittu
        'feeds'         => false //rss sisällyttäminen
    ),
'supports'           => array( 
            'title',
            'editor',
            'thumbnail',
            'excerpt',
            'custom-fields',
            'revisions',
    )
);


register_post_type('cv', $args );
}

add_action('init', 'jst_register_cv_post_type' );



// Projects

function jst_register_projects_post_type () {

  //Variables
  $singular = 'projekti';
  $plural = 'projektit';
  $object = 'projektia';
  $labels = array(
  'name'                  => $plural, 
  'singular_name'         => $singular,
  'add_name'              => 'Lisää uusi',
  'add_new_item'          => 'Lisää uusi ' . $singular,
  'edit'                  => 'Muokkaa',
  'edit_item'             => 'Muokkaa ' . $object,
  'new_item'              => 'Uusi ' .$singular,
  'view'                  => 'Näytä ' . $singular,
  'view_item'             => 'Näytä ' . $singular,
  'search_term'           => 'Etsi ' . $object,
  'not_found'             => 'Ei löytynyt ko. ' . $object,  
  'not_found_in_trash'    => 'Ei löytynyt ko. ' . $object . ' roskiksesta'
  
  );
  
  $args = array(
  'labels'    => $labels,
  'public'    => true,
  'show_in_rest' => true,
  'publicly_queryable' => true,
  'exclude_from_search'=> true,
  'show_ui'            => true,
  'show_in_menu'       => true,
  'show_in_admin_bar'  => true,
  'menu_position'      => 20,
  'menu_icon'          => 'dashicons-id-alt',
  'can_export'         => true,
  'delete_with_user'   => false,
  'hierarchical'       => false,
  'has_archive'        => true, 
  'query_var'          => true,
  'capability_type'    => 'post',
  'map_meta_cap'       => true,
  'taxonomies'         => array(
          'post_tag',
          'category'
          ),
  'rewrite'            => array( 
          'slug'          => 'projects', 
          'with_front'    => true,
          'pages'         => true, //sivutus sallittu
          'feeds'         => false //rss sisällyttäminen
      ),
  'supports'           => array( 
              'title',
              'editor',
              'thumbnail',
              'excerpt',
              'custom-fields',
              'revisions',
      )
  );
  
  
  register_post_type('projects', $args );
  }
  
  add_action('init', 'jst_register_projects_post_type' );
  

  
// Calculators

function jst_register_calculators_post_type () {

  //Variables
  $singular = 'calculator';
  $plural = 'calculators';
  $object = 'calculator';
  $labels = array(
  'name'                  => $plural, 
  'singular_name'         => $singular,
  'add_name'              => 'Add new',
  'add_new_item'          => 'Add new ' . $singular,
  'edit'                  => 'Edit',
  'edit_item'             => 'Edit ' . $object,
  'new_item'              => 'New ' .$singular,
  'view'                  => 'Show ' . $singular,
  'view_item'             => 'Show ' . $singular,
  'search_term'           => 'Search ' . $object,
  'not_found'             => 'Could not find ' . $object,  
  'not_found_in_trash'    => 'Could not find ' . $object . ' from trash'
  
  );
  
  $args = array(
  'labels'    => $labels,
  'public'    => true,
  'show_in_rest' => true,
  'publicly_queryable' => true,
  'exclude_from_search'=> true,
  'show_ui'            => true,
  'show_in_menu'       => true,
  'show_in_admin_bar'  => true,
  'menu_position'      => 20,
  'menu_icon'          => 'dashicons-calculator',
  'can_export'         => true,
  'delete_with_user'   => false,
  'hierarchical'       => false,
  'has_archive'        => true, 
  'query_var'          => true,
  'capability_type'    => 'post',
  'map_meta_cap'       => true,
  'taxonomies'         => array(),
  'rewrite'            => array( 
          'slug'          => 'calculators', 
          'with_front'    => true,
          'pages'         => false, //sivutus sallittu
          'feeds'         => false //rss sisällyttäminen
      ),
  'supports'           => array( 
              'title',
              'editor',
              'thumbnail',
              'excerpt',
              'custom-fields',
              'revisions',
      )
  );
  
  
  register_post_type('calculators', $args );
  }
  
  add_action('init', 'jst_register_calculators_post_type' );