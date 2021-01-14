// jQuery version 1.5.2 included - (newest jQuery version that creates no problems with plugins.js)
// Available functions:
//          isDesktop()   isTablet()   isMobile()   toggleSection()
//          $.enterpriseFormInit()   $.enterprisePlaceholderInit()   $.enterpriseStepsInit()   $.mask()   $.validate()   $.responsiveSlides()
//
//          note: enterpriseFormInit automatically runs enterprisePlaceholderInit and enterpriseStepsInit

jQuery(document).ready(function() {

	var ua = navigator.userAgent.toLowerCase();
	var isAndroid = ua.indexOf("android") > -1; //&& ua.indexOf("mobile");
	if(isAndroid) {
		//$(".enterpriseform input#dayphone, .enterpriseform input#birthdate").attr('maxlength','10');
		$(".enterpriseform input#dayphone").attr('maxlength','10');
		$(".year-input").attr('maxlength','4');
		$(".enterpriseform input#zip").attr('maxlength','5');
		$(".enterpriseform input#birthdate").mask('99/99/9999');
	}
	else { 
		$(".enterpriseform input#dayphone").mask('(999) 999-9999');
		$(".enterpriseform input#birthdate").mask('99/99/9999');
		$('.year-input').mask('9999');
		$(".enterpriseform input#zip").mask('99999');
	}

	// Jquery UI Date Picker
	//$("#birthdate").datepicker({changeYear: true, yearRange : '-100y:c+nn' , maxDate: new Date()});

	if ($(window).width() < 1000) {
		//$("#birthdate").attr('readonly','true');
	}

	// custom validations for DOB 
	$('#birthdate').blur(function (){
		var s = $('#birthdate').val();
		var parms = s.split(/[\.\-\/]/);
		var yyyy = parseInt(parms[2], 10);
		var d = new Date();
		var currYear = d.getFullYear();
		var hundredYear = currYear - 110;
		var yearOld = currYear- yyyy;
		var minAgereq = 16;		
		//var errorflag = 0;
		if (yyyy > currYear) {
		    alert('Are you sure you are not born yet? Please enter valid date of birth.');
		    $('#birthdate').val("");
		    //errorflag = 1;
		    return true; 
		}	
		if (yyyy  < hundredYear) {			
			//if(errorflag == 0){
			var msg = "Your age: " + yearOld + "years";
			alert('Are you sure you are wanting to attend School? ' + msg);
		    $('#birthdate').val("");
		    return true;
			//}
		}		
		if (yearOld  < (minAgereq-1)) {	
			//if(errorflag == 0){
			var msgAge = "Minimum age requirement for selected Program is " + minAgereq + " years old.";	
			alert(msgAge);
		    $('#birthdate').val("");
		    return true;
		    //}
		}
	});


    jQuery('#enterpriseform').enterpriseFormInit({
	    'populateform':false,
	    'inlineErrors': false,
	    'thankyoupage': site['form']['returntourl'],
	    //'nextstep': 'Continue',
	    //'prevstep': 'Back'
    });

    /*jQuery('#CurriculumID').change(function() {
		// LocationID assignment per program selection
		if(jQuery('#CurriculumID').val() == '585365' || jQuery('#CurriculumID').val() == '585364'){
			jQuery('#LocationID').val("43373");
		}  		
		if(jQuery('#CurriculumID').val() == '585366' || jQuery('#CurriculumID').val() == '585367'){
			jQuery('#LocationID').val("43374");
		}		
		if(jQuery('#CurriculumID').val() == '585369' || jQuery('#CurriculumID').val() == '585368'){
			jQuery('#LocationID').val("43375");
		}
		// Logic below to add Inquiry term Options			
		if(jQuery('#CurriculumID').val() == '585364'){
			jQuery('#inquiryterm option').remove();
			jQuery('#inquiryterm').append('<option value="" selected="selected">Select an Inquiry Term</option>');
			jQuery('#inquiryterm').append('<option value="Fall 2018">Fall 2018</option>');
			jQuery('#inquiryterm').append('<option value="Fall 2019">Fall 2019</option>');
		}
		if(jQuery('#CurriculumID').val() == '585365'){
			jQuery('#inquiryterm option').remove();
			jQuery('#inquiryterm').append('<option value="" selected="selected">Select an Inquiry Term</option>');		
			jQuery('#inquiryterm').append('<option value="Summer 2018">Summer 2018</option>');
			jQuery('#inquiryterm').append('<option value="Summer 2019">Summer 2019</option>');
		}
		if(jQuery('#CurriculumID').val() == '585366'){
			jQuery('#inquiryterm option').remove();
			jQuery('#inquiryterm').append('<option value="" selected="selected">Select an Inquiry Term</option>');
			jQuery('#inquiryterm').append('<option value="Fall 2018">Fall 2018</option>');
			jQuery('#inquiryterm').append('<option value="Summer 2019">Summer 2019</option>');
		}
		if(jQuery('#CurriculumID').val() == '585368'){
			jQuery('#inquiryterm option').remove();
			jQuery('#inquiryterm').append('<option value="" selected="selected">Select an Inquiry Term</option>');
			jQuery('#inquiryterm').append('<option value="Summer 2018">Summer 2018</option>');
			jQuery('#inquiryterm').append('<option value="Fall 2019">Fall 2019</option>');
		}
	});	*/

	if(jQuery("#page-feature .slides").length > 1){
		jQuery("#page-feature .slides").responsiveSlides({
			auto: true,
			speed: 500,
			timeout: 7000,
			pager: true,
			nav: true,
			random: false,
			pause: true,
			pauseControls: false,
			prevText: "Previous",
			nextText: "Next",
			namespace: "feature"
			//before: function(){},
			//after: function(){}
		});
	}

	jQuery('#requestinfo.collapsible > header').click(function(){toggleSection('requestinfo');})
	jQuery('#page-navigation-mobile li').click(function(){
		if(jQuery(this).hasClass('function')){
			toggleSection(jQuery(this).attr('data-open'));
			return false;
		}
	});
	$('.accordion_sec h2, .accordion_sec h3').click(function(){
		if ($(this).next('.acc_content').is(':visible')){
			$(this).next('.acc_content').hide();
			$(this).removeClass('open').addClass('close');			
		}
		else if ($(this).next('.acc_content').is(':hidden')){
			$(this).next('.acc_content').show();
			$(this).removeClass('close').addClass('open');			
		}
	})
	/*if( $(window).width() <= 767 )	{
		console.log('form swap');
		$('.request_wrap').detach().insertBefore('.slides');
		$('#requestinfo header').click(function(){
			$('#enterpriseform').slideToggle();
		})
	}*/

});