<?php if( $ajax ): ?>

    <?php $counts=0; if ( have_rows( 'gallery', 77 ) ) : ?>
        <?php while ( have_rows( 'gallery', 77 ) ) : the_row(); ?>

        <?php if( $counts == $gallery ): ?>

            <div class="gallery-container" id="<?php echo strtolower(str_replace(' ', '-', get_sub_field( 'gallery_name' ))); ?>">
            <div class="col-3 grid-sizer"></div>

                <?php acf_loadmore('gallery_images', 16, 0, 'gallery-single'); ?>

            </div>

        <?php endif; ?>

        <?php $counts++; endwhile; ?>
    <?php endif; ?>

<?php else: ?>

    <?php $counts=0; if ( have_rows( 'gallery' ) ) : ?>
        <?php while ( have_rows( 'gallery' ) ) : the_row(); ?>

        <?php if( $counts == $gallery ): ?>

            <div class="gallery-container" id="<?php echo strtolower(str_replace(' ', '-', get_sub_field( 'gallery_name' ))); ?>">
            <div class="col-3 grid-sizer"></div>

                <?php acf_loadmore('gallery_images', 16, 0, 'gallery-single'); ?>

            </div>

        <?php endif; ?>

        <?php $counts++; endwhile; ?>
    <?php endif; ?>

<?php endif; ?>