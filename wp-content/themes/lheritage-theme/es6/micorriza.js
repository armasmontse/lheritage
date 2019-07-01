import {$, w} from './constants';
import scrollit from './scrollit'
import menu from './menu'
import './slider'
import logoScroll from './logo-scroll'
import modal from './modal'

$(document).ready(function() {

    scrollit();
    menu();
    modal();
    new WOW().init();
    // const scrollify = $('.scrollify');

    $('.gallery__slick-slide').slick({
        dots: false,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
    });

    const gallery = $('.gallery');


    function fullpageScroll(breakSm) {
	    if (!breakSm.matches) {
	        //search movil
            const scrollify = $('.scrollify');
            if(scrollify.length){

                $.scrollify({
                    section : ".section-scroll",
                    interstitialSection : "footer",
                    sectionName: false,
                    // scrollSpeed:    2000,
                });

            }
            logoScroll();


            //Parallax with ScrollMagic
            var controller = new ScrollMagic.Controller({addIndicators: false,});
            
            // create a scene
            $('.menu_parallax_JS').each(function(){

                var timelineMaxParallax = new TimelineMax();

                $(this).find('.y-scroll_JS').each(function() {

                    var transition  = $(this).data('transition') + '%';
                    var duration  = $(this).data('duration') ? true : 0;
                    var position  = $(this).data('time') ? true : 0;

                    timelineMaxParallax.from(this, duration, {
                        y: transition,
                        // ease: Back.easeIn.config(1)
                        // ease: Circ.easeOut,
                        ease: Sine.easeOut
                    }, position)

                });

                var slideParallaxScene = new ScrollMagic.Scene({
                    //triggerElement: this,
                    offset: 300,
                    triggerHook: 1.3,
                    duration: '100%',
                })
                // .setClassToggle(this, 'in-viewport_JS')
                .setTween(timelineMaxParallax)
                .addTo(controller);

            });


	    }
	}

	var breakSm = window.matchMedia("(max-width: 768px)")
	fullpageScroll(breakSm)
	breakSm.addListener(fullpageScroll)



});

w.scroll(function() {
    logoScroll();
})
