<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class task4 extends CI_Controller {

	public function __construct(){
      
        parent::__construct();
		$this->load->helper('form');
		$this->load->library('user_agent');
		$this->load->helper('url');
		$this->load->helper('path');
        $this->load->library('Excel');
    	$this->load->library('form_validation');
		$this->load->model('task4_model','modul');
        
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
            $no++;
            $row = array();
            $row[] = $modul->id;
            $row[] = $modul->name;
            $row[] = $modul->email;
            $row[] = $modul->created;
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

    function import(){
        if(isset($_FILES["file"]["name"])){
          $path = $_FILES["file"]["tmp_name"];
          $object = PHPExcel_IOFactory::load($path);
          foreach($object->getWorksheetIterator() as $worksheet){
            $highestRow = $worksheet->getHighestRow();
            $highestColumn = $worksheet->getHighestColumn();
            for($row=2; $row<=$highestRow; $row++){
               $name = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
               if(!empty($name)){
                $email = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
                $data = array(
                    'name' => $name,
                    'email' => $email,
                    'created' => date('Y-m-d H:i:s'),
                );

                $insert = $this->modul->save($data);
                }
            }
          }
        }
        echo json_encode(array("status" => TRUE));
    }
   
}
