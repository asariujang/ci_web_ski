<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CityArea_Model extends CI_Model {
    var $table = 'city_area';
    var $column_order = array('area','city'); 
    var $column_search = array('area','city'); 
    var $order = array('city' => 'asc'); 

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    private function _get_datatables_query() {
        $this->db->from($this->table);
        $i = 0;
            foreach ($this->column_search as $item) {
                if($_POST['search']['value']) {
                    if($i===0) {
                        $this->db->group_start();
                        $this->db->like($item, $_POST['search']['value']);
                    } else {
                        $this->db->or_like($item, $_POST['search']['value']);
                    }
                    if(count($this->column_search) - 1 == $i)
                        $this->db->group_end();
                }
            $i++;
        }
        if(isset($_POST['order'])){
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } 
        else if(isset($this->order)) {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    // needed 
    public function count_all() {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // needed
    public function count_filtered() {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }

    // needed 
    public function get_datatables() {
        $this->_get_datatables_query();
        if($_POST['length'] != -1) {
            $this->db->limit($_POST['length'], $_POST['start']);
        }
        $query = $this->db->get();
        return $query->result();
    }

    // needed 
    public function get_by_id($id) {
        $this->db->from($this->table);
        $this->db->where('id',$id);
        $query = $this->db->get();
        return $query->row();
    }

    // needed 
    public function save($data) {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }

    // needed 
    public function update($where, $data) {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }

    // needed 
    public function delete($id) {
        $this->db->where('id', $id);
        $this->db->delete($this->table);
    }

    function get_all_data() {
        $query = $this->db->get($this->table);
        return $query->result_array();
    }

    function get_city_list() {  
        $this->db->group_by('city');
        $this->db->select('*');
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function get_area() {   
        $this->db->from($this->table);
        $this->db->order_by('area');
        $result = $this->db->get();
        return $result->result_array();
    }

    function get_city() {   
        $this->db->select('*');
        $this->db->group_by('city');
        $query = $this->db->get($this->table);
        return $query->result_array();
    }


}