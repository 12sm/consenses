<?php 
add_filter('frm_validate_field_entry', 'my_custom_validation', 8, 3);
function my_custom_validation($errors, $posted_field, $posted_value){
  if($posted_field->id == 108){ //change 25 to the ID of any field in your form
    $_POST['frm_wp_post']['post_parent'] = $_POST['item_meta'][108];
    $_POST['frm_wp_post']['108=_wpcf_belongs_chain_id'] = $_POST['frm_wp_post']['post_parent'
  }
  return $errors;
}

define( 'UPLOADS', ''.'assets' );

?>