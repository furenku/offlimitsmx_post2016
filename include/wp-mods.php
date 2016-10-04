<?php


function get_lazyload_thumbnail( $post_id = false, $size = 'post-thumbnail' ) {
   if ( $post_id ) {

      $attachment_id = get_post_thumbnail_id( $post_id );
      if ( $attachment_id ) {
         $src = wp_get_attachment_image_src( $attachment_id, $size );
         if ($src) {
            $img = get_the_post_thumbnail( $post_id, $size, array(
               'class' => 'b-lazy',
               'data-src' => $src[0],
               'src' => 'data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==',
               'alt'=>get_the_title()

               ) );
               return $img; // returns image tag string or '' (empty string)
            }
         }
      }
      return false; // missing either: post_id, attachment_id, or src
   }


 ?>
