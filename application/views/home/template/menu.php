	  <style>
            .navbar-template {
                padding: 40px 15px;
				
				
            }
		
		@media (min-width: 767px) {
			.navbar-nav .dropdown-menu .caret {
			transform: rotate(-90deg);
			}
		}
		
		#cssmenu1 > ul > li > a
		{
			font-size: 12px;
			letter-spacing: 1px;
			text-decoration: none;
			color: #000;
			font-weight: 700;
		}
		#csssmenu1 > li > a
		{
			font-size: 12px;
			letter-spacing: 1px;
			text-decoration: none;
			color: #000;
			font-weight: 700;
			
		}
		
		    
		#cssmenu1 > ul > li a:hover
		{
		    transition: background 0.3s ease;
			background: rgb(255, 120, 0) !important;
			color:#fff;
		}
		.navbar-default .navbar-nav > .open > a, .navbar-default .navbar-nav > .open > a:hover, .navbar-default .navbar-nav > .open > a:focus
		{
			background-color:#ff7800;
			color:#fff;
		}
        </style>
	  <div class="navbar navbar-default navbar-fixed-top" role="navigation" style="    background-color: #fff;
    border-color: #fff;">
            <div class="container">
                <div class="navbar-header" style="    margin-right: 100px;">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url('Home/Main'); ?>" style="padding: 0 15px;"><img src="<?php echo base_url('assets/frontend/images/studio-s1.png');?>" class="img-responsive" style="height:50px;"/></a>
                </div>
                <div class="collapse navbar-collapse" id="cssmenu1">
                    <ul class="nav navbar-nav" >
                        <li ><a href="<?php echo base_url('Home/Main'); ?>">Home</a></li>
                        <li><a href="<?php echo base_url('Home/About'); ?>">ABOUT</a></li>
                        <li>
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">SERVICE<b class="caret"></b></a>
                            <ul class="dropdown-menu" id="csssmenu1">
                                <li><a href="<?php echo base_url('Home/portrait'); ?>">PORTRAIT</a></li>
                                <li><a href="<?php echo base_url('Home/landscape'); ?>">LANDSCAPE</a></li>
                                <li><a href="<?php echo base_url('Home/wedding'); ?>">WEDDING & CANDID</a></li>
                                <!--li class="divider"></li-->
                                <li><a href="<?php echo base_url('Home/outdoor'); ?>">OUTDOOR CLICKS</a></li>
                                <li><a href="<?php echo base_url('Home/special'); ?>">SPECIAL OCCASSION</a></li>
								<li><a href="<?php echo base_url('Home/babies'); ?>">BABBIES & KIDS</a></li>
								<li><a href="<?php echo base_url('Home/travel'); ?>">TRAVEL DOCUMENTARY</a></li>
                                
                            </ul>
                        </li>
						<li><a href="<?php echo base_url('Home/video'); ?>">VIDEO</a></li>
						<li><a href="<?php echo base_url('Home/member'); ?>">OUR FAMILY</a></li>
						<li><a href="<?php echo base_url('Home/blog'); ?>">BLOG</a></li>
						<li><a href="<?php echo base_url('Home/contact'); ?>">CONTACT</a></li>
						<li><a href="<?php echo base_url('Home/getaquote'); ?>">GET A QUOTE</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>
		
	  <!--header>
            <nav id='cssmenu' style="    ">
               <div class="logo"><a href="<?php echo base_url('Home/Main'); ?>"><img src="<?php echo base_url('assets/frontend/images/studio-s1.png');?>" class="img-responsive" style="height:50px;"/> </a></div>
               <div id="head-mobile"></div>
               <div class="button"></div>
               <ul style="margin-bottom:0px!important;">
                  <li style="margin:15px 0 0 0;"><a href='<?php echo base_url('Home/Main'); ?>'>HOME</a></li>
                  <li style="margin:15px 0 0 0;"><a href='<?php echo base_url('Home/About'); ?>'>ABOUT</a></li>
                  <li style="margin:15px 0 0 0;">
                     <a href='#'>SERVICE</a>
                     <ul>
                        <li ><a href='<?php echo base_url('Home/portrait'); ?>'>PORTRAIT</a></li>
                        <li ><a href='<?php echo base_url('Home/landscape'); ?>'>LANDSCAPE</a></li>
                        <li><a href='<?php echo base_url('Home/wedding'); ?>'>WEDDING & CANDID</a></li>
                        <li><a href='<?php echo base_url('Home/outdoor'); ?>'>OUTDOOR CLICKS</a></li>
                        <li><a href='<?php echo base_url('Home/special'); ?>'>SPECIAL OCCASSION</a></li>
                        <li><a href='<?php echo base_url('Home/babies'); ?>'>BABBIES & KIDS</a></li>
                        <li><a href='<?php echo base_url('Home/travel'); ?>'>TRAVEL DOCUMENTARY</a></li>
                     </ul>
                  </li>
                  <li style="margin:15px 0 0 0;"><a href='<?php echo base_url('Home/video'); ?>'>VIDEO </a></li>
                  <li style="margin:15px 0 0 0;"><a href='<?php echo base_url('Home/member'); ?>'>OUR FAMILY</a></li>
                 
                  <li style="margin:15px 0 0 0;"><a href='<?php echo base_url('Home/blog'); ?>'>BLOG</a></li>
                  <li style="margin:15px 0 0 0;"><a href='<?php echo base_url('Home/contact'); ?>'>CONTACT</a></li>
                  <li style="margin:15px 0 0 0;"><a href='<?php echo base_url('Home/getaquote'); ?>'>GET A QUOTE</a></li>
               </ul>
            </nav>
         </header-->
		 
		 <script>
			$(document).ready(function() {
					$('.navbar a.dropdown-toggle').on('click', function(e) {
						var $el = $(this);
						var $parent = $(this).offsetParent(".dropdown-menu");
						$(this).parent("li").toggleClass('open');

						if(!$parent.parent().hasClass('nav')) {
							$el.next().css({"top": $el[0].offsetTop, "left": $parent.outerWidth() - 4});
						}

						$('.nav li.open').not($(this).parents("li")).removeClass("open");

						return false;
					});
				});
		</script>