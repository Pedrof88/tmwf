<?php get_header(); ?>

	<main role="main">

		<?php if ( have_rows( 'sections', 79 ) ): ?>
            <?php while ( have_rows( 'sections', 79 ) ) : the_row(); ?>

                <?php if ( get_row_layout() == 'hero' ) : ?>

                    <?php get_template_part('sections/section', 'hero'); ?>

                <?php endif; ?>

            <?php endwhile; ?>
        <?php else: ?>
            <?php // no layouts found ?>
		<?php endif; ?>

		<section class="news-section">
            <div class="container-large">
			
				<?php $ajax=0; $gallery = 0; include(locate_template('sections/section-news.php')); ?>

            </div>
		</section>

		<script>
			(function($){
				$('.news-section').imagesLoaded( function(){
					$('.news-container').isotope({
						itemSelector: '.image-wrapper',
						percentPosition: true,
						layoutMode: 'fitRows',
						masonry: {
							columnWidth: '.grid-sizer'
						}
					});
				});
			})(jQuery);
		</script>

	</main>

<?php get_footer(); ?>
