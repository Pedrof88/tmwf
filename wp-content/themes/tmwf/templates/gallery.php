<?php /* Template Name: Gallery template */ get_header(); ?>

	<main role="main">
        
        <section class="hero-section <?php if(get_sub_field( 'content_side_gallery' )){echo 'left';}else{echo 'right';}; ?>">
			<?php if ( have_rows( 'group_left_gallery' ) ) : ?>
				<?php while ( have_rows( 'group_left_gallery' ) ) : the_row(); ?>
					<?php $image = get_sub_field( 'image' ); if ( $image ): ?>
					<div class="image-wrap">
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					</div>
					<?php endif; ?>
				<?php endwhile; ?>
			<?php endif; ?>
			<?php if ( have_rows( 'group_right_gallery' ) ) : ?>
				<?php while ( have_rows( 'group_right_gallery' ) ) : the_row(); ?>
					<div class="content-wrap">
						<div class="content-container">
							<?php if( get_sub_field( 'title' ) ): ?>
								<h1><?php the_sub_field( 'title' ); ?></h1>
							<?php else: ?>
								<h1><?php the_title(); ?></h1>
							<?php endif; ?>
							<?php the_sub_field( 'content' ); ?>
						</div>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
        </section>
        
        <section class="gallery-section">
            <div class="container-large">
            <?php if ( have_rows( 'gallery' ) ) : ?>
                <?php while ( have_rows( 'gallery' ) ) : the_row(); ?>

                <div class="gallery-container" id="<?php echo strtolower(str_replace(' ', '-', get_sub_field( 'gallery_name' ))); ?>">
                <?php $gallery_images_images = get_sub_field( 'gallery_images' ); ?>
                <?php $count = 0; if ( $gallery_images_images ) :  ?>
                    <?php foreach ( $gallery_images_images as $gallery_images_image ): ?>
                    <div class="col-3 image-wrapper">
                        <a href="#image-<?php echo $count; ?>" class="gallery-link">
                            <img src="<?php echo $gallery_images_image['sizes']['large']; ?>" alt="<?php echo $gallery_images_image['alt']; ?>" />
                        </a>
                    </div>
                    <?php $count++; endforeach; ?>
                <?php endif; ?>
                </div>

                <?php endwhile; ?>
            <?php endif; ?>
            </div>
        </section>

	</main>

<?php get_footer(); ?>
