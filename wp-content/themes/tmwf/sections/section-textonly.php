<section class="textonly-section content-section">
    <div class="container-large">
        
        <?php if( get_sub_field( 'column_option' ) == 1 ): ?>

        <div class="col-1"></div>
        <div class="col-5">
            <div class="content-wrapper">
                <?php the_sub_field( 'content_left' ); ?>
            </div>
        </div>
        <div class="col-5">
            <div class="content-wrapper">
                <?php the_sub_field( 'content_right' ); ?>
            </div>
        </div>
        <div class="col-1"></div>

        <?php else: ?>

        <div class="col-12">
            <div class="content-wrapper">
                <?php the_sub_field( 'content_full' ); ?>
            </div>
        </div>

        <?php endif; ?>

    </div>
</section>