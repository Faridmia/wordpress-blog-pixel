<?php get_header(); ?>

<!-------Content------>
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
						<p><?php the_content(); ?></p>
							Your email address will not be published. Required fields are marked *
							<?php comments_template(); ?>

							
							<h2><?php echo get_post_meta(get_the_ID(),'jeknoid',true);?></h2>
							<h3><?php echo get_post_meta(get_the_ID(),'id1',true);?></h3>
							<h4><?php echo get_post_meta(get_the_ID(),'id2',true);?></h4>
							<h5><?php echo get_post_meta(get_the_ID(),'id3',true);?></h5>
						
					</article>

				<?php endwhile; ?>
				</div>
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