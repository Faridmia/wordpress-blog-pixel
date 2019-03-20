<?php 
    /*

        Template Name:About

    */



?>

<?php get_header();?>



<!--Corporate 1 About Section-->
<div class="co-about-section-1 section pt-140 pb-100">
    <div class="container">
        
        <div class="row">
            <!--About Image-->

            
            <?php while(have_posts()) : the_post(); ?>
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
                        <?php the_content(); ?>
                    </p>
                    
                    
                </div>
                
            </div>

        <?php endwhile; ?>
        </div>
        
    </div>
</div>


<!--Corporate 1 Footer Section-->
<?php get_footer(); ?>