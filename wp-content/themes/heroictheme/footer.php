 <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">

          <?php

                
                if( have_rows('home_page_button_links') ):

                    while ( have_rows('home_page_button_links') ) : the_row();?>
                    

                          <span><a target="_blank" href="<?php the_sub_field('button_url'); ?>"><button type="button" name="button"><?php the_sub_field('button_text'); ?></button><a></span>  
                        

                  <?php endwhile;

                else :

                endif;

      ?>
      

     
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo get_template_directory_uri();?>/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri();?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <?php wp_footer();?>

</body>

</html>
