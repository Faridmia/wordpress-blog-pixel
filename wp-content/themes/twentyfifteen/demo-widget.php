<?php 
//................................nijeder widget.........................


class widget_created_self extends WP_Widget{

	public function __construct(){

			parent::__construct('widget_created_self',__('optional_widget','twentyfifteen'),array(
				'description' => 'This is the test widget',


			));

	}

	/////................widget handle korar function...............

	public function widget($args, $instance){
		$title_var = $instance['titleid'];
		$facebook = $instance['facebook'];

		echo $args['before_widget'].$args['before_title'].$title_var.$args['after_title'].$args['after_widget'];
		echo $args['before_widget'].'<a target="_blank" href="'.$facebook.'">Facebook</a>'.$args['after_widget'];


	}

//.....................make a form for widget................

	public function form($instance){ 

		$title_var = $instance['titleid'];
		$facebook  = $instance['facebook'];


	?>

			<p>
				<label for="<?php echo $this->get_field_id('titleid'); ?>">Title:</label>
			</p>
			<p>
				<input id="<?php echo $this->get_field_id('titleid'); ?>" name="<?php echo $this->get_field_name('titleid'); ?>" type="text" value="<?php echo esc_attr($title_var); ?>" class="widefat title">
				
				
			</p>
			<p><label for="<?php echo $this->get_field_id('facebook');?>">Facebook Icon URL:</label></p>
			<p><input type="url" id="<?php echo $this->get_field_id('facebook');?>" name="<?php echo $this->get_field_name('facebook');?>" class="widefat" value="<?php echo $facebook; ?>" /></p>




<?php } 


 }


function widget_design(){

	register_widget('widget_created_self');


}

add_action('widgets_init','widget_design');


require_once('opinion-widget.php');






