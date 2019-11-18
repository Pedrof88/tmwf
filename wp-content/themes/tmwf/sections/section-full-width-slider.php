<div class="row">
    <div class="slider slider-full-width container-large ">
        <div class="col-12">
        <div class="slider__top-content">
            <h2><?php the_sub_field( 'title' ); ?></h2>
            <p><?php the_sub_field( 'text' ); ?></p>
        </div>
        <div class="owl-carousel owl-theme slider__container">
        <?php
            $post_type = get_sub_field( 'post_type' );
            $loop = new WP_Query( array(
                'post_type' => $post_type,
                'posts_per_page' => -1
            )
            );
            ?>
            <?php $i=0;?>
            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <div class="item slider__item 
            <?php if($i % 2 == 0) {
                echo 'even';
            } else {
                echo 'odd';
            }
            ?>">
                <img src="<?php the_post_thumbnail_url();?>"/>
                <h3><?php the_title();?></h3>
                <p><?php echo the_excerpt();?></p>
                <a href="<?php the_permalink();?>" class="arrow-link">Read more</a>
            </div>
            <?php $i++;?>
            <?php endwhile; wp_reset_query(); ?>
        </div>
    </div>
    </div>
</div>