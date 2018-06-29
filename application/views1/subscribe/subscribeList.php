<div class="content-wrapper">
<!-- Content area -->
<div class="content">
<div class="breadcrumb-line breadcrumb-line-component">
   <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a>
   <ul class="breadcrumb">
      <li><a href=""><i class="icon-home2 position-left"></i> Home</a></li>
      <li><a href="">Dashboard</a></li>
      <li class="active">Subscribe Details</li>
   </ul>
</div>
<br>
<!-- Main charts -->
<div class="row">
   <div class="col-lg-12">
      <!-- Traffic sources -->
      <div class="panel panel-flat">
        <div class="panel-heading">
           <h2 class="panel-title">Subscribe List</h2>
          
           <hr/>
        </div>
         <table class="table datatable-button-print-columns">
            <thead>
               <tr>
					<th>Sno </th>
					<th>Email Id</th>
					<th>Phone Number</th>
					
                 
               </tr>
            </thead>
            <tbody>
            <?php
            $i=1;
              foreach($subscribeList as $row) {
            ?>
              <tr>
              <td><?php echo $i; ?></td>
              <td><?php echo $row->email_id;?></td>
              <td><?php echo $row->phone_no;?></td>
            
              </tr>
              <?php $i++;}?>


            </tbody>
         </table>
      </div>
      <!-- /traffic sources -->
   </div>
</div>
<!-- /dashboard content -->
