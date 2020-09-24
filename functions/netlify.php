<?php

function save_any_posttype( $post_id, $post, $update ) {

  // POST REQUEST HERE
  $response = wp_remote_post( 'https://api.netlify.com/build_hooks/5d3f3daaab04f5d0e988fb28', array(
  'method' => 'POST',
  'timeout' => 45,
  'httpversion' => '1.0',
  'blocking' => true,
  'headers' => array(
    'Content-Type' => 'application/json',
    'Accept' => 'application/json'
  ),
));

if ( is_wp_error( $response ) ) {
  $error_message = $response->get_error_message();
  echo "Something went wrong: $error_message";
} else {
  return;
}

}
add_action( 'save_post', 'save_any_posttype', 10, 3 );
?>
