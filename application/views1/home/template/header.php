<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sugavans</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Your name">
    <link href="<?php echo base_url('assets/frontend/css/site.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/frontend/css/web-icons.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/frontend/css/bootstrap.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/frontend/css/font-awesome.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/frontend/css/flexslider.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/frontend/css/animate.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/frontend/css/masonry.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/frontend/css/style.css');?>" rel="stylesheet">
	
	<link rel="stylesheet" href="<?php echo base_url('assets/frontend/css/new/viewbox.css');?>">
	
    <script src="<?php echo base_url('assets/frontend/js/jquery.js');?>"></script>
    <script src="<?php echo base_url('assets/frontend/js/jquery-migrate-1.2.1.min.js');?>"></script>
    <script src="<?php echo base_url('assets/frontend/js/imagesloaded.pkgd.min.js');?>"></script>
    <script src="<?php echo base_url('assets/frontend/js/jquery.easing.1.3.js');?>"></script>
    <script src="<?php echo base_url('assets/frontend/js/superfish.js');?>"></script>

    <script src="<?php echo base_url('assets/frontend/js/jquery.flexslider.js');?>"></script>

    <script src="<?php echo base_url('assets/frontend/js/masonry.pkgd.min.js');?>"></script>

    <script src="<?php echo base_url('assets/frontend/js/jquery.simplyscroll.min.js');?>"></script>

    <script src="<?php echo base_url('assets/frontend/js/jquery.appear.js');?>"></script>

    <script src="<?php echo base_url('assets/frontend/js/jquery.caroufredsel.js');?>"></script>
    <script src="<?php echo base_url('assets/frontend/js/jquery.touchSwipe.min.js');?>"></script>

    <script src="<?php echo base_url('assets/frontend/js/SmoothScroll.js');?>"></script>

    <script src="<?php echo base_url('assets/frontend/js/scripts.js');?>"></script>
    <script src="<?php echo base_url('assets/frontend/js/custom-gallery.js');?>"></script>
<script>
(function($) {
$.fn.menumaker = function(options) {  
 var cssmenu = $(this), settings = $.extend({
   format: "dropdown",
   sticky: false
 }, options);
 return this.each(function() {
   $(this).find(".button").on('click', function(){
     $(this).toggleClass('menu-opened');
     var mainmenu = $(this).next('ul');
     if (mainmenu.hasClass('open')) { 
       mainmenu.slideToggle().removeClass('open');
     }
     else {
       mainmenu.slideToggle().addClass('open');
       if (settings.format === "dropdown") {
         mainmenu.find('ul').show();
       }
     }
   });
   cssmenu.find('li ul').parent().addClass('has-sub');
multiTg = function() {
     cssmenu.find(".has-sub").prepend('<span class="submenu-button"></span>');
     cssmenu.find('.submenu-button').on('click', function() {
       $(this).toggleClass('submenu-opened');
       if ($(this).siblings('ul').hasClass('open')) {
         $(this).siblings('ul').removeClass('open').slideToggle();
       }
       else {
         $(this).siblings('ul').addClass('open').slideToggle();
       }
     });
   };
   if (settings.format === 'multitoggle') multiTg();
   else cssmenu.addClass('dropdown');
   if (settings.sticky === true) cssmenu.css('position', 'fixed');
resizeFix = function() {
  var mediasize = 1000;
     if ($( window ).width() > mediasize) {
       cssmenu.find('ul').show();
     }
     if ($(window).width() <= mediasize) {
       cssmenu.find('ul').hide().removeClass('open');
     }
   };
   resizeFix();
   return $(window).on('resize', resizeFix);
 });
  };
})(jQuery);

(function($){
$(document).ready(function(){
$("#cssmenu").menumaker({
   format: "multitoggle"
});
});
})(jQuery);

</script>
</head>
<body class="not-front page-blog menu-closed">

<div id="main" class="clearfix">