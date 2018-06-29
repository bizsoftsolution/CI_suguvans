 <div id="main-content-wrapper" class="clearfix">


<div class="we-are">
  <div class="container">

    <div class="title1 animated" data-animation="fadeInUp" data-animation-delay="100"> <h1 style="text-align:center;"><span style="color:#ff7800;">V</span>ideo <span style="color:#ff7800;">G</span>allery</h1></div>

    </div> 
    <br><br>

   <?php 
	$video = $this->db->get('tbl_video')->result();
	foreach($video as $row)
	{
   ?>
   
	 <div class="col-sm-4">
        <div class="thumb1 animated" data-animation="flipInY" data-animation-delay="400">
          <div class="thumbnail clearfix">
		  <a href="">
            <figure>
              <iframe width="380" height="315" src="<?php echo $row->video_link; ?>" frameborder="0" allowfullscreen></iframe>
            </figure>
            <div class="caption">
              <div class="txt1"><?php echo $row->video_name; ?></div>
             
            </div>
			</a>
          </div>
        </div>
      </div>
	  <?php
	}
	?>

     
 


  </div>
</div>