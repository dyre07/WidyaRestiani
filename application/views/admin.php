<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Modern an Admin Panel Category Flat Bootstarp Resposive Website Template | Basic_tables :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="<?php echo base_url('assets2/')?>css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="<?php echo base_url('assets2/')?>css/style.css" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url('assets2/')?>css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="<?php echo base_url('assets2/')?>js/jquery.min.js"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url('assets2/')?>js/bootstrap.min.js"></script>
</head>
<body>
<div id="wrapper">
     <!-- Navigation -->
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Moklet</a>
            </div>
            <!-- /.navbar-header -->
			<form class="navbar-form navbar-right">
              <?php echo $this->session->userdata('user')?>
            </form>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="index.html"><i class="fa fa-dashboard fa-fw nav_icon"></i>Booking Report</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <div id="page-wrapper">
        <div class="col-md-12 graphs">
	   <div class="xs">
  	 <h3>Booking Report</h3>
  	<div class="bs-example4" data-example-id="contextual-table">
    <table class="table">
      <thead>
        <tr>
          <th>Id Booking</th>
          <th>Movie Title</th>
          <th>Id Customer</th>
          <th>Date</th>
          <th>Time</th>
          <th>Price</th>
          <th>Quantity</th>
          <th>Total</th>
          <th>Status</th>
          <th colspan="2">Action</th>
        </tr>
      </thead>
      <tbody>
          <?php 
                if(!empty($booking)){
                    foreach($booking as $row){?>
        <tr class="active">
          <td><?php echo $row['id_book']?></td>
          <td><?php echo $row['movie_name']?></td>
          <td><?php echo $row['id_customer']?></td>
          <td><?php echo $row['date']?></td>
          <td><?php echo $row['time']?></td>
          <td><?php echo $row['price']?></td>
          <td><?php echo $row['qty']?></td>
          <td><?php echo $row['pay']?></td>
          <td><?php echo $row['status']?></td>
          <td><?php if($row['status']=='waiting'){?><a href="<?php echo base_url('admin/confirm/')?><?php echo $row['id_book']?>"><button type="button" class="btn btn-sm btn-success warning_3">Confirm</button></a></td>
            <td><a href="<?php echo base_url('c_admin/delete/')?><?php echo $row['id_book']?>"><button type="button" class="btn btn-sm btn-danger">x</button></a><?php }else{
                        echo "<td></td><td></td>";
                    } ?></td>
            <?php
                                }
                            }else{
                                echo "Empty Record";
                                }?>
        </tr>
      </tbody>
    </table>
   </div>
  </div>
  </div>
  <div class="copy_layout">
      <p>Copyright © 2015 Modern. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
  </div>
   </div>
      </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
<!-- Nav CSS -->
<link href="<?php echo base_url('assets2/')?>css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="<?php echo base_url('assets2/')?>js/metisMenu.min.js"></script>
<script src="<?php echo base_url('assets2/')?>js/custom.js"></script>
</body>
</html>
