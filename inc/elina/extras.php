<?php
/*
 *
 * Social Icon
 */
function pixelonetry_companion_get_social_icon_default() {
	return apply_filters(
		'pixelonetry_companion_get_social_icon_default', json_encode(
				 array(
				array(
					'icon_value'	  =>  esc_html__( 'fa-facebook', 'pixelonetry-companion' ),
					'link'	  =>  esc_html__( '#', 'pixelonetry-companion' ),
					'id'              => 'customizer_repeater_header_social_001',
				),
				array(
					'icon_value'	  =>  esc_html__( 'fa-twitter', 'pixelonetry-companion' ),
					'link'	  =>  esc_html__( '#', 'pixelonetry-companion' ),
					'id'              => 'customizer_repeater_header_social_003',
				),
				array(
					'icon_value'	  =>  esc_html__( 'fa-instagram', 'pixelonetry-companion' ),
					'link'	  =>  esc_html__( '#', 'pixelonetry-companion' ),
					'id'              => 'customizer_repeater_header_social_004',
				),
			)
		)
	);
}



/*
 *
 * Footer Social Icon
 */
function pixelonetry_companion_get_footer_social_icon_default() {
	return apply_filters(
		'pixelonetry_companion_get_footer_social_icon_default', json_encode(
				 array(
				array(
					'icon_value'	  =>  esc_html__( 'fa-facebook', 'pixelonetry-companion' ),
					'link'	  =>  esc_html__( '#', 'pixelonetry-companion' ),
					'id'              => 'customizer_repeater_footer_social_001',
				),
				array(
					'icon_value'	  =>  esc_html__( 'fa-twitter', 'pixelonetry-companion' ),
					'link'	  =>  esc_html__( '#', 'pixelonetry-companion' ),
					'id'              => 'customizer_repeater_footer_social_002',
				),
				array(
					'icon_value'	  =>  esc_html__( 'fa-google-plus', 'pixelonetry-companion' ),
					'link'	  =>  esc_html__( '#', 'pixelonetry-companion' ),
					'id'              => 'customizer_repeater_footer_social_003',
				),
				array(
					'icon_value'	  =>  esc_html__( 'fa-pinterest', 'pixelonetry-companion' ),
					'link'	  =>  esc_html__( '#', 'pixelonetry-companion' ),
					'id'              => 'customizer_repeater_footer_social_004',
				),
				array(
					'icon_value'	  =>  esc_html__( 'fa-instagram', 'pixelonetry-companion' ),
					'link'	  =>  esc_html__( '#', 'pixelonetry-companion' ),
					'id'              => 'customizer_repeater_footer_social_005',
				),
				array(
					'icon_value'	  =>  esc_html__( 'fa-dribbble', 'pixelonetry-companion' ),
					'link'	  =>  esc_html__( '#', 'pixelonetry-companion' ),
					'id'              => 'customizer_repeater_footer_social_006',
				),
				array(
					'icon_value'	  =>  esc_html__( 'fa-linkedin', 'pixelonetry-companion' ),
					'link'	  =>  esc_html__( '#', 'pixelonetry-companion' ),
					'id'              => 'customizer_repeater_footer_social_007',
				),
				array(
					'icon_value'	  =>  esc_html__( 'fa-skype', 'pixelonetry-companion' ),
					'link'	  =>  esc_html__( '#', 'pixelonetry-companion' ),
					'id'              => 'customizer_repeater_footer_social_008',
				),
			)
		)
	);
}



/*
 *
 * Footer Contact Info
 */
 function pixelonetry_companion_get_foot_info_default() {
	return apply_filters(
		'pixelonetry_companion_get_foot_info_default', json_encode(
				 array(
				array(
					'title'           => esc_html__( 'Online 24/7', 'pixelonetry-companion' ),
					'text'            => esc_html__( '70 975 975 70', 'pixelonetry-companion' ),
					'icon_value'       => 'fa-comments',
					'id'              => 'customizer_repeater_foot_info_001',
					
				),
				array(
					'title'           => esc_html__( 'Send Us Email', 'pixelonetry-companion' ),
					'text'            => esc_html__( 'Info@example.com', 'pixelonetry-companion' ),
					'icon_value'       => 'fa-envelope',
					'id'              => 'customizer_repeater_foot_info_002',			
				),
			)
		)
	);
}


/*
 *
 * Slider Default
 */
 function pixelonetry_companion_get_slider_default() {
	return apply_filters(
		'pixelonetry_companion_get_slider_default', json_encode(
				 array(
				array(
					'image_url'       => PIXELONETRY_COMPANION_PLUGIN_URL . 'inc/elina/images/slider/img01.jpg',
					'title'           => esc_html__( 'New Skills', 'pixelonetry-companion' ),
					'subtitle'         => esc_html__( 'Best Choice For Your Business', 'pixelonetry-companion' ),
					'text'            => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor labore', 'pixelonetry-companion' ),
					'text2'	  =>  esc_html__( 'Purchase Now', 'pixelonetry-companion' ),
					'link'	  =>  esc_html__( '#', 'pixelonetry-companion' ),
					'button_second'	  =>  esc_html__( 'Learn More', 'pixelonetry-companion' ),
					'link2'	  =>  esc_html__( '#', 'pixelonetry-companion' ),
					"slide_align" => "left", 
					'id'              => 'customizer_repeater_slider_001',
				),
				array(
					'image_url'       => PIXELONETRY_COMPANION_PLUGIN_URL . 'inc/elina/images/slider/img02.jpg',
					'title'           => esc_html__( 'Develop Stronger Minds', 'pixelonetry-companion' ),
					'subtitle'         => esc_html__( 'Better Coaching Gets', 'pixelonetry-companion' ),
					'text'            => esc_html__( 'There are many variations of passages of Lorem Ipsum available but the majority have suffered injected humour dummy now.', 'pixelonetry-companion' ),
					'text2'	  =>  esc_html__( 'Purchase Now', 'pixelonetry-companion' ),
					'link'	  =>  esc_html__( '#', 'pixelonetry-companion' ),
					'button_second'	  =>  esc_html__( 'Learn More', 'pixelonetry-companion' ),
					'link2'	  =>  esc_html__( '#', 'pixelonetry-companion' ),
					"slide_align" => "center", 
					'id'              => 'customizer_repeater_slider_002',
				),
				array(
					'image_url'       => PIXELONETRY_COMPANION_PLUGIN_URL . 'inc/elina/images/slider/img03.jpg',
					'title'           => esc_html__( 'Industry Analysis', 'pixelonetry-companion' ),
					'subtitle'         => esc_html__( 'Marketing & Strategy', 'pixelonetry-companion' ),
					'text'            => esc_html__( 'There are many variations of passages of Lorem Ipsum available but the majority have suffered injected humour dummy now.', 'pixelonetry-companion' ),
					'text2'	  =>  esc_html__( 'Purchase Now', 'pixelonetry-companion' ),
					'link'	  =>  esc_html__( '#', 'pixelonetry-companion' ),
					'button_second'	  =>  esc_html__( 'Learn More', 'pixelonetry-companion' ),
					'link2'	  =>  esc_html__( '#', 'pixelonetry-companion' ),
					"slide_align" => "right", 
					'id'              => 'customizer_repeater_slider_003',
			
				),
			)
		)
	);
}


/*
 *
 * Info Default
 */
 function pixelonetry_companion_get_info_default() {
	return apply_filters(
		'pixelonetry_companion_get_info_default', json_encode(
				 array(
				array(
					'title'           => esc_html__( 'Expert Work', 'pixelonetry-companion' ),
					'text'            => esc_html__( 'Lorem ipsum dolor sit amet, consectetur.', 'pixelonetry-companion' ),
					'icon_value'       => 'fa-user',
					'image_url'       => PIXELONETRY_COMPANION_PLUGIN_URL . 'inc/elina/images/about/design-img.png',
					'id'              => 'customizer_repeater_info_001',
					
				),
				array(
					'title'           => esc_html__( '24/7 Support', 'pixelonetry-companion' ),
					'text'            => esc_html__( 'Lorem ipsum dolor sit amet, consectetur.', 'pixelonetry-companion' ),
					'icon_value'       => 'fa-headphones',
					'image_url'       => PIXELONETRY_COMPANION_PLUGIN_URL . 'inc/elina/images/about/design-img.png',
					'id'              => 'customizer_repeater_info_002',				
				),
				array(
					'title'           => esc_html__( 'Creative Design', 'pixelonetry-companion' ),
					'text'            => esc_html__( 'Lorem ipsum dolor sit amet, consectetur.', 'pixelonetry-companion' ),
					'icon_value'       => 'fa-edit',
					'id'              => 'customizer_repeater_info_003',
					'image_url'       => PIXELONETRY_COMPANION_PLUGIN_URL . 'inc/elina/images/about/design-img.png',
				),
				array(
					'title'           => esc_html__( 'Well Experienced', 'pixelonetry-companion' ),
					'text'            => esc_html__( 'Lorem ipsum dolor sit amet, consectetur.', 'pixelonetry-companion' ),
					'icon_value'       => 'fa-trophy',
					'image_url'       => PIXELONETRY_COMPANION_PLUGIN_URL . 'inc/elina/images/about/design-img.png',
					'id'              => 'customizer_repeater_info_004',
				),
			)
		)
	);
}



/*
 *
 * Service Default
 */
 function pixelonetry_companion_get_service_default() {
	return apply_filters(
		'pixelonetry_companion_get_service_default', json_encode(
				 array(
				array(
					'icon_value'       => 'fa-bar-chart',
					'title'           => esc_html__( 'Web Development', 'pixelonetry-companion' ),
					'text'            => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do etc.', 'pixelonetry-companion' ),
					'text2'	  =>  esc_html__( 'Read More', 'pixelonetry-companion' ),
					'id'              => 'customizer_repeater_service_001',
					
				),
				array(
					'icon_value'       => 'fa-life-ring',
					'title'           => esc_html__( 'Database Analysis', 'pixelonetry-companion' ),
					'text'            => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do etc.', 'pixelonetry-companion' ),
					'text2'	  =>  esc_html__( 'Read More', 'pixelonetry-companion' ),
					'id'              => 'customizer_repeater_service_002',				
				),
				array(
					'icon_value'       => 'fa-paint-brush',
					'title'           => esc_html__( 'Server Security', 'pixelonetry-companion' ),
					'text'            => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do etc.', 'pixelonetry-companion' ),
					'text2'	  =>  esc_html__( 'Read More', 'pixelonetry-companion' ),
					'id'              => 'customizer_repeater_service_003',
				),
			)
		)
	);
}


/*
 *
 * Design & Develpement Default
 */
 function pixelonetry_companion_get_design_default() {
	return apply_filters(
		'pixelonetry_companion_get_design_default', json_encode(
				 array(
				array(
					'icon_value'       => 'fa-bar-chart',
					'title'           => esc_html__( 'Flexible Office ', 'pixelonetry-companion' ),
					'id'              => 'customizer_repeater_design_001',
					
				),
				array(
					'icon_value'       => 'fa-search',
					'title'           => esc_html__( 'Macbook Pro', 'pixelonetry-companion' ),
					'id'              => 'customizer_repeater_design_002',				
				),
				array(
					'icon_value'       => 'fa-life-ring',
					'title'           => esc_html__( 'Training & Support', 'pixelonetry-companion' ),
					'id'              => 'customizer_repeater_design_003',
				),
				array(
					'icon_value'       => 'fa-umbrella',
					'title'           => esc_html__( 'Generous Holidays', 'pixelonetry-companion' ),
					'id'              => 'customizer_repeater_design_004',
				),
				array(
					'icon_value'       => 'fa-coffee',
					'title'           => esc_html__( 'Friday Teatime', 'pixelonetry-companion' ),
					'id'              => 'customizer_repeater_design_005',
				),
				array(
					'icon_value'       => 'fa-th',
					'title'           => esc_html__( 'Well Stocked Fridge', 'pixelonetry-companion' ),
					'id'              => 'customizer_repeater_design_006',
				),
				array(
					'icon_value'       => 'fa-paint-brush',
					'title'           => esc_html__( 'Design & Branding', 'pixelonetry-companion' ),
					'id'              => 'customizer_repeater_design_007',
				),
				array(
					'icon_value'       => 'fa-truck',
					'title'           => esc_html__( 'More Stuff', 'pixelonetry-companion' ),
					'id'              => 'customizer_repeater_design_008',
				)
			)
		)
	);
}


/*
 *
 * Funfact Default
 */
 function pixelonetry_companion_get_funfact_default() {
	return apply_filters(
		'pixelonetry_companion_get_funfact_default', json_encode(
				 array(
				array(
					'title'           => esc_html__( '254', 'pixelonetry-companion' ),
					'subtitle'           => esc_html__( '+', 'pixelonetry-companion' ),
					'text'            => esc_html__( 'Expert Consultants', 'pixelonetry-companion' ),
					'image_url'       => PIXELONETRY_COMPANION_PLUGIN_URL . 'inc/spinsoft/images/funfact/img01.png',
					'id'              => 'customizer_repeater_funfact_001',
					
				),
				array(
					'title'           => esc_html__( '807', 'pixelonetry-companion' ),
					'subtitle'           => esc_html__( '+', 'pixelonetry-companion' ),
					'text'            => esc_html__( 'Development Hours', 'pixelonetry-companion' ),
					'image_url'       => PIXELONETRY_COMPANION_PLUGIN_URL . 'inc/spinsoft/images/funfact/img02.png',
					'id'              => 'customizer_repeater_funfact_002',			
				),
				array(
					'title'           => esc_html__( '926', 'pixelonetry-companion' ),
					'subtitle'           => esc_html__( '+', 'pixelonetry-companion' ),
					'text'            => esc_html__( 'Trusted Clients', 'pixelonetry-companion' ),
					'image_url'       => PIXELONETRY_COMPANION_PLUGIN_URL . 'inc/spinsoft/images/funfact/img03.png',
					'id'              => 'customizer_repeater_funfact_003',
				),
				array(
					'title'           => esc_html__( '543', 'pixelonetry-companion' ),
					'subtitle'           => esc_html__( '+', 'pixelonetry-companion' ),
					'text'            => esc_html__( 'Projects Delivered', 'pixelonetry-companion' ),
					'image_url'       => PIXELONETRY_COMPANION_PLUGIN_URL . 'inc/spinsoft/images/funfact/img04.png',
					'id'              => 'customizer_repeater_funfact_004',
				)
			)
		)
	);
}



/*
 *
 * Testimonial Default
 */
 
 function pixelonetry_companion_get_testimonial_default() {
	return apply_filters(
		'pixelonetry_companion_get_testimonial_default', json_encode(
			array(
				array(
					'title'           => esc_html__( 'Julia Corner', 'pixelonetry-companion' ),
					'subtitle'        => esc_html__( 'CEO', 'pixelonetry-companion' ),
					'text'            => esc_html__( 'Lorem ipsum dolor sit amet, Connect adipisicing elit, sed do tempor et aliqua.', 'pixelonetry-companion' ),
					'image_url'		  =>  PIXELONETRY_COMPANION_PLUGIN_URL . 'inc/spinsoft/images/testimonials/img01.png',
					'id'              => 'customizer_repeater_testimonial_001',
				),
				array(
					'title'           => esc_html__( 'Rizon Pet', 'pixelonetry-companion' ),
					'subtitle'        => esc_html__( 'Founder', 'pixelonetry-companion' ),
					'text'            => esc_html__( 'Lorem ipsum dolor sit amet, Connect adipisicing elit, sed do tempor et aliqua.', 'pixelonetry-companion' ),
					'image_url'		  =>  PIXELONETRY_COMPANION_PLUGIN_URL . 'inc/spinsoft/images/testimonials/img02.png',
					'id'              => 'customizer_repeater_testimonial_002',
				),
				array(
					'title'           => esc_html__( 'Miekel Stark', 'pixelonetry-companion' ),
					'subtitle'        => esc_html__( 'Designer', 'pixelonetry-companion' ),
					'text'            => esc_html__( 'Lorem ipsum dolor sit amet, Connect adipisicing elit, sed do tempor et aliqua.', 'pixelonetry-companion' ),
					'image_url'		  =>  PIXELONETRY_COMPANION_PLUGIN_URL . 'inc/spinsoft/images/testimonials/img03.png',
					'id'              => 'customizer_repeater_testimonial_003',
				)
		    )
		)
	);
}