<?php 

	class about_me extends WP_Widget{
		//$name = $instance['name'];

		public function __construct(){



			parent::__construct('about_me', 'About You', array(
				'description' => 'All About Yourself'



			));
		}

		//...................make a form for widget.................


		public function form($instance){ 

			if($instance['title']){
				$title = $instance['title'];
			}
			else{

				$title = "John Doe";
			}

			$company = $instance['company'];

		?>

			<p><label for="<?php echo $this->get_field_id('title'); ?>">Your name:</label></p>
			<p>
				<input type="text" value="<?php echo $title; ?>" name="<?php echo $this->get_field_name('title'); ?>" id="<?php echo $this->get_field_id('title'); ?>" class="widefat"/>
			</p>

			<p><label for="<?php echo $this->get_field_id('company'); ?>">Your Company name:</label></p>
			<p>
				<input type="text" value="<?php echo $company; ?>" name="<?php echo $this->get_field_name('company'); ?>" id="<?php echo $this->get_field_id('company'); ?>" class="widefat"/>
			</p>




		<?php }

		//..................form show korar jonno........................

		public function widget($args, $instance){
			if($instance['title']){
				$title = $instance['title'];
			}
			else{

				$title = "John Doe";
			}

			$company = $instance['company'];

			echo $args['before_widget'].$args['before_title'].$title.$args['after_title'];

			echo "<p>"."company:".$company.$args['after_widget']."</p>";

		}




	}



	add_action("widgets_init",function(){

		register_widget('about_me');

	});




?>