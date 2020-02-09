<div class="row">
    <section class="form">
        <div class="container-large">
            <div class="col-12">
                <h2><?php the_sub_field( 'title' ); ?></h2>
                <p><?php the_sub_field( 'content' ); ?></p>
            </div>
            <?php echo do_shortcode('[contact-form-7 id="203" title="Get in touch"]');?>
        </div>
    </section>
</div>