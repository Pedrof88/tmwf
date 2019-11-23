<?php $slider_images = get_sub_field( 'slider' ); ?>
<div class="fullslider-section">
    <?php if ( $slider_images ) :  ?>
        <div class="owl-carousel owl-theme">
        <?php foreach ( $slider_images as $slider_image ): ?>
            <div class="item">
                <img src="<?php echo $slider_image['sizes']['thumbnail']; ?>" alt="<?php echo $slider_image['alt']; ?>" />
                </div>
        <p><?php echo $slider_image['caption']; ?></p>
        <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>    