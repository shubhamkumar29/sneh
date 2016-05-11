jQuery.noConflict();
jQuery(function( jQuery ){
	jQuery( ".sub-menu" ).bind("mouseover mouseout",	function( event ){
		jQuery( this ).siblings().toggleClass('whiteColor');
	});
	jQuery('.socialIcon').hover(function() {
		jQuery(this).toggleClass('animated tada');
	});
	jQuery('.ancServices li').hover(function() {
		jQuery(this).find('img').toggleClass('animated tada');
	});
	jQuery('.faqList p').click(function() {
		jQuery(this).parent('li').children('div').slideToggle('fast');
		jQuery(this).toggleClass('active');
		jQuery(this).parent('li').siblings('li').children('div').slideUp('fast');
		jQuery(this).parent('li').siblings('li').children('p').removeClass('active');
	});
	/* For Responcive */
	var delay = (function(){
		var timer = 0;
		return function(callback, ms){
			clearTimeout (timer);
			timer = setTimeout(callback, ms);
		};
	})();
	var pause = 100;
	var winW = jQuery(window).width();
	if(winW >= 816) {
			
		winH = jQuery(window).height();
		// Keep minimum height 550
		if(winH <= 550) {
			winH = 550;
		}
		jQuery('.headBanHome').css('height', winH);	
		jQuery('.hidden-pos-slide1').css('top', parseInt(winH - 130));
		jQuery('.hidden-pos-slide2').css('margin-top', parseInt(winH - (winH+160)));
		jQuery('.hidden-pos-slide3').css('margin-top', parseInt(winH - (winH+160)));
		//$('html, body').animate({scrollTop:$('.hidden-pos-slide2').position().top}, 'slow');	
	
		jQuery('.showHideArrow').click(function() {
			jQuery('div.cartDetail').slideUp('fast');
			jQuery('.showHideArrow').removeClass('down');
			jQuery(this).parent().parent().siblings('div.cartDetail').slideToggle('fast');
			jQuery(this).toggleClass('down');
			
			
		});
	}
	// 
	var width = jQuery(window).width();
	if( width <= 815 ) {
		jQuery('ul li.menu-item-has-children > a').click(function(event) {
			event.preventDefault();
			jQuery('ul.sub-menu').slideUp('normal');
			jQuery(this).parent('li.menu-item-has-children').siblings('li').show('normal');
			jQuery(this).parent('li.menu-item-has-children').removeClass('minus');
			if(jQuery(this).next('ul.sub-menu').is(':hidden') == true) {    
				jQuery(this).parent('li.menu-item-has-children').siblings('li').hide('normal');
				jQuery(this).next('ul.sub-menu').slideDown('normal');
				jQuery(this).parent('li.menu-item-has-children').addClass('minus');
			} 
		});
	}; 
    jQuery(window).resize();
	
});