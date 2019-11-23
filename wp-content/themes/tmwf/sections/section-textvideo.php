<section class="textvideo-section content-section <?php if(get_sub_field( 'content_side' )){echo 'right';}else{echo 'left';}; ?>">

    <div class="container-large">
        <?php if ( have_rows( 'group_left' ) ) : ?>
            <?php while ( have_rows( 'group_left' ) ) : the_row(); ?>
                <div class="col-7">
                    <div class="video-wrapper">
                        <?php $overlay = get_sub_field( 'overlay' ); ?>
                        <?php if ( $overlay ) { ?>
                        <div class="image-overlay">
                            <a href="#">
                            <?php echo file_get_contents(get_template_directory_uri() . '/img/icons/play.svg'); ?>
                            </a>
                            <img src="<?php echo $overlay['url']; ?>" alt="<?php echo $overlay['alt']; ?>" />
                        </div>
                        <?php } ?>
                        <?php the_sub_field( 'video' ); ?>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
        
        <div class="col-5">
            <?php if ( have_rows( 'group_right' ) ) : ?>
                <?php while ( have_rows( 'group_right' ) ) : the_row(); ?>
                    <div class="content-wrapper">
                        <?php the_sub_field( 'content' ); ?>
                        <?php if(get_sub_field( 'button_url' )): ?>
                            <a href="<?php echo the_sub_field( 'button_url' ); ?>" class="arrow-link"><?php the_sub_field( 'button_text' ); ?></a>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<script>
    (function($){
        $('.image-overlay').on('click', 'a', function(e){
            e.preventDefault();

            $(this).parent().fadeOut();
            var videoURL = $(this).parent().next().prop('src');
            videoURL += "&autoplay=1";
            $(this).parent().next().prop('src',videoURL);
        });
    })(jQuery);
</script>