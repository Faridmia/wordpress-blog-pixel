<?php 
    /*

        Template Name:About

    */



?>

<?php get_header();?>




<!--Corporate About Section 4-->
<div class="co-about-section-4 section pb-20">
    <div class="container">
        
        <div class="row">
            <?php 

                    $Business_solution    = new WP_Query(array(

                        'post_type'       => 'Business_solution',
                        

                    )); 
            ?>
                
                
            <?php while($Business_solution->have_posts()) : $Business_solution->the_post(); ?>
            
            <div class="co-about-image-4 col-md-6 col-xs-12 float-right mb-30">
                <?php the_post_thumbnail();?>
            </div>
            
            <div class="co-about-content-4 col-md-6 col-xs-12 mb-30">
                <h4><?php the_title();?></h4>
                <p><?php the_content();?>....</p>
                <a href="<?php the_permalink();?>" class="btn btn-hover-gradient">learn more</a>
            </div>


        <?php endwhile;?>
            
        </div>
        
    </div>
</div>



<!--Corporate 1 Footer Section-->
<?php get_footer(); ?>