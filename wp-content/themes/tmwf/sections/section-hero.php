<section class="hero-section">
    <?php if ( have_rows( 'group_left' ) ) : ?>
        <?php while ( have_rows( 'group_left' ) ) : the_row(); ?>
            <?php $image = get_sub_field( 'image' ); if ( $image ): ?>
            <div class="image-wrap">
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
            </div>
            <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>
    <?php $buttonText = get_sub_field( 'button_text' ); ?>
    <?php $buttonURL = get_sub_field( 'button_url' ); ?>
    <?php if ( have_rows( 'groud_left' ) ) : ?>
        <?php while ( have_rows( 'groud_left' ) ) : the_row(); ?>
            <div class="content-wrap">
                <div class="content-container">
                    <h1><?php the_sub_field( 'title' ); ?></h1>
                    <?php the_sub_field( 'content' ); ?>
                    <?php if( $buttonURL ): ?>
                        <a href="<?php echo $buttonURL; ?>" class="arrow-link"><?php echo $buttonText; ?></a>
                    <?php endif; ?>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>