<?php

add_filter( 'jet-engine/listing/grid/slider-options', function( $slider_options, $listing_settings ) {
if ( false !== strpos( $listing_settings['_css_classes'] ?? '', 'slider-direction-change' ) ) {
$slider_options['rtl'] = ! $slider_options['rtl'];
}
return $slider_options;
}, 0, 2 )

?>
