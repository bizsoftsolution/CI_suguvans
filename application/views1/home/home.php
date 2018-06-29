         <div id="main-content-wrapper" class="clearfix">
            <div id="slider_wrapper">
               <div id="slider">
                  <div id="flexslider">
                     <ul class="slides clearfix">
					 <?php $slide = $this->db->get('tbl_slider')->result();
							foreach($slide as $rSlide)
							{
								if($rSlide != "")
								{
								?>
								 <li class="nav1">
								   <img src="<?php echo base_url().'upload/slider/'.$rSlide->slider ;?>" alt="" class="img-responsive" style="width:100%;height:620px;">
								   <div class="flex-caption">
								   
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
            <div class="we-are">
               <div class="container1">
                  <div class="title1 animated" data-animation="fadeInUp" data-animation-delay="100">We Are Sugavans Photography</div>
                  <div class="title2 animated" data-animation="fadeInUp" data-animation-delay="200">We are highly passionate about photography, We Capture the Beautiful minds & thoughts of your Feeling to create a wonderful memory.
                  </div>
                  <br>
				  <h1 style="text-align:center;"><span style="color:#ff7800;">W</span>edding & <span style="color:#ff7800;">C</span>andid</h1>
                  <div class="hscroll">
                     <ul class="scroller" class="clearfix2">
				  <?php $wedding = $this->db->get_where('tbl_album',array('category_id'=>'1'))->result();
				  
						foreach($wedding as $rwedding)
						{
							$pic = explode(',',$rwedding->photos);
							foreach($pic as $rpic)
							{
								if($rpic != ""){
							?>
						 
                        <li class="blocks">
                           <a href="<?php echo base_url('Home/wedding'); ?>">
                           <img src="<?php echo base_url().'upload/albums/'.$rpic ;?>" alt="" width="396" height="290">
                           <span class="title"><?php echo $rwedding->album_name; ?></span>
                           <em></em>
                           </a>
                        </li>
						<?php
								}
							}
						}
						?>
                       
          
                     </ul>
                  </div>
               </div>
            </div>
            <div class="we-are1">
               <div class="container1">
                  
                  <h1 style="text-align:center;"><span style="color:#ff7800;">P</span>ortrait & <span style="color:#ff7800;">L</span>andscape</h1>
				   <div class="title2 animated" data-animation="fadeInUp" data-animation-delay="200">We are highly passionate about photography, We Capture the Beautiful minds & thoughts of your Feeling to create a wonderful memory.
                  </div>
                  <div class="hscroll">
                     <ul class="scroller" class="clearfix2">
                          <?php $portrait = $this->db->get_where('tbl_album',array('category_id'=>'2'))->result();
				  
						foreach($portrait as $rportrait)
						{
							$pic1 = explode(',',$rportrait->photos);
							foreach($pic1 as $rpic1)
							{
								if($rpic1 != "")
								{
							?>
						 
                        <li class="blocks">
                           <a href="<?php echo base_url('Home/portrait'); ?>">
                           <img src="<?php echo base_url().'upload/albums/'.$rpic1 ;?>" alt="" width="396" height="290">
                           <span class="title"><?php echo $rportrait->album_name; ?></span>
                           <em></em>
                           </a>
                        </li>
						<?php
								}
							}
						}
						?>
                       
                       
                     </ul>
                  </div>
               </div>
            </div>


            <div class="we-are1">
               <div class="container1">
                  
                  <h1 style="text-align:center;"><span style="color:#ff7800;">O</span>utdoor  <span style="color:#ff7800;">C</span>licks</h1>
				   <div class="title2 animated" data-animation="fadeInUp" data-animation-delay="200">We are highly passionate about photography, We Capture the Beautiful minds & thoughts of your Feeling to create a wonderful memory.
                  </div>
                  <div class="hscroll">
                      <ul class="scroller" class="clearfix2">
                          <?php $outdoor = $this->db->get_where('tbl_album',array('category_id'=>'3'))->result();
				  
						foreach($outdoor as $routdoor)
						{
							$pic2 = explode(',',$routdoor->photos);
							foreach($pic2 as $rpic2)
							{
								if($rpic2 != ""){
							?>
						 
                        <li class="blocks">
                           <a href="<?php echo base_url('Home/outdoor'); ?>">
                           <img src="<?php echo base_url().'upload/albums/'.$rpic2 ;?>" alt="" width="396" height="290">
                           <span class="title"><?php echo $routdoor->album_name; ?></span>
                           <em></em>
                           </a>
                        </li>
						<?php
							}
							}
						}
						?>
                       
                       
                     </ul>
                  </div>
               </div>
            </div>


            <div class="we-are1">
               <div class="container1">
                  
                  <h1 style="text-align:center;"><span style="color:#ff7800;">S</span>pecial  <span style="color:#ff7800;">O</span>ccassion</h1>
				   <div class="title2 animated" data-animation="fadeInUp" data-animation-delay="200">We are highly passionate about photography, We Capture the Beautiful minds & thoughts of your Feeling to create a wonderful memory.
                  </div>
                  <div class="hscroll">
                      <ul class="scroller" class="clearfix2">
                          <?php $special = $this->db->get_where('tbl_album',array('category_id'=>'4'))->result();
				  
						foreach($special as $rspecial)
						{
							$pic3 = explode(',',$rspecial->photos);
							foreach($pic3 as $rpic3)
							{
								if($rpic3 != ""){
								
							?>
						 
							<li class="blocks">
							   <a href="<?php echo base_url('Home/special'); ?>">
							   <img src="<?php echo base_url().'upload/albums/'.$rpic3 ;?>" alt="" width="396" height="290">
							   <span class="title"><?php echo $rspecial->album_name; ?></span>
							   <em></em>
							   </a>
							</li>
						<?php
								}
							}
						}
						?>
                       
                       
                     </ul>
                  </div>
               </div>
            </div>


            <div class="we-are1">
               <div class="container1">
                  
                  <h1 style="text-align:center;"><span style="color:#ff7800;">K</span>ids & <span style="color:#ff7800;">B</span>abbies</h1>
				   <div class="title2 animated" data-animation="fadeInUp" data-animation-delay="200">We are highly passionate about photography, We Capture the Beautiful minds & thoughts of your Feeling to create a wonderful memory.
                  </div>
                  <div class="hscroll">
                     <ul class="scroller" class="clearfix2">
                          <?php $kids = $this->db->get_where('tbl_album',array('category_id'=>'5'))->result();
				  
						foreach($kids as $rkids)
						{
							$pic4 = explode(',',$rkids->photos);
							foreach($pic4 as $rpic4)
							{
								if($rpic4 != ""){
							?>
						 
							<li class="blocks">
							   <a href="<?php echo base_url('Home/babies'); ?>">
							   <img src="<?php echo base_url().'upload/albums/'.$rpic4 ;?>" alt="" width="396" height="290">
							   <span class="title"><?php echo $rkids->album_name; ?></span>
							   <em></em>
							   </a>
							</li>
						<?php
								}
							}
						}
						?>
                       
                       
                     </ul>
                  </div>
               </div>
            </div>


            <div class="we-are1">
               <div class="container1">
                  
                  <h1 style="text-align:center;"><span style="color:#ff7800;">T</span>ravel & <span style="color:#ff7800;">D</span>ocumentary</h1>
				   <div class="title2 animated" data-animation="fadeInUp" data-animation-delay="200">We are highly passionate about photography, We Capture the Beautiful minds & thoughts of your Feeling to create a wonderful memory.
                  </div>
                  <div class="hscroll">
                    <ul class="scroller" class="clearfix2">
                      <?php $travel = $this->db->get_where('tbl_album',array('category_id'=>'6'))->result();
				  
						foreach($travel as $rtravel)
						{
							$pic5 = explode(',',$rtravel->photos);
							foreach($pic5 as $rpic5)
							{
								if($rpic5 != ""){
							?>
						 
							<li class="blocks">
							   <a href="<?php echo base_url('Home/travel'); ?>">
							   <img src="<?php echo base_url().'upload/albums/'.$rpic5 ;?>" alt="" width="396" height="290">
							   <span class="title"><?php echo $rtravel->album_name; ?></span>
							   <em></em>
							   </a>
							</li>
						<?php
								}
							}
						}
						?>
                       
                       
                     </ul>
                  </div>
               </div>
            </div>
<script>
   function save()
   {
       $('#btnSave').text('saving...'); //change button text
       $('#btnSave').attr('disabled',true); //set button disable
       var url;

      
           url = "<?php echo base_url('Home/subscribeAdd'); ?>";
      

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
                   $('#myModal').modal('hide');
                  
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
   </script>
