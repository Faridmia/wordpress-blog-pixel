<?php get_header(); ?>
	<div class="main">
		<article>

			<?php while(have_posts()) : the_post(); ?>

				<h2><?php the_title(); ?></h2>
				<h3><?php the_post_thumbnail();?></h3>
				<p><?php the_content(); ?></p>

			<?php endwhile; ?>
		</article>
	</div>

<?php get_footer();  ?>