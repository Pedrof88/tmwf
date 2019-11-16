<section class="textvideo-section content-section <?php if(get_sub_field( 'content_side' )){echo 'right';}else{echo 'left';}; ?>">

    <div class="container-large">
        <?php if ( have_rows( 'group_left' ) ) : ?>
            <?php while ( have_rows( 'group_left' ) ) : the_row(); ?>
                <div class="col-5">
                    <div class="video-wrapper">
                        <?php the_sub_field( 'video' ); ?>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
        
        <div class="col-6">
            <?php if ( have_rows( 'group_right' ) ) : ?>
                <?php while ( have_rows( 'group_right' ) ) : the_row(); ?>
                    <div class="content-wrapper">
                        <?php the_sub_field( 'content' ); ?>
                        <?php if(get_sub_field( 'button_url' )): ?>
                            <a href="<?php echo the_sub_field( 'button_url' ); ?>" class="arrow-link"><?php the_sub_field( 'button_text' ); ?></a>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
            
        </div>
    </div>
</section>