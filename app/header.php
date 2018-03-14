<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  
  <link rel="icon" href="">
  <title>AMS-IOT</title>

  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  
    <!-- Ionicons -->
  <link rel="stylesheet" href="assets/css/ionicons.min.css">
  <!-- DataTables -->
    <link rel="stylesheet" href="assets/css/dataTables.bootstrap.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
    folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="assets/css/skins/skin-black-light.min.css">
    <link rel="stylesheet" href="assets/css/skins/skin-black-light.css">
    <!--  <link rel="stylesheet" href="assets/css/blue.css');?>">-->
    <link rel="stylesheet" href="assets/css/custom.css">
  <link rel="stylesheet" href="assets/css/buttons.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/daterangepicker.css" />
<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

<!-- jQuery UI 1.11.4 -->
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<link href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css" rel="Stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="assets/css/jquery.ui.timepicker.css"/>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
	<script type="text/javascript" src="assets/js/jquery.timepicker.js"></script>
	
    
<style>
.mycs{
	max-width: 250px;
   word-wrap:break-word;
    
    
}
.myhs{
	max-width: 100px;
	white-space: nowrap;
	
	
	}

</style>
  </head>
        <body class=" sidebar-collapse hold-transition skin-black-light sidebar-mini" data-base-url="">

          <header class="main-header" >
		   
 
			<a class="sidebar-toggle" data-toggle="offcanvas" role="button"><i class="fa fa-bars"></i> </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar  navbar-static-top navbar-default">
            <!-- Sidebar toggle button-->
            <a class="navbar-brand" href="#">AMS-IOT</a>
 
			
                <div class="navbar-custom-menu">
                
                
				
                    <ul class="nav navbar-nav">
                  <!--<span><a href="<?php //echo base_url(); ?>" class="">
              <h4>Cloudchip Technologies Pvt. Ltd.</h4>
            </a>
			</span>-->
                        <!-- Control Sidebar Toggle Button -->
                        <li>
                          
                        </li> 
                        <!-- User Account: style can be found in dropdown.less -->
                                

                        <li class="dropdown user user-menu">
                        
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                             <!--  <?php/* 
                 $profile_pic =  'user.png';
                 if(isset($this->session->userdata('user_details')[0]->profile_pic) && file_exists('assets/images/'.$this->session->userdata('user_details')[0]->profile_pic))
                              {
                                 $profile_pic = $this->session->userdata('user_details')[0]->profile_pic;
                              }*/?>-->
                              <img src="assets/images/user.png"  class="user-image" alt="User Image">
                            <span class="hidden-xs"><!--<?php/* echo isset($this->session->userdata('user_details')[0]->name)?$this->session->userdata('user_details')[0]->name:'';*/?>--></span>
                          </a>
                          <ul class="dropdown-menu" role="menu" style="width: 164px;">
                              <li><a href="user/profile');?>"><i class="fa fa-user mr10"></i>My Account</a></li>
                              <li class="divider"></li>
                              <li><a href="user/logout');?>"><i class="fa fa-power-off mr10"></i> Sign Out</a></li>
                          </ul>
                        </li>
                    </ul>
                
            </nav>
          </header>
                        
<div class="wrapper">
          <!-- Left side column. contains the logo and sidebar -->
           <aside class="main-sidebar" style="padding-top:0px">
             
          
          
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                    

              
              <ul class="sidebar-menu">
			
							   <li class="active" >
                        
                    </li>
			    <li class="active"> 
                <a href="dashboard.php"> <i class="fa fa-user"></i> <span>Dashboard</span></a>
				</li>
				
                
                <li class="not-active"> 
                <a href="profile.php"> <i class="fa fa-suitcase"  aria-hidden="true"></i> <span>My Account</span></a>
                </li>                
               

                  <li class="not-active">
                        <a href="#"><i class="fa fa-info-circle"></i> <span>About Us</span></a>
                    </li>
                    
                    
                                       
                 
              </ul>
                

              
            </section>
            <!-- /.sidebar -->
          </aside>    
     


<!-- Menu Toggle Script -->
   