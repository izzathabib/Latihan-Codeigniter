<?php
class Pelajar_model extends CI_Model {
  private $primary_key='id';
  private $table_name='pelajar';
  public function __construct() {
    parent::__construct();
  }

  //This function will return the order of data viewed(How data will be displayed)
  function get_paged_list($limit=10,$offset=0,$order_column='',$order_type='asc') {
    if (empty($order_column)|| empty($order_type))
      $this->db->order_by($this->primary_key,'asc');
    else
      $this->db->order_by($order_column,$order_type);

    return $this->db->get($this->table_name,$limit,$offset)->result();
  }

  function count_all(){
    return $this->db->count_all($this->table_name);
  }

  function get_by_id($id){
    $this->db->where($this->primary_key,$id);
    return $this->db->get($this->table_name)->row_array();
  }

  function save($person){
    $this->db->insert($this->table_name,$person);
    return $this->db->insert_id();
  }
  function update($id,$person){
    $this->db->where($this->primary_key,$id);
    $this->db->update($this->table_name,$person);
  }
  function delete($id){
    $this->db->where($this->primary_key,$id);
    $this->db->delete($this->table_name);
  }
}