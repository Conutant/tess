<?php
/*
 * section HEADER LAYOUT
 */

   	$wp_customize->add_section( 'tesseract_header_layouts' , array(
    	'title'      => __('Header Layout', 'tesseract'),
    	'priority'   => 1,
		'panel'      => 'tesseract_header_options'
	) );


		$wp_customize->add_setting( 'tesseract_header_layout_setting', array(
				'sanitize_callback' => 'tesseract_sanitize_select_header_layout_types',
				'default' 			=> 'defaultlayout'
		) );

			$wp_customize->add_control(
				new WP_Customize_Control(
				$wp_customize,
				'tesseract_header_layout_setting_control',
				array(
					'label'      => __( 'Header Layout Option', 'tesseract' ),
					'section'    => 'tesseract_header_layouts',
					'settings'   => 'tesseract_header_layout_setting',
					'type'          => 'select',
					'default'       => 'defaultlayout',
					'choices'		=> array(
						'none'  	                => 	'None',
						'navbottom'        			=> 	'Nav Bottom',
						'navright'			    	=>  'Nav Right & Logo Left',
						'navleft'			    	=>  'Nav Left & Logo Right',
						'navcentered'				=>  'Nav Centered',
						'centered-inline-logo'		=>  'Nav Centered + Inline Logo',
						'vertical-left'				=>  'Nav Vertical Left',
						'vertical-right'			=>  'Nav Vertical Right',
						'defaultlayout'			    =>  'Default'
						),
					'priority'   => 1
				) )
			);