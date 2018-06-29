			<div class="bot1_wrapper">
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-md-4">
                        <img src="<?php echo base_url('assets/frontend/images/newlogo121.png');?>" class="img-responsive"/>
                     </div>
                     <div class="col-md-4">
                        <div class="bot1_title">About US</div>
                        <p style="text-align:justify;">
                           We are Creative and flexible to travel to your Destination, to capture your Special Occasion and Fun filled moments in a gilded frame. We have traveled across Various Location in India for Photo shoots & interested to visit more new locations at your weddings or Special Occasion. 
                        </p>
                        
                     </div>
                     <div class="col-md-4">
						<div class="col-md-2"></div>
						<div class="col-md-9">
						<br>
							<p style="margin:0 0 0 35px;"><img src="<?php echo base_url('assets/frontend/images/studio-s1.png');?>" class="img-responsive" style="width:200px;height:100px;"/></p>
							<br>
							<div class="col-md-12">
							<p align="center">
							<a href="" style="float:left;"><img src="<?php echo base_url('assets/frontend/images/socialmedia/f1.png');?>" class="img-responsive" style="width:50px;height:50px;"/></a>
							 <a href="" style="float:left;"><img src="<?php echo base_url('assets/frontend/images/socialmedia/t1.png');?>" class="img-responsive" style="width:50px;height:50px;"/></a>
							 <a href="" style="float:left;"><img src="<?php echo base_url('assets/frontend/images/socialmedia/i1.png');?>" class="img-responsive" style="width:50px;height:50px;"/></a>
							 <a href="" style="float:left;"><img src="<?php echo base_url('assets/frontend/images/socialmedia/g1.png');?>" class="img-responsive" style="width:50px;height:50px;"/></a>
							 <a href="" style="float:left;"><img src="<?php echo base_url('assets/frontend/images/socialmedia/l1.png');?>" class="img-responsive" style="width:50px;height:50px;"/></a>
							 </p>
							 </div>
                        <!--div class="social3_wrapper">
                           <ul class="social3 clearfix">
                              <li><a href="#"><img src="<?php echo base_url('assets/frontend/images/socialmedia/f1.png');?>" class="img-responsive" style="width:150px;height:75px;"/></a></li>
                              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                           </ul>
                        </div-->
						</div>
						<div class="col-md-1"></div>
						
                     </div>
                  </div>
               </div>
            </div>
            <div class="bot2_wrapper">
               <div class="container">
                  &copy; 2017 Sugavans All Rights Reserved.
               </div>
            </div>
 <!--div class="bot2_wrapper">
      <div class="container" >
	  <div class="col-md-2" style="text-align:left;">
	  <img src="<?php echo base_url('upload/footer_logo.png.png');?>" class="img-responsive"/>
	  </div>
	  <div class="col-md-6" style="text-align:left;">
	  
	 &copy; 2017 Sugavans All Rights Reserved.
	  </div>
	  <div class="col-md-4" style="text-align:right;">
		 <a href="" style="color:#fff;font-size:20px;"><i class="fa  fa-facebook-square"></i></a>
		 <a href="" style="color:#fff;font-size:20px;"><i class="fa  fa-twitter-square"></i></a>
		 <a href="" style="color:#fff;font-size:20px;"><i class="fa   fa-instagram"></i></a>
		 <a href="" style="color:#fff;font-size:20px;"><i class="fa  fa-google-plus-square"></i></a>
	  </div>
       
      </div>
    </div-->
</div>
</div>

<script src="<?php echo base_url('assets/frontend/js/bootstrap.min.js');?>"></script>
<script src="<?php echo base_url('assets/frontend/css/new/jquery.viewbox.min.js');?>"></script>
	<script>
		$(function(){
			
			$('.thumbnail').viewbox();
			//$('.thumbnail-2').viewbox();

			(function(){
				var vb = $('.popup-link').viewbox();
				$('.popup-open-button').click(function(){
					vb.trigger('viewbox.open');
				});
				$('.close-button').click(function(){
					vb.trigger('viewbox.close');
				});
			})();
			
		});
	</script>
</body>

</html>