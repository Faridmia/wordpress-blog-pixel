
<?php 
    /*

        Template Name:Blog

    */



?>
<?php get_header();?>


<!--Corporate Page Banner Section-->
<div class="co-page-banner-section section" data-page-title="Blog" style="background-image: url(<?php the_field('blog_nav_image','options');?>)">
    
    <div class="container-fluid">
        <div class="row">
            
            <div class="co-page-banner text-center col-xs-12">
                <h1><?php the_field('blog_nav_title','options');?></h1>
            </div>
            
        </div>
    </div>
    
</div>

<!--Corporate Portfolio Section 1-->
<div class="co-blog-section section pt-140">
    <div class="container">
        <div class="row">
           
            <div class="col-md-8 col-xs-12 mb-50">
                
                <!-- Blog -->
                <?php 
                        

                        $BlogItem         = new WP_Query(array(

                        'post_type'       => 'BlogPost',
                        'paged' => get_query_var('paged') ? get_query_var('paged') : 1
                        

                    )); 
                ?>
                
                
                <?php while($BlogItem->have_posts()) : $BlogItem->the_post(); ?>

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
                        <p><?php read_more('50');?>....</p>
                        
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
                            <div class="button float-right">
                                <a href="<?php the_permalink();?>" class="btn btn-border-gradient btn-hover-gradient">read more</a>

                            </div>


                            
                        </div>
                        
                    </div>
                    
                </div>

            <?php endwhile;?>


                
                <!-- Blog -->
                
                
                <!-- Pagination -->
                <ul class="co-pagination">
                    <?php
                    

                        $big = 999999999; // need an unlikely integer
                             echo paginate_links( array(
                                
                                'current' => max( 1, get_query_var('paged') ),
                                'total' => $BlogItem->max_num_pages
                            ) );

                        wp_reset_postdata();
                    ?>
                    
                </ul>
            
                
            </div>

           
            <div class="col-md-4 col-xs-12 mb-50">
                
                <div class="co-blog-sidebar">
                    
                    <h5 class="sidebar-title"><?php the_field('search_title','options');?></h5>
                    
                    <form class="sidebar-search-form" action="<?php esc_url(bloginfo('home'));?>" method="GET">
                        <input type="text" value="Search..." name="s" onfocus="if (this.value == &#39;Search...&#39;) {this.value = &#39;&#39;;}" onblur="if (this.value == &#39;&#39;) {this.value = &#39;Search...&#39;;}">
                        <button><i class="<?php the_field('search_icon','options');?>"></i></button>
                    </form>
                    
                </div> 
                
                <div class="co-blog-sidebar">
                    
                    <?php 

                        dynamic_sidebar('right-sidebar');
                    ?>
                    
                </div>
                
                <div class="co-blog-sidebar">
                    
                    <h5 class="sidebar-title"><?php the_field('latest_post_head_title');?></h5>

                   <?php while($BlogItem->have_posts()) : $BlogItem->the_post(); ?>
                    
                    <div class="co-sidebar-post fix">
                        <a href="#" class="image float-left"><img src="<?php the_field('latest_post_image');?>" alt=""></a>
                        <div class="content fix">
                            <a href="<?php the_permalink();?>" class="title"><p><?php read_more('10');?>.....</p></a>
                            <span class="date"><?php the_time("d F, Y"); ?></span>
                        </div>
                    </div>
                     
                    <?php endwhile; ?>
                    
                </div>
                
                <div class="co-blog-sidebar">
                    
                    <h5 class="sidebar-title"><?php the_field('sidebar_archive_title');?></h5>
                    
                    <ul>
                <?php while($BlogItem->have_posts()) : $BlogItem->the_post(); ?>
                        <li><a href="#"><?php the_time("F Y");?></a></li>
                <?php endwhile; ?>        
                        
                    </ul>
                    
                </div>
                
                <div class="co-blog-sidebar">
                    
                    <div class="tags-cloud">
                        <?php dynamic_sidebar('tag-cloud');?>
                    </div>
                    
                </div>
                
            </div>

        </div>
        
    </div>
</div>


<!--Corporate 1 Client Section-->


<div class="mp-client-section section pt-100 pb-100">
    <div class="container">
        <div class="row">
            
            <div class="col-xs-12">
                <!--Client Slider-->
               <div class="mp-client-slider text-center">
                <?php 
                    if(have_rows('slider_image','options')) :
                    while(have_rows('slider_image','options')) : the_row();     
                ?>

                    <div class="single-client"><img src="<?php the_sub_field('slider_image_url'); ?>" alt="<?php the_sub_field('slider_image_attribute');?>"></div> 
                    
                <?php endwhile; 
                      else:
                      endif;  

                
                ?>    


                </div>
            </div>
            
        </div>
    </div>
</div>



<!--....................custom slider test.................-->


<!--Corporate 1 Footer Section-->
<div class="co-footer-section-3 section bg-dark-light pt-120 pb-80">
    
    <div class="container">
        <div class="row">

            <div class="col-md-4 col-sm-6 col-xs-12 mb-40">
                <div class="co-footer-widget-3">
                    <h4 class="title">Subscribe us</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. its is Nulla tempor, nisl sed bibendum pretium.</p>
                    <div id="mc_embed_signup" class="co-footer-newsletter-3">
                        <form action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate="">
                            <div id="mc_embed_signup_scroll" class="mc-form">
                                <div class="mc-field-group">
                                    <input name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Your Email Address" type="email">
                                </div>
                                <div id="mce-responses" class="clear">
                                    <div class="response" id="mce-error-response" style="display:none"></div>
                                    <div class="response" id="mce-success-response" style="display:none"></div>
                                </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value="" type="text"></div>
                                <div class="clear"><button type="submit" name="subscribe" id="mc-embedded-subscribe" class="submit"><i class="ion-forward"></i></button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12 mb-40">
                
                <?php dynamic_sidebar('footer-widgetspixel');?>
                
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12 mb-40">
                
                    <?php dynamic_sidebar('footer-widgetfirstpart'); ?>
               
            </div>

        </div>
    </div>
    
</div>
    
<div class="co-footer-bottom-3 section bg-dark">
    <div class="container">
        <div class="row">

            <div class="co-copyright-3 col-md-6 col-xs-12">
                
                <p><?php the_field('copyright_text','options');?> <?php the_field('copyright_symbol','options');?> <?php the_field('copyright_year','options');?>. <a href="<?php the_field('created_theme_url','options');?>"><?php the_field('theme_title','options');?></a>. <?php the_field('last_extension','options');?>.</p>
            </div>

            <div class="co-footer-social-3 text-right col-md-6 col-xs-12">


                <?php
                
                    if( have_rows('home_page_button_links','options') ):

                    while ( have_rows('home_page_button_links','options') ) : the_row();?> 

             
                <a href="<?php the_sub_field('button_url');?>"><i class="<?php the_sub_field('button_text');?>"></i></a>
            <?php endwhile;
                  else :   

                  endif;?>
                
            </div>

        </div>
    </div>
</div>




<!-- Placed JS at the end of the document so the pages load faster -->

<!-- jQuery latest version -->
<script src="<?php echo get_template_directory_uri();?>/js/vendor/jquery-3.1.1.min.js"></script>
<!--<script src="<?php //echo get_template_directory_uri();?>/js/bananojquery.js"></script>-->




<!-- Bootstrap js -->
<script src="<?php echo get_template_directory_uri();?>/js/bootstrap.min.js"></script>
<!--...................carosel js...............-->
<script src="<?php echo get_template_directory_uri();?>/js/owl.carousel.min.js"></script>

<!-- Plugins js -->
<script src="<?php echo get_template_directory_uri();?>/js/plugins.js"></script>
<!-- Ajax Mail js -->
<script src="<?php echo get_template_directory_uri();?>/js/ajax-mail.js"></script>
<!-- Main js -->
<script src="<?php echo get_template_directory_uri();?>/js/main.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/caroselcreate.js"></script>




</script> 

<?php wp_footer();?>

</body>

</html>