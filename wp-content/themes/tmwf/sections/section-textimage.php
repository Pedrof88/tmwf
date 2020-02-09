<section class="textimage-section content-section <?php if(get_sub_field( 'content_side' )){echo 'right';}else{echo 'left';}; ?>">
    <div class="container-large">
        <div class="col-6">
            <div class="image-wrapper">
                <?php $image = get_sub_field( 'image' ); ?>
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />    
            </div>
        </div>
        <div class="col-6">
            <div class="content-wrapper">
                <?php the_sub_field( 'content' ); ?>
                <?php if(get_sub_field( 'button_url' )): ?>
                    <a href="<?php echo the_sub_field( 'button_url' ); ?>" class="arrow-link"><?php the_sub_field( 'button_text' ); ?></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>