<?php
/**
 *
 */
class Subscribe_model extends CI_Model
{

  function save_data($data) {

    $this->db->insert('newsletter',$data);

  }

}
