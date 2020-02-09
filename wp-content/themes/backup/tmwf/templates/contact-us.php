<?php /* Template Name: Contact us template */ get_header(); ?>

	<main role="main">
        <section class="contact-header">
            <img class="hero" src="<?php the_post_thumbnail_url() ?>" alt="Contact us image banner"/>

            <div class="card">
                <h1><?php the_field( 'card_title' ); ?></h1>
                <p><?php the_field( 'card_text' ); ?></p>

                <div class="card__contacts">
                    <div class="card__contacts__block">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/mail.png" alt="mail">
                        <a href="mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a>
                    </div>
                    <div class="card__contacts__block">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icons/phone.png" alt="phone">
                        <a href="tel: <?php the_field('telephone', 'option'); ?>"><?php the_field('telephone', 'option'); ?></a>
                    </div>
                </div>

                <div class="card__socials">
					<a href="<?php the_field('facebook', 'option'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/facebook-red.png" alt="facebook" class="social-icon"></a>
					<a href="<?php the_field('twitter', 'option'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/twitter-red.png" alt="twitter" class="social-icon"></a>
					<a href="<?php the_field('instagram', 'option'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/instagram.png" alt="instagram" class="social-icon"></a>
				</div>
            </div>
        </section>
        
        <div class="row">
            <section class="form">
                    <div class="container-large">
                        <?php echo do_shortcode('[contact-form-7 id="203" title="Get in touch"]');?>
                    </div>
            </section>
        </div>
	</main>

<?php get_footer(); ?>
