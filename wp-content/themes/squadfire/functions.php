<?php 



	function fire_essential_function(){

		load_theme_textdomain('fire',get_template_directory_uri().'/languages');
		register_nav_menu('main-menu',__('Main Menu','fire'));


	}

	add_action('after_setup_theme','fire_essential_function');

	function fireScript(){

		wp_register_style("bootstrap",get_template_directory_uri().'/css/bootstrap.min.css');
		wp_register_style("font-awesome",get_template_directory_uri().'/font-awesome/css/font-awesome.min.css');
		wp_register_style("animate",get_template_directory_uri().'/css/animate.css');
		wp_register_style("style",get_template_directory_uri().'/css/style.css');
		wp_register_style("default",get_template_directory_uri().'/color/default.css');
		


		wp_enqueue_style('bootstrap');
		wp_enqueue_style('font-awesome');
		wp_enqueue_style('animate');
		wp_enqueue_style('style');
		wp_enqueue_style('default');

		wp_register_script('bootstrap',get_template_directory_uri().'/js/bootstrap.min.js',array('jquery'));
		wp_register_script('easing',get_template_directory_uri().'/js/jquery.easing.min.js',array('jquery'));
		wp_register_script('scrollTo',get_template_directory_uri().'/js/jquery.scrollTo.js',array('jquery'));
		wp_register_script('wow',get_template_directory_uri().'/js/wow.min.js',array('jquery'));
		wp_register_script('custom',get_template_directory_uri().'/js/custom.js',array('jquery'));



		wp_enqueue_script('jquery');
		wp_enqueue_script('bootstrap');
		wp_enqueue_script('easing');
		wp_enqueue_script('scrollTo');
		wp_enqueue_script('wow');
		wp_enqueue_script('custom');


	}

	add_action('wp_enqueue_scripts','fireScript');

	function default_main_menu(){

		echo '<ul class="navbar-nav nav">';
		echo '<li><a href="'.esc_url(home_url()).'">Home</a></li>';
		echo '</ul>';



	}

	//............................wealker nav ar jonnno make a function...................

	// function default_main_menu(){

	// 	echo '<ul class="nav navbar-nav">';

	// 		if(is_user_logged_in()){

	// 			echo '<li><a href="'.esc_url(home_url()).'/wp-admin/nav-menus.php">Create a New Menu</li>';

	// 		}
	// 		else{
	// 			echo '<li><a href="'.esc_url(home_url()).'">Home</a></li>';

	// 		}
			
	// 	echo '</ul>';



	// }

	
	// require_once('fire-walker.php');

	//require_once('wp-bootstrap-navwalker.php');

?>