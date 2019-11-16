<?php get_header(); ?>

	<main role="main">

        <?php if ( have_rows( 'sections' ) ): ?>
            <?php while ( have_rows( 'sections' ) ) : the_row(); ?>

                <?php if ( get_row_layout() == 'hero' ) : ?>

                    <?php get_template_part('sections/section', 'hero'); ?>

                <?php elseif ( get_row_layout() == 'content_text_w_image' ) : ?>

                    <?php get_template_part('sections/section', 'textimage'); ?>

                <?php elseif ( get_row_layout() == 'content_text_only' ) : ?>
                    
                    <?php get_template_part('sections/section', 'textonly'); ?>

                <?php elseif ( get_row_layout() == 'content_text_w_video' ) : ?>
                    
                    <?php get_template_part('sections/section', 'textvideo'); ?>

                <?php elseif ( get_row_layout() == 'Custom Slider' ) : ?>

                    <?php get_template_part('sections/section', 'slider'); ?>

                <?php elseif ( get_row_layout() == 'content_text_w_data' ) : ?>

                    <?php get_template_part('sections/section', 'textdata'); ?>

                <?php elseif ( get_row_layout() == 'partners_logos' ) : ?>

                    <?php get_template_part('sections/section', 'logos'); ?>

                <?php endif; ?>

            <?php endwhile; ?>
        <?php else: ?>
            <?php // no layouts found ?>
        <?php endif; ?>

	</main>

<?php get_footer(); ?>