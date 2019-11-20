<div class="row">
    <div class="leaderboard container-large">
        <?php
    $loop = new WP_Query( array(
        'post_type' => 'Leaderboards',
        'posts_per_page' => -1
    )
    );
    ?>
    <div class="desktop-view row">
        <div class="row">
            <div class="col-3 leaderboard__title">
                <p>Name</p>
            </div>
            <div class="col-3 leaderboard__title">
                <p>Miles walked</p>
            </div>
            <div class="col-3 leaderboard__title">
                <p>Total Walks</p>
            </div>
            <div class="col-3 leaderboard__title">
                <p>Years walked</p>
            </div>
        </div>

        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <div class="row grey-border">
                <div class="col-3">
                    <p><?php the_title();?></p>
                </div>
                <div class="col-3">
                    <p><?php the_field( 'miles_walked' ); ?></p>
                </div>
                <div class="col-3">
                    <p><?php the_field( 'total_walks' ); ?></p>
                </div>
                <div class="col-3">
                    <p><?php the_field( 'years_walked' ); ?></p>
                </div>
            </div>
        <?php endwhile; wp_reset_query(); ?>
        </div>

    <div class="mobile-view row">
        <div class="row">
            <div class="col-3 leaderboard__title">
                <p>Name</p>
            </div>
            <div class="col-3 leaderboard__title">
                <p>Miles walked</p>
            </div>
        </div>

        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <div class="row grey-border">
                <div class="col-3">
                    <p><?php the_title();?></p>
                </div>
                <div class="col-3">
                    <p><?php the_field( 'miles_walked' ); ?></p>
                </div>
            </div>
        <?php endwhile; wp_reset_query(); ?>
        </div>
    </div>
    </div>
</div>