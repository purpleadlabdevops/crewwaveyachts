<?php

function consultAction(){
  global $wpdb;

  require_once( ABSPATH . 'wp-admin/includes/file.php' );

  $position = $_POST['position'];
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $summary = $_FILES['summary'];
  $overrides = [ 'test_form' => false ];


  $upload_file = wp_handle_upload( $summary, $overrides );

  if($upload_file){

    $wpdb->insert(
      'candidates',
      [
        'position' => $position,
        'name' => $name,
        'phone' => $phone,
        'email' => $email,
        'summary' => json_encode($upload_file)
      ]
    );

    $inserted_id = $wpdb->insert_id;

    if($inserted_id){
      $msg = [
        'status' => 'success',
        'msg' => 'Your id is '.$inserted_id
      ];
    } else {
      $msg = [
        'status' => 'error',
        'msg' => 'Some error with db!'
      ];
    }

  } else {
    $msg = [
      'status' => 'error',
      'msg' => 'Some error with file saving!'
    ];
  }

  echo json_encode($msg);

  wp_die();
}
add_action('wp_ajax_consultAction', 'consultAction');
add_action('wp_ajax_nopriv_consultAction', 'consultAction');