<div class="col-3 image-wrapper">
    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />
    <div class="content-wrapper">
        <h3><?php the_title(); ?></h3>
        <p><?php the_excerpt(); ?></p>
        <a href="<?php the_permalink(); ?>" class="arrow-link">Read more</a>
    </div>
</div>