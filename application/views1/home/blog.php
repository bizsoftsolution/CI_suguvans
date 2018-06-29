   <div id="main-content-wrapper" class="clearfix" >
		   <div class="title1 animated" data-animation="fadeInUp" data-animation-delay="100"> <h1 style="text-align:center;"><span style="color:#ff7800;">B</span>log  </h1></div>
            <div class="we-are" style="background-color:#f1f4f5;padding-top:30px !important">
               <div class="container" >
			   
			   <?php 
			   $blog = $this->db->get('tbl_blog')->result();
			   foreach($blog as $row)
			   {
				   $pic = explode(',' ,$row->photos);
					
			   
			   ?>
			   
                  <div class="col-md-4">
					<div class="widget widget-article widget-shadow" style="background-color:#fff;padding: 25px;">
						<a href="<?php echo base_url().'Home/detailBlog/'.$row->id;?>" class="widget-header cover">
							<img class="cover-image" src="<?php echo base_url().'upload/blog/'.$pic[0]; ?>" alt="...">
						</a>
						<div class="widget-body" >
							<h3 class="title2 text-left"><?php echo $row->blog_name; ?></h3>
							
							<p>
							<?php echo $row->description;
							?>
							</p>
							<div class="widget-body-footer">
								
								<a href="<?php echo base_url().'Home/detailBlog/'.$row->id;?>"><button type="button" class="btn btn-default btn-cf-submit0">Read more</button></a>
							</div>
						</div>
					</div>
				  </div>
				  
				  
				  <?php
					
			   }
				  ?>
                
                 
                  

               </div>
            </div>
