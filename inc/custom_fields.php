<?php # -*- coding: utf-8 -*-
/*
Plugin Name: Enable Custom Fields per Default
Version:     1.0
Required:    3.1
Author:      Thomas Scholz
Author URI:  http://toscho.de
License:     GPL
*/
! defined( 'ABSPATH' ) and exit;
add_filter( 'default_hidden_meta_boxes', 'enable_custom_fields_per_default', 20, 1 );

/**
 * Removes custom fields from the default hidden elements.
 *
 * The original ( wp-admin/includes/template.php#get_hidden_meta_boxes() ):
 * array(
 *      'slugdiv',
 *      'trackbacksdiv',
 *      'postcustom',      <-- we need this
 *      'postexcerpt',
 *      'commentstatusdiv',
 *      'commentsdiv',
 *      'authordiv',
 *      'revisionsdiv'
 * )
 *
 * It has no effect if the user has decided to hide the box.
 * This option is saved in "metaboxhidden_{$screen->id}"
 *
 * @param  array $hidden
 * @return array $hidden
 */
function enable_custom_fields_per_default( $hidden )
{
    foreach ( $hidden as $i => $metabox )
    {
      if ( 'postcustom' == $metabox )
      {
          unset ( $hidden[$i] );
      }
  }
  return $hidden;
}