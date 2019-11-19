<section class="events-section">
    <div class="container-large">
        <div class="col-2"></div>
        <div class="col-4">
            <div class="event-container">
                <h2>Our Events</h2>
                <?php if ( have_rows( 'event' ) ) : ?>
                    <?php while ( have_rows( 'event' ) ) : the_row(); ?>
                        <h3><?php the_sub_field( 'event_title' ); ?></h3>
                        <?php the_sub_field( 'event_description' ); ?>
                        <a href="<?php the_sub_field( 'event_link' ); ?>" class="arrow-link">Find our more</a>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>            
        </div>
        <div class="col-5">
            <div class="owl-carousel event-slider">

                <?php $event_gallery_images = get_sub_field( 'event_gallery' ); ?>
                <?php if ( $event_gallery_images ) :  ?>
                    <?php foreach ( $event_gallery_images as $event_gallery_image ): ?>
                        <div class="item">
                            <img src="<?php echo $event_gallery_image['sizes']['large']; ?>" alt="<?php echo $event_gallery_image['alt']; ?>" />
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>

            </div>
        </div>
    </div>
</section>