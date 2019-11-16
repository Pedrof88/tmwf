<?php get_header(); ?>

	<main role="main">

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<!-- section -->
		<section class="hero-section <?php if(get_sub_field( 'content_side_news' )){echo 'left';}else{echo 'right';}; ?>">
			<?php if ( have_rows( 'group_left_news' ) ) : ?>
				<?php while ( have_rows( 'group_left_news' ) ) : the_row(); ?>
					<?php $image = get_sub_field( 'image' ); if ( $image ): ?>
					<div class="image-wrap">
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					</div>
					<?php endif; ?>
				<?php endwhile; ?>
			<?php endif; ?>
			<?php if ( have_rows( 'group_right_news' ) ) : ?>
				<?php while ( have_rows( 'group_right_news' ) ) : the_row(); ?>
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

		<section class="news-article content-section">

			<div class="container-large">

				<div class="col-12">
				<?php if (have_posts()): while (have_posts()) : the_post(); ?>

					<div class="content-wrapper">
						<?php the_content(); // Dynamic Content ?>
					</div>

				<?php endwhile; endif; ?>
				</div>

			</div>

		</section>
		<!-- /section -->
	</article>
	</main>

<?php get_footer(); ?>
