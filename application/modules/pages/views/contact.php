   <!--breadcrumbs area start-->
    <div class="breadcrumbs_area other_bread">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="<?php echo base_url();?>">home</a></li>
                            <li>/</li>
                            <li>contact us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->
   
    <!--contact area start-->
    <div class="contact_area">
        <div class="container">   
            <div class="row">
                <div class="col-lg-6 col-md-12">
                   <div class="contact_message content">
                        <h3>contact us</h3>    
                         <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram anteposuerit litterarum formas human. qui sequitur mutationem consuetudium lectorum. Mirum est notare quam</p>
                        <ul>
                            <li><i class="fa fa-fax"></i>  Address : Address: 23/25, 2nd Agiyari Lane, Prakash Bhawan, 2nd Floor, Opp. Nasta Galli & IBJA , Zaveri Bazar, Mumbai-400003, Maharashtra. INDIA</li>
                            <li><i class="fa fa-phone"></i> <a href="#">+91 22 23400915 / +91 22 23440915</a></li>
                            <li><i class="fa fa-envelope-o"></i> info@kiransilver.com</li>
                        </ul>             
                    </div> 
                </div>
                <div class="col-lg-6 col-md-12">
		         <?php
		            if ($this->session->flashdata('succ')) {
		            $message = $this->session->flashdata('succ');
		            ?>                
		          <div class="alert alert-success alert-dismissable" role="alert" id="alert-success">
		           <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> <?php echo($message);?></div>
		          <?php
		            }
		            
		            if ($this->session->flashdata('Err')) {
		            ?>
		          <div class="alert alert-danger alert-dismissable" role="alert">
		            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> <?php
		              $message = $this->session->flashdata('Err');
		              echo ($message);
		              ?>
		          </div>
		          <?php
		            }
		            ?>
                   <div class="contact_message">
                        <h3>Get in touch with us</h3>   
                        <form action="<?php echo base_url('contact-us');?>" id="contact_form" method="post">
                            <p>  
                               <label>Your Name (required)</label>
                                <input name="name" placeholder="Name*" id="name" type="text"> 
                                 <?php echo form_error('name'); ?>
                            </p>
                            <p>       
                               <label>Your Email (required)</label>
                                <input name="email" placeholder="Email*" id="email" type="email">
                                 <?php echo form_error('email'); ?>
                            </p>
                            <p>          
                               <label>Subject</label>
                                <input name="subject" id="subject" placeholder="Subject*" type="text">
                                 <?php echo form_error('subject'); ?>
                            </p>    
                            <div class="contact_textarea">
                                <label>Your Message</label>
                                <textarea placeholder="Message*" name="message" id="message" class="form-control2" ></textarea> 
                                 <?php echo form_error('message'); ?>    
                            </div>   
                            <button type="submit" name="send" id="send" value="send" > Send</button> 
                           
                        </form> 

                    </div> 
                </div>
            </div>
        </div>    
    </div>

    <!--contact area end-->

     <!--contact map start-->
    <div class="contact_map">
       <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                   <div class="map-area">
                     <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="500px" id="gmap_canvas" src="https://maps.google.com/maps?q=Kiran%20Silver%2C%202nd%20Floor%2C%2023%2F25%2C%20Prakash%20Bhawan%2C%202nd%2C%20Agiyari%20Ln%2C%20opp.%20Khau%20Galli%20%26%20Bombay%20Bullion%2C%20Zaveri%20Bazaar%2C%20Mumbai%2C%20Maharashtra%20400002&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div><style>.mapouter{position:relative;text-align:right;height:100%;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:100%;width:100%;}</style></div>
                   </div>
                </div>
            </div>
        </div>
    </div>
    <!--contact map end-->
  

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAdWLY_Y6FL7QGW5vcO3zajUEsrKfQPNzI"></script>
<script  src="https://www.google.com/jsapi"></script>
<script src="<?=$basepath?>js/map.js"></script>
 


