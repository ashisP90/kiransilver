<?php
if(!defined('BASEPATH')) EXIT("No script direct access allowed");
echo $conntellername=(isset($active_controller))?$active_controller:'';
$logged_in_id = $this->session->userdata('admin_id');
$logged_in_user_details = get_user_details($logged_in_id);

?>
 <!-- Left side column. contains the logo and sidebar -->
   <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar" >
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
            <img src="<?php echo base_url().'assets/uploads/admin/'.$logged_in_user_details->image;?>" class="img-circle" alt="User Image">
          
        </div>
        <div class="pull-left info">
          <p><?php echo $logged_in_user_details->fname.' '.$logged_in_user_details->lname;?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview <?php if(empty($conntellername) || $conntellername=='dashboard'){ echo 'active';}?>">
          <a href="<?php echo base_url('admin');?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>      

      <!--  <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Banners Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('admin/banner');?>"><i class="fa fa-circle-o"></i>Home Page banner</a></li>                            
          </ul>
        </li>
       -->
       
       
        <li class="treeview <?php if($conntellername=='admin-products' || $conntellername=='categories'){ echo 'active';}?>">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Products Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php if($conntellername=='admin-products'){ echo 'active';}?>"><a href="<?php echo base_url('admin-products/products');?>"><i class="fa fa-circle-o"></i>Products List</a>
            </li>      
            <li class="<?php if($conntellername=='categories'){ echo 'active';}?>"><a href="<?php echo base_url('categories');?>"><i class="fa fa-circle-o"></i>Category Management</a></li>               
          </ul>
        </li>
       
         <li class="treeview <?php if($conntellername=='orders'){ echo 'active';}?>">
          <a href="<?php echo base_url('orders');?>">
            <i class="fa fa-circle"></i> <span>Orders Management</span>
          </a>
        </li>  
       
         <li class="treeview <?php if($conntellername=='users'){ echo 'active';}?>">
          <a href="<?php echo base_url('users');?>">
            <i class="fa fa-users"></i> <span>Users Management</span>
          </a>
        </li>  
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>