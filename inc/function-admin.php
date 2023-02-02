<?php
/**
 * Customize the title for the home page, if one is not set.
 */
function wpdocs_hack_wp_title_for_home( $title ){
  if ( empty( $title ) && ( is_home() || is_front_page() ) ) {
    $title = __( 'Home', 'textdomain' );
  }
  return $title;
}