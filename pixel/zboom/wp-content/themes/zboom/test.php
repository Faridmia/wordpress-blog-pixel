<?php 

	/*Template Name:Test*/

?>


<?php get_header(); ?>

<!---------Content---->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block03">
			<div class="col-2-3">
				<div class="wrap-col">
					
				<?php while(have_posts()) : the_post(); ?>

					<article>
						<?php the_post_thumbnail(); ?>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<div class="info">[By <?php the_author(); ?> on <?php the_time("F d, Y"); ?> with <a href="#"><?php comments_popup_link('no comments','have comments','% commments','farid','comments off'); ?></a>]</div>
						<p><?php read_more(30); ?>....<a href="<?php the_permalink(); ?>">Read More</a></p>
					</article>
					<h2>Our Favourite Item:<?php echo get_post_meta(get_the_ID(),'fav',true);?></h2>

					<h3><?php echo get_post_meta($post->ID,'favourite',true); ?></h3>
					<h4><?php echo get_post_meta($post->ID,'game',true); ?></h4>


				<?php endwhile; ?>



			  </div>
			<div class="col-1-3">
				
				<?php 

					get_sidebar();

				?>

			</div>
		</div>
	</div>
</section>



<?php get_footer(); ?>