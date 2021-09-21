<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Task1 extends CI_Controller {

	public function __construct(){
      
        parent::__construct();
		$this->load->helper('form');
		$this->load->library('user_agent');
		$this->load->helper('url');
		$this->load->helper('path');
        $this->load->library('Excel');
    	$this->load->library('form_validation');
		$this->load->model('task1_model','modul');
        
    }

	public function index()
	{
		$data = array(
			'title' => 'Listing Record page too slow, try to optimize it.',
		);
		$this->load->view('template',$data);
	}

	public function ajax_modul()
    {
        $list = $this->modul->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $modul) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $modul->id;
            $row[] = $modul->name;
            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->modul->count_all(),
            "recordsFiltered" => $this->modul->count_filtered(),
            "data" => $data,
        );
        echo json_encode($output);
    }
   
}
