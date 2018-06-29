<div class="content-wrapper">
<!-- Content area -->
<div class="content">
<div class="breadcrumb-line breadcrumb-line-component">
   <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a>
   <ul class="breadcrumb">
      <li><a href=""><i class="icon-home2 position-left"></i> Home</a></li>
      <li><a href="">Dashboard</a></li>
      <li class="active">Albums</li>
   </ul>
</div>
<br>
<!-- Main charts -->
<div class="row">
   <div class="col-lg-12">
      <!-- Traffic sources -->
      <div class="panel panel-flat">
         <div class="panel-heading">
            <h2 class="panel-title">Albums Details</h2>
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
  
               <?php foreach($getEditdata as $row){?>
		
				<form name="add"   method="POST" action="<?php echo  base_url();?>Alubms/edit_alubms/<?php echo $row->id;?>" class="form-horizontal" enctype= "multipart/form-data">
                
                    <input type="hidden" value="" name="id"/>
                    <div class="form-body">
                       
                        <div class="form-group">
                            <label class="control-label col-md-3">Category</label>
                            <div class="col-md-9">
                                <select name="category_id" class="form-control">
                                    <option value="">--Select category--</option>
									<?php
										$category = $this->db->get_where('tbl_category')->result();
										foreach($category as $catRow)
										{
											?>
											<option <?php if($row->category_id == $catRow->id){ ?> selected="" <?php } ?>value="<?php echo $catRow->id; ?>"><?php echo $catRow->category; ?></option>
											<?php											
										}
									?>
                                   
                                </select>
                                <span class="help-block"></span>
                            </div>
						</div>
                     
                        <div class="form-group">
                            <label class="control-label col-md-3">Albums</label>
                            <div class="col-md-9">
                                <input name="album_name" placeholder="Albums name" class="form-control" type="text" value="<?php echo $row->album_name; ?>">
                                <span class="help-block"></span>
                            </div>
                        </div>
                       
                        <div class="form-group">
							<label class="control-label col-md-3"><b>Images</b></label>
							<div class="col-md-9">
								<?php if ($row->photos) { 
						//echo $row->image;
						$img = explode(',', trim($row->photos, ','));
						foreach($img as $rowimg)
						{
							?>
							<div class="field_wrapper99">
							<div class="col-md-6">
							<img src="<?php echo base_url(); ?>upload/albums/<?php echo $rowimg; ?>" class="img-responsive" style="width:180px; height:100px;margin:0 0 5px 0;">
							<input type="hidden" name="already_img[]" value="<?php echo $rowimg; ?>">
							<a href="javascript:void(0);" class="remove_button2" title="Remove field"
							style="position: absolute;margin: -30px 4px 0px 0px;left:165px;"
							><i style="color:white; background-color:red;padding:5px;" class="glyphicon glyphicon-trash"></i></a>
							</div>
							</div>
							<script type="text/javascript">
								$(document).ready(function(){
									//var maxField = 4; //Input fields increment limitation
									//var addButton = $('.add_button2'); //Add button selector
									var wrapper = $('.field_wrapper99'); //Input field wrapper	
									var x = 1; //Initial field counter is 1
									
									$(wrapper).on('click', '.remove_button2', function(e){ //Once remove button is clicked
										e.preventDefault();
										$(this).parent('div').remove(); //Remove field html
										x--; //Decrement field counter
									});
								});
							</script>
							<?php
						}
						
						?>
							
						<?php }else{ echo(" <h3>Upload Photo</h3>"); } ?>
						<div class="col-md-4">
						
						 <div id="filediv"><input name="file[]" class="form-control" type="file" id="file"></div>
						 <input type="button" id="add_more" class="upload" value="Add More Files"/>
						 <!--input type="submit" name="submit_updatebgimage" value="Update" class="btn btn-success" id="upload"-->
						</div>
							</div>
						</div>
                    </div>
               
				   <div style="text-align:center">
                     <input type="submit" name="update_albums" value="Update" class="btn btn-success">
                     <input type="reset" value="Reset" class="btn btn-danger">
                  </div>
               </form>
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
   