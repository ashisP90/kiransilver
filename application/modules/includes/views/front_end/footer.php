<?php
if(!defined('BASEPATH')) EXIT("No direct script access allowed");
$basepath = base_url("assets/frontend/");
$logged_in_id = $this->session->userdata('user_id');
$logged_in_user_details = getLoggedinDetails($logged_in_id);
?>
  <link rel="stylesheet" href="<?=$basepath?>css/footer.css" />
  
  <footer class="footer_widgets" style='content: "";
  /* position: relative;
  top: -10px;
  left: 0; */
  width: 100%;
  height: auto;
  box-shadow: 0px 0 10px rgba(0, 0, 0, 0.8);
  z-index: 100;padding-top: 50px;'>
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="widgets_container newsletter">
                            <div class="logo_footer">
                                <img src="<?=$basepath?>img/logo/mainkiranlogo.png" class="img-responsive" id="logo_footer">
                            </div>
                            <!--<h3>About Us</h3>-->
                            <div class="newleter-content">
                                <p>Exceptional quality. Ethical factories. Sign up to enjoy free U.S. shipping and returns on your first order.</p>
<!--                                <div class="subscribe_form">
                                    <form id="mc-form" class="mc-form footer-newsletter" >
                                        <input id="mc-email" type="email" autocomplete="off" placeholder="Enter you email address here..." />
                                        <button id="mc-submit" class="colbtn">Subscribe !</button>
                                    </form>
                                     mailchimp-alerts Start 
                                    <div class="mailchimp-alerts text-centre">
                                        <div class="mailchimp-submitting"></div> mailchimp-submitting end 
                                        <div class="mailchimp-success"></div> mailchimp-success end 
                                        <div class="mailchimp-error"></div> mailchimp-error end 
                                    </div> mailchimp-alerts end 
                                </div>-->
                            </div>
                        </div>
                    </div> 
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="widgets_container">
                            <h3>Quick Links</h3>
                            <hr>
                            <div class="footer_menu">
                                <ul>
                                   
                                    <li><a href="<?php echo base_url() ?>">Home</a></li>
                                    <li><a href="<?php echo base_url().'about-us';?>">About Us</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="<?php echo base_url().'contact-us';?>">Contact Us</a></li>
                                    <?php if($logged_in_user_details){ ?>
                                    <li><a href="<?php echo base_url().'my-account';?>">My Account</a></li>
                                    <li><a href="<?php echo base_url().'logout';?>"> Logout</a></li>	
                                    <?php }
                                    else{								
                                    ?>
                                    <li><a href="<?php echo base_url().'login';?>">Login</a></li>
                                    <li><a href="<?php echo base_url().'register';?>"> Register</a></li>
                                    <?php }?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="widgets_container">
                            <h3>Extras</h3>
                            <div class="footer_menu">
                                <ul>
                                    <li><a href="#">Brands</a></li>
                                    <li><a href="#">Gift Certificates</a></li>
                                    <li><a href="#">Affiliate</a></li>
                                    <li><a href="#">Specials</a></li>
                                    <li><a href="contact.html">Site Map</a></li>
                                    <li><a href="my-account.html">My Account</a></li>
                                </ul>
                            </div>
                        </div>
                    </div> -->
                    <div class="col-lg-4 col-md-6">
                        <div class="widgets_container contact_us">
                            <h3>Contact Us</h3>
                            <hr>
                            <div class="footer_contact">
                                <p>Address: 23/25, 2nd Agiyari Lane, Prakash Bhawan, 

                                    2nd Floor, Opp. Nasta Galli & IBJA ,

                                    Zaveri Bazar, Mumbai-400003, 

                                    Maharashtra. INDIA</p>
                                <p>Contact No: +91 9930 925 925</p>
                                <!-- <p>Phone: <a href="tel:+(+91)800456789-987">+91 22 23400915 / +91 22 23440915</a> </p> -->
                                <p>Email:info@kiransilver.com</p>
                                <ul>
                                    <!-- <li><a href="#" title="google-plus"><i class="fa fa-google-plus"></i></a></li> -->
                                    <li><a href="#" title="whatsapp"><i class="fa fa-whatsapp"></i></a></li>
                                    <li><a href="#" title="facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" title="instagram"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                              
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" id="subscribeDiv">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-8"></div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                        <form class="d-flex">
                            <input type="text" class="form-control" id="subscribeInput" placeholder="Enter Your Email ID" name="">
                            <button type="button" id="subscribeButton" class="btn btn-danger">Subscribe</button>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="footer_bottom">
            <div class="container">
               <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="copyright_area">
                            <p>Copyright &copy; 2020 <a href="#">Kiran Silver</a>  All Rights Reserved.</p>
                        </div>
                    </div>
                    <!--<div class="col-lg-6 col-md-6">-->
                    <!--    <div class="footer_custom_links">-->
                    <!--        <ul>-->
                    <!--            <li><a href="#">Order History</a></li>-->
                    <!--            <li><a href="wishlist.php">Wish List</a></li>-->
                    <!--            <li><a href="#">Newsletter</a></li>-->
                    <!--        </ul>-->
                    <!--    </div>-->
                    <!--</div>-->
                </div>
            </div>
        </div>
    </footer>
  <div class="whatsapp">
    <a href="https://api.whatsapp.com/send?phone=919930925925" target="_blank" title="Need Some help? Contact us now on whatsapp">  
        <img src="<?=$basepath?>img/WhatsApp.png" height="10%" width="auto" id="whatsapp" alt="whatsapp" />
    </a>
</div>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
<script src="<?=$basepath?>js/plugins.js"></script>
<script src="<?=$basepath?>js/main.js"></script>
<script src="<?php echo base_url();?>assets/alertify/js/alertify.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datepicker/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.validate.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/additional-methods.js"></script>
<script>

	jQuery.validator.addMethod("alpha", function(value, element) {
	return this.optional(element) || value == value.match(/^[a-zA-Z\s]+$/);
	});
	jQuery.validator.addMethod("phone_validation", function(value, element) {
	  return this.optional(element) || /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/.test(value);
	}, "Please enter valid phone number ");
	jQuery.validator.addMethod("design_password", function(value, element) {
	  return this.optional(element) || /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/.test(value);
	}, "Password contain at least 8 characters(one digit and one lower case and one upper case)");
	jQuery.validator.addMethod("notEqual", function(value, element, param) {
 return this.optional(element) || value != $(param).val();
}, "This has to be different...");
 jQuery.validator.addMethod("noSpace", function(value, element) { 
     return value.indexOf(" ") < 0 && value != ""; 
    }, "<small class='text-danger'>Space are not allowed.</small>");
 
 
 
 jQuery(function ($){
      $('#register_form').validate({
          rules: {
           email: {
              required: true,
              email: true
           },
           first_name: {
              required: true, 
              minlength: 2,
			  maxlength:50            
           }, 
           last_name: {
              required: true, 
              minlength: 1,
			  maxlength:50            
           },
           username: {
	            required: true,
	            noSpace:true
			}, 
			mobile: {	         
	            phone_validation:true
			}, 		
		   password: {
  			    required: true,			
				minlength: 6,
				maxlength:20
  			}, 
  		   rep_password: {
  			    equalTo: "#password"
  			},           
          },
         messages: {
         	first_name: 'Please enter first name',
         	last_name: 'Please enter last name',
	        email:'Please enter a valid email address',
	        username:'Please enter username',
	        Password:'Please enter password',
	       
            }
        });
    });  
   
   
     jQuery(function ($){
      $('#profile_edit_form').validate({
          rules: {
           email: {
              required: true,
              email: true
           },
           first_name: {
              required: true, 
              minlength: 2,
			  maxlength:50            
           }, 
           last_name: {
              required: true, 
              minlength: 1,
			  maxlength:50            
           },
           username: {
	            required: true,
	            noSpace:true
			}, 
			mobile: {	         
	            phone_validation:true
			}, 		
		   edit_password: {
				minlength: 6,
				maxlength:20
  			}, 
  		           
          },
         messages: {
         	first_name: 'Please enter first name',
         	last_name: 'Please enter last name',
	        email:'Please enter a valid email address',
	        username:'Please enter username',
	        edit_password:'Please enter password',
	       
            }
        });
    });  
    
    
    jQuery(function ($){
      $('#login_form').validate({
          rules: {         
           username: {
	            required: true,
	            noSpace:true
			}, 		
			password: {
  			    required: true,			
				minlength: 6,
				maxlength:20
  			},   		     
          },
         messages: {
	        email:'Please enter a valid email address',
	        username:'Please enter username',
	       
            }
        });
    }); 


</script>

<script type="text/javascript" src="<?php echo base_url();?>assets/js/fancybox.js"></script>
<script>
var $ = jQuery.noConflict();

  $("a.fancy").fancybox({
    'zoomSpeedIn': 300,
    'zoomSpeedOut': 300,
    'overlayShow': false
  }); 
$(document).ready(function() {
	$(".fancybox").fancybox({
		openEffect	: 'none',
		closeEffect	: 'none'
	});
	});
</script>
<script>
    $(document).ready(function () {
        $('.customer-logos').slick({
            slidesToShow: 6,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1500,
            arrows: false,
            dots: false,
            pauseOnHover: false,
            responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 4
                    }
                }, {
                    breakpoint: 520,
                    settings: {
                        slidesToShow: 3
                    }
                }]
        });

        $('.testimonials .owl-carousel').owlCarousel({
            loop: true,
            items: 1,
            margin: 15,
            dots: false,
            nav: true,
            navText: ["<span class='fa fa-chevron-left'></span> ", " <span class='fa fa-chevron-right'></span>"],
            mouseDrag: false,
            autoplay: true,
            smartSpeed: 500
        });
    })
</script>

<script>
 $(function() 
 {   $( "#datepicker" ).datepicker({
					      maxDate: '+0d',
						  yearRange:"-100:+0",
						  changeMonth: true,
						  changeYear: true,
						  dateFormat: 'yy-mm-dd'
					     });
 });
 </script>  
 
 
 <script type="text/javascript">
 
    $(".addtowishlist").on('click', function(evt) {
       var link_data = $(this).data('data');
       var action = $(this).data('action');
       var ajaxurl = '<?php echo base_url();?>wishlist/updateWishlist';
	    $.ajax({
          type: "POST",
          dataType: "json",
          url: ajaxurl,
          data: ({product_id: link_data, action:action}),
          success: function(results) {
          	var posts = results;
              if(posts.success == '1')
               {
               	  $("#wishlist_div").show('3000');
               	  $("#wishlist_div").html(posts.message);
                  $('a[data-data="' + link_data + '"] > i.whishstate').css({"color":"red"});
               }
               else{
                   $('a[data-data="' + link_data + '"] > i.whishstate').css({"color":"red"});
               }
          }   
       });   
    }); 
 
</script>