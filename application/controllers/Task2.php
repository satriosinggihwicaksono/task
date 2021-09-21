<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Task2 extends CI_Controller {

	public function __construct(){
      
        parent::__construct();
		$this->load->helper('form');
		$this->load->library('user_agent');
		$this->load->helper('url');
		$this->load->helper('path');
        $this->load->library('Excel');
    	$this->load->library('form_validation');
        
    }

	public function index()
	{
		$data = array(
			'title' => 'Change Display Format From Popup to Mouse over.',
		);
		$this->load->view('template',$data);
	}

}
