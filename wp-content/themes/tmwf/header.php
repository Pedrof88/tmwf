<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">
					<!-- logo -->
					<div class="logo col-4">
						<a href="<?php echo home_url(); ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo" class="logo-img">
						</a>
					</div>
					<!-- /logo -->
					<!-- nav -->
					<nav class="nav desktop col-8" role="navigation">
						<?php html5blank_nav(); ?>
					</nav>
					<div class="button_container" id="toggle">
						<span class="top"></span>
						<span class="middle"></span>
						<span class="bottom"></span>
					</div>

					<div class="overlay" id="overlay">
						<nav class="overlay-menu mobile">
						<div class="logo">
							<a href="<?php echo home_url(); ?>">
								<img src="<?php echo get_template_directory_uri(); ?>/img/logo-white.png" alt="Logo" class="logo-img">
							</a>
						</div>
							<?php html5blank_nav(); ?>
							<div class="socials">
							<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook.png" alt="facebook" class="social-icon"></a>
							<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/twitter.png" alt="twitter" class="social-icon"></a>
							<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/instagram.png" alt="instagram" class="social-icon"></a>
							</div>
						</nav>
					</div>
					<!-- /nav -->

			</header>
			<!-- /header -->

			<script>
jQuery('#toggle').click(function() {
   jQuery(this).toggleClass('active');
   jQuery('#overlay').toggleClass('open');
  });

				</script>
