



// Scroll To Top

jQuery(document).ready(function() {

	var offset = 220;

	var duration = 500;

	jQuery(window).scroll(function() {

		if (jQuery(this).scrollTop() > offset) {

			jQuery('.scrollup').fadeIn(duration);

			} 

			else {

				jQuery('.scrollup').fadeOut(duration);

			}

		});

		

	jQuery('.scrollup').click(function(event) {

	event.preventDefault();

	jQuery('html, body').animate({scrollTop: 0}, duration);

	return false;

	})

});

//==========================================





// Search Function

new UISearch( document.getElementById( 'sb-search' ) );

//==========================================





// BX Slider

$('.bxslider').bxSlider({

  mode: 'fade',

  captions: true

});

//==========================================





// Owl Testimonial

$(document).ready(function() {

	function random(owlSelector){

		owlSelector.children().sort(function(){

		return Math.round(Math.random()) - 0.5;

			}).each(function(){

				$(this).appendTo(owlSelector);

			});

		}

		$("#owl-demo").owlCarousel({

			navigation: true,

        	navigationText : [

				"<i class='fa fa-angle-left'></i>",

				"<i class='fa fa-angle-right'></i>"

			],	

			beforeInit : function(elem){

			random(elem);

		}

	});

});

//==========================================





// Accordian

jQuery(document).ready(function($){

	$(".accordion_example2").smk_Accordion({

		closeAble: true,

	});			

});

//==========================================





// Iframe Videos 

$(document).ready(function(){

    $(".video_thmb a").click(function(e) {

        e.preventDefault();

        

        $("#someFrame").attr("src", $(this).attr("href"));

    })

});

//==========================================





// Scroller

$(document).ready(function ($) {

	$('.scroll_description').perfectScrollbar();

});

//==========================================





// MAP SCRIPT
function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(33.5113603,-86.75454669999999),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(33.5113603, -86.75454669999999)});infowindow = new google.maps.InfoWindow({content:"<b>Levite Jewish Community Center</b><br/>3960 Montclair Rd Birmingham, AL 35213<br/> New York" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);

//==========================================





// Radio Select Toggle



$("#first, #second").hide();
	$("[name=contact_method]").change(function() {
	var show = $(this).val() == "phone_method";
		$("#first").toggle(show);
	var show = $(this).val() == "email_method";
	$("#second").toggle(show);
});
//==========================================



$(function() {
  $('.cart_area .contact_scroll_down a[href*=#]:not([href=#])').click(function() {
	if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	  var target = $(this.hash);
	  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	  if (target.length) {
		$('html,body').animate({
		  scrollTop: target.offset().top
		}, 1000);
		return false;
	  }
	}
  });
});




$(function() {
  $('.four_boxes .green_box a[href*=#]:not([href=#])').click(function() {
	if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	  var target = $(this.hash);
	  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	  if (target.length) {
		$('html,body').animate({
		  scrollTop: target.offset().top
		}, 1000);
		return false;
	  }
	}
  });
});
