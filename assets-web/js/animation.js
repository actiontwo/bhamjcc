function el_animate() {
    var delay, speed, prog;
    $('.animated').each(function() {
        var el = $(this);
        //console.log( elements[i] , i );
        if (el.visible(true)) {
            /*if (el.data('animtype') == 'animate-progress') {
                el.addClass('animated_visible');
                prog = el.find('.team-member-progress-bar');
                prog.css('opacity', 1).css('width', el.data('progress-to'));
                el.find('.team-member-progress-bar-value').html(el.data('progress-to'));

                return;
            }*/

            delay = el.data('animdelay');
            if (!delay) {
                delay = 0;
            }

            el.css('-webkit-animation-delay', delay);
            el.css('-moz-animation-delay', delay);
            el.css('-o-animation-delay', delay);
            el.css('animation-delay', delay);

            speed = el.data('animspeed');

            if (!speed) {
                speed = 0.5;
            }

            el.css('-webkit-animation-duration', speed);
            el.css('-moz-animation-duration', speed);
            el.css('-o-animation-duration', speed);
            el.css('animation-duration', speed);

          /*el.delay(1000)
          .queue( function(){
					if (el.data('animtype')) {
						el.addClass(el.data('animtype'));
					}
						el.addClass('animated_visible');
					});*/
			
			if (el.data('animtype')) {
				el.addClass(el.data('animtype'));
			}
			el.addClass('animated_visible');
					
            // que.push(this);
        }
        else if (el.data('animrepeat') == '1') {
            el.removeClass(el.data('animtype'));
            el.removeClass('animated_visible');
        }
		
    });
}

$(window).ready(el_animate);
$(window).load(el_animate);


$(window).scroll(function(event) {
    el_animate();
});

/*
 * Viewport - jQuery selectors for finding elements in viewport
 *
 * Copyright (c) 2008-2009 Mika Tuupola
 *
 * Licensed under the MIT license:
 *   http://www.opensource.org/licenses/mit-license.php
 *
 * Project home:
 *  http://www.appelsiini.net/projects/viewport
 *
 */
(function($) {


    /**
     * Copyright 2012, Digital Fusion
     * Licensed under the MIT license.
     * http://teamdf.com/jquery-plugins/license/
     *
     * @author Sam Sehnert
     * @desc A small plugin that checks whether elements are within
     *     the user visible viewport of a web browser.
     *     only accounts for vertical position, not horizontal.
     */

    $.fn.visible = function(partial) {

        var $t = $(this),
                $w = $(window),
                viewTop = $w.scrollTop(),
                viewBottom = viewTop + $w.height(),
                _top = $t.offset().top,
                _bottom = _top + $t.height(),
                compareTop = partial === true ? _bottom : _top,
                compareBottom = partial === true ? _top : _bottom;

        return ((compareBottom <= viewBottom) && (compareTop >= viewTop));

    };


})(jQuery);