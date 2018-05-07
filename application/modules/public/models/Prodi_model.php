<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prodi_model extends CI_Model{

  var $table = 'prodi';
  var $id    = 'id_prodi';

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function get_data($where)
   {
      $query = $this->db->select("*")
              ->from($this->table)
              ->where($where)
              ->get();
       return $query;
   }

}
