<?php
if(!defined('BASEPATH')) EXIT("No direct script access allowed");
$basepath = base_url("assets/");
$controllername = $this->uri->segment(2);
?> 

<footer class="main-footer">
    <div class="pull-right hidden-xs">
     
    </div>
    <strong>Copyright &copy; 2020 Kiran Silver.</strong> All rights reserved.
</footer>


</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery/1/jquery.min.js"></script>

<!-- jQuery UI 1.11.4 -->
<script src="<?php echo $basepath; ?>plugins/jQueryUI/jquery-ui.min.js"></script>

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo $basepath; ?>bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo $basepath; ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo $basepath; ?>plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="<?=$basepath?>alertify/js/alertify.min.js"></script>
 <script type="text/javascript" src="<?php echo $basepath;?>dist/js/fSelect.js"></script>

<script type="text/javascript">
$(document).ready(function () {
  $('#basicDataTable').dataTable();
});
</script>
<!-- datepicker -->
<script src="<?php echo $basepath; ?>plugins/datepicker/bootstrap-datepicker.js"></script>

<!-- AdminLTE App -->
<script src="<?php echo $basepath; ?>dist/js/app.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="<?php echo $basepath; ?>dist/js/demo.js"></script>

<script src="<?php echo $basepath; ?>plugins/select2/select2.full.min.js"></script>
<!--   Core JS Files   -->

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


<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
   })
</script>


<script type="text/javascript" src="<?php echo $basepath;?>js/jquery.validate.js"></script>
<script type="text/javascript" src="<?php echo $basepath;?>js/additional-methods.js"></script>
<script>

	jQuery.validator.addMethod("alpha", function(value, element) {
	return this.optional(element) || value == value.match(/^[a-zA-Z\s]+$/);
	});
	jQuery.validator.addMethod("phone_validation", function(value, element) {
	  return this.optional(element) || /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/.test(value);
	}, "Enter Valid Phone Number Please");
	jQuery.validator.addMethod("edit_password", function(value, element) {
	  return this.optional(element) || /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/.test(value);
	}, "password contain at least 8 characters(one digit and one lower case and one upper case)");
	jQuery.validator.addMethod("notEqual", function(value, element, param) {
 return this.optional(element) || value != $(param).val();
}, "This has to be different...");
 
 
 
 jQuery(function ($){
      $('#user_frm').validate({
          rules: {
            email: {
              required: true,
              email: true
            },
            mobile: {
               phone_validation : true
            },
           fname:  {
	            required: true,
	            alpha:true
			}, 
			lname:{
			    alpha:true
			},
			
			edit_password: {
  			    //required: true,			
				edit_password:true
  			}, 
  		    edit_con_pass: {
  			    equalTo: "#edit_password"
  			},
			password: {
  			    required: true,			
				edit_password:true
  			}, 
  		    con_password: {
  			    equalTo: "#password"
  			},
  			'charity_id[]': {

                required: true,
                 //maxlength: 2               
            },
            op_email:{             
              email:true,   
              notEqual: "#email"    
      		},   
          },
         messages: {
	        email:'Please Enter a Valid email address',
	        fname:'Please enter alphabet only',
	        lname :'Please enter alphabet only',
			
			'charity_id[]': {
                required: "You must check at least 1 charity",
                 // maxlength: "Check no more than {0} boxes"              
            }
            }
        });
    }); 

jQuery(function ($){
      $('#admin_frm').validate({
          rules: {
            email: {
              required: true,
              email: true
            },
            mobile: {
               phone_validation : true
            },
           fname:  {
	            required: true,
	            alpha:true
			}, 
			lname:{
			    alpha:true
			},
			edit_password: {
  			    minlength: 6
  			}, 
  		    edit_con_pass: {
  			    equalTo: "#edit_password"
  			}, 
          },
         messages: {
	        email:'Please Enter a Valid email address',
	        fname:'Please enter alphabet only',
	        lname :'Please enter alphabet only',
            }
        });
});

 
 
 
 jQuery(function ($){
      $('#product_add_form').validate({
          rules: {
            pname: {
              required: true,
            },
            pcode: {
               required: true,
            }, 
            type: {
               required: true,
            },
            description: {
               required: true,
            },
            product_image: {
               required: true,
            },
           'prod_cat[]': {
                required: true,
                            
            },
          
          },
         messages: {
	        pname:'Please enter a Product Name',
	        pcode:'Please enter Product Code',
	        type :'Please enter Product Type',
	        description :'Please enter Product Description',
	        product_image :'Please upload Product Image',
	        'prod_cat[]' :'Please select Category',
            }
        });
});


</script>
<script type="text/javascript" src="<?php echo $basepath; ?>js/fancybox.js"></script>
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
jQuery('#mobile').on('keyup keypress blur change',function(e){
this.value = this.value
.match(/\d*/g).join('')
.match(/(\d{0,3})(\d{0,3})(\d{0,4})/).slice(1).join('-')
.replace(/-*$/g, '');
}); 
</script>
<script>
function deleteData(dataId, table_name, delete_for ){
	alertify.confirm("Are you sure you want to delete?", function (e) { 
    if (e) {     
		var ajaxurl = '<?php echo base_url();?>admin/Ajax/deleteData';
		jQuery.ajax({
			url: ajaxurl,
			type: 'post',
			data: {dataId : dataId, table_name : table_name, delete_for : delete_for},
			success: function(response){			
				if (response == "1"){					
				   jQuery('#data-'+dataId).remove();
				   jQuery('#delete_success').show();
			       jQuery('#delete_success').html('Data Removed Successfully!!').fadeIn('fast').delay(2000).fadeOut('slow');
			      }
			    }
 			});
 	}
	});	
}

$('#select_all').click(function(event) {
  if(this.checked) {
      // Iterate each checkbox
      $(':checkbox').each(function() {
          this.checked = true;
      });
  }
  else {
    $(':checkbox').each(function() {
          this.checked = false;
      });
  }
});
</script>


<script src="<?=base_url("assets/")?>tinymce/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
    selector: "textarea",
    plugins: "link image,code",
    mode : "specific_textarea",
    cleanup : false,
    verify_html : false
    //editor_selector : "content_descr",
 });  
</script>
    <script>
  $(function () {
 
    $('#data_table').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
      "order": [[ 0, "desc" ]]
    });
    

  });
</script>


 <script>
      (function(jQuery) {
          jQuery(function() {
              window.fs_test = jQuery('.multi_site_user_select').fSelect();
          });
      })(jQuery);
      
    </script>
</body>
</html>