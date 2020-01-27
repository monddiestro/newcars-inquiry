<?php
/**
 *
 */
class Financing_model extends CI_Model
{
  function push_initial($data) {

    $this->db->insert('financing_tbl',$data);
    $this->db->select_max('financing_id', 'financing_id');
    $query = $this->db->get('financing_tbl');
    $row = $query->row();
    return $row->financing_id;

  }

  function push_update($data,$id) {
    $this->db->where('financing_id',$id);
    $this->db->set($data);
    $this->db->update('financing_tbl');
  }

  function pull_from_db($offset,$limit) {
    $this->db->limit($limit,$offset);
    $this->db->order_by('date','desc');
    $query = $this->db->get('financing_tbl');
    return $query->result();
  }

  function export_data($from,$to) {
      return $this->db->query("select * from financing_tbl where date_format(date,'%Y-%m-%d') >= '".$from."' and date_format(date,'%Y-%m-%d') <= '".$to."'");
  }

  function pull_count() {
    $query = $this->db->count_all('financing_tbl');
    return $query;
  }
}
