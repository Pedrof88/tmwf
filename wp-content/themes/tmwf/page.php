<?php get_header(); ?>

	<main role="main">
    <!-- SECTIONS -->
    <?php get_template_part("sections/core");?>

    <?php if (is_page(37)) { ?>
        <section class="form">
        <div class="container-large">
            <div class="col-12">
                <h2 class="center-aligned">Submit your miles</h2>
            </div>
            <?php echo do_shortcode('[contact-form-7 id="1055" title="Leaderboard Form"]');?>
        </div>
    </section>
    <?php }?>
    <!-- SECTIONS -->
	</main>

<?php get_footer(); ?>