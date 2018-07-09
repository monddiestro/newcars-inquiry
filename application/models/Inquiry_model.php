<?php
/**
 *
 */
class Inquiry_model extends CI_Model
{

  function push_to_db($data) {
    $this->db->insert('inquiry_tbl',$data);
    $this->db->select_max('inquiry_id','inquiry_id');
    $query = $this->db->get('inquiry_tbl');
    $row = $query->row();
    return  $row->inquiry_id;
  }

  function pull_from_db() {
    $query = $this->db->get('inquiry_tbl');
    return $query->result();
  }

  function pull_lead_details($lead_id) {
    $this->db->where('inquiry_id',$lead_id);
    $query = $this->db->get('inquiry_tbl');
    return $query->result();
  }

  function export_data($from,$to){
    return $this->db->query("select * from inquiry_tbl where date_format(date,'%Y-%m-%d') >= '".$from."' and date_format(date,'%Y-%m-%d') <= '".$to."';");
  }

}
