<?php
if(!defined('BASEPATH')) EXIT("No direct script access allowed");
$basepath = base_url("assets/frontend/");
$logged_in_id = $this->session->userdata('user_id');
$logged_in_user_details = getLoggedinDetails($logged_in_id);
?>
<div class="breadcrumbs_area other_bread">
    <div class="container">   
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="<?=base_url();?>">home</a></li>
                        <li>/</li>
                        <li>contact us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>         
</div>

<div class="contact_area">
    <div class="container">   
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="contact_message content">
                    <h3>contact us</h3>    
                        <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram anteposuerit litterarum formas human. qui sequitur mutationem consuetudium lectorum. Mirum est notare quam</p>
                    <ul>
                        <li><i class="fa fa-fax"></i>  Address : No 40 Baria Sreet 133/2 NewYork City</li>
                        <li><i class="fa fa-phone"></i> <a href="#">Infor@roadthemes.com</a></li>
                        <li><i class="fa fa-envelope-o"></i> 0(1234) 567 890</li>
                    </ul>             
                </div> 
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="contact_message form">
                    <h3>Tell us your project</h3>   
                    <form id="contact-form" method="POST"  action="assets/mail.php">
                        <p>  
                            <label> Your Name (required)</label>
                            <input name="name" placeholder="Name *" type="text"> 
                        </p>
                        <p>       
                            <label>  Your Email (required)</label>
                            <input name="email" placeholder="Email *" type="email">
                        </p>
                        <p>          
                            <label>  Subject</label>
                            <input name="subject" placeholder="Subject *" type="text">
                        </p>    
                        <div class="contact_textarea">
                            <label>  Your Message</label>
                            <textarea placeholder="Message *" name="message"  class="form-control2" ></textarea>     
                        </div>   
                        <button type="submit"> Send</button>  
                        <p class="form-messege"></p>
                    </form> 

                </div> 
            </div>
        </div>
    </div>    
</div>

<div class="contact_map">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="map-area">
                    <div id="googleMap"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAdWLY_Y6FL7QGW5vcO3zajUEsrKfQPNzI"></script>
<script  src="https://www.google.com/jsapi"></script>
<script src="<?=$basepath?>js/map.js"></script>