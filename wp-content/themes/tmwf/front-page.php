<?php get_header(); ?>

	<main role="main">

        <?php if ( have_rows( 'sections' ) ): ?>
            <?php while ( have_rows( 'sections' ) ) : the_row(); ?>

                <?php if ( get_row_layout() == 'hero' ) : ?>

                    <?php get_template_part('sections/section', 'hero'); ?>

                <?php elseif ( get_row_layout() == 'content_text_w_image' ) : ?>

                    <?php get_template_part('sections/section', 'textimage'); ?>6666666

                <?php elseif ( get_row_layout() == 'content_text_only' ) : ?>
                    <?php the_sub_field( 'content_full' ); ?>
                    <?php the_sub_field( 'content_left' ); ?>
                    <?php the_sub_field( 'content_right' ); ?>
                    <?php if ( get_sub_field( 'column_option' ) == 1 ) { 
                    // echo 'true'; 
                    } else { 
                    // echo 'false'; 
                    } ?>
                <?php elseif ( get_row_layout() == 'content_text_w_video' ) : ?>
                    
                    <?php get_template_part('sections/section', 'textvideo'); ?>

                    <?php elseif ( get_row_layout() == 'Custom Slider' ) : ?>
                    <?php get_template_part('sections/section', 'slider'); ?>
                    <?php endif; ?>

            <?php endwhile; ?>
        <?php else: ?>
            <?php // no layouts found ?>
        <?php endif; ?>

	</main>

<?php get_footer(); ?>