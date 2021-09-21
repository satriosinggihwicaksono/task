<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class task5_model extends CI_Model {

	var $table = 'items';
	var $column = array('name');
	var $order = array('id' => 'asc');


	var $table_detail = 'items';
	var $column_detail = array('name');
	var $order_detail = array('id' => 'asc');

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		    $this->search = '';

	}

	private function _get_datatables_query()
	{
		$this->db->select('*');
		$this->db->from($this->table);
		$i = 0;
	
		foreach ($this->column as $item)
        {
            if($_POST['search']['value'])
            {
                 
                if($i===0)
                {
                    $this->db->group_start();
                    $this->db->like($item, $_POST['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $_POST['search']['value']);
                }
 
                if(count($this->column) - 1 == $i)
                    $this->db->group_end();
            }
            $i++;
        }
         
        if(isset($_POST['order']))
        {
            $this->db->order_by($this->column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } 
        else if(isset($this->order))
        {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
		}
	}

	function get_datatables()
	{
		$this->_get_datatables_query();
		if($_POST['length'] != -1)
		$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}

	function count_filtered()
	{
		$this->_get_datatables_query();
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_all()
	{
		$this->db->from($this->table);
		return $this->db->count_all_results();
	}


	function get_datatables_detail($id)
	{
		$this->db->where('item_id',$id);
		$port = $this->db->get('portions')->row_array();
		
		$this->db->select('*,pd.id as id_portion_details');
		$this->db->join('parts p','p.id = pd.part_id','left');
		$this->db->where('pd.portion_id',$port['id']);
		$this->db->where('pd.portion_id',$port['id']);
		$query = $this->db->get('portion_details pd')->result_array();
		return $query;
	}

	
}
