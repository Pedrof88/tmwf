			
		</div>
		<!-- /wrapper -->
			<!-- footer -->
			<footer class="footer" role="contentinfo">
				<div class="wrapper">

				<div class="footer__block col-2">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo-white.png" alt="Logo" class="logo-img">
				</div>

				<div class="footer__block col-custom first">
					<?php aboutus_nav(); ?>
				</div>
				<div class="footer__block col-custom second">
					<?php events_nav(); ?>
				</div>
				<div class="footer__block col-custom third">
					<?php get_involved_menu();?>
				</div>
				<div class="footer__block col-custom forth">
					<ul>
						<li>Contact us</li>
						<li><a href="mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a></li>
						<li><a href="tel: <?php the_field('telephone', 'option'); ?>"><?php the_field('telephone', 'option'); ?></a></li>
					</ul>
					<div class="socials">
						<a href="<?php the_field('facebook', 'option'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook.png" alt="facebook" class="social-icon"></a>
						<a href="<?php the_field('twitter', 'option'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/twitter.png" alt="twitter" class="social-icon"></a>
						<a href="<?php the_field('instagram', 'option'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/instagram.png" alt="instagram" class="social-icon"></a>
					</div>
				</div>
				</div>

					<!-- copyright -->
					<div class="copyright">
						<p>The Malcolm Whales Foundation is a charity registered in England and Wales (No. 1146719)</p>
						<p>Copyright © 2019 The Malcom Whales Foundation</p>
						<p>Website designed by <a href="http://elliotlittlefield.co.uk/" target="_blank"><strong>Elliot Littlefield</strong></a></p>
					</div>
					<!-- /copyright -->
			</footer>
			<!-- /footer -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
