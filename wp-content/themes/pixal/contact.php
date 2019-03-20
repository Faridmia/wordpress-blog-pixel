<?php 
    /*

        Template Name:Contact

    */



?>


<?php 
    get_header();
?>

<!--Corporate Page Banner Section-->
<div class="co-page-banner-section section" data-page-title="Contact Us" style="background-image: url(<?php the_field('contact_nav_image','options');?>)">
    
    <div class="container-fluid">
        <div class="row">
            
            <div class="co-page-banner text-center col-xs-12">
                <h1><?php the_field('contact_nav_title','options');?></h1>
            </div>
            
        </div>
    </div>
    
</div>

<!--Corporate Contact Section-->
<div class="co-contact-section section pt-140 pb-10">
    
    <div class="container">
        <div class="row">
           
            <div class="col-xs-12 mb-80">
                <div id="co-google-map"></div>
            </div>
            
            <div class="col-xs-12">
                <div class="row">
                    
                    <div class="co-contact-info col-lg-3 col-md-4 col-sm-5 cl-xs-12 mb-40">
                        
                        <ul>
                            <li><span>Address :</span> <?php the_field('contact_address','options');?></li>
                            <li><span>Email :</span> <a href="#"><?php the_field('contact_email','options');?></a></li>
                            <li><span>Phone :</span> <a href="#">(<?php the_field('country_code','options');?>)</a> <a href="#"> <?php the_field('contact_phone','options');?></a></li>
                        </ul>
                        
                        <div class="social fix">
                        <?php
                
                            if( have_rows('contact_social_options','options') ):

                            while ( have_rows('contact_social_options','options') ) : the_row();?>

                            <a href="<?php the_sub_field('contact_social_url');?>" class="<?php the_sub_field('contact_social_classname'); ?>"><i class="<?php the_sub_field('contact_social_icon');?>"></i></a>

                            <?php endwhile;
                                  else :   

                                  endif;?>
                            
                        </div>
                        
                    </div>
                    
                    <div class="co-contact-form col-lg-8 col-lg-offset-1 col-md-8 col-sm-7 col-xs-12 mb-40">
                       
                            <div class="row">
                              <?php while(have_posts()) : the_post() ?>
                            <?php
                                the_content();
                            ?>

                        <?php endwhile;?>
                            </div>
                        
                        <p class="form-messege"></p>
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

<!--Corporate 1 Footer Section-->
<?php get_footer();?>