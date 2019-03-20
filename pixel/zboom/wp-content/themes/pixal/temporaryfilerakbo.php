<ul>
                            <li class="active"><a href="corporate-1.html">Home</a>
                            </li>
                            <li><a href="corporate-about.html">About</a></li>
                            <li><a href="corporate-service.html">Services</a></li>
                            <li><a href="corporate-portfolio-3-column.html">Portfolio</a>
                                <ul class="sub-menu">
                                    <li><a href="corporate-portfolio-3-column.html">portfolio 3 column</a></li>
                                    <li><a href="corporate-portfolio-details.html">portfolio details</a></li>
                                </ul>
                            </li>
                            <li><a href="corporate-blog.html">Blog</a>
                                <ul class="sub-menu">
                                    <li><a href="corporate-blog.html">Blog</a></li>
                                    <li><a href="corporate-blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="corporate-contact.html">Contact</a></li>
                        </ul>



                        //..........................footer section temp...............







                        <div class="co-footer-section-1 section bg-dark-light pt-120 pb-80">
    
    <div class="container">
        <div class="row">

            <div class="col-md-4 col-sm-6 col-xs-12 mb-40">
                <div class="co-footer-widget-1">
                    <img src="<?php echo get_template_directory_uri();?>/img/logo/footer-logo-light.png" alt="">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. its is Nulla tempor, nisl sed bibendum pretium, diam nisi mattisss lectus, eu varius lorem mauris posuere dui.</p>
                    <div id="mc_embed_signup" class="co-footer-newsletter-1">
                        <form action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                            <div id="mc_embed_signup_scroll" class="mc-form">
                                <div class="mc-field-group">
                                    <input type="email" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Your Email Address">
                                </div>
                                <div id="mce-responses" class="clear">
                                    <div class="response" id="mce-error-response" style="display:none"></div>
                                    <div class="response" id="mce-success-response" style="display:none"></div>
                                </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>
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
    
<div class="co-footer-bottom-1 section bg-dark">
    <div class="container">
        <div class="row">

            <div class="col-xs-12">
                <div class="co-copyright-1 text-center">
                    <p><?php the_field('copyright_text');?> &copy; 2018 <a href="https://freethemescloud.com/">Free themes Cloud</a>. All Rights Reserved.</p>
                </div>
            </div>

        </div>
    </div>
</div>




<!-- Placed JS at the end of the document so the pages load faster -->

<!-- jQuery latest version -->

<script src="<?php echo get_template_directory_uri();?>/js/vendor/jquery-3.1.1.min.js"></script>
<!-- Bootstrap js -->
<script src="<?php echo get_template_directory_uri();?>/js/bootstrap.min.js"></script>
<!-- Plugins js -->
<script src="<?php echo get_template_directory_uri();?>/js/plugins.js"></script>
<!-- Ajax Mail js -->
<script src="<?php echo get_template_directory_uri();?>/js/ajax-mail.js"></script>
<!-- Main js -->
<script src="<?php echo get_template_directory_uri();?>/js/main.js"></script>

<?php wp_footer(); ?>

</body>

</html>