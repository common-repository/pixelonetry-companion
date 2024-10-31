<?php
function pixelonetry_companion_elina_burger_general_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	
	 /*=========================================
	Frontpage Panel
	=========================================*/
	$wp_customize->add_panel(
		'elina_frontpage_sections', array(
			'priority' => 32,
			'title' => esc_html__( 'Pront Page Sections', 'pixelonetry-companion' ),
		)
	);
	// Blog content Section // 

}

add_action( 'customize_register', 'pixelonetry_companion_elina_burger_general_setting' );
