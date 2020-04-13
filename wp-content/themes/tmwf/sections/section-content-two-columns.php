<section class="textimage-section content-section">
    <div class="container-large">
    <?php if( get_sub_field('title') ): ?>
    <div class="col-12">
        <h2 class="heading-secondary"><?php the_sub_field('title');?></h2>
    </div>
    <?php endif; ?>
        <div class="col-6 left">
            <div class="content-wrapper">
                <?php the_sub_field( 'content_left' ); ?>
            </div>
        </div>
        <div class="col-6 right">
            <div class="content-wrapper">
                <?php the_sub_field( 'content_right' ); ?>
            </div>
        </div>
    </div>
</section>