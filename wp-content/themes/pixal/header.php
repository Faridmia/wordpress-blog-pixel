<?php 

    global $template;
    echo $template;
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Favicon -->
   
    <!-- Modernizr JS -->
    <!-- <link href="<?php //echo get_template_directory_uri();?>/css/slick.css" rel="stylesheet"/> -->
    <script src="<?php echo get_template_directory_uri();?>/js/vendor/modernizr-2.8.3.min.js"></script>

    <style type="text/css">
        body{
              background: <?php the_field('body_background_color','options');?>
            }
      </style>

    <?php wp_head();?>
</head>

<body <?php body_class()?> >

<!--Corporate 1 Header_ Section-->
<div class="header-section section">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <!--Logo-->
                <div class="float-left">
                    <a href="index.php" class="header-logo"><img src="<?php the_field('header_logo_image','options');?>" alt=""></a>
                </div>
                <!--Menu-->
                <div class="float-right">
                    <nav class="main-menu multi-page-menu text-black">
                        <div class="extra">

                        <?php 
                                // customize for nav menu.............

                                wp_nav_menu(array(

                                    'theme_location' => 'main-menu',
                                    'fallback_cb'    => 'default_main_menu',
                                    'container'      => '',
                                    'menu_class'     => 'navbar-nav nav',
                                    'link_before'    => '<span>',
                                    'link_after'     => '</span>',
                                    'walker'         => new fire_walker()



                                ));




                        ?>
                    </div>

                        




                    </nav>
                    <a href="<?php the_field('header_button_url','options'); ?>" class="btn btn-border-gradient  btn-hover-gradient"><?php the_field('header_button_text','options');?></a>
                </div>
                <!--Mobile Menu-->
                <div class="mobile-menu multi-page text-black"></div>
            </div>
        </div>
    </div>
</div>