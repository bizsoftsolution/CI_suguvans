<div id="main-content-wrapper" class="clearfix">
         
          <?php
		  $blog = $this->db->get_where('tbl_blog',array('id'=>$id))->result();
		  foreach($blog as $row)
		  {
		  ?>
            <div class="container">
               <div class="breadcrumbs1_wrapper">
                  <div class="">
                  </div>
               </div>
               <div class="row">
			   <div class="title1 animated" data-animation="fadeInUp" data-animation-delay="100"> <h1 style="text-align:center;"><span style="color:#ff7800;">B</span>log  </h1></div>
				  <div class="col-md-1">
				  </div>
                  <div class="col-sm-10">
                     <div class="content-part">
                        <div class="post post-short">
                           <div class="post-header">
                              <div class="post-slide">
                                 <div id="sl">
                                    <a class="sl_prev" href="#"><i class="fa fa-angle-left"></i></a>
                                    <a class="sl_next" href="#"><i class="fa fa-angle-right"></i></a>
                                    <div class="carousel-box">
                                       <div class="inner">
                                          <div class="carousel main">
                                             <ul>
											 <?php 
											 $pic = explode(',' ,$row->photos);
											 foreach($pic as $pic1)
											 {
												 if($pic1 != "")
												 {
											 ?>
                                                <li>
                                                   <div class="sl">
                                                      <div class="sl_inner">
                                                         <img src="<?php echo base_url().'upload/blog/'.$pic1?>" alt="" class="img-responsive" style="height:400px;">
                                                      </div>
                                                   </div>
                                                </li>
                                              <?php
												 }
											 }
											?>											  
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="post-story">
                              <h2><?php echo $row->blog_name;?></h2>
                              
                              <div class="post-story-body">
                                 <p>
                                   <?php 
								   
									echo $row->description;
								   ?>
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
			
			<?php
		  }
		  
		  ?>