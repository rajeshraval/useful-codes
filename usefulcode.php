<?php
/**
 * Method display_elementor_headers to change header dynamically based on page id.
 *
 * @return void
 */
function display_elementor_headers() {
	if ( is_page( array( 10, 20, 30 ) ) ) {
		echo do_shortcode( '[elementor-template id="10665"]' );
	} else {
		echo do_shortcode( '[elementor-template id="10665"]' );
	}
}
add_action( 'wp_head', 'display_elementor_headers' );
