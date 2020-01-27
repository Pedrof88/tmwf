<section class="news-section">
    <div class="container-large">
        <div class="news-container">
            <div class="col-3 grid-sizer"></div>
            <?php $counter = 1;?>
            <?php 
            $args = array(
                'post_type' => 'partners',
                'posts_per_page' => -1
            );
            $the_query = new WP_Query( $args );
            if ($the_query->have_posts()): while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <?php if ($counter % 5 == 0) { ?>
                <div class="row">
                <?php } ?>
                <?php get_template_part('sections/partners', 'single'); ?>
                <?php if ($counter % 5 == 0) { ?>
                </div>
                <?php } ?>
            <?php $counter++;?>
            <?php endwhile; endif; wp_reset_postdata(); ?>

        </div>
    </div>
</section>