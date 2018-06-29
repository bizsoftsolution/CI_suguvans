<script type="application/javascript">
/** After windod Load */
$(window).bind("load", function() {
  window.setTimeout(function() {
    $(".alert").fadeTo(300, 0).slideUp(500, function(){
        $(this).remove();
    });
}, 4000);
});

</script>

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/validation/floraforms.css">
<script src="<?php echo base_url(); ?>assets/validation/floraforms-plugins.js"></script>
<script src="<?php echo base_url(); ?>assets/validation.min.js"></script>
<div id="main-content-wrapper" class="clearfix">


<div class="we-are">
  <div class="container">
	<?php

        if($this->session->flashdata('Email')) {
        $message = $this->session->flashdata('Email');
        ?>
        <div class="<?php echo $message['class'] ?>"><?php echo $message['message']; ?>

        </div>
        <?php
        }
        ?>
    <div class="title1 animated" data-animation="fadeInUp" data-animation-delay="100"> <h1 style="text-align:center;"><span style="color:#ff7800;">C</span>ontact  <span style="color:#ff7800;">U</span>s</h1></div>

	<div class="col-md-4">
		<h4 ><span style="color:#ff7800;">K</span>indly fill the simple form and we will get back to you</h4>
		<hr>
		<h2>Phone</h2>
		+91 9655399556 <br>
		+91 9944599556
		<h2>Email Id</h2>
			sugavanphotography@gmail.com
		<h2>Address</h2>
		8/198, Raja Annamalai Rd, <br>Saibaba Colony, Coimbatore,<br> Tamil Nadu 641011
		<br><br>
		<img src="<?php echo base_url('assets/frontend/images/studio-s1.png');?>" class="img-responsive" style="width:200px;height:155px;"/>
	</div>
	<div class="col-md-8">
		<style>
											.error {
												/*border: 2px solid #f00;*/
												color:red;
											}

											.valid {
												border: 2px solid #0ff;
												color:red;
											}
											label.error
											{
												/*display: none!important;*/
												color:red;
											}
										</style>
		  <form method="post" action="<?php echo base_url(); ?>Home/sendMail" class="floraforms" id="floraforms">
            	<div class="flora-container wrap3">
                	<!--div class="frm-header">
                    	<h4>Form Validation</h4>
                    </div--><!-- end .frm-header section -->
                    <div class="frm-body">
                    
                        <div class="frm-row">
                            <div class="elem-group colm colm12">
								<label>Name</label>
                                <label class="field">
                                    <input type="text" name="username" id="username" class="flo-input" placeholder="Enter Your Full Name">
                                </label>                            
                            </div><!-- end .colm section section -->
                            <div class="elem-group colm colm6">
								<label>Email ID</label>
                                <label class="field">
                                    <input type="text" name="emailaddress" id="emailaddress" class="flo-input" placeholder="Enter Email ID" >
                                </label>                            
                            </div><!-- end .colm section section -->
							<div class="elem-group colm colm6">
								<label>Mobile Number</label>
								
                                <label class="field">
                                    <input type="text" name="telephone" id="telephone" class="flo-input" placeholder="Enter Mobile Number" maxlength="12">
                                </label>                            
                            </div><!-- end .colm section section -->
                        </div><!-- end .frm-row section -->
						<div class="frm-row">
                            <div class="elem-group colm colm12">
								<label>For which occasion do you want to enquire with Sugavans Photography?</label>
                                <div class="option-group field">
									<label class="flo-option block">
										<input type="radio" value="Wedding / Reception / Engagement / Sangeet" name="occasion">
										<span class="flo-radio"></span> Wedding / Reception / Engagement / Sangeet 
									</label>
									<label class="flo-option block">
										<input type="radio" value="Maternity / Birthday / Other Events" name="occasion">
										<span class="flo-radio"></span> Maternity / Birthday / Other Events                
									</label>
									<label class="flo-option block">
										<input type="radio" value="Couple Shoot" name="occasion" >
										<span class="flo-radio"></span> Couple Shoot  
									</label>
									<label class="flo-option block">
										<input type="radio"  name="occasion" id="occasion" value="Other">
										<span class="flo-radio"></span> Other :  
										<label class="field" style="float:right;">
											<input type="text" name="other" class="flo-input" id="other">
										</label> 
									</label>
								</div><!-- end .option-group section -->                            
                            </div><!-- end .colm section section -->
                        </div><!-- end .frm-row section -->
                        
                        <div class="frm-row">
                            <div class="elem-group colm colm6">
								<label>Event Dates</label>
                                <label class="field">
                                    <input type="date" name="eventdates" id="eventdates" class="flo-input" placeholder="Enter Event Dates">
                                </label>                            
                            </div><!-- end .colm section section -->
                            <div class="elem-group colm colm6">
								<label>Event City</label>
                                <label class="field">
									<select class="form-control flo-input" name="eventcity" id="eventcity">
										<option label="Select Event City"></option>
										<?php 
											$data = $this->db->get("tbl_city")->result();
											foreach($data as $row)
											{
										?>
											<option value="<?php echo $row->city_name; ?>"><?php echo $row->city_name; ?></option>
										<?php 
											}
										?>
									</select>
                                    <!--input type="text" name="eventcity" id="eventcity" class="flo-input" placeholder="Enter Event City"-->
                                </label>                            
                            </div><!-- end .colm section section -->
                        </div><!-- end .frm-row section -->
                        <div class="elem-group">
                            <label class="field">
                                <textarea class="flo-textarea" id="comment" name="comment" placeholder="Enter your comment"></textarea>
                                <span class="flo-hint"><strong>Hint:</strong> Don't be negative or off topic</span>   
                            </label>
                        </div><!-- end .elem-group section --> 
                        
                        
                    </div><!-- end .frm-body section -->
                    <div class="frm-footer">
                    	<p align="center"><button type="reset" class="flo-button">Reset</button>
                        <input type="submit" class="flo-button btn-themed" value="Submit" id="demo"></p>
                    </div><!-- end .frm-footer section -->
                </div><!-- end .flora-container section -->
            </form>
			
			<!--script type = "text/javascript">
				function ValidateEmail(email) {
					var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
					return expr.test(email);
				};
				$("#demo").live("click", function () {
					if (!ValidateEmail($("#emailaddress").val())) {
						alert("Invalid email address.");
					}
					else {
						//alert("Valid email address.");
					}
				});
			</script-->
		  <br>
	<br>
	<br>
	<br>
	</div>
	<div class="row">
	
		<img src="<?php echo base_url();?>images/map.jpg" class="img-responsive">
	
	</div>



  </div>
</div>
<script>
		$('document').ready(function() {
			
			$( "#floraforms" ).validate({
			  rules: {
				username: {
			required: true,
			minlength: 3
			},
			emailaddress: {
			required: true,
			email: true
			},
			telephone: {
			required: true,
			number: true,
			minlength: 10,
			//maxlength: 12,
			//digits: true
			},
			occasion: {
				required:true
			},
			 
			other: {
			  required: '#occasion:checked'
			},
					
			eventdates: {
			required: true,
			},
			
			eventcity: {
			required: true,
			//minlength: 3
			//maxlength: 15
			},

			comment: {
			required: true,
			//digits: true
			minlength: 50,
			},
			
			agree1: {
						//digits: true,
						//required: $('#agree1').is(':checked')
						required: true,
						}
			
			
			  }
			});

			
	});
	</script>