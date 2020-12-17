<?php
if(!defined('BASEPATH')) EXIT("No direct script access allowed");
$basepath = base_url("assets/");
$is_left_and_top_panel_show=false;
$bodyfullwith="style='width:100%;'";
$pagetitle='Dashboard';

if($this->session->has_userdata('admin_id') && $this->session->userdata('admin_id')>0){
	$is_left_and_top_panel_show=true;
	$bodyfullwith='';
}
//determind the page title
$controllername = $this->uri->segment(1);
if(!empty($controllername)){
	$pagetitle = ucwords($controllername);
}
$logged_in_id = $this->session->userdata('admin_id');
$logged_in_user_details = get_user_details($logged_in_id);

$logoCondition = "(`id` = '1' AND `is_deleted` <> '1')";
$logo_data = getRowData(PAGES, $logoCondition);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Kiran Silver | <?php echo $pagetitle;?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?=$basepath?>bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=$basepath?>dist/css/style.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=$basepath?>dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?=$basepath?>dist/css/fancybox.css">

  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?=$basepath?>dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?=$basepath?>plugins/iCheck/flat/blue.css">
 <link rel="stylesheet" href="<?=$basepath?>plugins/datatables/dataTables.bootstrap.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?=$basepath?>plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?=$basepath?>plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?=$basepath?>plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?=$basepath?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />
  <!--<link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">-->
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  
  <link rel="stylesheet" href="<?=$basepath?>plugins/select2/select2.min.css">
  <link rel="stylesheet" href="<?=$basepath?>plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <link href="<?php echo $basepath;?>dist/css/fSelect.css" rel="stylesheet">
  
  <link href="<?=$basepath?>alertify/themes/alertify.core.css" rel="stylesheet" type="text/css" />
  <link href="<?=$basepath?>alertify/themes/alertify.default.css" rel="stylesheet" type="text/css" />
  <script src="<?php echo $basepath; ?>plugins/jQuery/jquery-2.2.3.min.js"></script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <header class="main-header">
    <!-- Logo -->
    <!-- Header Navbar: style can be found in header.less -->
    <?php 
	  if($this->session->has_userdata('admin_id') && $this->session->userdata('admin_id')>0){
	?>
	
	<nav class="navbar navbar-static-top">
	<div class="admin_logo">
	<a href="<?php echo base_url('admin');?>"><img src="<?php echo base_url('assets/uploads/logo/').$logo_data->image;?>" width="150px" height="50px"/></a>
	</div>
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
         
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo $basepath.'uploads/admin/'.$logged_in_user_details->image;?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $logged_in_user_details->fname.' '.$logged_in_user_details->lname;?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo $basepath.'uploads/admin/'.$logged_in_user_details->image;?>" class="img-responsive" alt="User Image">

                <p>
                  <?php echo $logged_in_user_details->fname.' '.$logged_in_user_details->lname;?>- Administrator
                  <small> <?php echo $logged_in_user_details->email;?></small>
                </p>
              </li>
              <!-- Menu Body -->
             
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?php echo base_url('admin/profile');?>" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo base_url('admin/logout')?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          
        </ul>
      </div>
      <div class="clear"></div>
    </nav>
	  <?php
	    }
        else{ ?>
			<nav class="navbar navbar-static-top">
			<div class="admin_logo">
             <img src="<?php echo base_url('assets/uploads/logo/').$logo_data->image;?>" width="80px" height="100px"/>
			</div>
		  </nav>
			<?php }?>
			<div class="clear"></div>
  </header>      
 <?php
	if($is_left_and_top_panel_show){
	$this->load->view('leftpanel', array('active_controller'=> $controllername));
	}
	?>