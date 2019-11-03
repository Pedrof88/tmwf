<section class="hero-section <?php if(get_sub_field( 'content_side' )){echo 'left';}else{echo 'right';}; ?>">
    <?php if ( have_rows( 'group_left' ) ) : ?>
        <?php while ( have_rows( 'group_left' ) ) : the_row(); ?>
            <?php $image = get_sub_field( 'image' ); if ( $image ): ?>
            <div class="image-wrap">
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
            </div>
            <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>
    <?php if ( have_rows( 'group_right' ) ) : ?>
        <?php while ( have_rows( 'group_right' ) ) : the_row(); ?>
            <div class="content-wrap">
                <div class="content-container">
                    <h1><?php the_sub_field( 'title' ); ?></h1>
                    <?php the_sub_field( 'content' ); ?>
                    <?php if( get_sub_field( 'button_url' ) ): ?>
                        <a href="<?php echo the_sub_field( 'button_url' ); ?>" class="arrow-link"><?php the_sub_field( 'button_text' ); ?></a>
                    <?php endif; ?>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>