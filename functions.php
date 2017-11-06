<?php
define('WP_SCSS_ALWAYS_RECOMPILE', true);

function echo_first_image( $postID ) {
    $args = array('numberposts' => 1,
              'order' => 'DESC',
          'post_mime_type' => 'image',
          'post_parent' => $postID,
          'post_status' => null,
          'post_type' => 'attachment',
        );

    $attachments = get_children( $args );

    if ( $attachments ) {
        foreach ( $attachments as $attachment ) {
            $image_attributes = wp_get_attachment_image_src( $attachment->ID, 'medium' );
            echo '<img src="' . $image_attributes[0] . '" class="current"/>';
        }
    }
}

function get_random_blog_entry_class () {
  $items = array('red', 'blue', 'yellow', 'green');
  return $items[array_rand($items)];
}

function image_list ( $postID ) {
  $args = array('order' => 'DESC',
        'post_mime_type' => 'image',
        'post_parent' => $postID,
        'post_status' => null,
        'post_type' => 'attachment',
      );

  $attachments = get_children( $args );

  if ( $attachments ) {
      foreach ( $attachments as $attachment ) {
          $image_attributes = wp_get_attachment_image_src( $attachment->ID, 'large' );
          echo '<img src="' . $image_attributes[0] . '" class="hidden"/>';
      }
  }
}

?>
