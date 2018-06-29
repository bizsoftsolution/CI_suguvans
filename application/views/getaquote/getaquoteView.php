<div class="content-wrapper">
<!-- Content area -->
<div class="content">
<div class="breadcrumb-line breadcrumb-line-component">
   <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a>
   <ul class="breadcrumb">
      <li><a href=""><i class="icon-home2 position-left"></i> Home</a></li>
      <li><a href="">Dashboard</a></li>
      <li class="active">Get Quote</li>
   </ul>
</div>
<br>
<!-- Main charts -->
<div class="row">
   <div class="col-lg-12">
      <!-- Traffic sources -->
      <div class="panel panel-flat">
         <div class="panel-heading">
            <h2 class="panel-title">Get Quote Details</h2>
            <div style="text-align:right;">

              
            </div>
            <hr/>
         </div>
         <div class="container-fluid">
            <!-- content Starts Here-->
			<div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
               <br>
  
               <?php foreach($viewGetquote as $row){?>
				
				<div class="table-responsive">
					<table class="table">
						<tr>
							<th>Bride Name</th>
							<td><?php echo $row->bride_name; ?></td>
						</tr>
						<tr>
							<th>Bride-Groom Name</th>
							<td><?php echo $row->bride_groom_name; ?></td>
						</tr>
						<tr>
							<th>Mobile Number</th>
							<td><?php echo $row->mobile_number; ?></td>
						</tr>
						<tr>
							<th>Email ID</th>
							<td><?php echo $row->email; ?></td>
						</tr>
						<tr>
							<th>Type of Event</th>
							<td><?php echo $row->event_type; ?></td>
						</tr>
						<tr>
							<th>Month of Event</th>
							<td><?php echo $row->month_of_event; ?></td>
						</tr>
						<tr>
							<th>Year of Event</th>
							<td><?php echo $row->year_of_event; ?></td>
						</tr>
						<tr>
							<th>Mention Event Date(s) and Event Name(s)</th>
							<td><?php echo $row->mention_event_date; ?></td>
						</tr>
						<tr>
							<th>In which city is your event taking place?</th>
							<td><?php echo $row->event_city; ?></td>
						</tr>
						<tr>
							<th>In which state is your event taking place?</th>
							<td><?php echo $row->event_state; ?></td>
						</tr>
						<tr>
							<th>Budget for Photography, Video & Other Services</th>
							<td><?php echo $row->budget; ?></td>
						</tr>
						<tr>
							<th>Total Duration</th>
							<td><?php echo $row->eventduration; ?></td>
						</tr>
						<tr>
							<th>Number of guests expected for every event</th>
							<td><?php echo $row->guests; ?></td>
						</tr>
						<tr>
							<th>Additional Information regarding your event </th>
							<td><?php echo $row->additionalinformation; ?></td>
						</tr>
						<tr>
							<th>How do you know Sugavans Photography?</th>
							<td><?php echo $row->knowssugavans; ?></td>
						</tr>
						<tr>
							<th>Which of following Representative's from Sugavans Photography requested you to fill this form?</th>
							<td><?php echo $row->representative; ?></td>
						</tr>
					</table>
				</div>
				
			   <!--CKeditor-->
				
               <?php } ?>
               <br><br>
            </div>
			 <div class="col-md-1"></div>
			</div>
         </div>
      </div>
      <!-- /traffic sources -->
   </div>
</div>
<!-- /dashboard content -->
   