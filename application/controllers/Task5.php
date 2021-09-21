<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class task5 extends CI_Controller {

	public function __construct(){
      
        parent::__construct();
		$this->load->helper('form');
		$this->load->library('user_agent');
		$this->load->helper('url');
		$this->load->helper('path');
        $this->load->library('Excel');
    	$this->load->library('form_validation');
		$this->load->model('task5_model','modul');
        
    }

	public function index()
	{
		$data = array(
			'title' => 'Multidimensional Array.',
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
            $row[] = $modul->id;
            $row[] = $modul->name;
            $row[] = '<a href="javascript:void(0)" onclick="show_detail('.$modul->id.')"> View Detail </a>';
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

    public function ajax_detail($id)
    {
        $list = $this->modul->get_datatables_detail($id);
        foreach($list as $l){
            echo 
            '<tr>
                <td>'.$l['id_portion_details'].'</td>
                <td>'.$l['name'].'</td>
                <td>'.$l['value'].'</td>
            <tr>';
        }
    }
   
}
