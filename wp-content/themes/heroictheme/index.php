<?php get_header();?>

  <!-- Page Content -->
  <div class="container">

    <!-- Jumbotron Header -->
    <header class="jumbotron my-4">
      <h1 class="display-3"><?php the_field('home_page_header_text');?></h1>
      <p class="lead"><?php the_field('home_page_header_description');?></p>
      <a href="#" class="btn btn-primary btn-lg">Call to action!</a>
    </header>

    <!-- Page Features -->
    <div class="row text-center">

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="<?php the_field('home_page_header_image');?>" alt="">
          <div class="card-body">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Find Out More!</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="<?php the_field('home_page_header_image');?>" alt="">
          <div class="card-body">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni sapiente, tempore debitis beatae culpa natus architecto.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Find Out More!</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="<?php the_field('home_page_header_image');?>" alt="">
          <div class="card-body">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Find Out More!</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="<?php the_field('home_page_header_image');?>" alt="">
          <div class="card-body">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni sapiente, tempore debitis beatae culpa natus architecto.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Find Out More!</a>
          </div>
        </div>
      </div>

    </div>
    <!--..............gallery field...........-->

     <div class="row text-center galleryimg">
        <?php 

          $images = get_field('home_page_gallery');

          if( $images ): ?>
              <ul>
                  <?php foreach( $images as $image ): ?>
                    <li>
                      <div class="col-lg-3 col-md-6 mb-4 bananoclass">
                        <div class="card h-100 newupdate">
              
                          
                              <a href="<?php echo $image['url']; ?>">

                                <img class="card-img-top" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" >
                              </a>
                              <p><?php echo $image['caption']; ?></p>
                           


                          <div class="card-body">
                            <h4 class="card-title">Card title</h4> 
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni sapiente, tempore debitis beatae culpa natus architecto.</p>
                          </div>
                          <div class="card-footer">
                            <a href="#" class="btn btn-primary">Find Out More!</a>
                          </div>
                        </div>
                      </div>
                      </li>
                      
                  <?php endforeach; ?>
              </ul>
      <?php endif; ?>
      

      

    </div>

    <!-- ..........................banano class...........-->

    <div class="row text-center">
      <div class="col-lg-12 col-md-6 mb-4">
        <div class="card h-100">
            <?php 

                $args = array( 'post_type' => 'movie', 'posts_per_page' => 10 );
                $loop = new WP_Query( $args );
            ?>    
               <?php  while ( $loop->have_posts() ) : $loop->the_post();?>
                 <h2><?php the_field('movie_title');?></h2>
                 <?php if(get_field('is_available')) :?>
                    <span>Available</span>
                    <div><?php the_field('cost');?></div>
                  <?php else : ?>
                    <span>Not Available</span>


                   <?php endif; ?> 

                  <p><?php the_field('movie_description');?></p>
                  <h3><img src="<?php the_field('movie_image'); ?>"></h3>

                 
              <?php  endwhile;

            ?>


        </div>
      </div>


    </div>

    <div class="row text-center">
        <div class="col-lg-12 col-md-6 mb-4">

        </div>
    </div>

    <!--...................end bananao class..............-->

    <!--  custom page feature.........................-->

    <!-- /.row -->

  </div>
  <!-- /.container -->

 <?php get_footer();?>