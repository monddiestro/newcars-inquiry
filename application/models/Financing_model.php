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



}
