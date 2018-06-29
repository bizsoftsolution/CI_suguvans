   <!--Import Multi Step Indicator css-->
    <link href="<?php echo base_url(); ?>assets/formwizard/gsi-step-indicator.min.css" rel="stylesheet" />

    <!--Import  Step Form Wizard css-->
    <link href="<?php echo base_url(); ?>assets/formwizard/tsf-step-form-wizard.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/formwizard/parsley.min.css" rel="stylesheet" />
	<script src="<?php echo base_url(); ?>assets/formwizard/jquery-3.1.0.min.js1"></script>
	<script src="<?php echo base_url(); ?>assets/formwizard/parsley.js"></script>

    <script src="<?php echo base_url(); ?>assets/formwizard/tsf-wizard-plugin.js"></script>
	
  <div id="main-content-wrapper" class="clearfix">


<div class="we-are">
  <div class="container">

    <div class="title1 animated" data-animation="fadeInUp" data-animation-delay="100"> <h1 style="text-align:center;"><span style="color:#ff7800;">G</span>et a   <span style="color:#ff7800;">Q</span>uote</h1></div>

	
	 <div class="row"><div id="result" class="code-example" style="display:none;"></div></div>
        <div class="row">
            <!--h3>Example 1</h3-->
            <!-- BEGIN STEP FORM WIZARD -->
            <div class="tsf-wizard tsf-wizard-1">
                <!-- BEGIN NAV STEP-->
                <div class="tsf-nav-step">
                    <!-- BEGIN STEP INDICATOR-->
                    <ul class="gsi-step-indicator triangle gsi-style-1  gsi-transition ">
                        <li class="current" data-target="step-1">
                            <a href="#0">
                                <span class="number">1</span>
                                <span class="desc">
                                    <label>Couple Details</label>
                                    <span>Couple Details</span>
                                </span>
                            </a>
                        </li>
                        <li data-target="step-2">
                            <a href="#0">
                                <span class="number">2</span>
                                <span class="desc">
                                    <label>Budget Details</label>
                                    <span>Budget Details</span>
                                </span>
                            </a>
                        </li>
                        <li data-target="step-3">
                            <a href="#0">
                                <span class="number">
                                    3
                                </span>
                                <span class="desc">
                                    <label>Total Duration</label>
                                    <span>Total Duration</span>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <!-- END STEP INDICATOR--->
                </div>
                <!-- END NAV STEP-->
                <!-- BEGIN STEP CONTAINER -->

                <div class="tsf-container">
                    <!-- BEGIN CONTENT-->
                    <form class="tsf-content" action="">

                        <!--<form class="tsf-form">-->
                        <!-- BEGIN STEP 1-->
                        <div class="tsf-step step-1 active">
                            <fieldset>
                                <legend>Couple Details</legend>
                                <div class="row">
                                    <!-- BEGIN STEP CONTENT-->
                                    <div class="tsf-step-content">
                                        <div class="col-lg-12">
											<div class="form-group">
												<label for="fullname">Bride Name </label>
												<input type="text" class="form-control" id="fullname" name="bridename" placeholder="Bride Name" required>
											</div>
											<div class="form-group">
												<label for="fullname">Bride-Groom Name</label>
												<input type="text" class="form-control" id="fullname" name="bridegroom" placeholder="Bride-Groom Name" required>
											</div>
                                        </div>
                                    </div>
                                    <!-- END STEP CONTENT-->
                                </div>
								<legend>Contact Details</legend>
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label for="phone_number">Mobile Number</label>
											<input type="number" class="form-control" id="phone_number" name="phone_number" placeholder="Phone Number" required>
										</div>
										<div class="form-group">
											<label for="email">Email</label>
											<input type="email" class="form-control required" id="email" name="email" placeholder="Email">
										</div>
									</div>
								</div>
								<legend>Event Details</legend>
								<div class="row">
									<div class="col-lg-12">
										Type of Event *<br>
										You can mention specific / additional events not listed below, in the "Additional Information" section provided before submitting the form.
									</div>
									<div class="col-lg-12">
										<div class="radio">
										  <label><input type="radio" name="eventdetails" value="Brahmin Wedding ( All Major Events )">Brahmin Wedding ( All Major Events )</label>
										</div>
										<div class="radio">
										  <label><input type="radio" name="eventdetails" value="Brahmin Telugu Wedding ( All Major Events )">Brahmin Telugu Wedding ( All Major Events )</label>
										</div>
										<div class="radio">
										  <label><input type="radio" name="eventdetails" value="Muslim Wedding + Reception">Muslim Wedding + Reception</label>
										</div>
										<div class="radio">
										  <label><input type="radio" name="eventdetails" value="Non Brahmin Telugu Wedding ( All Events )">Non Brahmin Telugu Wedding ( All Events )</label>
										</div>
										<div class="radio">
										  <label><input type="radio" name="eventdetails" value="Normal Hindu Engagement + Wedding + Reception">Normal Hindu Engagement + Wedding + Reception</label>
										</div>
										<div class="radio">
										  <label><input type="radio" name="eventdetails" value="Normal Hindu Wedding + Reception">Normal Hindu Wedding + Reception</label>
										</div>
										<div class="radio">
										  <label><input type="radio" name="eventdetails" value="Christian Wedding + Reception">Christian Wedding + Reception</label>
										</div>
										<div class="radio">
										  <label><input type="radio" name="eventdetails" value="Engagement Only">Engagement Only</label>
										</div>
										<div class="radio">
										  <label><input type="radio" name="eventdetails" value="Wedding Muhurtham Only">Wedding Muhurtham Only</label>
										</div>
										
										<div class="radio">
										  <label><input type="radio" name="eventdetails" value="Reception Only">Reception Only</label>
										</div>
										<div class="radio">
										  <label><input type="radio" name="eventdetails" value="Baby Shower">Baby Shower</label>
										</div>
										<div class="radio">
										  <label><input type="radio" name="eventdetails">Other: <input type="text" name="eventdetails" value="" ></label>
										</div>
									</div>
								</div>
								<legend>Event Date & Associated Events</legend>
								<div class="row">
									<div class="col-lg-12">
										Month of Event <br>
										Please mention the month in which your event is taking place (Note : If your event is spread across two months, do mention the first month ; for example, if your day 1 event is on September 30th and day 2 event is on October 1, mention September)
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<!--label for="phone_number">Mobile Number</label-->
											<select class="form-control" id="sel1" name="eventmonth">
												<option>Select Month</option>
												<option value="January">January</option>
												<option value="February">February</option>
												<option value="March">March</option>
												<option value="April">April</option>
												<option value="May">May</option>
												<option value="June">June</option>
												<option value="July">July</option>
												<option value="August">August</option>
												<option value="September">September</option>
												<option value="October">October</option>
												<option value="November">November</option>
												<option value="December">December</option>
											</select>
										</div>
										<div class="form-group">
											<label for="email">Year of Event</label>
											<select class="form-control" id="sel1" name="eventyear">
												<option>Select Year</option>
												<option value="2017">2017</option>
												<option value="2018">2018</option>
												
											</select>
										</div>
										<div class="form-group">
											<label for="fullname">Mention Event Date(s) and Event Name(s)</label><br>
											<small>For Example : 15/01/2017 - Wedding Muhurtham ; 16/01/2017 - Wedding Reception</small>
											<input type="text" class="form-control" id="fullname" name="event1" required>
										</div>
										<div class="form-group">
											<label for="fullname">In which city is your event taking place? </label><br>
											<small>Mention locality/town/village also</small>
											<input type="text" class="form-control" id="fullname" name="place" required>
										</div>
										<div class="form-group">
											<label for="fullname">In which state is your event taking place? </label>
											<input type="text" class="form-control" id="fullname" name="eventplace" required>
										</div>
									</div>
								</div>
                            </fieldset>
                        </div>
                        <!-- END STEP 1-->
                        <!-- BEGIN STEP 2-->
                        <div class="tsf-step step-2">
                            <fieldset>
                                <legend>Budget for Photography, Video & Other Services</legend>
                                <!-- BEGIN STEP CONTENT-->
                                <div class="tsf-step-content">
									<div class="form-group">
                                        <label >Please select your budget for availing Studio 31's Services. We will send you a customised quotation based on your budget. We will provide you information on all the services that we provide as well.</label>
                                    </div>
                                    <div class="form-group">
                                        <!--label for="fullname">Fullname</label-->
                                        <div class="radio">
										  <label><input type="radio" name="budget" value="INR 50,000/- to INR 1,10,000/-">INR 50,000/- to INR 1,10,000/-</label>
										</div>
										<div class="radio">
										  <label><input type="radio" name="budget" value="Above INR 1,10,000/-" >Above INR 1,10,000/-</label>
										</div>
                                    </div>
                                    
                                </div>
                                <!-- END STEP CONTENT-->
                            </fieldset>
                        </div>
                        <!-- END STEP 2-->
                        <!-- BEGIN STEP 3-->
                        <div class=" tsf-step step-3 ">
                            <fieldset>
                                <legend>Total Duration of All Events Together</legend>
                                <!-- BEGIN STEP CONTENT-->
                                <div class="tsf-step-content">
                                    <div class="form-group">
                                        <label>Please select the total duration of all events put together.</label>
                                        <select class="form-control" id="sel1" name="eventduration">
											<option>Choose</option>
											<option value="Half Day">Half Day</option>
											<option value="One Day">One Day</option>
											<option value="One and Half Day">One and Half Day</option>
											<option value="Two Days">Two Days</option>
											<option value="Two and Half Days">Two and Half Days</option>
											<option value="Three Days">Three Days</option>
											<option value="Three and Half Days">Three and Half Days</option>
											<option value="More than Three Days">More than Three Days</option>
										</select>
                                    </div>
                                    <div class="form-group">
                                        <label>Number of guests expected for every event <br><small>Example : Reception - 800 to 1000, Wedding - 400 to 500</small></label>
                                        <input type="text" class="form-control" name="guests" placeholder="">
                                    </div>
									 <div class="form-group">
                                        <label>Additional Information regarding your event <br><small>Please provide detailed information regarding your event. It can also include additional events not mentioned in the list.</small></label>
                                        <input type="text" class="form-control" name="additionalinformation" placeholder="">
                                    </div>
									<div class="form-group">
                                        <label>How do you know Sugavans Photography?</label>
                                        <div class="radio">
										  <label><input type="radio" name="knows" value="Facebook Page">Facebook Page</label>
										</div>
										<div class="radio">
										  <label><input type="radio" name="knows" value="Google Search / Website">Google Search / Website</label>
										</div>
										<div class="radio">
										  <label><input type="radio" name="knows" value="Referral">Referral</label>
										</div>
										<div class="radio">
										  <label><input type="radio" name="knows">Other:<input type="text" name="knows" value="" ></label>
										</div>
                                    </div>
                                    <div class="form-group">
                                        <label>Which of following Representative's from Sugavans Photography requested you to fill this form?</label>
										<div class="radio">
										  <label><input type="radio" name="representative" value=""></label>
										</div>
										<div class="radio">
										  <label><input type="radio" name="representative" value="No one. I filled it by seeing the form online myself.">No one. I filled it by seeing the form online myself.</label>
										</div>
										<div class="radio">
										  <label><input type="radio" name="representative">Other:<input type="text" name="representative" value="" ></label>
										</div>
                                    </div>

                                </div>
                                <!-- END STEP CONTENT-->

                            </fieldset>
                        </div>
                        <!-- END STEP 3-->
                        <!--</form>-->
                    </form>
                    <!-- END CONTENT-->
                    <!-- BEGIN CONTROLS-->
                    <div class="tsf-controls ">
                        <!-- BEGIN PREV BUTTTON-->
                        <button type="button" data-type="prev" class="btn btn-left tsf-wizard-btn">
                            <i class="fa fa-chevron-left"></i> PREV
                        </button>
                        <!-- END PREV BUTTTON-->
                        <!-- BEGIN NEXT BUTTTON-->
                        <button type="button" data-type="next" class="btn btn-right tsf-wizard-btn">
                            NEXT <i class="fa fa-chevron-right"></i>
                        </button>
                        <!-- END NEXT BUTTTON-->
                        <!-- BEGIN FINISH BUTTTON-->
                        <button type="submit" data-type="finish" class="btn btn-right tsf-wizard-btn">
                            FINISH
                        </button>
                        <!-- END FINISH BUTTTON-->
                    </div>
                    <!-- END CONTROLS-->
                </div>
                <!-- END STEP CONTAINER -->


            </div>
            <!-- END STEP FORM WIZARD -->
            <div class="clearfix"></div>

        </div>
		
	<!--div class="col-md-2">
	
	</div>
	<div class="col-md-8">
		  <div id="fields">
			<form id="ajax-contact-form0" class="form-horizontal" action="javascript:alert('success!');">
			  <div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<label>Select Event</label>
						<select  class="form-control">
							<option value="">Select Event</option>
							<option value="wedding">Brahmin Wedding ( All Major Events )</option>
							<option value="wedding">Brahmin Telugu Wedding ( All Major Events )</option>
							<option value="wedding">Muslim Wedding + Reception</option>
							<option value="wedding">Non Brahmin Telugu Wedding ( All Events )</option>
							<option value="wedding">Normal Hindu Engagement + Wedding + Reception</option>
							<option value="wedding">Normal Hindu Wedding + Reception</option>
							<option value="wedding">Christian Wedding + Reception</option>
							<option value="wedding">Engagement Only</option>
							<option value="wedding">Wedding Muhurtham Only</option>
							<option value="wedding">Reception Only</option>
							<option value="baby">Baby Shower</option>
							<option value="new">Other</option>
						</select>
					</div>
				 
				</div>
				<div class="col-md-12" id="baby" style="display:none;">
				  <div class="form-group">
					  <label for="inputLName">Baby Name</label>
					  <input type="text" class="form-control" id="baby" name="baby" value="Baby Name" onBlur="if(this.value=='') this.value='Baby Name'" onFocus="if(this.value =='Baby Name' ) this.value=''">
				  </div>
				</div>
				<div class="col-md-12" id="new" style="display:none;">
				  <div class="form-group">
					  <label for="inputLName">Other</label>
					  <input type="text" class="form-control" id="new" name="new" value="Other" onBlur="if(this.value=='') this.value='Other'" onFocus="if(this.value =='Other' ) this.value=''">
				  </div>
				</div>
				<div id="wedding" style="display:none;">
					<div class="col-md-6">
						<div class="form-group">
							<label for="inputLName">Bride Name</label>
							<input type="text" class="form-control" id="bride" name="bride" value="Bride Name" onBlur="if(this.value=='') this.value='Bride Name'" onFocus="if(this.value =='Bride Name' ) this.value=''">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="inputLName">Groom Name</label>
							<input type="text" class="form-control" id="groom" name="groom" value="Groom Name" onBlur="if(this.value=='') this.value='Groom Name'" onFocus="if(this.value =='Groom Name' ) this.value=''">
						</div>
					</div>
					
				</div>
			  </div>
			  <div class="row">
				<div class="col-md-6">
				  <div class="form-group">
					  <label for="inputEmail">Email</label>
					  <input type="text" class="form-control" id="inputEmail" name="email" value="E-mail address" onBlur="if(this.value=='') this.value='E-mail address'" onFocus="if(this.value =='E-mail address' ) this.value=''">
				  </div>
				</div>
				<div class="col-md-6">
				  <div class="form-group">
					  <label for="inputPhone">Phone</label>
					  <input type="text" class="form-control" id="inputPhone" name="phone" value="Phone" onBlur="if(this.value=='') this.value='Phone'" onFocus="if(this.value =='Phone' ) this.value=''">
				  </div>
				</div>
			  </div>
			  <div class="row">
				<div class="col-md-6">
				  <div class="form-group">
					  <label for="inputEmail">Date</label>
					  <input type="date" class="form-control" id="inputEmail" name="email" value="Date" onBlur="if(this.value=='') this.value='E-mail address'" onFocus="if(this.value =='E-mail address' ) this.value=''">
				  </div>
				</div>
				<div class="col-md-6">
				  <div class="form-group">
					  <label for="inputPhone">Event Name</label>
					  <input type="text" class="form-control" id="inputPhone" name="phone" value="Event Name" onBlur="if(this.value=='') this.value='Event Name'" onFocus="if(this.value =='Phone' ) this.value=''">
				  </div>
				</div>
			  </div>
			  <div class="row">
				<div class="col-md-6">
				  <div class="form-group">
					  <label for="inputEmail">City</label>
					  <input type="text" class="form-control" id="city" name="city" value="City" onBlur="if(this.value=='') this.value='City'" onFocus="if(this.value =='City' ) this.value=''">
				  </div>
				</div>
				<div class="col-md-6">
				  <div class="form-group">
					  <label for="inputPhone">State</label>
					  <input type="text" class="form-control" id="state" name="state" value="State" onBlur="if(this.value=='') this.value='State'" onFocus="if(this.value =='State' ) this.value=''">
				  </div>
				</div>
			  </div>

			 

			  <button type="submit" class="btn-default btn-cf-submit0">Send message</button>
			</form>
		  </div>
		  <br>
	<br>
	<br>
	<br>
	</div-->
	


  </div>
</div>

	
	    <script>
        $(function () {
            pageLoadScript();
        });
    

        function pageLoadScript() {

            _stepEffect = $('#stepEffect').val();
            _style = 'style1';
            _stepTransition = $('#stepTransition').is(':checked');
            _showButtons = $('#showButtons').is(':checked');
            _showStepNum = $('#showStepNum').is(':checked');


          tsf1=  $('.tsf-wizard-1').tsfWizard({
                stepEffect: _stepEffect,
                stepStyle: _style,
                navPosition: 'top',
                validation: true,
                stepTransition: _stepTransition,
                showButtons: _showButtons,
                showStepNum: _showStepNum,
                height: 'auto',
                onNextClick: function (e, from, to, validation) {
                    $('#result').append('<br/>onNextClick from ' + from +
                        ' - to ' + to + ' validation ' + validation)
                },
                onPrevClick: function (e, from, to) {
                    $('#result').append('<br/>onPrevClick from ' + from + ' - to ' + to)
                },
                onFinishClick: function (e, validation) {
                    $('#result').append('<br/>onFinishClick validation ' + validation)
                }
            });         


        }
    </script>
	
<!--script>
$('select').on('change', function() {
  if(this.value == "wedding")
  {
	  $('#wedding').show();
	   $('#baby').hide();
	   $('#new').hide();
  }
  else if (this.value == "baby")
  {
	   $('#wedding').hide();
	   $('#baby').show();
	   $('#new').hide();
  }
  else if(this.value == "new")
  {
	   $('#wedding').hide();
	   $('#baby').hide();
	   $('#new').show();
  }
	  
})
</script-->