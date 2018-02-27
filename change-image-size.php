add_action( 'init', function() {
  add_image_size( 'wpcm_my_custom_listing_image_size', 350, 150, true );
} );

add_filter( 'wpcm_listings_vehicle_thumbnail_size', function( $image_size ) {
  return 'wpcm_my_custom_listing_image_size';
} );