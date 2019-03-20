<?php

//.............................heading shortcode function....................

function zboom_heading($atts,$content){

	$heading = extract(shortcode_atts(array(

			'position' => 'left'


	), $atts));

	return "<h1 align='".$position."'>".$content."</h1>";

}

add_shortcode('heading','zboom_heading');

//...................................image shortcode function................

function zboom_image($atts,$content){
	$image = shortcode_atts(array(

			'width'  => '30px',
			'height' => '30px',


	),$atts);

	return '<img src="'.$content.'" height="'.$image['height'].'" width="'.$image['width'].'" />';

}


	

	add_shortcode('image','zboom_image');

	//..........................block shortcode function frontpage ar jonno.................


function zboom_block_shortcode($atts,$content){

ob_start(); 

	$blockattr = extract(shortcode_atts(array(
		'number' => '3',




	),$atts));


?>

<?php 

				$zboomBlock      = new WP_Query(array(

					'post_type'      => 'zboomServices',
					'posts_per_page' => $number,
					'pagination'     => true

				));

?>
		<?php   while($zboomBlock->have_posts()) : $zboomBlock->the_post(); ?>

			<div class="col-1-3">
				<div class="wrap-col box">
					<h2><?php the_title();?></h2>
					<p><?php read_more(20); ?></p>
					<div class="more"><a href="<?php the_permalink(); ?>">[...]</a></div>
				</div>
			</div>

		<?php endwhile; ?>




<?php $block = ob_get_clean();

	return $block;


}

	add_shortcode('block','zboom_block_shortcode');



?> 