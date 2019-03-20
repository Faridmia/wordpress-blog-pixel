<?php 
/*
	Template Name:News
*/
?>


<?php get_header(); ?>
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block03">
			

					<div class="one_half">

						<?php 
								$left_category = get_the_category_by_id($zboom['left-side-category']);
								$national = new WP_Query(array(
									'post_type'      => 'post',
									'posts_per_page' => 4,
									'category_name'  => $left_category

								));

						?>

						<?php while($national->have_posts()) : $national->the_post(); ?>

							<?php the_title(); ?>

						<?php endwhile; ?>

					</div>
					<div class="one_half">

						<?php 
								$right_category = get_the_category_by_id($zboom['right-side-category']);
								$international = new WP_Query(array(
									'post_type'       => 'post',
									'posts_per_page'  => 4,
									'category_name'   => $right_category

								));

						?>
						<?php while($international->have_posts()) : $international->the_post(); ?>
							<?php the_title(); ?>

						<?php endwhile; ?>

					</div>
				
		</div>
	</div>
</section>





<?php get_footer(); ?>