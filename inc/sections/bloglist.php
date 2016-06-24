<?php
/*  
 * section BLOGLIST
 */					 			
			
   	$wp_customize->add_section( 'tesseract_bloglist' , array(
    	'title'      		=> __('Blog List Options', 'tesseract'),
    	'priority'   		=> 3,
		'panel' 			=> 'tesseract_layout'
	) );						
			
		$wp_customize->add_setting( 'tesseract_bloglist_content', array(
				'sanitize_callback' => 'tesseract_bloglist_sanitize_content',
				'default'			=> 'excerpt'				
		) );
		
			$wp_customize->add_control(
				new WP_Customize_Control(
					$wp_customize,
					'tesseract_bloglist_content_control',
					array(
						'label'          => __( 'Choose the list content type', 'tesseract' ),
						'section'        => 'tesseract_bloglist',
						'settings'       => 'tesseract_bloglist_content',
						'type'           => 'radio',
						'choices'        => array(
							'excerpt'  	=> 'Excerpt',
							'content' 	=> 'Full Content'
						),
						'priority' 		 => 1										
					)
				)
			);
			
	$wp_customize->add_setting( 'tesseract_bloglist_post_layout', array(
				'sanitize_callback' => 'tesseract_sanitize_select_blog_postlist_layout_types',
				'default' 			=> 'sidebar-left'
		) );

			$wp_customize->add_control(
				new WP_Customize_Control(
					$wp_customize,
					'tesseract_bloglist_layout_control',
					array(
						'label'         => __( 'Choose a layout type for the Blog Post page', 'tesseract' ),
						'section'       => 'tesseract_bloglist',
						'settings'      => 'ttesseract_bloglist_layout',
						'type'          => 'select',
						'default'       => 'sidebar-left',
						'choices'		=> array(
							'sidebar-left'  	=> 	'Left Sidebar',
							'sidebar-right'  	=> 	'Right Sidebar',
							'fullwidth'			=>  'Full Width'
						),
						'priority' 		=> 2
					)
				)
			);
			
		$wp_customize->add_setting( 'tesseract_bloglist_display_featimg', array(
				'sanitize_callback' => 'tesseract_sanitize_checkbox',
				'default'			=> 0				
		) );
		
			$wp_customize->add_control(
				new WP_Customize_Control(
					$wp_customize,
					'tesseract_bloglist_display_featimg_control',
					array(
						'label'          => __( 'Display posts\' featured image on the blog page', 'tesseract' ),
						'section'        => 'tesseract_bloglist',
						'settings'       => 'tesseract_bloglist_display_featimg',
						'type'           => 'checkbox',
						'priority' 		 => 3	
					)
				)
			);	
			
		$wp_customize->add_setting( 'tesseract_bloglist_featimg_pos', array(
			'sanitize_callback' => 'tesseract_bloglist_sanitize_featimg_pos',
			'default' 			=> 'above'
		) );
		
			$wp_customize->add_control(
				new WP_Customize_Control(
					$wp_customize,
					'tesseract_bloglist_featimg_pos_control',
					array(
						'label'          => __( 'Choose the featured image position', 'tesseract' ),
						'section'        => 'tesseract_bloglist',
						'settings'       => 'tesseract_bloglist_featimg_pos',
						'type'           => 'radio',
						'choices'        => array(
							'above'  	=> 'Above the post title',
							'below' 	=> 'Below the post title',														'left'      =>  'left of the content',														'right'      =>  'right of the content'
						),
						'priority' 		 => 4,
						'active_callback' 	=> 'tesseract_bloglist_featimg_sizes_enable'										
					)
				)
			);				
	
		$wp_customize->add_setting( 'tesseract_bloglist_featimg_size', array(
			'sanitize_callback' => 'tesseract_bloglist_sanitize_featimg_size',
			'default' 			=> 'default'
		) );
		
			$wp_customize->add_control(
				new WP_Customize_Control(
					$wp_customize,
					'tesseract_bloglist_featimg_size_control',
					array(
						'label'          => __( 'Choose the featured image ratio', 'tesseract' ),
						'section'        => 'tesseract_bloglist',
						'settings'       => 'tesseract_bloglist_featimg_size',
						'type'           => 'radio',
						'choices'        => array(
							'default'  	=> '1:1 (Default width/height ratio)',
							'tv' 		=> '4:3',
							'hdtv' 		=> '16:9',
							'theater1' 	=> '1.85:1',
							'theater2' 	=> '2.35:1',
							'pixel' 	=> 'I use my own pixel value'
						),
						'priority' 		 => 5,
						'active_callback' 	=> 'tesseract_bloglist_featimg_sizes_enable'										
					)
				)
			);	
			
		$wp_customize->add_setting( 'tesseract_bloglist_featimg_px_size', array(
			'sanitize_callback' => 'absint'
		) );
		
			$wp_customize->add_control(
				new WP_Customize_Control(
					$wp_customize,
					'tesseract_bloglist_featimg_px_size_control',
					array(
						'label'          => __( 'Featured image height in pixels', 'tesseract' ),
						'section'        => 'tesseract_bloglist',
						'settings'       => 'tesseract_bloglist_featimg_px_size',
						'type'           => 'text',
						'priority' 		 => 6,
						'active_callback' 	=> 'tesseract_bloglist_featimg_px_size_enable'										
					)
				)
			);						
				
