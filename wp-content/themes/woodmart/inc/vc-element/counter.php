<?php
/**
* ------------------------------------------------------------------------------------------------
* Animated counter element map
* ------------------------------------------------------------------------------------------------
*/

if( ! function_exists( 'woodmart_vc_map_animated_counter' ) ) {
	function woodmart_vc_map_animated_counter() {
		vc_map( array(
			'name' => esc_html__( 'Animated Counter', 'woodmart' ),
			'description' => esc_html__( 'Shows animated counter with label', 'woodmart' ),
			'base' => 'woodmart_counter',
			'category' => esc_html__( 'Theme elements', 'woodmart' ),
        	'icon' => WOODMART_ASSETS . '/images/vc-icon/animated-counter.svg',
			'params' => array(
				array(
					'type' => 'textfield',
					'heading' => esc_html__( 'Label', 'woodmart' ),
					'param_name' => 'label'
				),
				array(
					'type' => 'textfield',
					'heading' => esc_html__( 'Actual value', 'woodmart' ),
					'param_name' => 'value',
					'description' => esc_html__('Our final point. For ex.: 95', 'woodmart' )
				),
				array(
					'type' => 'dropdown',
					'heading' => esc_html__( 'Size', 'woodmart' ),
					'param_name' => 'size',
					'value' => array(
						esc_html__( 'Default', 'woodmart' ) => '',
						esc_html__( 'Small', 'woodmart' ) => 'small',
						esc_html__( 'Large', 'woodmart' ) => 'large',
					),
				),
				array(
					'type' => 'textfield',
					'heading' => esc_html__( 'Extra class name', 'woodmart' ),
					'param_name' => 'el_class',
					'description' => esc_html__( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'woodmart' )
				)
			)
		) );
	}
	add_action( 'vc_before_init', 'woodmart_vc_map_animated_counter' );
}