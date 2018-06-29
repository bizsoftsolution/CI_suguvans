<div class="content-wrapper">
<!-- Content area -->
<div class="content">
<div class="breadcrumb-line breadcrumb-line-component">
   <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a>
   <ul class="breadcrumb">
      <li><a href=""><i class="icon-home2 position-left"></i> Home</a></li>
      <li><a href="">Dashboard</a></li>
      <li class="active">Get Quote Details</li>
   </ul>
</div>
<br>
<!-- Main charts -->
<div class="row">
   <div class="col-lg-12">
      <!-- Traffic sources -->
      <div class="panel panel-flat">
        <div class="panel-heading">
           <h2 class="panel-title">Get Quote List</h2>
          
           <hr/>
        </div>
         <table class="table datatable-button-print-columns">
            <thead>
               <tr>
					<th>Sno </th>
					<th>Bride Name</th>
					<th>Mobile Number</th>
					<th>Email ID</th>
					<th>Event Type</th>
					<th>Action</th>
					
                 
               </tr>
            </thead>
            <tbody>
            <?php
            $i=1;
              foreach($getaquoteList as $row) {
            ?>
              <tr>
              <td><?php echo $i; ?></td>
              <td><?php echo $row->bride_name;?></td>
              <td><?php echo $row->mobile_number;?></td>
              <td><?php echo $row->email;?></td>
              <td><?php echo $row->event_type;?></td>
			<td><a class="btn btn-primary" href="<?php echo base_url(); ?>Home/viewGetquote/<?php echo $row->id; ?>"><i class="glyphicon glyphicon-eye"></i> View</a></td>
              </tr>
              <?php $i++;}?>


            </tbody>
         </table>
      </div>
      <!-- /traffic sources -->
   </div>
</div>
<!-- /dashboard content -->
