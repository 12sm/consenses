<?php 
add_filter('frm_validate_field_entry', 'my_custom_validation', 8, 3);

//Create a parent relationship after completion of form
function frm_after_create_entry($errors, $posted_field, $posted_value){
  if($posted_field->id == 108){ //change 25 to the ID of any field in your form
  	global $frmdb;
    $id = $entry_post_id; //gets id of child post (not working)
    $parent = $_POST['item_meta'][108]; //gets id of parent from form
    update_post_meta($id,'_wpcf_belongs_chain_id', $parent);
    echo "$id is the child";
    echo "$parent this is the parent";
  }
  return $errors;
}


define( 'UPLOADS', ''.'assets' );

?>