<!-- Main sidebar -->
<div class="sidebar sidebar-main">
   <div class="sidebar-content">
      <!-- User menu -->
      <div class="sidebar-user-material">
         <div class="category-content">
            <div class="sidebar-user-material-content">
				
               <h2><?php echo $this->session->userdata('first_name');?></h2>
               
			  <!-- <h6><?php echo $this->session->userdata('designation');?></h6>-->
            </div>
            <div class="sidebar-user-material-menu">
               <a href="#user-nav" data-toggle="collapse"><span>My account</span> <i class="caret"></i></a>
            </div>
         </div>
         <div class="navigation-wrapper collapse" id="user-nav">
            <ul class="navigation">
               <li><a href="<?php echo base_url('Profile');?>"><i class="icon-user-plus"></i> <span>My profile</span></a></li>
               <li><a href="<?php echo base_url('changePassword');?>"><i class="icon-lock"></i> <span>Change Password</span></a></li>
               <li><a href="<?php echo base_url(); ?>/User/logout"><i class="icon-switch2"></i> <span>Logout</span></a></li>
            </ul>
         </div>
      </div>
      <!-- /user menu -->
      <!-- Main navigation -->
      <div class="sidebar-category sidebar-category-visible">
         <div class="category-content no-padding">
            <ul class="navigation navigation-main navigation-accordion">
               <!-- Main -->
               <li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
               <li class="active"><a href="<?php echo base_url('Dashboard');?>"><i class="icon-home7"></i> <span>Dashboard</span></a></li>
               <li ><a href="<?php echo base_url('Slider');?>"><i class="icon-color-sampler"></i> <span>Slider</span></a></li>
               <li ><a href="<?php echo base_url('Alubms');?>"><i class="icon-camera"></i> <span>Albums</span></a></li>
			   <li ><a href="<?php echo base_url('Video');?>"><i class="icon-film4"></i> <span>Video</span></a></li>
			   <li ><a href="<?php echo base_url('Blog');?>"><i class="icon-newspaper"></i> <span>Blog</span></a></li>
			   <li ><a href="<?php echo base_url('Home/subscribeList');?>"><i class="icon-price-tags2"></i> <span>Subscribe</span></a></li>
				<li ><a href="<?php echo base_url('Home/getaquoteList');?>"><i class="icon-price-tags2"></i> <span>Get Quote</span></a></li>
        
            </ul>
         </div>
      </div>
      <!-- /main navigation -->
   </div>
</div>
<!-- /main sidebar -->