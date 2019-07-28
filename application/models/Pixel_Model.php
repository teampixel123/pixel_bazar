<?php
class Pixel_Model extends CI_Model{
  public function save_portfolio($data){
    $this->db->insert('tbl_portfolio',$data);
  }

  public function get_portfolio(){
    $this->db->select('*');
    $this->db->from('tbl_portfolio');
    $query = $this->db->get();
    $result = $query->result();
    return $result;
  }

  public function portfolio_detail($portfolio_id){
    $this->db->select('*');
    $this->db->from('tbl_portfolio');
    $this->db->where('id',$portfolio_id);
    $query = $this->db->get();
    $result = $query->result_array();
    return($result);
  }

  public function portfolio_next_id($portfolio_id){
    $query = $this->db->query('select * from tbl_portfolio where id = (select min(id) from tbl_portfolio where id > '.$portfolio_id.')');
    $result = $query->result_array();
    return $result;
  }

  public function portfolio_prev_id($portfolio_id){
    $query = $this->db->query('select * from tbl_portfolio where id = (select max(id) from tbl_portfolio where id < '.$portfolio_id.')');
    $result = $query->result_array();
    return $result;
  }


}
 ?>
