<?php
/*
 * section WOOCOMMERCE
 */

	//Rename WooCommerce section to 'WooCommert Color Options' IF woocommerce-colors plugin is installed
	if ( is_plugin_active( 'woocommerce-colors/woocommerce-colors.php' ) ) {
	 	$wp_customize->get_section('woocommerce_colors')->title = __( 'WooCommerce Color Options', 'tesseract' );
	}

   	$wp_customize->add_section( 'tesseract_woocommerce' , array(
    	'title'      => __('WooCommerce Layout Options', 'tesseract'),
    	'priority'   => 61
	) );

		$wp_customize->add_setting( 'tesseract_woocommerce_loop_layout_header', array(
			'type'           	=> 'option',
			'transport'         => 'refresh',
			'sanitize_callback' => '__return_false'
			)
		);

			$wp_customize->add_control(
				new Tesseract_Customize_Header_Control(
				$wp_customize,
				'tesseract_woocommerce_loop_layout_header_control',
				array(
					'label' =>  __('Product Listings', 'tesseract' ),
					'section' => 'tesseract_woocommerce',
					'settings' => 'tesseract_woocommerce_loop_layout_header',
					'priority' => 	1
					)
				)
			);

		$wp_customize->add_setting( 'tesseract_woocommerce_loop_layout', array(
				'sanitize_callback' => 'tesseract_sanitize_select_woocommerce_layout_types',
				'default' 			=> 'fullwidth'
		) );

			$wp_customize->add_control(
				new WP_Customize_Control(
					$wp_customize,
					'tesseract_woocommerce_loop_layout_control',
					array(
						'label'         => __( 'Choose a layout type for product listings ( main shop and product category/tag archive pages )', 'tesseract' ),
						'section'       => 'tesseract_woocommerce',
						'settings'      => 'tesseract_woocommerce_loop_layout',
						'type'          => 'select',
						'choices'		=> array(
							'sidebar-left'  	=> 	'Left Sidebar',
							'sidebar-right'  	=> 	'Right Sidebar',
							'fullwidth'			=>  'Full Width'
						),
						'priority' 		=> 2
					)
				)
			);
        
		$wp_customize->add_setting( 'tesseract_woocommerce_titlecolor', array(
				'transport'         => 'postMessage',
				'sanitize_callback' => 'sanitize_hex_color',
				'default' 			=> '#ffffff'
		) );

			$wp_customize->add_control(
				new WP_Customize_Color_Control(
				$wp_customize,
				'tesseract_woocommerce_titlecolor_control',
				array(
					'label'      => __( 'Product Title Color', 'tesseract' ),
					'section'    => 'tesseract_woocommerce',
					'settings'   => 'tesseract_woocommerce_titlecolor',
					'priority'   => 3
				) )
			);
		
		$wp_customize->add_setting( 'tesseract_woocommerce_product_morebutton', array(
				'sanitize_callback' => 'tesseract_woocommerce_product_sanitize_morebutton',
				'default'			=> 'showcartbutton'				
		) );
		
			$wp_customize->add_control(
				new WP_Customize_Control(
					$wp_customize,
					'tesseract_woocommerce_product_morebutton_control',
					array(
						'label'          => __( 'Choose to Show or Hide Cart Button', 'tesseract' ),
						'section'        => 'tesseract_woocommerce',
						'settings'       => 'tesseract_woocommerce_product_morebutton',
						'type'           => 'radio',
						'choices'        => array(
							'showcartbutton'  	=> 'Show Add to Cart Button',
							'hidecartbutton' 	=> 'Hide Add to Cart Button',
							'showmorebutton' 	=> 'Show More Details Button'
						),
						'priority' 		 => 3										
					)
				)
			);
		
		$wp_customize->add_setting( 'tesseract_woocommerce_product_layout_header', array(
			'type'           	=> 'option',
			'transport'         => 'refresh',
			'sanitize_callback' => '__return_false'
			)
		);

			$wp_customize->add_control(
				new Tesseract_Customize_Header_Control(
				$wp_customize,
				'tesseract_woocommerce_product_layout_header_control',
				array(
					'label' =>  __('Single Product Pages', 'tesseract' ),
					'section' => 'tesseract_woocommerce',
					'settings' => 'tesseract_woocommerce_product_layout_header',
					'priority' => 4
					)
				)
			);
		
		$wp_customize->add_setting( 'tesseract_woocommerce_product_breadcrumb', array(
				'sanitize_callback' => 'tesseract_woocommerce_product_sanitize_breadcrumb',
				'default'			=> 'showbreadcrumb'				
		) );
		
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'tesseract_woocommerce_product_breadcrumb_control',
				array(
					'label'          => __( 'Choose to Show or Hide Breadcrumb', 'tesseract' ),
					'section'        => 'tesseract_woocommerce',
					'settings'       => 'tesseract_woocommerce_product_breadcrumb',
					'type'           => 'radio',
					'choices'        => array(
						'showbreadcrumb'  	=> 'Show Breadcrumb',
					    'hidebreadcrumb' 	=> 'Hide Breadcrumb'
					),
					'priority' 		 => 5										
				)
			)
		);
		
		
		$wp_customize->add_setting( 'tesseract_woocommerce_product_ratings', array(
				'sanitize_callback' => 'tesseract_woocommerce_product_sanitize_ratings',
				'default'			=> 'showratings'				
		) );
		
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'tesseract_woocommerce_product_ratings_control',
				array(
					'label'          => __( 'Choose to Show or Hide Ratings', 'tesseract' ),
					'section'        => 'tesseract_woocommerce',
					'settings'       => 'tesseract_woocommerce_product_ratings',
					'type'           => 'radio',
					'choices'        => array(
						'showratings'  	=> 'Show Ratings',
					    'hideratings' 	=> 'Hide Ratings'
					),
					'priority' 		 => 5										
				)
			)
		);
		
		$wp_customize->add_setting( 'tesseract_woocommerce_buttonbgcolor', array(
				'transport'         => 'postMessage',
				'sanitize_callback' => 'tesseract_sanitize_rgba',
				'default' 			=> '#fffff'
		) );

		$wp_customize->add_control(
			new WP_Customize_Color_Control(
			$wp_customize,
			'tesseract_woocommerce_buttonbgcolor_control',
			array(
				'label'      => __( 'Add to Cart Button Color', 'tesseract' ),
				'section'    => 'tesseract_woocommerce',
				'settings'   => 'tesseract_woocommerce_buttonbgcolor',
				'priority'   => 6
			) )
		);
		
		$wp_customize->add_setting( "tesseract_woocommerce_button_radius", array(
				'transport'         => 'postMessage',
				'sanitize_callback' => 'esc_html'
		));

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				"tesseract_woocommerce_button_radius_control",
				array(
					'label'          => __( 'Add to Cart Button radius for Rounded Corner', 'tesseract' ),
					'section'        => 'tesseract_woocommerce',
					'settings'       => 'tesseract_woocommerce_button_radius',
					'type'           => 'text',
					'priority' 		 => 7
				)
			)
		);
		
		$wp_customize->add_setting( 'tesseract_woocommerce_button_size', array(
			'sanitize_callback' => 'tesseract_woocommerce_sanitize_button_size',
			'default' 			=> 'woomedium'
		) );
		
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'tesseract_woocommerce_button_control',
				array(
					'label'          => __( 'Choose the Read More Button size', 'tesseract' ),
					'section'        => 'tesseract_woocommerce',
					'settings'       => 'tesseract_woocommerce_button_size',
					'type'           => 'radio',
					'choices'        => array(							
						'small'      =>  'Small size Button',						
						'medium'     =>  'Medium size Button',
						'large'      =>  'Large size Button',
					),
					'priority' 		 => 8										
				)
			)
		);
		
		$wp_customize->add_setting( 'tesseract_woocommerce_product_layout', array(
				'sanitize_callback' => 'tesseract_sanitize_select_woocommerce_layout_types',
				'default' 			=> 'fullwidth'
		) );

			$wp_customize->add_control(
				new WP_Customize_Control(
					$wp_customize,
					'tesseract_woocommerce_product_layout_control',
					array(
						'label'         => __( 'Choose a layout type for single product pages', 'tesseract' ),
						'section'       => 'tesseract_woocommerce',
						'settings'      => 'tesseract_woocommerce_product_layout',
						'type'          => 'select',
						'choices'		=> array(
							'sidebar-left'  	=> 	'Left Sidebar',
							'sidebar-right'  	=> 	'Right Sidebar',
							'fullwidth'			=>  'Full Width'
						),
						'priority' 		=> 9
					)
				)
			);

		$wp_customize->add_setting( 'tesseract_woocommerce_default_layout_header', array(
			'type'           	=> 'option',
			'transport'         => 'refresh',
			'sanitize_callback' => '__return_false'
			)
		);

			$wp_customize->add_control(
				new Tesseract_Customize_Header_Control(
				$wp_customize,
				'tesseract_woocommerce_default_layout_header_control',
				array(
					'label' =>  __('Checkout, Account and Cart pages ', 'tesseract' ),
					'section' => 'tesseract_woocommerce',
					'settings' => 'tesseract_woocommerce_default_layout_header',
					'priority' => 10
					)
				)
			);

		$wp_customize->add_setting( 'tesseract_woocommerce_default_layout', array(
			'type'           	=> 'option',
			'transport'         => 'refresh',
			'sanitize_callback' => '__return_false'
			)
		);

			$wp_customize->add_control(
				new Tesseract_Customize_Header_Control(
				$wp_customize,
				'tesseract_woocommerce_default_layout_control',
				array(
					'label' =>  __('You can set the layout type for the Checkout, Account and Cart pages by using the default page template dropdown on the appropriate page\'s edit screen.', 'tesseract' ),
					'section' => 'tesseract_woocommerce',
					'settings' => 'tesseract_woocommerce_default_layout',
					'priority' => 10
					)
				)
			);

		$wp_customize->add_setting( 'tesseract_woocommerce_headercart_header', array(
			'type'           	=> 'option',
			'transport'         => 'refresh',
			'sanitize_callback' => '__return_false'
			)
		);

			$wp_customize->add_control(
				new Tesseract_Customize_Header_Control(
				$wp_customize,
				'tesseract_woocommerce_headercart_header_control',
				array(
					'label' =>  __('Header Cart', 'tesseract' ),
					'section' => 'tesseract_woocommerce',
					'settings' => 'tesseract_woocommerce_headercart_header',
					'priority' => 	10
					)
				)
			);

		$wp_customize->add_setting( 'tesseract_woocommerce_headercart', array(
				'sanitize_callback' => 'tesseract_sanitize_checkbox',
				'default' 			=> 0
		) );

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'tesseract_woocommerce_headercart_control',
				array(
					'label'          => __( 'Display Cart in header', 'tesseract' ),
					'section'        => 'tesseract_woocommerce',
					'settings'       => 'tesseract_woocommerce_headercart',
					'type'           => 'checkbox',
					'priority' 		 => 11
				)
			)
		);

		$wp_customize->add_setting( 'tesseract_woocommerce_cartcolor', array(
				'transport'         => 'refresh',
				'sanitize_callback' => 'tesseract_sanitize_rgba',
				'default' 			=> '#fff'
		) );

		$wp_customize->add_control(
			new WP_Customize_Color_Control(
			$wp_customize,
			'tesseract_woocommerce_cartcolor_control',
			array(
				'label'      => __( 'Shopping Cart Color', 'tesseract' ),
				'section'    => 'tesseract_woocommerce',
				'settings'   => 'tesseract_woocommerce_cartcolor',
			) )
		);