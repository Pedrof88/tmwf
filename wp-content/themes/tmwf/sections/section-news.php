<div class="news-container">
    <div class="col-3 grid-sizer"></div>
    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <?php get_template_part('sections/news', 'single'); ?>
    <?php endwhile; endif; ?>

</div>

<?php
    global $wp_query; // you can remove this line if everything works for you
    
    // don't display the button if there are not enough posts
    if (  $wp_query->max_num_pages > 1 )
    echo '<div class="row">
    <section class="full-width-button-small">    
        <a href="#" class="arrow-link misha_loadmore">Load more</a>
    </section>
</div>';
        //echo '<div class="misha_loadmore">More posts</div>'; // you can use <a> as well
    ?>

<script>
    (function($){
        jQuery(function($){ // use jQuery code inside this to avoid "$ is not defined" error
            $('.misha_loadmore').click(function(e){
                e.preventDefault();
        
                var button = $(this),
                    data = {
                    'action': 'loadmore',
                    'query': misha_loadmore_params.posts, // that's how we get params from wp_localize_script() function
                    'page' : misha_loadmore_params.current_page
                };
        
                $.ajax({ // you can also use $.post here
                    url : misha_loadmore_params.ajaxurl, // AJAX handler
                    data : data,
                    type : 'POST',
                    beforeSend : function ( xhr ) {
                        button.text('Loading...'); // change the button text, you can also add a preloader image
                    },
                    success : function( data ){
                        if( data ) { 
                            button.text( 'More posts' ); // insert new posts
                            var $content = $(data);
                            // $('.news-container').append( $content ).isotope( 'addItems', $content );
                            $('.news-container').isotope( 'insert', $content );
                            misha_loadmore_params.current_page++;
        
                            if ( misha_loadmore_params.current_page == misha_loadmore_params.max_page ) 
                                button.remove(); // if last page, remove the button
        
                            // you can also fire the "post-load" event here if you use a plugin that requires it
                            // $( document.body ).trigger( 'post-load' );
                        } else {
                            button.remove(); // if no data, remove the button as well
                        }
                    }
                });
            });
        });
    })(jQuery)
</script>