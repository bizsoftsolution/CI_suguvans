<div class="content-wrapper">
<!-- Content area -->
<div class="content">
<div class="breadcrumb-line breadcrumb-line-component">
   <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a>
   <ul class="breadcrumb">
      <li><a href=""><i class="icon-home2 position-left"></i> Home</a></li>
      <li><a href="">Dashboard</a></li>
      <li class="active">Video Details</li>
   </ul>
</div>
<br>
<!-- Main charts -->
<div class="row">
   <div class="col-lg-12">
      <!-- Traffic sources -->
      <div class="panel panel-flat">
        <div class="panel-heading">
           <h2 class="panel-title">Video List</h2>
           <div style="text-align:right;">
              <button class="btn btn-danger" onclick="add_video()"><i class="glyphicon glyphicon-plus"></i> Add Video</button>
             <button class="btn btn-default" onclick="reload_table()"><i class="glyphicon glyphicon-refresh"></i> Reload</button>
           </div>
           <hr/>
        </div>
                      <table class="table ">
                        <thead>
                            <tr>
                                <th>Video Name</th>
                                <th>video Link</th>
                                <th style="width:225px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>

                        <tfoot>
                        <tr>
                             <th>Video Name</th>
                                <th>video Link</th>
                               
                            <th>Action</th>
                        </tr>
                        </tfoot>
                    </table>
    </div>
      <!-- /traffic sources -->
   </div>
</div>
<!-- /dashboard content -->

   <script type="text/javascript">

   var save_method; //for save method string
   var table;
   var base_url = '<?php echo base_url();
  ?>';

   $(document).ready(function() {


       //datatables
       table = $('.table').DataTable({


           "processing": true, //Feature control the processing indicator.
           "serverSide": true, //Feature control DataTables' server-side processing mode.
           "order": [], //Initial no order.

           // Load data for the table's content from an Ajax source
           "ajax": {
               "url": "<?php echo base_url('Video/ajax_list');
  ?>",
               "type": "POST"
           },
		
           dom: 'Bfrtip',
           buttons: [
           
        ],
           //Set column definition initialisation properties.
           "columnDefs": [
               {
                   "targets": [ -1 ], //last column
                   "orderable": false, //set not orderable
               },
               {
                   "targets": [ -2 ], //2 last column (photo)
                   "orderable": false, //set not orderable
               },
           ],

       });

       //datepicker
     

       //set input/textarea/select event when change value, remove class error and remove text help block
       $("input").change(function(){
           $(this).parent().parent().removeClass('has-error');
           $(this).next().empty();
       });
       $("textarea").change(function(){
           $(this).parent().parent().removeClass('has-error');
           $(this).next().empty();
       });
       $("select").change(function(){
           $(this).parent().parent().removeClass('has-error');
           $(this).next().empty();
       });

   });



   function add_video()
   {
       save_method = 'add';
       $('#form')[0].reset(); // reset form on modals
       $('.form-group').removeClass('has-error'); // clear error class
       $('.help-block').empty(); // clear error string
       $('#modal_form').modal('show'); // show bootstrap modal
       $('.modal-title').text('Add Video'); // Set Title to Bootstrap modal title

     
   }

   function edit_video(id)
   {
       save_method = 'update';
       $('#form')[0].reset(); // reset form on modals
       $('.form-group').removeClass('has-error'); // clear error class
       $('.help-block').empty(); // clear error string


       //Ajax Load data from ajax
       $.ajax({
           url : "<?php echo base_url('Video/ajax_edit');?>/" + id,
           type: "GET",
           dataType: "JSON",
           success: function(data)
           {

               $('[name="id"]').val(data.id);
               $('[name="video_name"]').val(data.video_name);
               $('[name="video_link"]').val(data.video_link);
               
               $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
               $('.modal-title').text('Edit Video Details'); // Set title to Bootstrap modal title

           

           },
           error: function (jqXHR, textStatus, errorThrown)
           {
               alert('Error get data from ajax');
           }
       });
   }

   function reload_table()
   {
       table.ajax.reload(null,false); //reload datatable ajax
   }

   function save()
   {
       $('#btnSave').text('saving...'); //change button text
       $('#btnSave').attr('disabled',true); //set button disable
       var url;

       if(save_method == 'add') {
           url = "<?php
  echo base_url('Video/ajax_add');
  ?>";
       } else {
           url = "<?php
  echo base_url('Video/ajax_update');


  ?>";
       }

       // ajax adding data to database

       var formData = new FormData($('#form')[0]);
       $.ajax({
           url : url,
           type: "POST",
           data: formData,
           contentType: false,
           processData: false,
           dataType: "JSON",
           success: function(data)
           {

               if(data.status) //if success close modal and reload ajax table
               {
                   $('#modal_form').modal('hide');
                   reload_table();
               }
               else
               {
                   for (var i = 0; i < data.inputerror.length; i++)
                   {
                       $('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
                       $('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]); //select span help-block class set text error string
                   }
               }
               $('#btnSave').text('save'); //change button text
               $('#btnSave').attr('disabled',false); //set button enable


           },
           error: function (jqXHR, textStatus, errorThrown)
           {
               alert('Error adding / update data');
               $('#btnSave').text('save'); //change button text
               $('#btnSave').attr('disabled',false); //set button enable

           }
       });
   }

   function delete_video(id)
   {
       if(confirm('Are you sure delete this data?'))
       {
           // ajax delete data to database
           $.ajax({
               url : "<?php
  echo base_url('Video/ajax_delete');
  ?>/"+id,
               type: "POST",
               dataType: "JSON",
               success: function(data)
               {
                   //if success reload ajax table
                   $('#modal_form').modal('hide');
                   reload_table();
               },
               error: function (jqXHR, textStatus, errorThrown)
               {
                   alert('Error deleting data');
               }
           });

       }
   }

   </script>

   <!-- Bootstrap modal -->
   <div class="modal fade" id="modal_form" role="dialog">
       <div class="modal-dialog">
           <div class="modal-content">
               <div class="modal-header">
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                   <h3 class="modal-title">Video Form</h3>
               </div>
               <div class="modal-body form">
                   <form action="#" id="form" class="form-horizontal">
                       <input type="hidden" value="" name="id"/>
                       <div class="form-body">
                           <div class="form-group">
                               <label class="control-label col-md-3">Video Name</label>
                               <div class="col-md-9">
                                   <input name="video_name" placeholder="Video Name" class="form-control" type="text">
                                   <span class="help-block"></span>
                               </div>
                           </div>
                           <div class="form-group">
                               <label class="control-label col-md-3">Video Link</label>
                               <div class="col-md-9">
                                   <input name="video_link" placeholder="Video Link" class="form-control" type="text">
                                   <span class="help-block"></span>
                               </div>
                           </div>

                       </div>
                   </form>
               </div>
               <div class="modal-footer">
                   <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
                   <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
               </div>
           </div><!-- /.modal-content -->
       </div><!-- /.modal-dialog -->
   </div><!-- /.modal -->
