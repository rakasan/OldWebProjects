/*!
 *
 * script.js v3.0
 * 
 *
 * Copyright 2011, Racasan Vlad
 *
 */
$(document).ready(function() {
/* =Services slide in / slide out accordion
-------------------------------------------------------------- */
	$('.accordion h6').click(function() {
		var $nextDiv = $(this).next();
		var $visibleSiblings = $nextDiv.siblings('article:visible');

		$(this).toggleClass('current').siblings('article').removeClass('current');
		if ($visibleSiblings.length ) {
			$visibleSiblings.slideUp('fast', function() {
			$nextDiv.slideToggle('fast');
		});
		} else {
			$nextDiv.slideToggle('fast');
		}
	 }); 

/* =End ready function
-------------------------------------------------------------- */
});


/* =Mail send & validation
-------------------------------------------------------------- */

	//Mail validation
	function validate_email(email) {
		var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
	    return reg.test(email);
	}
	//Contact submit
	var error = false;
	$(function(){
		$('.contact').submit(function(){
		
			if(!validate_email($('#contact_email').val()))
			{
				$('.contact_email', $(this)).addClass('error');	
				error = true;
			}
			if($('#contact_name').val() == '' || $('#contact_name').val() == '* Naam')
			{
				$('.contact_name', $(this)).addClass('error');
				error = true;
			}
			if($('#contact_message').val() == '' || $('#contact_name').val() == '* Uw bericht')
			{
				$('.contact_message', $(this)).addClass('error');
				error = true;
			}
			if (!error) {
				$('form.contact').hide();
				$('.confirm').fadeIn("slow").delay(3000);
				$.post('', {email: $('#contact_email').val(), name: $('#contact_name').val(), message: $('#contact_message').val(), form_type: $('#form_type').val()});
				$('.confirm').fadeOut("slow");
				$('form.contact').delay(4200).fadeIn("slow");
				$('#contact_name').val('* Naam');
				$('#contact_email').val('* Email');
				$('#contact_message').val('* Uw bericht');
				
			}
			error = false;
			//Return false so we don't actually submit the form
			return false;
		});
		// Remove error css class on focus or click
		$('.contact input').focus(function(){
			$('.contact_name').removeClass('error');
			$('.contact_email').removeClass('error');
			$('.contact_message').removeClass('error');
		});
	
		$('.contact').blur (function(){
			$('.contact_name').removeClass('error');
			$('.contact_email').removeClass('error');
			$('.contact_message').removeClass('error');
		});
	});
	//Bottom Contact submit
	var error = false;
	$(function(){
		$('form.bottom').submit(function(){
		
			if(!validate_email($('#bottom_email').val()))
			{
				$('.bottom_email', $(this)).addClass('error');	
				error = true;
			}
			if($('#bottom_name').val() == '' || $('#bottom_name').val() == '* Naam')
			{
				$('.bottom_name', $(this)).addClass('error');
				error = true;
			}
		
			if (!error) {
				$('form.bottom').hide();
				$('.bottom_confirm').fadeIn("slow").delay(3000);
				$.post('', {email: $('#bottom_email').val(), name: $('#bottom_name').val(), form_type: $('#form_type').val()});
				$('.bottom_confirm').fadeOut("slow");
				$('.form.bottom').delay(4200).fadeIn("slow");
				$('#bottom_name').val('* Naam');
				$('#bottom_email').val('* Email');
				
			}
			error = false;
			//Return false so we don't actually submit the form
			return false;
		});
		// Remove error css class on focus or click
		$('.bottom input').focus(function(){
			$('.bottom_name').removeClass('error');
			$('.bottom_email').removeClass('error');
		});
	
		$('.bottom').blur (function(){
			$('.bottom_name').removeClass('error');
			$('.bottom_email').removeClass('error');
		});

	});

	//Portfolio Contact submit
	var error = false;
	$(function(){
		$('form.portfolio-details').submit(function(){
		
			if(!validate_email($('#portfolio_email').val()))
			{
				$('.portfolio_email', $(this)).addClass('error');	
				error = true;
			}
			if($('#portfolio_name').val() == '' || $('#portfolio_name').val() == '* Naam')
			{
				$('.portfolio_name', $(this)).addClass('error');
				error = true;
			}
		
			if (!error) {
				$('form.portfolio-details').hide();
				$('.portfolio_confirm').fadeIn("slow").delay(3000);
				$.post('', {email: $('#portfolio_email').val(), name: $('#portfolio_name').val(), form_type: $('#form_type').val()});
				$('.portfolio_confirm').fadeOut("slow");
				$('.portfolio-details').delay(4200).fadeIn("slow");
				$('#portfolio_name').val('* Naam');
				$('#portfolio_email').val('* Email');
				
			}
			error = false;
			//Return false so we don't actually submit the form
			return false;
		});
		// Remove error css class on focus or click
		$('.bottom input').focus(function(){
			$('.portfolio_name').removeClass('error');
			$('.portfolio_email').removeClass('error');
		});
	
		$('.bottom').blur (function(){
			$('.portfolio_name').removeClass('error');
			$('.portfolio_email').removeClass('error');
		});
	
	});
