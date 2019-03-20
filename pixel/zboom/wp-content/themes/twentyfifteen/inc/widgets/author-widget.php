<?php 

	class author_bio extends WP_Widget{


		public function __construct(){


			parent::__construct('author_bio' ,__('TwentyFifteen Author Widget','twentyfifteen'),array(
				'description' => __("Our Author Bio/Info Widget","twentyfifteen")

			));
		}


		public function widget($args,$instance){ 
				 $title        = $instance['title'];
			     $company      = $instance['company'];
			     $designation  = $instance['designation'];
			     $photo       = $instance['photo'];
			     $showphoto   = $instance['showphoto'];

				$widgetcontent = $args['before_title']."Name:".$title.$args['after_title'];
				$widgetcontent.= $args['before_title']."Company:".$company.$args['after_title'];
				$widgetcontent.= $args['before_title']."Designation:".$designation.$args['after_title'];
				if(isset($showphoto)){

					$widgetcontent.= '<div class="widget-photo"><img src="'.$photo.'" alt="this is first image"></div>';
				}	
				echo $args['before_widget'].$widgetcontent.$args['after_widget'];



		 }

		 public function form($instance){ 
		 		$title       = $instance['title'];
		 		$company     = $instance['company'];
		 		$designation = $instance['designation'];
		 		$photo       = $instance['photo'];
		 		$showphoto   = $instance['showphoto'];

		 ?>
		 	

		 	<p><label for="<?php echo $this->get_field_id('title');?>">Name:</label></p>
		 	<p>
		 		<input type="text" id="<?php echo $this->get_field_id('title');?>" name="<?php echo $this->get_field_name('title');?>" value="<?php echo $title;?>" class="widefat">
		 	</p>

		 	<p><label for="<?php echo $this->get_field_id('company');?>">Company:</label></p>
		 	<p>
		 		<input type="text" id="<?php echo $this->get_field_id('company');?>" name="<?php echo $this->get_field_name('company');?>" value="<?php echo $company;?>" class="widefat">
		 	</p>

		 	<p><label for="<?php echo $this->get_field_id('designation');?>">Designation:</label></p>
		 	<p>
		 		<input type="text" id="<?php echo $this->get_field_id('designation');?>" name="<?php echo $this->get_field_name('designation');?>" value="<?php echo $designation;?>" class="widefat">
		 	</p>

		 	<p><label for="<?php echo $this->get_field_id('photo');?>">Photo:</label></p>
		 	<p>
		 		<input type="text" id="<?php echo $this->get_field_id('photo');?>" name="<?php echo $this->get_field_name('photo');?>" value="<?php echo $photo;?>" class="widefat image1">
		 	</p>
		 	<button class="uploadimage1">select/image upload</button>
		 	<p>
		 		<label for="<?php echo $this->get_field_id('showphoto'); ?>">Show Photo</label>

		 	</p>
		 	<input type="checkbox" <?php checked($showphoto,1);?> value="1" name="<?php echo $this->get_field_name('showphoto'); ?>" id="<?php echo $this->get_field_id('showphoto'); ?>" />






		<?php  }


		//...............update korar joooonnnnooooo..............


		public function update($new_instance,$old_instance){

			$instance = $old_instance;
			$instance['title']        = $new_instance['title'];
		 	$instance['company']      = $new_instance['company'];
		 	$instance['designation']  = $new_instance['designation'];
		 	$instance['photo']        = $new_instance['photo'];
		 	$instance['showphoto']    = $new_instance['showphoto'];

		 	return $instance;




		}
	}


	function Author_Bio_function(){
			register_widget('author_bio');


	}

	add_action('widgets_init','Author_Bio_function');


	function photo_upload_option(){
			wp_register_script('uploadphoto',get_template_directory_uri().'/js/uploadimage.js',array(
				'media-upload','thickbox'
			));
			wp_enqueue_script('media-upload');
			wp_enqueue_script('thickbox');
			wp_enqueue_style('thickbox');
			wp_enqueue_script('uploadphoto');

	}

	add_action("admin_enqueue_scripts","photo_upload_option");




?>