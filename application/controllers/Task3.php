<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Task3 extends CI_Controller {

	public function __construct(){
      
        parent::__construct();
		$this->load->helper('form');
		$this->load->library('user_agent');
		$this->load->helper('url');
		$this->load->helper('path');
        $this->load->library('Excel');
    	$this->load->library('form_validation');
		$this->load->model('task3_model','modul');
        
    }

	public function index()
	{
		$data = array(
			'title' => 'Question: Advanced Input Field.',
		);
		$this->load->view('template',$data);
	}

	public function ajax_modul()
    {
        $list = $this->modul->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $modul) {
            $amt = $modul->quantity * $modul->unit_price; 
            $no++;
            $row = array();
            $row[] = $modul->transaction_id;
            $row[] = $modul->description;
            $row[] = $modul->quantity;
            $row[] = $modul->uom;
            $row[] = $modul->unit_price;
            $row[] = round($amt,2);
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
