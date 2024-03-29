<?php

class Blogs_model extends CI_Model
{

    public $tableName = "blogs";

    public function __construct()
    {
        parent::__construct();

    }

    public function get($where = array())
    {
        return $this->db->where($where)->get($this->tableName)->row();
    }

   public function get_all($where = array(), $order = "id ASC")
    {
        return $this->db->where($where)->order_by($order)->get($this->tableName)->result();
    }

    public function add($data = array())
    {
        return $this->db->insert($this->tableName, $data);
    }

    public function update($where = array(), $data = array())
    {
        return $this->db->where($where)->update($this->tableName, $data);
    }

    public function delete($where = array())
    {
        return $this->db->where($where)->delete($this->tableName);
    }

     function findcount($from,$where=array())
    {
        return $sonuc =$this->db->from($from)->where($where)->count_all_results();
    }
	
	public function get_count($where = array())
    {
        return $this->db->where($where)->get($this->tableName)->num_rows();
    }
}
