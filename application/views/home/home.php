         <div id="main-content-wrapper" class="clearfix">
            <!--div id="slider_wrapper">
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
								   <img src="<?php echo base_url().'upload/slider/'.$rSlide->slider ;?>" alt="" class="img-responsive" style="width:100%;">
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
            </div-->
			<div id="carousel-example" class="carousel slide" data-ride="carousel">
  <!--ol class="carousel-indicators">
	<?php 
		//$num = $this->db->count_all_results('tbl_slider');
	?>
    <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
	
    <!--li data-target="#carousel-example" data-slide-to="1"></li>
    <li data-target="#carousel-example" data-slide-to="2"></li->
  </ol-->

  <div class="carousel-inner" style="margin: 50px 0 0 0;">
	<?php $slide = $this->db->get('tbl_slider')->result();
						$i = 1;
							foreach($slide as $rSlide)
							{
								$item_class = ($i == 1) ? 'item active' : 'item';
								if($rSlide != "")
								{
								?>
    <div class="<?php echo $item_class;?>">
      <a href="#"><img src="<?php echo base_url().'upload/slider/'.$rSlide->slider ;?>" style="width:100%;height:100%;" /></a>
      <!--div class="carousel-caption">
        <h3>Meow</h3>
        <p>Just Kitten Around</p>
      </div-->
    </div>
	<?php
								}
								$i++;
							}
					 ?>

  </div>

  <a class="left carousel-control" href="#carousel-example" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>

<style>
				/* Demo 3 */
			.products {
				text-align: center;
				font-size: 0;
				line-height: 0;
			}
			.products .product-wrapper {
				position: relative;
				display: inline-block;
				margin-top: 5px;
			}
			.products .product-image {
				max-width: 100%;
			}
			
			.product-image:hover{
				    box-shadow: 0 10px 20px rgba(0,0,0,.19), 0 6px 6px rgba(0,0,0,.23);
			}
			.products .product-wrapper .product-overlay {
				display: none;
				position: absolute;
				top: 0;
				left: 0;
				right: 0;
				bottom: 0;
				background: rgba(0, 0, 0, .5);
				cursor: pointer;
			}
			.product-overlay .plus-sign {
				position: absolute;
				top: 50%;
				left: 50%;
				width: 50px;
				height: 50px;
				margin: -25px 0 0 -25px;
				color: #fff;
				font-size: 40px;
				font-weight: bold;
				line-height: 50px;
				text-align: center;
				text-decoration: none;
			}
			.products .product-wrapper:hover .product-overlay {
				display: block;
			}
		
			</style>
			
            <div class="we-are">
               <div class="container">
                  <div class="title1 animated" data-animation="fadeInUp" data-animation-delay="100">We Are Sugavans Photography</div>
                  <div class="title2 animated" data-animation="fadeInUp" data-animation-delay="200">We are highly passionate about photography, We Capture the Beautiful minds & thoughts of your Feeling to create a wonderful memory.
                  </div>
                  <br>
				  <h1 style="text-align:center;"><span style="color:#ff7800;">W</span>edding & <span style="color:#ff7800;">C</span>andid</h1>
				  
				<div class="row">
					<?php $wedding = $this->db->get_where('tbl_album',array('category_id'=>'1'))->result();
						$i=0;
						foreach($wedding as $rwedding)
						{
							$pic = explode(',',$rwedding->photos);
							foreach($pic as $rpic)
							{
								if($i <= 3)
								{
								if($rpic != ""){
							?>
					<div class="col-md-3">
						<div class="products">
							<div class="product-wrapper" data-width="400" data-height="400">
								<img class="product-image" src="<?php echo base_url().'upload/albums/'.$pic[$i]; ?>" style="width:270px;height:180px;box-shadow: 0 10px 20px rgba(0,0,0,.19), 0 6px 6px rgba(0,0,0,.23);" />
								<div class="product-overlay">
									<a class="plus-sign" href="<?php echo base_url('Home/wedding'); ?>">+</a>
								</div>
							</div>	
						</div>
					</div>
						<?php
								}
								}
								$i++;
							}
						}
						?>
				</div>
				
                  <!--div class="hscroll">
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
                  </div-->
               </div>
            </div>
            <div class="we-are1">
               <div class="container">
                  
                  <h1 style="text-align:center;"><span style="color:#ff7800;">P</span>ortrait</h1>
				   <div class="title2 animated" data-animation="fadeInUp" data-animation-delay="200">We are highly passionate about photography, We Capture the Beautiful minds & thoughts of your Feeling to create a wonderful memory.
                  </div>
				  
				<div class="row">
					<?php $portrait = $this->db->get_where('tbl_album',array('category_id'=>'2'))->result();
						$i=0;
						foreach($portrait as $rportrait)
						{
							$pic1 = explode(',', trim($rportrait->photos, ','));
							
							
							foreach($pic1 as $rpic1)
							{
								//echo $i;
								if($i <= 3)
								{
									if($rpic1 != "")
									{
							?>
					<div class="col-md-3">
						<div class="products">
							<div class="product-wrapper" data-width="400" data-height="400">
								<img class="product-image" src="<?php echo base_url().'upload/albums/'.$pic1[$i]; ?>" style="width:200px;height:300px;box-shadow: 0 10px 20px rgba(0,0,0,.19), 0 6px 6px rgba(0,0,0,.23);" />
								<div class="product-overlay">
									<a class="plus-sign" href="<?php echo base_url('Home/portrait'); ?>">+</a>
								</div>
							</div>	
						</div>
					</div>
						<?php
									}
									
								}
								$i++;
							}
						}
						?>
				</div>
				
                  <!--div class="hscroll">
                     <ul class="scroller" class="clearfix2">
                          <?php $portrait = $this->db->get_where('tbl_album',array('category_id'=>'2'))->result();
				  
						foreach($portrait as $rportrait)
						{
							$pic1 = explode(',',trim($rportrait->photos, ','));
							foreach($pic1 as $rpic1)
							{
								if($i <= 3)
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
								$i++;
							}
						}
						?>
                       
                       
                     </ul>
                  </div-->
               </div>
            </div>

			<div class="we-are1">
               <div class="container">
                  
                  <h1 style="text-align:center;"><span style="color:#ff7800;">L</span>andscape</h1>
				   <div class="title2 animated" data-animation="fadeInUp" data-animation-delay="200">We are highly passionate about photography, We Capture the Beautiful minds & thoughts of your Feeling to create a wonderful memory.
                  </div>
				  
				<div class="row">
					<?php $landscape = $this->db->get_where('tbl_album',array('category_id'=>'7'))->result();
						$i=0;
						foreach($landscape as $rlandscape)
						{
							$pic1 = explode(',', trim($rlandscape->photos, ','));
							
							
							foreach($pic1 as $rpic1)
							{
								//echo $i;
								if($i <= 3)
								{
									if($rpic1 != "")
									{
							?>
					<div class="col-md-3">
						<div class="products">
							<div class="product-wrapper" data-width="400" data-height="400">
								<img class="product-image" src="<?php echo base_url().'upload/albums/'.$pic1[$i]; ?>" style="width:270px;height:180px;box-shadow: 0 10px 20px rgba(0,0,0,.19), 0 6px 6px rgba(0,0,0,.23);" />
								<div class="product-overlay">
									<a class="plus-sign" href="<?php echo base_url('Home/landscape'); ?>">+</a>
								</div>
							</div>	
						</div>
					</div>
						<?php
									}
									
								}
								$i++;
							}
						}
						?>
				</div>

               </div>
            </div>
			
            <div class="we-are">
               <div class="container">
                  
                  <h1 style="text-align:center;"><span style="color:#ff7800;">O</span>utdoor  <span style="color:#ff7800;">C</span>licks</h1>
				   <div class="title2 animated" data-animation="fadeInUp" data-animation-delay="200">We are highly passionate about photography, We Capture the Beautiful minds & thoughts of your Feeling to create a wonderful memory.
                  </div>
				  
				  <div class="row">
					<?php $outdoor = $this->db->get_where('tbl_album',array('category_id'=>'3'))->result();
						$i=0;
						foreach($outdoor as $routdoor)
						{
							$pic2 = explode(',',trim($routdoor->photos, ','));
							foreach($pic2 as $rpic2)
							{
								if($i <= 3)
								{
								if($rpic2 != ""){
							?>
					<div class="col-md-3">
						<div class="products">
							<div class="product-wrapper" data-width="400" data-height="400">
								<img class="product-image" src="<?php echo base_url().'upload/albums/'.$pic2[$i]; ?>" style="width:270px;height:180px;box-shadow: 0 10px 20px rgba(0,0,0,.19), 0 6px 6px rgba(0,0,0,.23);" />
								<div class="product-overlay">
									<a class="plus-sign" href="<?php echo base_url('Home/outdoor'); ?>">+</a>
								</div>
							</div>	
						</div>
					</div>
						<?php
								}
								}
								$i++;
							}
						}
						?>
				</div>
				
				  
				  
                  <!--div class="hscroll">
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
                  </div-->
				  
				  
               </div>
            </div>
			
			<div class="we-are1">
               <div class="container">
                  
                  <h1 style="text-align:center;"><span style="color:#ff7800;">K</span>ids & <span style="color:#ff7800;">B</span>abbies</h1>
				   <div class="title2 animated" data-animation="fadeInUp" data-animation-delay="200">We are highly passionate about photography, We Capture the Beautiful minds & thoughts of your Feeling to create a wonderful memory.
                  </div>
				  
				  <div class="row">
					<?php $kids = $this->db->get_where('tbl_album',array('category_id'=>'5'))->result();
						$i=0;
						foreach($kids as $rkids)
						{
							$pic4 = explode(',',trim($rkids->photos, ','));
							foreach($pic4 as $rpic4)
							{
								if($i <= 3)
								{
								if($rpic4 != ""){
							?>
					<div class="col-md-3">
						<div class="products">
							<div class="product-wrapper" data-width="400" data-height="400">
								<img class="product-image" src="<?php echo base_url().'upload/albums/'.$pic4[$i]; ?>" style="width:270px;height:180px;box-shadow: 0 10px 20px rgba(0,0,0,.19), 0 6px 6px rgba(0,0,0,.23);" />
								<div class="product-overlay">
									<a class="plus-sign" href="<?php echo base_url('Home/babies'); ?>">+</a>
								</div>
							</div>	
						</div>
					</div>
						<?php
								}
								}
								$i++;
							}
						}
						?>
				</div>
				
                  <!--div class="hscroll">
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
                  </div-->
				 
               </div>
            </div>
			
			<!--link href="<?php echo base_url(); ?>assets/thumb/2/thumbnail-slider.css" rel="stylesheet" />
			<script src="<?php echo base_url(); ?>assets/thumb/2/thumbnail-slider.js"></script->
            <div class="we-are">
               <div class="container">
                  
                  <h1 style="text-align:center;"><span style="color:#ff7800;">S</span>pecial  <span style="color:#ff7800;">O</span>ccassion</h1>
				   <div class="title2 animated" data-animation="fadeInUp" data-animation-delay="200">We are highly passionate about photography, We Capture the Beautiful minds & thoughts of your Feeling to create a wonderful memory.
                  </div>
				<div class="row">
					<?php $special = $this->db->get_where('tbl_album',array('category_id'=>'4'))->result();
						$i=0;
						foreach($special as $rspecial)
						{
							$pic3 = explode(',',trim($rspecial->photos, ','));
							foreach($pic3 as $rpic3)
							{
								if($i <= 3)
								{
								if($rpic3 != ""){
									?>
					<div class="col-md-3">
						<div class="products">
							<div class="product-wrapper" data-width="400" data-height="400">
								<img class="product-image" src="<?php echo base_url().'upload/albums/'.$pic3[$i]; ?>" style="width:270px;height:180px;box-shadow: 0 10px 20px rgba(0,0,0,.19), 0 6px 6px rgba(0,0,0,.23);" />
								<div class="product-overlay">
									<a class="plus-sign" href="<?php echo base_url('Home/special'); ?>">+</a>
								</div>
							</div>	
						</div>
					</div>
						<?php
								}
								}
								$i++;
							}
						}
						?>
				</div>  
				<br><br><br>
				  <script type="text/javascript" src="<?php echo base_url(); ?>assets/thumb1/jssor.core.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/thumb1/jssor.utils.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/thumb1/jssor.slider.js"></script>
    <script>
        jssor_slider1_starter = function (containerId) {
            var options = {
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlayInterval: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $SlideDuration: 500,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                $ThumbnailNavigatorOptions: {
                    $Class: $JssorThumbnailNavigator$,              //[Required] Class to create thumbnail navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always

                    $Loop: 2,                                       //[Optional] Enable loop(circular) of carousel or not, 0: stop, 1: loop, 2 rewind, default value is 1
                    $SpacingX: 3,                                   //[Optional] Horizontal space between each thumbnail in pixel, default value is 0
                    $SpacingY: 3,                                   //[Optional] Vertical space between each thumbnail in pixel, default value is 0
                    $DisplayPieces: 6,                              //[Optional] Number of pieces to display, default value is 1
                    $ParkingPosition: 204,                          //[Optional] The offset position to park thumbnail,

                    $ArrowNavigatorOptions: {
                        $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                        $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                        $AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                        $Steps: 6                                       //[Optional] Steps to go for each navigation request, default value is 1
                    }
                }
            };

            var jssor_slider1 = new $JssorSlider$(containerId, options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
                if (parentWidth)
                    jssor_slider1.$SetScaleWidth(Math.min(parentWidth, 720));
                else
                    $JssorUtils$.$Delay(ScaleSlider, 30);
            }

            ScaleSlider();
            $JssorUtils$.$AddEvent(window, "load", ScaleSlider);


            if (!navigator.userAgent.match(/(iPhone|iPod|iPad|BlackBerry|IEMobile)/)) {
                $JssorUtils$.$OnWindowResize(window, ScaleSlider);
            }

            //if (navigator.userAgent.match(/(iPhone|iPod|iPad)/)) {
            //    $JssorUtils$.$AddEvent(window, "orientationchange", ScaleSlider);
            //}
            //responsive code end
        };
    </script>
    <!-- Jssor Slider Begin -->
    <!-- You can move inline styles to css file or css block. ->
    <div id="slider1_container" style="position: relative; width: 720px;
        height: 480px; overflow: hidden;    margin: 0 auto;">

        <!-- Loading Screen ->
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
            <div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;
                top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
        </div>

        <!-- Slides Container ->
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 720px; height: 480px;
            overflow: hidden;">
			<?php $special = $this->db->get_where('tbl_album',array('category_id'=>'4'))->result();
				  
						foreach($special as $rspecial)
						{
							$pic3 = explode(',',$rspecial->photos);
							foreach($pic3 as $rpic3)
							{
								if($rpic3 != ""){
									?>
            <div>
                <img u="image" src="<?php echo base_url().'upload/albums/'.$rpic3 ;?>" />
                <img u="thumb" src="<?php echo base_url().'upload/albums/'.$rpic3 ;?>" />
            </div>
			<?php
								}
							}
						}
						?>
            
        </div>
        
        <!-- Thumbnail Navigator Skin Begin ->
        <div u="thumbnavigator" class="jssort07" style="position: absolute; width: 720px; height: 100px; left:0px; bottom: 0px;">
            <div style=" background-color: #000; filter:alpha(opacity=30); opacity:.3; width: 100%; height:100%;"></div>
            <!-- Thumbnail Item Skin Begin ->
            <style>
                /* jssor slider thumbnail navigator skin 07 css */
                /*
                .jssort07 .p            (normal)
                .jssort07 .p:hover      (normal mouseover)
                .jssort07 .pav          (active)
                .jssort07 .pav:hover    (active mouseover)
                .jssort07 .pdn          (mousedown)
                */
                .jssort07 .i {
                    position: absolute;
                    top: 0px;
                    left: 0px;
                    width: 99px;
                    height: 66px;
                    filter: alpha(opacity=80);
                    opacity: .8;
                }

                .jssort07 .p:hover .i, .jssort07 .pav .i {
                    filter: alpha(opacity=100);
                    opacity: 1;
                }

                .jssort07 .o {
                    position: absolute;
                    top: 0px;
                    left: 0px;
                    width: 97px;
                    height: 64px;
                    border: 1px solid #000;
                    transition: border-color .6s;
                    -moz-transition: border-color .6s;
                    -webkit-transition: border-color .6s;
                    -o-transition: border-color .6s;
                }

                * html .jssort07 .o {
                    /* ie quirks mode adjust */
                    width /**/: 99px;
                    height /**/: 66px;
                }

                .jssort07 .pav .o, .jssort07 .p:hover .o {
                    border-color: #fff;
                }

                .jssort07 .pav:hover .o {
                    border-color: #0099FF;
                }

                .jssort07 .p:hover .o {
                    transition: none;
                    -moz-transition: none;
                    -webkit-transition: none;
                    -o-transition: none;
                }
            </style>
            <div u="slides" style="cursor: move;">
                <div u="prototype" class="p" style="POSITION: absolute; WIDTH: 99px; HEIGHT: 66px; TOP: 0; LEFT: 0;">
                    <thumbnailtemplate class="i" style="position:absolute;"></thumbnailtemplate>
                    <div class="o">
                    </div>
                </div>
            </div>
            <!-- Thumbnail Item Skin End -->
            <!-- Arrow Navigator Skin Begin ->
            <style>
                    /* jssor slider arrow navigator skin 11 css */
                    /*
                .jssora11l              (normal)
                .jssora11r              (normal)
                .jssora11l:hover        (normal mouseover)
                .jssora11r:hover        (normal mouseover)
                .jssora11ldn            (mousedown)
                .jssora11rdn            (mousedown)
                */
                    .jssora11l, .jssora11r, .jssora11ldn, .jssora11rdn {
                        position: absolute;
                        cursor: pointer;
                        display: block;
                        background: url(../img/a11.png) no-repeat;
                        overflow: hidden;
                    }

                    .jssora11l {
                        background-position: -11px -41px;
                    }

                    .jssora11r {
                        background-position: -71px -41px;
                    }

                    .jssora11l:hover {
                        background-position: -131px -41px;
                    }

                    .jssora11r:hover {
                        background-position: -191px -41px;
                    }

                    .jssora11ldn {
                        background-position: -251px -41px;
                    }

                    .jssora11rdn {
                        background-position: -311px -41px;
                    }
            </style>
            <!-- Arrow Left ->
            <span u="arrowleft" class="jssora11l" style="width: 37px; height: 37px; top: 123px; left: 8px;">
            </span>
            <!-- Arrow Right ->
            <span u="arrowright" class="jssora11r" style="width: 37px; height: 37px; top: 123px; right: 8px">
            </span>
            <!-- Arrow Navigator Skin End ->
        </div>
        <!-- ThumbnailNavigator Skin End -->
        <!--a style="display: none" href="http://www.jssor.com">javascript</a-->
        <!-- Trigger ->
        <script>
            jssor_slider1_starter('slider1_container');
        </script>

    </div>
	
				  <!--div id="thumbnail-slider">
						<div class="inner">
							<ul>
								<?php $special = $this->db->get_where('tbl_album',array('category_id'=>'4'))->result();
				  
						foreach($special as $rspecial)
						{
							$pic3 = explode(',',$rspecial->photos);
							foreach($pic3 as $rpic3)
							{
								if($rpic3 != ""){
									?>
								<li style="height:290px;width:396px;">
									<a  href="<?php echo base_url('Home/special'); ?>" >
										<img src="<?php echo base_url().'upload/albums/'.$rpic3 ;?>" alt="" class="thumb" style="height:290px;width:396px;">
									</a>
								</li>
							<?php
								}
							}
						}
						?>
								
							</ul>
						</div>
					</div-->
					
					
                  <!--div class="hscroll">
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
                  </div->
               </div>
            </div-->

			
            


            <div class="we-are1">
               <div class="container">
                  
                  <h1 style="text-align:center;"><span style="color:#ff7800;">T</span>ravel & <span style="color:#ff7800;">D</span>ocumentary</h1>
				   <div class="title2 animated" data-animation="fadeInUp" data-animation-delay="200">We are highly passionate about photography, We Capture the Beautiful minds & thoughts of your Feeling to create a wonderful memory.
                  </div>
				  <div class="row">
					<?php $travel = $this->db->get_where('tbl_album',array('category_id'=>'6'))->result();
						$i=0;
						foreach($travel as $rtravel)
						{
							$pic5 = explode(',',trim($rtravel->photos, ','));
							foreach($pic5 as $rpic5)
							{
								if($i <= 3)
								{
								if($rpic5 != ""){
							?>
					<div class="col-md-3">
						<div class="products">
							<div class="product-wrapper" data-width="400" data-height="400">
								<img class="product-image" src="<?php echo base_url().'upload/albums/'.$pic5[$i]; ?>" style="width:270px;height:180px;box-shadow: 0 10px 20px rgba(0,0,0,.19), 0 6px 6px rgba(0,0,0,.23);" />
								<div class="product-overlay">
									<a class="plus-sign" href="<?php echo base_url('Home/travel'); ?>">+</a>
								</div>
							</div>	
						</div>
					</div>
						<?php
								}
								}
								$i++;
							}
						}
						?>
				</div>
				
                  <!--div class="hscroll">
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
                  </div-->
               </div>
            </div>
			<br><br><br>
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
