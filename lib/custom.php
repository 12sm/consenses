<?php 
add_filter('frm_after_create_entry', 'create_form_parent', 41, 2);
add_filter('frm_after_create_entry', 'create_artists_parent', 41, 2);
//Grab id of 'Artist post'
function create_artist_parent($entry_id, $form_id){
  if($form_id == 10){
  	global $artist_id;
  global $frm_entry;
  $entry = $frm_entry->getOne($entry_id);
  $artist_id = $entry->post_id;
  echo "<div id='artist-content'>".$artist_id."</div>";
  update_post_meta($post_id,'_wpcf_belongs_chains_id', $parent);
  echo "
  <script>
  $(document).ready(function(){
  $('#submit-form').modal();
});
  </script>
  ";
	}
}
//Create a parent relationship after completion of form
function create_form_parent($entry_id, $form_id){
  if($form_id == 9){ //select form id
  	global $frm_entry;
  	$artist_id = $_POST['item_meta'][112];
    $entry = $frm_entry->getOne($entry_id);
    $post_id = $entry->post_id; //gets id of child post (not working)
    $parent = $_POST['item_meta'][108]; //gets id of parent from form
    update_post_meta($post_id,'_wpcf_belongs_chains_id', $parent);
    add_post_meta($post_id,'_wpcf_belongs_artists_id', $artist_id);
    echo "$post_id is the child";
    echo "$parent this is the parent";
    echo "$artist_id";
  }
}

//Length shortcode
add_shortcode('trim', 'trim_shortcode');
function trim_shortcode($atts, $content = '') {
  $content = wpv_do_shortcode($content);
  $length = (int)$atts['length'];
  if (strlen($content) > $length) {
    $content = substr($content, 0, $length) . '&hellip;';
  }
  return $content;
}


add_filter('frm_upload_folder', 'frm_custom_upload');
function frm_custom_upload($folder){
    $folder = '';
    return $folder;
}

define( 'UPLOADS', ''.'assets' );

?>