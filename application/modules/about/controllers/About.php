<?php
if(!defined('BASEPATH'))
EXIT("No direct script access allowed");
class About extends MY_Controller {

    /**
	* 
	* Index Page
	* 
	*/
	
	public function index(){
        front_common_viewloader('about/index');
    }

}