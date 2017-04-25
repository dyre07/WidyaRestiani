<!DOCTYPE html>
<html>
<head>
<title>Moklet | Easy Movie Booking Website</title>
<link href="<?php echo base_url('assets/')?>css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<!--theme style-->
<link href="<?php echo base_url('assets/')?>css/style.css" rel="stylesheet" type="text/css" media="all" />	
<script src="<?php echo base_url('assets/')?>js/jquery.min.js"></script>

<!--//theme style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Wedding Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- start menu -->
<script src="<?php echo base_url('assets/')?>js/simpleCart.min.js"> </script>
<!-- start menu -->
<link href="<?php echo base_url('assets/')?>css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="<?php echo base_url('assets/')?>js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>	
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
                          <script>$(document).ready(function(){
                                  $("button").click(function(){
                                  $("#divdivan").fadeIn();});
                                });
                          </script>
<!-- /start menu -->
</head>
<body> 
<!--header-->	
<script src="<?php echo base_url('assets/')?>js/responsiveslides.min.js"></script>
<script>  
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: false,
      });
    });
  </script>
  
<div class="header-top">
	 <div class="header-bottom">			
				<div class="logo">
					<h1><a href="index.html">Moklet</a></h1>					
				</div>
			 <!---->		 
			 <div class="top-nav">
				<ul class="memenu skyblue">
                    <li class="grid"><a href="<?php echo base_url('home')?>">Home</a></li>
					<li class="grid"><?php if($this->session->userdata('login') == TRUE){ echo "<a href=\"".base_url('home/user')."\">".$this->session->userdata('name')."</a>";}?></li>
                    <li> 
                        <?php if($this->session->userdata('login') == FALSE){echo "<a href=\"".base_url('user/')."\">login</a>";}?>
                    </li>
                    <li> 
                        <?php if($this->session->userdata('login') == FALSE){echo "<a href=\"".base_url('user/register')."\">Register</a>";}?>
                    </li>
                    <li> 
                        <?php if($this->session->userdata('login') == TRUE){echo "<a href=\"".base_url('home/booking_history')."\">Booking History</a>";}?>
                    </li>
				</ul>				
			 </div>
			 <?php if($this->session->userdata('login') == TRUE){?>
			 <div class="cart box_1">
				 <a href="<?php echo base_url('home/detail_user')?>">
					<div class="total">
					(<?php echo $total;?>)</div>
					<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
				</a>
			 	<div class="clearfix"> </div>
			 </div>
            <?php
                    }
            ?>
			 <div class="clearfix"> </div>
			 			 
			 </div>
			<div class="clearfix"> </div>
    </div>