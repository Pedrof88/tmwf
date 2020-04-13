(function($) {
    jQuery(window).ready(function($) {

 		//Example GSAP Code
        // $("h1").click(function() {
        //     if ($(this).hasClass("rotate")) {
        //         TweenLite.to(this, 0.5, {
        //             className: "-=rotate",
        //             delay: 0.1,
        //             ease: Back.easeOut
        //         });
        //     } else {
        //         TweenLite.to(this, 0.5, {
        //             className: "+=rotate",
        //             delay: 0.1,
        //             ease: Back.easeOut
        //         });
        //     }
        // })

        //Widow Tamer
        // wt.fix({
        //     elements: '.central p',
        //     chars: 25,
        //     event: 'resize'
        // });

        // Equalize heights using data-equal="true"
        $(function() {
            $('*[data-equal="true"]').matchHeight();
        });

        // Sticky Footer Calculator
        var bumpItBottom = function() {
                $('body').css('margin-bottom', $('.footer').outerHeight());
            },
            didResize = false;
        bumpItBottom();
        $(window).resize(function() {
            didResize = true;
        });
        setInterval(function() {
            if (didResize) {
                didResize = false;
                bumpItBottom();
            }
        }, 250);

        //Smooth Anchor Link Scrolling
        $(function() {
            $('a[href*="#"]:not([href="#"])').click(function() {
                if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    if (target.length) {
                        $('html, body').animate({
                            scrollTop: target.offset().top
                        }, 500);
                        return false;
                    }
                }
            });
        });

    });

})(jQuery);