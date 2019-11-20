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
		
		<section class="filter-section">
			<div class="container-large">
				<select name="filter-gallery" id="filter-gallery">
					<?php $filter=0; if ( have_rows( 'gallery' ) ) : ?>
						<?php while ( have_rows( 'gallery' ) ) : the_row(); ?>
						
							<option value="<?php echo $filter; ?>"><?php the_sub_field( 'gallery_name' ) ?></option>

						<?php $filter++; endwhile; ?>
					<?php endif; ?>
				</select>
			</div>
		</section>
        
        <section class="gallery-section">
            <div class="container-large">
			
				<?php $gallery = 0; include(locate_template('sections/section-gallery.php')); ?>

            </div>
		</section>

		<script>
			(function($){
				$('.gallery-section').imagesLoaded( function(){
					$('.gallery-container').isotope({
						itemSelector: '.image-wrapper',
						percentPosition: true,
						masonry: {
							columnWidth: '.grid-sizer'
						}
					});
				});

				$('#filter-gallery').on('change', function(){
					$.ajax({
						type: "POST",
						url: "<?php echo admin_url('admin-ajax.php'); ?>",
						data: {
							action: "request_gallery",
							gallery: $(this).val(),
						},
						success: function (data) {
							$('.gallery-section .container-large').html('');
							//console.log("Hooray, it worked! - "+data);
							$('.gallery-section .container-large').append(data);
							$('.gallery-container').isotope();
						},
						error: function (jqXHR, textStatus, errorThrown) {
							console.error("The following error occured: " + textStatus, errorThrown);
						},
						complete: function () {
							//console.log('maxpage: '+maxpage+', currentpage: '+currentPage)
						}
					});
				});

				lightbox.option({
					'disableScrolling': true
				});
			})(jQuery);
		</script>

	</main>

<?php get_footer(); ?>
