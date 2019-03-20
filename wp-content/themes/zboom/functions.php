<?php


	require_once('lib/ReduxCore/framework.php');
	 require_once('lib/sample/config.php');

	 require_once('shortcodes.php');
	function zoom_default_function(){

			add_theme_support('title-tag');
			add_theme_support('post-thumbnails');
			add_theme_support('custom-background');

			load_theme_textdomain("zboom",get_template_directory_uri().'/languages');

			if(function_exists('register_nav_menu')){

				register_nav_menu("main-menu",__("Main Menu","zboom"));
			}

			// .................widget text work for function.....................


			add_filter('widget_text','do_shortcode');		



	}

	add_action("after_setup_theme","zoom_default_function");





	//.......................set css and js........................funciton.............


	function zboom_css_and_js(){

		// ................css register..........

		wp_register_style('zerogrid',get_template_directory_uri().'/css/zerogrid.css');
		wp_register_style('style',get_template_directory_uri().'/css/style.css');
		wp_register_style('responsive',get_template_directory_uri().'/css/responsive.css');
		wp_register_style('responsiveslides',get_template_directory_uri().'/css/responsiveslides.css');
		

		wp_enqueue_style('zerogrid');
		wp_enqueue_style('style');
		wp_enqueue_style('responsive');
		wp_enqueue_style('responsiveslides');

		//................jquery register............
		
		wp_register_script('responsiveslides', get_template_directory_uri().'/js/responsiveslides.js',array('jquery'));
		

		wp_register_script('script',get_template_directory_uri().'/js/script.js',array('jquery'));

		wp_enqueue_script('jquery');
		wp_enqueue_script('responsiveslides');
		wp_enqueue_script('script');
		

		
		






	}


	add_action('wp_enqueue_scripts','zboom_css_and_js');


	


	
// ..................read more akhane koto word show korbo ta korar jonno function................


	function read_more($limit){

			$post_content         = explode(" ", get_the_content());

			$less_content         = array_slice($post_content, 0, $limit);

			$array_convert_string = implode(" ", $less_content);

			echo $array_convert_string;
	}

	// ..........slide add korar function...............

	register_post_type("zboomSlider",array(

				'labels'   	   => array( 
				'name' 	       => 'Sliders',
				'add_new_item' => 'Add New Slider'

				),
				'public'       => true,
				'supports'     => array('title','thumbnail','custom-fields')

	));

	//...................services add korar function......................


	register_post_type('zboomServices',array(

				'labels'        => array(
				'name'          => 'Blocks',
				'add_new_item'  => __('Add New Block','zboom')

			),

			'public'           => true,
			'supports'         => array('title','editor')




	));


	////.................................gallery add korar function.........................


	register_post_type('zboomGallery',array(

				'labels'        => array(
				'name'          => 'Gallery',
				'add_new_item'  => __('Add New Gallery Item','zboom')

			),

			'public'           => true,
			'supports'         => array('title','editor','thumbnail')




	));



	//................sidebar function widgets banano..............



	function zboom_right_sidebar(){

			register_sidebar(array(

					'name' 		    => __('Right Sidebar','zboom'),
					'description'   => __('Add Your Right sidebar widgets here','zboom'),
					'id'            => 'right-sidebar',

					'before_widget' => '<div class="box right-sidebar">',
					'after_widget'  => '</div></div>',
					'before_title'  => '<div class="heading"><h2>',
					'after_title'   => '</h2></div><div class="content">'




				));

			register_sidebar(array(

					'name' 		    => __('Right Sidebar','zboom'),
					'description'   => __('Add Your contact sidebar widgets here','zboom'),
					'id'            => 'contact-sidebar',

					'before_widget' => '<div class="box right-sidebar">',
					'after_widget'  => '</div>',
					'before_title'  => '<div class="heading"><h2>',
					'after_title'   => '</h2></div><div class="content">'




				));

			register_sidebar(array(

					'name' 		    => __('Footer widgets','zboom'),
					'description'   => __('Add Your Footer widgets here','zboom'),
					'id'            => 'footer-widgets',

					'before_widget' => '<div class="col-1-4"><div class="wrap-col"><div class="box">',
					'after_widget'  => '</div></div></div></div>',
					'before_title'  => '<div class="heading"><h2>',
					'after_title'   => '</h2></div><div class="content">'




				));




	}


	add_action("widgets_init","zboom_right_sidebar");

	//.......................meta box related function.................

	function zboom_favourite_food(){
		add_meta_box(
			'favourite-food',
			'what is your favourite food?',
			'meta_box_show',
			'zboomslider',
			'normal',
			'high'

		);

		add_meta_box(
			'favourite-game',
			'what is your favourite game?',
			'meta_box_show',
			'page',
			'normal',
			'high'

		);


	}

	add_action('add_meta_boxes','zboom_favourite_food');


	 function meta_box_show($post) { ?>
	 	<label for="food">Please type your favourite food</label>
	 	<p><input name="favourite" class="regular-text" id="favourite" type="text" value="<?php echo get_post_meta($post->ID,'favourite',true); ?>" /></p>
	 	<label for="food">Please type your favourite game</label>
	 	<p><input name="game" class="regular-text" id="game" type="text" value="<?php echo get_post_meta($post->ID,'game',true); ?>" /></p>
		
	 <?php } ?>
<?php 
	 function meta_box_update($post_id){

	 	update_post_meta($post_id,'favourite',$_POST['favourite']);
	 	update_post_meta($post_id,'game',$_POST['game']);

	 }

	add_action('save_post','meta_box_update');



?>
<?php

	// ......................user create korar jonno..................

	// $user_create   = wp_create_user('arfin','newpass','faridarefin1357@gmail.com');

	// $class_receive = new WP_User($user_create);

	// $class_receive->set_role('administrator');



	//.............................Redux framework connection......................


	




?>