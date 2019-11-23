<?php $slider_images = get_sub_field( 'slider' ); ?>
<div class="fullslider-section">
    <div class="container-large">
        <div class="col-12">
        <?php if ( $slider_images ) :  ?>
            <div class="owl-carousel owl-theme fullslider-slider">
            <?php foreach ( $slider_images as $slider_image ): ?>
                <div class="item">
                    <img src="<?php echo $slider_image['url']; ?>" alt="<?php echo $slider_image['alt']; ?>" />
                </div>
            <?php endforeach; ?>
            </div>
        <?php endif; ?>
        </div>
    </div>
</div>