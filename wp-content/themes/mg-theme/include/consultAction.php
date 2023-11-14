<?php

function consultAction(){
  global $wpdb;

  require_once( ABSPATH . 'wp-admin/includes/file.php' );

  $position = $_POST['position'];
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $files_count = $_POST['filesCount'];
  $overrides = [ 'test_form' => false ];
  $files_arr = array();

  for ($i = 0; $i < $files_count; $i++) {
    $file = $_FILES['file'.$i];
    $uploaded_file = wp_handle_upload($file, $overrides);
    array_push($files_arr, $uploaded_file);
  }

  if($files_arr){

    $wpdb->insert(
      'candidates',
      [
        'position' => $position,
        'name' => $name,
        'phone' => $phone,
        'email' => $email,
        'summary' => json_encode($files_arr)
      ]
    );

    $inserted_id = $wpdb->insert_id;

    if($inserted_id){
      $msg = [
        'status' => 'success',
        'msg' => 'Your id is '.$inserted_id,
        'data' => json_encode($files_arr)
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
      'msg' => 'Some error with file saving!',
      'data' => json_encode($files_arr)
    ];
  }

  echo json_encode($msg);

  wp_die();
}
add_action('wp_ajax_consultAction', 'consultAction');
add_action('wp_ajax_nopriv_consultAction', 'consultAction');