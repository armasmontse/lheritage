import {$, w} from './constants';

export default function(scope) {
     
    var logo = $('.header__logo');
    var position;
    var opacity;


    if (w.width() > 600) {
        position = Math.max(-66, 7-0.16*w.scrollTop()) + 'px';
        opacity = Math.max(-0.01, 1-0.019*w.scrollTop());
    }

    logo.css({
        'top': position
    });

    logo.css({
        'opacity': opacity
    })

}
