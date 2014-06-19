<?php 
add_filter('frm_validate_field_entry', 'my_custom_validation', 8, 3);

//Create a parent relationship after completion of form
function my_custom_validation($errors, $posted_field, $posted_value){
  if($posted_field->id == 108){ //change 25 to the ID of any field in your form
    $id = $_POST['frm_wp_post'];
    $parent = $_POST['item_meta'][108];
    update_post_meta($id,'_wpcf_belongs_chain_id', $parent);
    echo "$id this is the id";
    echo "$parent this is the parent";  //change 30 to the ID of your WP parent page (ourmembers)
  }
  return $errors;
}


define( 'UPLOADS', ''.'assets' );

?>