<div id="main-content-wrapper" class="clearfix">


<div class="we-are">
  <div class="container">

    <div class="title1 animated" data-animation="fadeInUp" data-animation-delay="100"> <h1 style="text-align:center;"><span style="color:#ff7800;">P</span>ortrait & <span style="color:#ff7800;">L</span>andscape</h1></div>

   <!--  <div class="title2 animated" data-animation="fadeInUp" data-animation-delay="200">A Great photograph is a full expression of what one feels what is being photographed in the deepest sense and is, therby,<br>a true expression of what one feels about life in its entirety.
    </div> -->

    <br><br>
<?php $portrait = $this->db->get_where('tbl_album',array('category_id'=>'2'))->result();
		$i=0;		  
foreach($portrait as $rportrait)
{
	$pic1 = explode(',',$rportrait->photos);
	
	?>
    
	 <div class="col-sm-4">
        <div class="thumb1 animated" data-animation="flipInY" data-animation-delay="400">
          <div class="thumbnail clearfix">
		  <a href="<?php echo base_url().'Home/gallery/'.$rportrait->id ;?>">
            <figure>
              <img src="<?php echo base_url().'upload/albums/'.$pic1[$i] ;?>" alt="" class="img-responsive">
            </figure>
            <div class="caption">
              <div class="txt1"><?php echo $rportrait->album_name; ?></div>
             
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