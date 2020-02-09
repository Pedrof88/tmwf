<section class="logos-section">
    <div class="container-large">
        <div class="logos-wrapper">
        <?php if ( have_rows( 'partners_logos' ) ) : ?>
            <?php while ( have_rows( 'partners_logos' ) ) : the_row(); ?>
                <?php $logos = get_sub_field( 'logos' ); ?>
                <?php if ( $logos ) { ?>
                    <a href="<?php the_sub_field( 'link' ); ?>"><img src="<?php echo $logos['url']; ?>" alt="<?php echo $logos['alt']; ?>" /></a>
                <?php } ?>
            <?php endwhile; ?>
        <?php else : ?>
            <?php // no rows found ?>
        <?php endif; ?>
        </div>
    </div>
</section>