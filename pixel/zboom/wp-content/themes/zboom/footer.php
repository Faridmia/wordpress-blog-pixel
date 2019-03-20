
<?php //global $zboom;?>
<!-------Footer------>
<footer>
	<div class="wrap-footer zerogrid">
		<div class="row block09">


			<?php 

				dynamic_sidebar('footer-widgets');



			?>
			
			
			
		</div>
		
		<div class="row copyright">
			<p>Copyright © 2013 - <a href="https://www.zerotheme.com/432/free-responsive-html5-css3-website-templates.html" target="_blank">Free Html5 Templates</a> by <a href="https://www.zerotheme.com" target="_blank">Zerotheme.com</a></p>
		</div>
	</div>
</footer>

<!--<script src="<?php echo esc_url(get_template_directory_uri());?>/js/responsiveslides.js"></script>
	<script>
		jQuery(function () {
		  jQuery("#slider").responsiveSlides({
			auto: true,
			pager: false,
			nav: true,
			speed: 500,
			maxwidth: 962,
			namespace: "centered-btns"
		  });
		});
	</script>-->

	

	

<?php wp_footer();?>
</body>
</html>