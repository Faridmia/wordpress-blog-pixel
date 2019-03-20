<?php
/*

	Template name:Portfoliio
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


									<header class="entry-header">
										
										
									</header><!-- .entry-header -->

									<div class="entry-content">
								

										<?php 

											while(have_posts()) : the_post() ?>
 
											<h1><?php the_title();?></h1>
											<p>
												<?php 
													the_post_thumbnail(array(
														'class' => ' amaderimage',

													));
												?>
											</p>
											

											<p>
												<?php 
													$readmore = '<p><a href="'.get_permalink().'">Read More</p></a>';
													
											
										
													 echo wp_trim_words(get_the_content(),2,$readmore); ?> 
											</p> 
											<p>Topics:
												<?php 
														$topictag = get_the_terms(get_the_ID(),'portfolio-topics');

														foreach ($topictag as  $value) {
															$portpoliotopic = $value->name;
															$link = get_term_link($value,'portfolio-topics');

															echo '<a href="'.$link.'">'.$portpoliotopic.'</a> ';
														}

														

														
												?>
											</p>
											<p>Keyword:
												<?php 
													$keyword = get_the_terms(get_the_ID(),'portfolio-keyword');
													foreach($keyword as $keywords){

														$keywordurl = get_term_link($keywords,'portfolio-keyword');
														$keywordName = $keywords->name;

														echo '<a href=".$keywordurl.">'.$keywordName.'</a> ';
													}


												?>

											</p>

									<?php endwhile;	?>
										
									</div><!-- .entry-content -->

									

				

			
	
		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
