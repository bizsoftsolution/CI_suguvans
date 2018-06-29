$(function() {
		   
	/* @custom validation method (smartCaptcha) 
	------------------------------------------------------------------ */	
	$.validator.methods.captchas = function(value, element, param) {
			return value == param;
	};		   
		   
	$("#floraforms").validate({
			errorClass: "state-error",
			validClass: "state-success",
			errorElement: "em",
			rules: {
				username: {
						required: true
				},				
				emailaddress: {
						required: true,
						email: true
				},
				eventdates: {
						required: true
				},
				eventcity: {
						required: true
				},
				website: {
						required: true,
						url: true
				},				
				telephone: {
						required: true,
						number: true
				},
				minxters: {
						required: true,
						minlength: 8
				},
				maxxters: {
						required: true,
						maxlength: 16
				},
				password:{
						required: true					
				},
				repeatPassword:{
						required: true,					
						equalTo: '#password'
				},
				minval: {
						required: true,
						min: 20
				},
				maxval: {
						required: true,
						max: 10
				},
				captcha:{
							required:true,
							captchas:7
				},
				month:{
						required: true					
				},
				upload1:  {
						required: true,
						extension:'jpg|png|doc|docx|pdf'
				},
				'smartphones[]':{
							required: true
				},				
				comment: {
						required: true,
						minlength: 20
				},
				occasion:{
						required:true
				},
				'tablet[]':{
							required: true
				},
				'laptop[]':{
							required: true
				},
				other: {
					  required: '#occasion:checked'
					}				
			},
			messages:{
				firstname: {
						required: 'Enter first name',
						minlength: 'Enter at least 2 characters'
				},
				username: {
						required: 'Enter your full name'
				},
				eventdates: {
						required: 'Enter event dates'
				},
				eventcity: {
						required: 'Enter event city'
				},
				emailaddress: {
						required: 'Enter email address',
						email: 'Enter a VALID email address'
				},
				website: {
						required: 'Enter website URL',
						url: 'Enter a VALID URL'
				},				
				telephone: {
						required: 'Enter mobile number',
						number: 'Enter VALID numbers only'
				},
				minxters: {
						required: 'Enter minimum characters',
						minlength: 'Enter minimum 8 characters'
				},
				maxxters: {
						required: 'Enter maximum characters',
						maxlength: 'Enter maximum 16 characters'
				},
				password:{
						required: 'Enter password'
				},
				repeatPassword:{
						required: 'Repeat password',
						equalTo: 'Password mismatched'
				},
				minval: {
						required: 'Enter minimum value',
						min: 'Value must be 20 or above'
				},
				maxval: {
						required: 'Enter maximum value',
						max: 'Value must be 10 or less'
				},
				captcha:{
						required: 'Enter correct answer',
						captchas: 'Oops! answer incorrect'
				},
				month:{
						required: 'Select one option'				
				},
				upload1:  {
						required: 'Please browse and attach file',
						extension:'Attach only jpg,png,doc,docx,pdf'
				},
				'smartphones[]':{
							required: 'Please select options'	
				},
				comment: {
						required: 'Enter your comment',
						minlength: 'Enter at least 30 characters'
				},
				occasion:{
						required:'This is a required question'
				},
				other:{
						required:'Please enter the value'
				},
				'tablet[]':{
							required: 'Choose favourite tablet'
				},
				'laptop[]':{
							required: 'Choose favourite laptop'
				}				
			},
			highlight: function(element, errorClass, validClass) {
					$(element).closest('.field').addClass(errorClass).removeClass(validClass);
			},
			unhighlight: function(element, errorClass, validClass) {
					$(element).closest('.field').removeClass(errorClass).addClass(validClass);
			},
			errorPlacement: function(error, element) {
			   if (element.is(":radio") || element.is(":checkbox")) {
						element.closest('.option-group').after(error);
			   } else {
						error.insertAfter(element.parent());
			   }
			}
	});					

});	