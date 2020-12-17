<?php
if(!defined('BASEPATH'))
EXIT("No direct script access allowed");
class Contact extends MY_Controller {

    /**
	* 
	* Index Page
	* 
	*/
	
	public function index(){
        front_common_viewloader('contact/index');
    }

}