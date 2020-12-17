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
            <h2>Login</h2>
            <p>Contemporary, minimal and modern designs </p>
          </div>
        </div>
      </div>
      <div class="container">
        
        <div class="row ">
        
          <div class="col-lg-6 col-md-6">
            <div class="banner_area">
              <div class="banner_thumb">
                <a href="<?php echo base_url().'shop';?>"><img src="<?=$basepath?>img/product/Untitled design.png" alt="#"></a>
                <div class="banner_content">
                  <h1>Login</h1>
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
              if($this->session->flashdata('error')){
              	?>
            <div class="alert alert-danger alert-dismissable" role="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error! </strong>
              <?php
               echo $message = $this->session->flashdata('error');
               
                ?>
            </div>
            <?php
              }
              ?>
            <div class="account_form">
           
              <form action="<?php echo base_url().'login';?>" method="post" id="login_form" name="login_form">
                <input type="hidden" value="<?php echo isset($_REQUEST['red']) ? $_REQUEST['red']: '';?>" name="red"/>
                <div class="form-group col-lg-12">
                  <label>Username</label>
                  <input type="text" name="username" class="form-control" id="username" value="">
                  <?php echo form_error('username');?>
                </div>
                <div class="form-group col-lg-12">
                  <label>Password</label>
                  <input type="password" name="password" class="form-control" id="password" value="">
                  <?php echo form_error('password');?>
                </div>
                <h5><a href="<?php echo base_url().'register';?>"id="registernow">Not registered ? Register Now !</a></h5>
                <div class="login_submit">
                  <button type="submit">Login</button>
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
<!--    <section class="instagram_area">
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
