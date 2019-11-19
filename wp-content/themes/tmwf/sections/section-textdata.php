<section class="textdata-section content-section">
    <div class="container-large">
        
        <div class="col-1"></div>
        <div class="col-5">
        <?php if ( have_rows( 'gourp_left' ) ) : ?>
            <?php while ( have_rows( 'gourp_left' ) ) : the_row(); ?>
            <div class="content-wrapper">
                <?php the_sub_field( 'content' ); ?>
                <?php if(get_sub_field( 'button_url' )): ?>
                    <a href="<?php echo the_sub_field( 'button_url' ); ?>" class="arrow-link"><?php the_sub_field( 'button_text' ); ?></a>
                <?php endif; ?>
            </div>
            <?php endwhile; ?>
        <?php endif; ?>
        </div>

        <div class="col-1"></div>
        <div class="col-5">
        <?php if ( have_rows( 'group_right' ) ) : ?>
            <?php while ( have_rows( 'group_right' ) ) : the_row(); ?>
            <div class="data-wrapper">
            <?php if ( have_rows( 'data' ) ) : ?>
                <?php while ( have_rows( 'data' ) ) : the_row(); ?>
                <div class="data-item">
                    <div class="number">
                        <?php the_sub_field( 'number' ); ?>
                    </div>
                    <div class="description">
                        <?php the_sub_field( 'description' ); ?>
                    </div>
                </div>
                <?php endwhile; ?>
            <?php endif; ?>
            </div>
            <?php endwhile; ?>
        <?php endif; ?>
        </div>

    </div>
</section>