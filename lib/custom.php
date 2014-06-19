<?php 
add_filter('frm_after_create_entry', 'create_form_parent', 41, 2);

//Create a parent relationship after completion of form
function create_form_parent($entry_id, $form_id){
  if($form_id == 9){ //select form id
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