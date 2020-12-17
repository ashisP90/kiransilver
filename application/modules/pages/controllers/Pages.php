<?php
if(!defined('BASEPATH'))
EXIT("No direct script access allowed");
class Pages extends MY_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('Pages_model', 'Pages');		
	}
	
	/**
	* 
	* about Page
	* 
	*/
	
	public function about(){
		
				
		front_common_viewloader('pages/about');
	}
	
	/**
	* contact
	* 
	* @return
	*/
	public function contact(){
		
		 if($this->input->post()){
			$this->form_validation->set_rules('name', 'Name', 'trim|required|xss_clean');
			$this->form_validation->set_rules('email', 'Email', 'valid_email|trim|required|max_length[150]|xss_clean');
			$this->form_validation->set_rules('subject', 'Subject', 'trim|xss_clean');
			$this->form_validation->set_rules('message', 'Message', 'required|trim|xss_clean');
	
		  if($this->form_validation->run() === TRUE){
			$name     = $this->input->post('name');
			$email    = $this->input->post('email');
			$subject  = $this->input->post('subject');
			$message  = $this->input->post('message');
		
  		    $conatct_details_data = array(  
  		                          'name'    => $name,
						  		  'email'   => $email, 
						  		  'subject' => $subject, 
						  		  'message' => $message, 
						  		  'post_date'=> date('Y-m-d H:i:s'));
				
		    $product_details_edit = $this->BlankModel->addTableData(CONTACT_US, $conatct_details_data);
  		  
	   /**
		* 
		* @email template
		* 
		*/
  		  
  		$to_email   = ADMIN_EMAIL;	
		$from_email = FROM_EMAIL;			
		$body ="";
	    $body.= "<div class='cont_wrapperInner' style='border:4px solid #ee3b3e; width:670px; padding:10px; text-align:justify;'>
	    	<p style='text-align: center; background-color:#000;padding:10px 0;'><img src=".base_url('assets/uploads/logo/mainkiranlogo.png')." alt='Kiran Silver'></p>
				  <h1 style='color:#ee3b3e' align='center'>New Contact Message</h1>
				  <table width='100%' border='0' cellpadding='2' cellspacing='2'>			
				     <tr>
				      <td colspan='2'>Hello Administrator,<br>
				        <br>
				        You received a new message. Please check the details below:<br>
				        <br></td>
				    </tr>
                    <tr>
						<td align='left' valign='top'>Name:</td>
						<td align='left' valign='top'>".$name."</td>  
					</tr>
					<tr>
						<td align='left' valign='top'>Email:</td>
						<td align='left' valign='top'>".$email."</td>  
					</tr>
					<tr>
						<td align='left' valign='top'>Subject:</td>
						<td align='left' valign='top'>".$subject."</td>  
					</tr>
					<tr>
						<td align='left' valign='top'>Message:</td>
						<td align='left' valign='top'>".$message."</td>  
					</tr>
											  
				   </table>
				  <br>
				  <br>
	              Thank you,<br>
	              Kiran Silver Team. </div>";
	       
	        $config['mailtype'] = 'html';
		    $config['charset'] = 'UTF-8';
		    $config['newline'] = "\r\n";
		    $config['protocol'] = 'sendmail';
		    $config['mailpath'] = '/usr/sbin/sendmail';
		    $config['charset'] = 'iso-8859-1';
		    $config['wordwrap'] = TRUE;
		    
	     	$this->load->library('email', $config);
			$this->email->from($from_email, 'Kiran Silver');
			$this->email->to($to_email);
			$this->email->subject('A new Contact us message');
			$this->email->message($body);
		    $send_email=$this->email->send();
  		  
  			$this->session->set_flashdata('succ', 'Your message send successfully');
	        redirect('contact-us');
		   }
	      }
					
		front_common_viewloader('pages/contact');
	 }
	
	
		
}
?>