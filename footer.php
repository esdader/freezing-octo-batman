<footer class="l-main-footer main-footer">
	<section class="l-social-media-footer-links social-media-links clearfix">
		<h1 class="social-media-links-title">Social</h1>
		<ul class="l-hor-nav">
			<li><a href="https://twitter.com/Primal7Movement" target="_blank" class="sml-twitter ir">Follow Primal 7 on Twitter</a></li>
			<li><a href="https://www.facebook.com/pages/Primal-7/603576436394949" target="_blank" class="sml-facebook ir">Follow Primal 7 on Facebook</a></li>
			<li><a href="http://www.linkedin.com/company/primal-7?trk=top_nav_home" target="_blank" class="sml-linkedin ir">Follow Primal 7 on LinkedIn</a></li>
			<li><a href="http://www.pinterest.com/Primal7/" target="_blank" class="sml-pinterest ir">Follow Primal 7 on Pinterest</a></li>
			<li><a href="mailto:ask@primal7.com" class="sml-email ir">Contact Primal 7</a></li>
			<li><a href="http://instagram.com/primal7movement" target="_blank" class="sml-instagram ir">Follow us on Instagram</a></li>
		</ul>
	</section>
	<section class=l-footer-links>
		<h1 class="social-media-links-title">Links</h1>
		<?php 
			$args = array(
				'theme_location'  => '',
				'menu'            => 'footer-menu',
				'container'       => 'nav',
				'container_class' => 'footer-nav clearfix',
				'container_id'    => '',
				'menu_class'      => '',
				'menu_id'         => '',
				'echo'            => true,
				'fallback_cb'     => 'wp_page_menu',
				'before'          => '',
				'after'           => '',
				'link_before'     => '',
				'link_after'      => '',
				'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
				'depth'           => 0,
				'walker'          => ''

			);
		?>
		<?php wp_nav_menu( $args ); ?>
	</section>
	<section class="l-footer-copyright">
		<p><?php echo date('Y'); ?> Copyright of 12Novem Industries, LLC Austin, Texas</p>
	</section>
</footer>
</div> <!-- ends l-container -->
    <?php wp_footer(); ?>
    
    <script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-47826989-1', 'primal7.com');
	  ga('send', 'pageview');

	</script>
</body>
</html>