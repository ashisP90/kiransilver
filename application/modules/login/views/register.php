<?php 
if(!defined('BASEPATH')) EXIT("No direct script access allowed");
$basepath = base_url("assets/frontend/");
?> 
<div class="customer_login padtop">
  <div class="container">
    <!--<div class="row">-->
    <section class="banner_section banner_section_two">
      <div class="row">
        <div class="col-12">
          <div class="section_title">
            <h2>Register Now</h2>
            <p>Contemporary, minimal and modern designs </p>
          </div>
        </div>
      </div>
      
      <div class="container">

        <div class="row ">
          <div class="col-lg-6 col-md-6">
            <div class="banner_area">
              <div class="banner_thumb">
                <a href="<?php echo base_url().'shop';?>"><img src="<?=$basepath?>img/slider/login/Untitled design.png" alt="#"></a>
                <div class="banner_content">
                  <h1>Register</h1>
                  <p>Big Sale Off Final Sale Items. Caught in the moment!</p>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-lg-6 col-md-6">
         <?php
          if($this->session->flashdata('succ')){
          	$message = $this->session->flashdata('succ');
          	?>      
        <div class="alert alert-success alert-dismissable" role="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success! </strong><?php print_r($message);?>
        </div>
        <?php
          }
          if($this->session->flashdata('msg')){
          	?>
        <div class="alert alert-danger alert-dismissable" role="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error! </strong>
          <?php
            $message = $this->session->flashdata('msg');
            print_r( $message);
            ?>
        </div>
        <?php
          }
          ?>
            <div class="account_form register">
              <form action="<?php echo base_url().'register';?>" method="post" id="register_form" name="register_form">
                <div class="form-group col-lg-12">
                  <label>First Name</label>
                  <input type="text" name="first_name" class="form-control" id="first_name" value="">
                  <?php echo form_error('first_name');?>
                </div> 
                <div class="form-group col-lg-12">
                  <label>Last Name</label>
                  <input type="text" name="last_name" class="form-control" id="last_name" value="">
                  <?php echo form_error('last_name');?>
                </div>
                <div class="form-group col-lg-12">
                  <label>UserName</label>
                  <input type="text" name="username" class="form-control" id="username" value="">
                  <?php echo form_error('username');?>
                </div>
                 <div class="form-group col-lg-12">
                  <label>Email Address</label>
                  <input type="email" name="email" id="email" class="form-control" id="email" value="">
                  <?php echo form_error('email');?>
                </div>
                <div class="form-group col-lg-12">
                  <label>Mobile</label>
                  <input type="text" name="mobile" class="form-control" id="mobile" value="">
                  <?php echo form_error('mobile');?>
                </div>
                <div class="form-group col-lg-12">
                  <label>Password</label>
                  <input type="password" name="password" class="form-control" id="password" value="">
                  <?php echo form_error('password');?>
                </div>
                <div class="form-group col-lg-12">
                  <label>Repeat Password</label>
                  <input type="password" name="rep_password" class="form-control" id="rep_password" value="">
                  <?php echo form_error('rep_password');?>
                </div>
               
                
                <div class="login_submit">
                  <button type="submit">Register</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--register area start-->
    <!--register area end-->
  </div>
</div>
<!--Instagram area start--> 
<!--  <section class="instagram_area">
  <div class="container-fluid">
      <div class="row">
          <div class="col-12">
              <div class="section_title">
                  <h2>Follow us On Instagram</h2>
                  <p>Contemporary, minimal and modern designs embody the Lavish Alice handwriting</p>
              </div>
          </div>
      </div>
      <div class="instagram_home_block">
          <div class="row">
              <div class="instagram_wrapper instagram_column5 owl-carousel">
                  <div class="col-lg-3">
                      <div class="single_instagram">
                          <a href="#"><img src="assets/img/bg/insta/1.png" alt=""></a>
                          <div class="instagram_icone">
                              <a class="instagram_pupop" href="assets/img/bg/insta/1.png"><i class="fa fa-instagram"></i></a>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-3">
                      <div class="single_instagram">
                          <a href="#"><img src="assets/img/bg/insta/2.png" alt=""></a>
                          <div class="instagram_icone">
                              <a class="instagram_pupop" href="assets/img/bg/insta/2.png"><i class="fa fa-instagram"></i></a>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-3">
                      <div class="single_instagram">
                          <a href="#"><img src="assets/img/bg/insta/3.png" alt=""></a>
                          <div class="instagram_icone">
                              <a class="instagram_pupop" href="assets/img/bg/insta/3.png"><i class="fa fa-instagram"></i></a>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-3">
                      <div class="single_instagram">
                          <a href="#"><img src="assets/img/bg/insta/4.png" alt=""></a>
                          <div class="instagram_icone">
                              <a class="instagram_pupop" href="assets/img/bg/insta/4.png"><i class="fa fa-instagram"></i></a>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-3">
                      <div class="single_instagram">
                          <a href="#"><img src="assets/img/bg/insta/5.png" alt=""></a>
                          <div class="instagram_icone">
                              <a class="instagram_pupop" href="assets/img/bg/insta/5.png"><i class="fa fa-instagram"></i></a>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-3">
                      <div class="single_instagram">
                          <a href="#"><img src="assets/img/bg/insta/6.png" alt=""></a>
                          <div class="instagram_icone">
                              <a class="instagram_pupop" href="assets/img/bg/insta/6.png"><i class="fa fa-instagram"></i></a>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-12">
                  <div class="text_follow">
                      <a href="#">#Follow us on Instagram</a>
                  </div>
              </div>
          </div>
      </div>
  </div>
  </section>-->
<!--Instagram area end-->
