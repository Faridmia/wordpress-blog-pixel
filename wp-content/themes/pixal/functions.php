<?php 

	if( function_exists('acf_add_options_page') ) {
	
		acf_add_options_page(array(

			'page_title' 	=> 'Theme General Settings',
			'menu_title'	=> 'Theme Settings',
			'menu_slug' 	=> 'theme-general-settings',
			'capability'	=> 'edit_posts',
			'redirect'		=> false
		));


		acf_add_options_sub_page(array(
			'page_title' 	=> 'Theme Navigation Settings',
			'menu_title'	=> 'Navigation',
			'parent_slug'	=> 'theme-general-settings',
		));

		acf_add_options_sub_page(array(
			'page_title' 	=> 'Theme Slider options Settings',
			'menu_title'	=> 'Slider',
			'parent_slug'	=> 'theme-general-settings',
		));
		acf_add_options_sub_page(array(
			'page_title' 	=> 'Theme About page Category',
			'menu_title'	=> 'About',
			'parent_slug'	=> 'theme-general-settings',
		));

		acf_add_options_sub_page(array(
			'page_title' 	=> 'Theme Blog Gallery Image',
			'menu_title'	=> 'Gallery',
			'parent_slug'	=> 'theme-general-settings',
		));

		acf_add_options_sub_page(array(
			'page_title' 	=> 'Theme Contact Options',
			'menu_title'	=> 'Contact',
			'parent_slug'	=> 'theme-general-settings',
		));

		acf_add_options_sub_page(array(
			'page_title' 	=> 'Theme Home Options',
			'menu_title'	=> 'Home',
			'parent_slug'	=> 'theme-general-settings',
		));


	

		acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));

	}

	function pixel_essential_function(){
		add_theme_support('title-tag');
		add_theme_support('the-description');
		add_theme_support('post-thumbnails');
		add_theme_support('custom-background');
		add_theme_support( 'automatic-feed-links' );

		load_theme_textdomain('pixel',get_template_directory_uri().'/languages');

		
		




	}


	add_action('after_setup_theme','pixel_essential_function');


	function pixelscript(){

		//.............................css link.........................

			wp_register_style("favicon",get_template_directory_uri().'/img/favicon.ico');
			wp_register_style("bootstrap",get_template_directory_uri().'/css/bootstrap.min.css');
			wp_register_style("font-awesome",get_template_directory_uri().'/css/font-awesome.min.css');
			wp_register_style("ionicons",get_template_directory_uri().'/css/ionicons.min.css');

			wp_register_style("carousel",get_template_directory_uri().'/owl.carousel.min.css');
			wp_register_style("default",get_template_directory_uri().'/owl.theme.default.min.css');

			wp_register_style("et-line",get_template_directory_uri().'/css/et-line.css');
			wp_register_style("plugins",get_template_directory_uri().'/css/plugins.css');
			wp_register_style("style",get_template_directory_uri().'/style.css');
			wp_register_style("responsive",get_template_directory_uri().'/css/responsive.css');
			// ................banano css..........
			


			wp_enqueue_style('favicon');
			wp_enqueue_style('bootstrap');
			wp_enqueue_style('font-awesome');
			wp_enqueue_style('ionicons');

			wp_enqueue_style('carousel');
			wp_enqueue_style('default');


			wp_enqueue_style('et-line');
			wp_enqueue_style('plugins');
			wp_enqueue_style('style');
			wp_enqueue_style('responsive');

			

			//......................................jquery linkup....................
			// wp_enqueue_script('jquery');

			//  wp_register_script('modernizr',get_template_directory_uri().'/js/vendor/modernizr-2.8.3.min.js');
			// //wp_register_script("jquery",get_template_directory_uri().'/js/vendor/jquery-3.1.1.min.js');
			// wp_register_script('bootstrap',get_template_directory_uri().'/js/bootstrap.min.js',array('jquery'));
			// wp_register_script('plugins',get_template_directory_uri().'/js/plugins.js',array('jquery'));
			// wp_register_script('ajax-mail',get_template_directory_uri().'/js/ajax-mail.js',array('jquery'));
			// wp_register_script('main',get_template_directory_uri().'/js/main.js',array('jquery'));

			// wp_enqueue_script('modernizr');
			
			
			// wp_enqueue_script('bootstrap');
			// wp_enqueue_script('plugins');
			// wp_enqueue_script('ajax-mail');
			// wp_enqueue_script('main');
	
	}


	add_action('wp_enqueue_scripts','pixelscript');

	register_post_type("pixelAbout",array(

				'labels'   	   => array( 
				'name' 	       => 'About Pixel',
				'add_new_item' => 'Add New pixel'

				),
				
				'public'       => true,
				'supports'     => array('title','editor','thumbnail')

	));

	register_post_type("BlogPost",array(

				'labels'   	   => array( 
				'name' 	       => 'Blog Post',
				'add_new_item' => 'Add New Post'

				),
				
				'public'       => true,
				'supports'     => array('title','editor','thumbnail','author')

	));

	register_post_type("Business_solution",array(

				'labels'   	   => array( 
				'name' 	       => 'Business Solution',
				'add_new_item' => 'Add New Solution'

				),
				
				'public'       => true,
				'supports'     => array('title','editor','thumbnail')

	));


	function read_more($limit){

			$post_content         = explode(" ", get_the_content());

			$less_content         = array_slice($post_content, 0, $limit);

			$array_convert_string = implode(" ", $less_content);

			echo $array_convert_string;
	}




	function pixel_sidebar_created(){

		register_sidebar(array(
			'name' 		    => __('Footer widgets','pixel'),
			'description'   => __('Add Your Footer widgets here','pixel'),
			'id'            => 'footer-widgetspixel',
			'before_widget' => '<div class="co-footer-widget-1 widget-contact">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="title">',
			'after_title'   => '</h4>'



		));


		register_sidebar(array(

			'name' 		    => __('Footer widgets','pixel'),
			'description'   => __('Add Your Footer widgets First part here','pixel'),
			'id'            => 'footer-widgetfirstpart',
			'before_widget' => '<div class="co-footer-widget-1">',
			'after_widget'  => '</div></div>',
			'before_title'  => '<h4 class="title">',
			'after_title'   => '</h4><div class="co-footer-social-1 fix">'

		));


		register_sidebar(array(

					'name' 		    => __('Right Sidebar','pixel'),
					'description'   => __('Add Your Right sidebar widgets here','pixel'),
					'id'            => 'right-sidebar',
					'before_title'  => '<h5 class="sidebar-title">',
					'after_title'   => '</h5>'




		));

		register_sidebar(array(
					'name' 		    => __('Right Sidebar','pixel'),
					'description'   => __('Add Your Right sidebar widgets here','pixel'),
					'id'            => 'tag-cloud',
					'before_title'  => '<h5 class="sidebar-title">',
					'after_title'   => '</h5><div class="tags-cloud"></div>'


		));






	}


	add_action("widgets_init","pixel_sidebar_created");


	//.....................menu banabo..................


	function default_main_menu(){

		echo '<ul class="navbar-nav nav">';
		echo '<li><a href="'.esc_url(home_url()).'">Home</a></li>';
		echo '</ul>';



	}


	function register_profetech_theme(){

			// menu register code

		register_nav_menu('main-menu','Main Menu');


	}


	// attach with aciton hook...................


	add_action("init","register_profetech_theme");


	

	







require_once('pixel-walker.php');








?>