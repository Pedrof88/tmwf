<?php if( is_front_page() ): ?>
<section class="textvideo-section content-section <?php if(get_sub_field( 'content_side' )){echo 'right';}else{echo 'left';}; ?>">
    <div class="container-large">
        <?php if ( have_rows( 'group_left' ) ) : ?>
            <?php while ( have_rows( 'group_left' ) ) : the_row(); ?>
                <div class="col-7">
                    <div class="video-wrapper">
                        <?php $videosrc = get_sub_field( 'video' ); ?>
                        <?php $overlay = get_sub_field( 'overlay' ); ?>
                        <?php if ( $overlay ) { ?>
                        <div class="image-overlay">
                            <?php if( get_sub_field( 'video' ) ): ?>
                            <a href="#">
                            <?php echo file_get_contents(get_template_directory_uri() . '/img/icons/play.svg'); ?>
                            </a>
                            <?php endif; ?>
                            <img src="<?php echo $overlay['url']; ?>" alt="<?php echo $overlay['alt']; ?>" />
                        </div>
                        <?php } ?>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
        
        <div class="col-4">
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

<div class="modal" id="video">
    <div class="modal__container">
        <?php echo $videosrc; ?>
    </div>
</div>

<script>
(function($){
    $('.image-overlay').on('click', 'a', function(e){
        e.preventDefault();

        $('#video').addClass('active');

        //$(this).parent().fadeOut();
        var videoURL = $('#video').prop('src');
        videoURL += "&autoplay=1";
        $(this).parent().next().prop('src',videoURL);
    });

    $('.modal').on('click', function(e){
        e.preventDefault();
        if (e.target == this) {
            $('.modal').removeClass("active");
        }
    });
})(jQuery);
</script>
<?php else: ?>
<section class="textvideo-section content-section <?php if(get_sub_field( 'content_side' )){echo 'right';}else{echo 'left';}; ?>">
    <div class="container-large">
        <?php if ( have_rows( 'group_left' ) ) : ?>
            <?php while ( have_rows( 'group_left' ) ) : the_row(); ?>
                <div class="col-7">
                    <div class="video-wrapper">
                        <?php $videosrc = get_sub_field( 'video' ); ?>
                        <?php $overlay = get_sub_field( 'overlay' ); ?>
                        <?php if ( $overlay ) { ?>
                        <div class="image-overlay">
                            <?php if( $videosrc ): ?>
                                <a href="#">
                                <?php echo file_get_contents(get_template_directory_uri() . '/img/icons/play.svg'); ?>
                                </a>
                            <?php endif; ?>
                            <img src="<?php echo $overlay['url']; ?>" alt="<?php echo $overlay['alt']; ?>" />
                        </div>
                        <?php } ?>
                        <?php the_sub_field( 'video' ); ?>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
        
        <div class="col-4">
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

<div class="modal" id="video">
    <div class="modal__container">
        <?php echo $videosrc; ?>
    </div>
</div>

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
<?php endif; ?>