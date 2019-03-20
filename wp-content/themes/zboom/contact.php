<?php 

/*
Template Name:Contact

*/

?>


<?php get_header();  ?>

<!-----------Content---->
<!--------------Content------------>
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block03">
			<div class="col-2-3">
				<div class="wrap-col">
					
				<article>
						<div class="comment">
							Your email address will not be published. Required fields are marked *
							<?php while(have_posts()) : the_post() ?>
							<?php
								the_content();
							?>

						<?php endwhile;?>
							<!-- <form>
								<div><input type="text" name="name" id="name"> Name *</div>
								<div><input type="email" name="email" id="email"> Email *</div>
								<div><input type="url" name="website" id="website"> Website</div>
								<div><textarea rows="10" name="comment" id="comment"></textarea></div>
								<div><input type="submit" name="submit" value="Submit"></div>
							</form> -->
						</div>
				</article>


			  </div>
			</div>
			<div class="col-1-3">
				
				<?php 

					dynamic_sidebar('contact-sidebar');
				//get_sidebar();

				?>

			</div>
		</div>
	</div>
</section>
<!--------------Footer------------>
<?php get_footer(); ?>