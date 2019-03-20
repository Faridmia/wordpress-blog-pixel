

<?php get_header();?>
<div class="co-blog-section section pt-140">
    <div class="container">
        <div class="row">
           
            <div class="col-md-8 col-xs-12 mb-50">
                
                <!-- Blog -->
                
                <?php while(have_posts()) : the_post(); ?>
                


                <div class="co-blog">
                    
                    <!-- Blog Media -->
                <?php if(the_field('youtube_video')){ ?>
                    <div class="co-blog-media mb-35">
                        <?php the_field('youtube_video');?>
                    </div>
                <?php }else{?>
                    <div class="co-blog-media mb-35">
                        <?php the_post_thumbnail(); ?>
                    </div>
                <?php } ?>

                    
                    <!-- Blog Content -->
                    <div class="co-blog-content">
                        
                        <a href="<?php the_permalink(); ?>" class="category"><?php ?></a>
                        <h4 class="title"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h4>
                        <p><?php the_content(); ?>....</p>
                        
                        <!-- Meta -->
                        <div class="co-blog-meta fix">
                            
                            <a href="#" class="author float-left">
                                <img src="<?php the_field('blog_author_image');?>" alt="">
                                <span><?php the_author();?></span>
                            </a>
                            <div class="date-comment float-left">
                                <span><?php the_time("F d, Y"); ?></span>
                                <a href="#"><?php comments_popup_link('no comments','have comments','% commments','farid','comments off'); ?></a>
                            </div>
                            

                            
                        </div>
                        
                    </div>
                    
                </div>

            <?php endwhile;?>
    
                
            </div>



        </div>
        
    </div>
</div>



<!--Corporate 1 Client Section-->

<!--....................custom slider test.................-->


<!--Corporate 1 Footer Section-->
<?php get_footer(); ?>