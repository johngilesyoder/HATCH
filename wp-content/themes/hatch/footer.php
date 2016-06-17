			<footer class="site-footer">
				<div class="footer-main">
	      	<div class="container">
	      		<div class="row">
		      		<div class="footer-connect">
		      			<span class="hatch-logo">HATCH</span>
		      			<div class="footer-social-links">
		      				<a href="http://twitter.com/HatchExperience"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-footer-twitter.svg"></a>
		      				<a href="http://www.facebook.com/hatchfestival"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-footer-facebook.svg"></a>
		      				<a href="http://instagram.com/hatchexperience/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-footer-instagram.svg"></a>
		      			</div>
		      			<a href="mailto:hatchinfo@hatchexperience.org" class="footer-email"><span class="long-email">hatchinfo@hatchexperience.org</span><span class="short-email">Email us</span></a>
		      			<a class="rss-feed" href="<?php bloginfo('rss2_url'); ?>" class="rss-feed"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-rss.svg">RSS feed</a>
		      		</div>
		      		<div class="footer-links">
		      			<nav class="links-column">
		      				<?php footer_links_1(); ?>
		      			</nav>
		      			<nav class="links-column">
		      				<?php footer_links_2(); ?>
		      			</nav>
		      			<nav class="links-column">
		      				<?php footer_links_3(); ?>
		      			</nav>
		      		</div>
		      	</div>
	      	</div>
	      </div>
        <div class="footer-bottom">
        	<div class="container">
          	<div class="row">
          		<div class="col-md-8">
          			<div class="footer-company">
          				<span>© HATCHfest 2004-<?php echo date('Y'); ?>. </span>“HATCH” is a registered trademark. All rights reserved. All logos, except for HATCH logos, are trademarks of their respective companies.
          			</div>
          		</div>
          		<div class="col-md-4">
          			<div class="built-by">
          			  <a target="_blank" href="https://hx.ai"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/built-by.svg"></a>
          			</div>
          		</div>
          	</div>
        	</div>
	      </div>
	    </footer>

		<?php wp_footer(); ?>

	</body>
</html>
