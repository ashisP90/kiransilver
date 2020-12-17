<table id="example2" class="table table-bordered table-hover">
  <thead style="background-color:#f5f5f5">
    <tr>
      <th>#</th>
      <th>Assign As</th>
	  <th>Agent Name</th>
      <th>Agent Email</th>
	  <th>Agent Phone</th>
	  <th>Agent Status</th>
	  <th>Created On</th>     
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php if(count($agents) > 0){ ?>
    <?php foreach($agents as $a){ ?>
    <?php $check_booking_details = bookingDetailsByUserID($a->site_user_id, $selectedField = "booking_id, booking_status, site_user_id"); ?>
    <tr <?php if($a->credential_error_count == LOGIN_ERROR_LIMIT ){ ?> style="background-color: #ffbfbf" <?php }?>>
      <td><?php echo ++$sl_no;?></td>
	  <td><?php echo $a->assign_as;?></td>
	  <td><?php echo $a->salutation.' '.$a->site_user_profile_name;?></td>
      <td><?php echo base64De(BASE64_ENCODE_PROFILE_EMAIL_REPEAT,$a->site_user_email);?></td>
	  <td><?php echo '+'.$a->country_code.' '.base64De(BASE64_ENCODE_PROFILE_PHONE_REPEAT,$a->site_user_mobile);?></td>      
      <td>
		<select name="site_user_status" id="site_user_status" class="form-control" onchange="changeAgentStatus(this.value,<?php echo $a->site_user_id;?>);"  
		<?php if($check_booking_details) {
		 	  foreach($check_booking_details as $booking_details) {
		 	  if($booking_details->booking_status != "Completed" && $booking_details->booking_status == "Quoted") {  
		 	  echo "disabled='disabled'";	
		 	  }}} ?>>
			<?php foreach(siteUserStatus() as $key => $us){?>
				<option value="<?php echo $key;?>" <?php if($a->site_user_status == $key){?> selected <?php }?>><?php echo $us;?></option>
			<?php }?>
		</select>
	  </td>
      <td><?php echo showDate($a->doc);?></td>
      <td>
      <a class="btn btn-primary tooltips" href="javascript:void(0);" title="Mail" onClick="sendMail('<?php echo base64De(BASE64_ENCODE_PROFILE_EMAIL_REPEAT,$a->site_user_email);?>', '<?php echo $a->site_user_profile_name;?>');"><i class="fa fa-envelope"></i> </a>
      <a class="btn btn-primary tooltips" href="<?php echo site_url(ADMIN_URL_PREFIX.'/agents/agentForm/'.$a->site_user_id);?>" title="Edit"><i class="fa fa-edit"></i> </a></td>
    </tr>
    <?php }?>
    <?php }else{?>
    <tr>
      <td colspan="8"><?php echo getMessage("record_not_found", 3);?></td>
    </tr>
    <?php }?>
  </tbody>
</table>
<div class="clearfix"></div>
<div class="pagination pull-right"><?php echo $this->ajax_pagination->create_links(); ?></div>
<?php $this->load->view('includes/back_end/data_loading');?>