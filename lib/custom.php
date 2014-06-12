<?php 

define( 'UPLOADS', ''.'assets' );

add_filter('frm_validate_field_entry', 'my_custom_validation', 8, 3);
function my_custom_validation($errors, $posted_field, $posted_value){
  if($posted_field->id == 106){ //change 25 to the ID of any field in your form
    $_POST['frm_wp_post']['=post_parent'] = $_POST['item_meta'][106]; //change 30 to the ID of your WP parent page (ourmembers)
  }
  return $errors;
}

?>