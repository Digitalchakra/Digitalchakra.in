$(document).ready(function() {
	
	redrawDotNav();
	
	/* Scroll event handler */
    $(window).bind('scroll',function(e){
    	parallaxScroll();
		redrawDotNav();
    });
    
	/* Next/prev and primary nav btn click handlers */
	$('a.our-process-page1').click(function(){
    	$('html, body').animate({
    		scrollTop:0
    	}, 1000, function() {
	    	parallaxScroll(); // Callback is required for iOS
		});
    	return false;
	});
    $('a.behavior_look_and_feel').click(function(){
    	$('html, body').animate({
    		scrollTop:$('#behavior_look_and_feel').offset().top
    	}, 1000, function() {
	    	parallaxScroll(); // Callback is required for iOS
		});
    	return false;
    });
    $('a.behaviour_page3').click(function(){
    	$('html, body').animate({
    		scrollTop:$('#behaviour_page3').offset().top
    	}, 1000, function() {
	    	parallaxScroll(); // Callback is required for iOS
		});
    	return false;
    });
	$('a.testings').click(function(){
    	$('html, body').animate({
    		scrollTop:$('#testings').offset().top
    	}, 1000, function() {
	    	parallaxScroll(); // Callback is required for iOS
		});
    	return false;
    });
    	$('a.characteris').click(function(){
    	$('html, body').animate({
    		scrollTop:$('#characteris').offset().top
    	}, 1000, function() {
	    	parallaxScroll(); // Callback is required for iOS
		});
    	return false;
    });
    	$('a.scrum').click(function(){
    	$('html, body').animate({
    		scrollTop:$('#scrum').offset().top
    	}, 1000, function() {
	    	parallaxScroll(); // Callback is required for iOS
		});
    	return false;
    });

    /* Show/hide dot lav labels on hover */
    $('nav#primary a').hover(
    	function () {
			$(this).prev('h1').show();
		},
		function () {
			$(this).prev('h1').hide();
		}
    );
    
});

/* Scroll the background layers */
function parallaxScroll(){
	var scrolled = $(window).scrollTop();
	$('#parallax-bg1').css('top',(0-(scrolled*1.5))+'px');
	$('#parallax-bg2').css('top',(0-(scrolled*3))+'px');
	$('#parallax-bg3').css('top',(0-(scrolled*.95))+'px');	
	$('#parallax-bg4').css('top',(0-(scrolled*2))+'px');
	$('#parallax-bg5').css('top',(0-(scrolled*2.5))+'px');
	$('#parallax-bg6').css('top',(0-(scrolled*2.7))+'px');	
	$('#parallax-bg7').css('top',(0-(scrolled*2.9))+'px');
}

/* Set navigation dots to an active state as the user scrolls */
function redrawDotNav(){
	var section1Top =  0;
	// The top of each section is offset by half the distance to the previous section.
	var section2Top =  $('#behavior_look_and_feel').offset().top - (($('#behaviour_page3').offset().top - $('#behavior_look_and_feel').offset().top) / 2);
	var section3Top =  $('#behaviour_page3').offset().top - (($('#testings').offset().top - $('#behaviour_page3').offset().top) / 2);
	var section4Top =  $('#testings').offset().top - (($('#characteris').offset().top - $('#testings').offset().top) / 2);
	var section5Top =  $('#characteris').offset().top - (($('#scrum').offset().top - $('#characteris').offset().top) / 2);	
	var section6Top =  $('#scrum').offset().top - (($(document).height() - $('#scrum').offset().top) / 2);;

	$('nav#primary a').removeClass('active');
	if($(document).scrollTop() >= section1Top && $(document).scrollTop() < section2Top){
		$('nav#primary a.our-process-page1').addClass('active');
	} else if ($(document).scrollTop() >= section2Top && $(document).scrollTop() < section3Top){
		$('nav#primary a.behavior_look_and_feel').addClass('active');
	} else if ($(document).scrollTop() >= section3Top && $(document).scrollTop() < section4Top){
		$('nav#primary a.behaviour_page3').addClass('active');
	} else if ($(document).scrollTop() >= section4Top && $(document).scrollTop() < section5Top){
		$('nav#primary a.testings').addClass('active');
	} else if ($(document).scrollTop() >= section5Top && $(document).scrollTop() < section6Top){
		$('nav#primary a.characteris').addClass('active');
	} else if ($(document).scrollTop() >= section6Top){
		$('nav#primary a.scrum').addClass('active');
	}
	
}
