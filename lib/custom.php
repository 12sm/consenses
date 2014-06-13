<?php 
add_filter('frm_validate_field_entry', 'my_custom_validation', 8, 3);
function my_custom_validation($errors, $posted_field, $posted_value){
  if($posted_field->id == 108){ //change 25 to the ID of any field in your form
    $_POST['item_meta'][108] = $_POST['frm_wp_post']['108=post_parent']  ;
    echo 'it knows the right form';
    $id = $_POST['item_meta'][108];
    echo $id; //change 30 to the ID of your WP parent page (ourmembers)
  }
  return $errors;
}

define( 'UPLOADS', ''.'assets' );

?>