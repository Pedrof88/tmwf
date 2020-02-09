<section class="events-section">
    <div class="owl-carousel event-slider container-large">

        <?php if ( have_rows( 'event' ) ) : ?>
            <?php while ( have_rows( 'event' ) ) : the_row(); ?>
            <div class="item">
                <div class="col-1"></div>
                <div class="col-5">
                    <div class="event-container">
                        <h2>Our Events</h2>
                        <h3> <?php the_sub_field( 'event_name' ); ?></h3>
                        <?php the_sub_field( 'event_description' ); ?>
                        <a href="<?php the_sub_field( 'event_link' ); ?>" class="arrow-link-white">Find out more</a>
                    </div>            
                </div>
                <div class="col-5">
                    <div class="image-container">
                        <?php $event_image = get_sub_field( 'event_image' ); ?>
                        <img src="<?php echo $event_image['url']; ?>" alt="<?php echo $event_image['alt']; ?>" />
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        <?php endif; ?>

    </div>
</section>