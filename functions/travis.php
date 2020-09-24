<?php 
/* This is travis http call when post is saved if needed

function save_campaings( $post_id, $post, $update ) {

$post_type = get_post_type($post_id);

// If saved post isn't in a post type 'campaings', don't do anything
if ( "campaings" != $post_type ) return;

  // POST REQUEST HERE
  $response = wp_remote_post( 'https://api.travis-ci.com/repo/frc%2Ftyoelake-elakepatakka/requests', array(
  'method' => 'POST',
  'timeout' => 45,
  'httpversion' => '1.0',
  'blocking' => true,
  'headers' => array(
    'Content-Type' => 'application/json',
    'Accept' => 'application/json',
    'Travis-API-Version' => 3,
    'Authorization' => 'token YIBjAKv10G9T5DPkDdRMOw',
  ),
  'body' => json_encode(array( 'request' => array(
    'branch' => 'master'
  ))
    ))
);

if ( is_wp_error( $response ) ) {
  $error_message = $response->get_error_message();
  echo "Something went wrong: $error_message";
} else {
  return;
}

}
add_action( 'save_post', 'save_campaings', 10, 3 );

*/
