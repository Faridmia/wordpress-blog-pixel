<?php 



?>


<?php get_header(); ?>

<!--Corporate Hero Section 1-->
<div class="co-hero-section-1 section">
    
    <!--Creative 1 Hero Slider-->
    <div class="co-hero-slider-1 hero-slider">
        <!--Hero Slide Item-->

       <?php 
        //...........................wrapper Slider option..ACF....................

                $args = array( 'post_type' => 'background_slider', 'posts_per_page' => 3 );
                $bgSlider = new WP_Query( $args );



        ?>
        <?php  while ( $bgSlider->have_posts() ) : $bgSlider->the_post();?>
        <div class="co-hero-slide-item-1" style="background-image: url('<?php the_field("background_slider_image");?>');">
            <div class="container">
                <div class="row">

                    
                    
                    <div class="col-xs-12 text-center">
                        <!--Hero Slide Content-->
                        <div class="co-hero-slide-content-1">
                            <h4><?php the_field('background_slider_title');?></h4>
                            <h1><?php the_field('background_slider_description');?> </h1>
                            <a href="corporate-about.html" class="btn btn-white btn-lg btn-hover-gradient">Learn More</a>
                        </div>
                    </div>

                
                </div>
            </div>
        </div>
        <?php endwhile;?>
        <!--Hero Slide Item-->
        
    </div>
</div>

<!--Corporate Service Section 1-->
<div class="co-service-section-1 section">
    <!--Service Wrapper-->
    <div class="co-service-wrapper-1">



        <?php 
        //...........................wrapper service..ACF....................

                 $args = array( 'post_type' => 'corporate_service', 'posts_per_page' => 3,'order' => 'ASC' );
                 $service = new WP_Query( $args );



        ?>

    <?php  while ( $service->have_posts() ) : $service->the_post();?>
        <!--Single Service-->
        <div class="co-single-service-1 bananoclass col-md-4 text-center">
            <i class="<?php the_field('corporate_service_icon');?>"></i>
            
            <h3><?php the_field('corporate_service_title');?></h3>
            <p><?php the_field('corporate_service_description');?></p>
        </div>


    <?php endwhile;?>
        <!--Single Service-->
       
    </div>
</div>

<!--Corporate About Section 1-->
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
                    <p><?php the_content(); ?></p>
                    <a href="corporate-about.html" class="btn btn-hover-gradient">learn more</a>
                </div>
                
            </div>

        <?php endwhile; ?>
        </div>
        
    </div>
</div>

<!--Corporate Testimonial Section 1-->

<?php 
     $args = array( 'post_type' => 'testimonial_slider', 'posts_per_page' => 2 );
     $loop = new WP_Query( $args );




?>


<div class="co-testimonial-section-1 section pt-140 pb-140 extrabackground" style="background-image: url(<?php echo get_template_directory_uri()?>/img/corporate/bg/1.jpg);">

    <div class="container">
        
        <div class="row">
            
            <div class="col-md-8 col-md-offset-2 col-xs-12">
                <!--Testimonial Slider-->

                <div class="co-testimonial-slider-1 text-center">
                    <!--Single Testimonial-->
                <?php  while ( $loop->have_posts() ) : $loop->the_post();?>
                    <div class="co-single-testimonial-1">
                        <h3><?php the_field('testimonial_slider_title')?></h3>
                        <p><?php the_field('testimonial_slider_description');?></p>
                        <img src="<?php the_field('testimonial_slider_image');?>" alt="">
                    </div>
                 <?php endwhile; ?>
                    <!--Single Testimonial-->
                </div>
                
                
            </div>
            
        </div>
        
    </div>
</div>



<!--Corporate Mission Section 1-->
<div class="co-mission-section-1 section pt-140 pb-140">
    <?php 
                         $args = array( 'post_type' => 'corporate_mission', 'posts_per_page' => 1 );
                         $mission = new WP_Query( $args );
                         

    ?>

    <?php
        
         while ( $mission->have_posts() ) : $mission->the_post();

    ?> 
    
    
        <img src="<?php the_field('corporate_mission_image');?>" alt="">
        
    
    
    <?php endwhile; ?>
    <div class="container">
        <div class="row">
            <div class="co-mission-wrapper-1 col-md-7 col-md-offset-5 col-xs-12">
               
                <!--Creative 1 Tab List-->
                <ul class="co-tab-list-1 tab-three">
                    <?php 
                         $args = array( 'post_type' => 'corporate_mission', 'posts_per_page' => -1 );
                         $mission = new WP_Query( $args );

                    ?>
                    
                    <?php  
                    $count = 0;
                    while ( $mission->have_posts() ) : $mission->the_post();?>
                        
                    <?php if($count == 0) { ?>
                        <li class="active"><a href="#<?php the_field('corporate_mission_title');?>" data-toggle="tab"><?php the_field('corporate_mission_title');?></a></li>
                    <?php }else { ?>
                        <li><a href="#<?php the_field('corporate_mission_title');?>" data-toggle="tab"><?php the_field('corporate_mission_title');?></a></li>
                    <?php } ?>

                        

                        
                    <?php 
                    $count++;
                    endwhile; ?>
                    
                </ul>
               
                <!--Creative 1 Tab Content-->
                <div class="co-tab-content-1 tab-content">
                <?php 
                         $args = array( 'post_type' => 'corporate_mission', 'posts_per_page' => -1 );
                         $mission1 = new WP_Query( $args );

                    ?>    
                
                <?php  
                $count = 0;
                while ( $mission1->have_posts() ) : $mission1->the_post();?>
                <?php   if($count == 0) { ?>

                    <div role="tabpanel" class="co-tab-pane-1 tab-pane fade in active" id="<?php the_field('corporate_mission_title');?>">
                <?php   }else{ ?>


                    <div role="tabpanel" class="co-tab-pane-1 tab-pane fade in" id="<?php the_field('corporate_mission_title');?>">
                <?php   } ?>
                        <p><?php the_field('corporate_mission_description');?></p>
                        
                    </div>
                    
                <?php 
                $count++;
                endwhile; 
                ?>   
                    
                </div>
                
            </div>
        </div>
    </div>
</div>

<!--Corporate CTA Section 1-->
<!-- <div class="co-cta-section-1 section bg-gradient pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 col-xs-12">
                <!--CTA Wrapper-->
               <!-- <div class="co-cta-wrapper-1 fix">
                    <h3>If You Like this great Work ?? for your site...</h3>
                    <a href="#" class="btn btn-white">Purchase Now</a>
                </div>
            </div>
        </div>
    </div>
</div> -->

<!--Corporate Pricing Section 1-->
<!-- <div class="co-pricing-section-1 section pt-140 pb-140">
    <div class="container">
        <div class="row"> -->
            
            <!--Section Title-->
           <!--  <div class="col-md-4 col-xs-12">
                <div class="co-section-title-1 title-left">
                    <h1>Pricing Plan</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sit amet est lorem ishhh  ullamcorper, consequat urna id, facilis.</p>
                </div>
            </div> -->
            
           <!--  <div class="col-md-8 col-xs-12">
                <!--Single Pricing-->
                <!--<div class="co-single-pricing-1">
                    <h1 class="co-pricing-price-1"><span>$</span>59</h1>    
                    <h4 class="co-pricing-package-name-1">Standard</h4>
                    <ul class="co-pricing-options-1">
                        <li>100 email forwards</li>
                        <li>250 MB storage</li>
                    </ul>
                    <a href="#" class="btn btn-lg btn-hover-gradient co-pricing-btn-1">Purchase</a>
                </div> -->
                
                <!--Single Pricing-->
                <!-- <div class="co-single-pricing-1 active">
                    <h1 class="co-pricing-price-1"><span>$</span>59</h1>    
                    <h4 class="co-pricing-package-name-1">Standard</h4>
                    <ul class="co-pricing-options-1">
                        <li>250 MB storage</li>
                        <li>100 Email Forwards</li>
                        <li>200 MySQL Datebase</li>
                        <li>50 social account</li>
                    </ul>
                    <a href="#" class="btn btn-lg btn-hover-gradient btn-gradient co-pricing-btn-1">Purchase</a>
                </div>
            </div>
        </div>
    </div>
</div> -->

<!--Corporate Blog Section 1-->
<div class="co-blog-section-1 section bg-gray pt-140 pb-110">
    <div class="container">
        
        <!--Section Title-->
        <div class="row">
            <div class="col-xs-12">
            <?php 
                        //................blog option................

                            $blogCategory = array( 

                                            'post_type' => 'blog_category', 
                                            'posts_per_page' => 1 
                            );

                            $blogRow = new WP_Query( $blogCategory );


            ?>
            <?php while ( $blogRow->have_posts() ) : $blogRow->the_post();?>

                <div class="co-section-title-1 text-center mb-110">
                    <h1><?php the_field('blog_title'); ?></h1>
                    <p><?php the_field('blog_description');?></p>
                </div>

            <?php endwhile; ?>
            </div>
        </div>
        
        <div class="row">
            <!--Single Blog-->
            <?php 
                            //................blog option...all category.............

                            $AllblogCategory = array( 

                                            'post_type' => 'blog_category', 
                                            'posts_per_page' => -1 
                            );

                            $blogRowall = new WP_Query( $AllblogCategory );


            ?>
            <?php while ( $blogRowall->have_posts() ) : $blogRowall->the_post();?>


            <div class="col-sm-6 col-xs-12 mb-30">
                <div class="co-blog-item-1">
                    <img src="<?php the_field('blog_image');?>" alt="">
                    <div class="co-blog-content-1">
                        <h3 class="text-white"><a href="blog-details.html"><?php the_field('blog_image_content');?></a></h3>
                        <ul class="co-blog-meta-1 text-white">
                            <li>By <a href="#"><?php the_field('blog_author');?></a></li>
                            <li><?php the_field('blog_date');?></li>
                        </ul>
                    </div>
                </div>
            </div>

            <?php endwhile; ?>

            <!--Single Blog-->
            
            
        </div>
    </div>
</div>

<!--Corporate Team Section 1-->
<div class="co-team-section-1 section pt-140 pb-110">
    <div class="container">
        
        <!--Section Title-->
        <div class="row">
            <?php 
                            //................Team seciton.............

                            $TeamSection = array( 

                                            'post_type' => 'team_category', 
                                            'posts_per_page' => 1 
                            );

                            $team = new WP_Query( $TeamSection );


            ?>
            <?php while ( $team->have_posts() ) : $team->the_post();?>

            <div class="col-xs-12">
                <div class="co-section-title-1 text-center mb-110">
                    <h1><?php the_field('team_section_title');?></h1>  
                    <p><?php the_field('team_content');?></p>
                </div>
            </div>

            <?php endwhile;?>

        </div>
        
        <div class="row">    
            <!--Single Team-->

            <?php 
                            //................Team seciton.............

                            $TeamSection2 = array( 

                                            'post_type' => 'team_category', 
                                            'posts_per_page' => -1 
                            );

                            $team2 = new WP_Query( $TeamSection2 );


            ?>

            <?php while ( $team2->have_posts() ) : $team2->the_post();?>
            <div class="col-md-4 col-sm-6 col-xs-12 mb-30">
                <div class="co-single-team-1 text-center">
                    <img src="<?php the_field('team_member_image');?>" alt="">
                    <div class="content">
                        <h4><?php the_field('team_member_name');?></h4>
                        <span><?php the_field('team_member_designation');?></span>
                        <div class="social">
                        <?php 

                            if( have_rows('team_button_link') ):

                            while ( have_rows('team_button_link') ) : the_row();?>
                                <a href="<?php the_sub_field('team_button_url'); ?>"><i class="<?php the_sub_field('team_button_icon'); ?>"></i></a>

                        <?php endwhile;

                                else :

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

<!--Corporate Client Section 1-->
<div class="co-client-section-1 section bg-dark-light pt-100 pb-100">
    <div class="container">
        <div class="row">
    <?php 

        $clientSlider = get_field('blog_gallery_image','options');

        if( $clientSlider ): ?>
          
            
            
            <div class="col-xs-12">
                <!--Client Slider-->
                <div class="co-client-slider-1 text-center">
                   
                    <?php foreach( $clientSlider as $slider ): ?>
                        <div class="single-client"><img src="<?php echo $slider['url']; ?>" alt="<?php echo $image['alt']; ?>"></div>

                    <?php endforeach;?>

                </div>
            </div>

        
              
        <?php endif;?>    
            
        </div>
    </div>
</div>

<!--Corporate Footer Section 1-->


<?php get_footer(); ?>
