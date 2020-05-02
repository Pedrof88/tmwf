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

                <?php elseif ( get_row_layout() == 'full_width_slider' ) : ?>

                    <?php get_template_part('sections/section', 'full-width-slider'); ?>
                
                <?php elseif ( get_row_layout() == 'get_in_touch' ) : ?>

                    <?php get_template_part('sections/section', 'get-in-touch'); ?>
                
                <?php elseif ( get_row_layout() == 'full_width_button' ) : ?>

                    <?php get_template_part('sections/section', 'full-width-button'); ?>

                <?php elseif ( get_row_layout() == 'content_2_columns_of_text' ) : ?>

                    <?php get_template_part('sections/section', 'content-two-columns'); ?>

                <?php elseif ( get_row_layout() == 'application_form' ) : ?>

                    <?php get_template_part('sections/section', 'application-form'); ?>

                <?php elseif ( get_row_layout() == 'sign_up' ) : ?>

                    <?php get_template_part('sections/section', 'sign-up'); ?>

                    
                <?php elseif ( get_row_layout() == 'sign_up_walk' ) : ?>

<?php get_template_part('sections/section', 'walk-signup'); ?>
                
                <?php elseif ( get_row_layout() == 'events_slider' ) : ?>
                
                    <?php get_template_part('sections/section', 'events'); ?>

                <?php elseif ( get_row_layout() == 'leaderboard_table' ) : ?>
            
                    <?php get_template_part('sections/section', 'leaderboard-table'); ?>

                <?php elseif ( get_row_layout() == 'how_to_book' ) : ?>
            
                    <?php get_template_part('sections/section', 'how-to-book'); ?>

                <?php elseif ( get_row_layout() == 'one_slide_-_full_slider' ) : ?>

                    <?php get_template_part('sections/section', 'fullslider'); ?>

                <?php elseif ( get_row_layout() == 'partner_grid' ) : ?>

                    <?php get_template_part('sections/section', 'partner'); ?>

                <?php endif; ?>

            <?php endwhile; ?>
        <?php else: ?>
            <?php // no layouts found ?>
<?php endif; ?>