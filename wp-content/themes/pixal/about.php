<?php 
    /*

        Template Name:About

    */



?>

<?php get_header();?>

<!--Corporate Page Banner Section-->
<div class="co-page-banner-section section" data-page-title="about us" style="background-image: url(<?php the_field('about_nav_image','options'); ?>)">
    
    <div class="container-fluid">
        <div class="row">
            
            <div class="co-page-banner text-center col-xs-12">
                <h1><?php the_field('about_nav_title','options'); ?></h1>
            </div>
            
        </div>
    </div>
    
</div>

<!--Corporate 1 About Section-->
<div class="co-about-section-1 section pt-140 pb-100">
    <div class="container">
        
        <div class="row">
            <!--About Image-->

            <?php 
                    $pixelabout = new WP_Query(array(
                        'post_type' => 'pixelAbout',
                        'posts_per_page' => -1
                    ));    

            ?>
            <?php while($pixelabout->have_posts()) : $pixelabout->the_post(); ?>
            <div class="col-md-6 col-xs-12 float-right mb-40">
                
                <div class="co-about-image-1">
                    <?php the_post_thumbnail(); ?>
                </div>
                
            </div>
            <!--About Content-->
            <div class="col-md-6 col-xs-12 mb-40">
                
                <div class="co-about-content-1">
                    <h1><?php the_title();?></h1>
                    <p>
                        <?php read_more('50'); ?>........
                    </p>
                    
                    <a href="<?php the_permalink(); ?>" class="btn btn-hover-gradient">learn more</a>
                </div>
                
            </div>

        <?php endwhile; ?>
        </div>
        
    </div>
</div>

<!--Creative 3 Service Section-->
<div class="co-service-section-3 section">
    <div class="container-fluid">
        <div class="row">
            
            <!--Single Service-->
            <!--.............wrapper service...............-->

        <?php 
        //...........................wrapper service..ACF....................

                 $args = array( 'post_type' => 'corporate_service', 'posts_per_page' => 5,'order' => 'ASC' );
                 $service = new WP_Query( $args );



        ?>
        <?php  while ( $service->have_posts() ) : $service->the_post();?>

            <div class="co-single-service-3">
                <span class="icon"><i class="<?php the_field('corporate_service_icon');?>"></i></span>
                <div class="content fix">
                    <h3><?php the_field('corporate_service_title');?></h3>
                    <p><?php the_field('corporate_service_description');?>.</p>
                </div>
            </div>

            <?php endwhile;?>
            <!--Single Service-->
            
                
        </div>
    </div>
</div>

<!--Corporate Team Section 2-->
<div class="co-team-section-2 section pt-140 pb-110">
    <div class="container">
        
        <!--Section Title-->

        <div class="row">
            <div class="col-xs-12">
                <div class="co-section-title-3 text-center mb-110">
                    <h4><?php the_field('about_team_header','options');?></h4>
                    <p><?php the_field('about_team_description','options');?></p>
                </div>
            </div>
        </div>
        
        <div class="row">    
            <!--Single Team-->
            <!--......................gallery............-->
            <?php 
                         $galleryimage = array( 'post_type' => 'about_gallery_page', 'posts_per_page' => -1 );
                         $gallery = new WP_Query( $galleryimage );
                         

    ?>

    <?php
        
         while ( $gallery->have_posts() ) : $gallery->the_post();

    ?> 

            <div class="col-md-4 col-sm-6 col-xs-12 mb-30">
                <div class="co-single-team-2 text-center">
                    <img src="<?php the_field('about_team_gallery_image');?>" alt="">
                    <div class="content">
                        <h4><?php the_field('team_member_name');?></h4>
                        <span><?php the_field('team_member_designation');?></span>
                        <div class="social">
                        <?php 

                            if(have_rows('single_team_social_media_links')) :
                            while(have_rows('single_team_social_media_links')) : the_row(); 

                        ?>
                            <a href="<?php the_sub_field('social_link');?>"><i class="<?php the_sub_field('social_icons'); ?>"></i></a>

                             <?php endwhile; 
                                   else:
                                   endif;  

                
                             ?>

                        </div>
                    </div>
                </div>
            </div>

        <?php endwhile;?>

            
            <!--Single Team-->
            
            
            <!--Single Team-->
            

        </div>
    </div>
</div>

<!--Corporate 3 FunFact Section-->
<div class="co3-funfact-section section pt-140 pb-100">
    <div class="container">
        
        <div class="row">
           <?php 
        //...........................wrapper funfact..ACF....................

                 $funfact = array( 'post_type' => 'corporate_funfact', 'posts_per_page' => -1,'order' => 'ASC' );
                 $funRow = new WP_Query( $funfact );



        ?>
        <?php  while ( $funRow->have_posts() ) : $funRow->the_post();?> 

            <div class="co-single-fact-1 col-sm-3 col-xs-6 text-center mb-40">
                <i class="<?php the_field('funfact_icon');?>"></i>
                <h1 class="counter"><?php the_field('funfact_counter_number');?></h1>
                <p><?php the_field('funfact_subject');?></p>
            </div>
        <?php endwhile; ?>    
            
        </div>
        
    </div>
</div>

<!--Corporate 3 Testimonial Section-->
<div class="co-testimonial-section-2 section pb-140">
    <div class="container">
        
        <div class="row">
            
            <div class="col-xs-12">
                
                <div class="co-testimonial-wrapper-2 pt-140 pb-110">
                    
                    <div class="row">
                       
                        <!--Section Title-->


                        <div class="co-section-title-3 col-xs-12 text-center mb-80">
                            <h4><?php the_field('client_head_title','options');?></h4>
                            <p><?php the_field('client_details','options');?>.</p>
                        </div>
                        
                        <div class="co3-testimonial-slider col-md-10 col-md-offset-1 col-xs-12">
                           
                            <?php 
        //...........................wrapper Testimonial Corporate Section..ACF....................

                                 $testimonialclient = array( 'post_type' => 'client_testimonial', 'posts_per_page' => -1 );
                                 $TestRow = new WP_Query( $testimonialclient );



                            ?>
                            <?php  while ( $TestRow->have_posts() ) : $TestRow->the_post();?> 
                            
                            
                            <div class="col-sm-6 col-xs-12">
                                <div class="co-single-testimonial-2 text-center">
                                    <p><?php the_field('client_say_description');?></p>
                                    <div class="co-testimonial-author-info-2">
                                        <img src="<?php the_field('client_image'); ?>" alt="">
                                        <h5><?php the_field('client_name');?></h5>
                                        <span><?php the_field('favorite_quote');?></span>
                                    </div>
                                </div>
                            </div>

                        <?php endwhile; ?>

                            
                        </div>
                        
                        
                    </div>
                    
                </div>
                
            </div>
            
        </div>
        
    </div>
</div>

<!--Corporate About Section 4-->
<div class="co-about-section-4 section pb-20">
    <div class="container">
        
        <div class="row">
            <?php 

                    $Business_solution    = new WP_Query(array(

                        'post_type'       => 'Business_solution',
                        'posts_per_page'  => -1

                    )); 
            ?>
                
                
            <?php while($Business_solution->have_posts()) : $Business_solution->the_post(); ?>
            
            <div class="co-about-image-4 col-md-6 col-xs-12 float-right mb-30">
                <?php the_post_thumbnail();?>
            </div>
            
            <div class="co-about-content-4 col-md-6 col-xs-12 mb-30">
                <h4><?php the_title();?></h4>
                <p><?php read_more('50');?>....</p>
                <a href="<?php the_permalink();?>" class="btn btn-hover-gradient">learn more</a>
            </div>


        <?php endwhile;?>
            
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

<!--Corporate 1 Footer Section-->
<?php get_footer(); ?>