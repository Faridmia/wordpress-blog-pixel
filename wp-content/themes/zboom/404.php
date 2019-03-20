<?php get_header(); ?>

<!--------------Content------------>
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block03">
			<div class="col-2-3">
				<div class="wrap-col">
					
					<h2>404 Not Found</h2>
					<h3>May be you are looking for something else</h3>

					You May visit the <a href="<?php esc_url(bloginfo('home'));?>">Homepage</a>
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
