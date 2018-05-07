<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prodi extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('Template');
    $this->load->helper('public');
    $this->load->model("Prodi_model","model");
  }

  function index($slug)
  {
    $where = array('slug' =>$slug);
    $query = $this->model->get_data($where);
    if ($query->num_rows()>0) {
        $row = $query->row();
        $data = array( 'id_prodi'      =>$row->id_prodi ,
                       'prodi'         =>$row->prodi,
                       'slug'           =>$row->slug,
                       'desc'           =>$row->desc,
                      );
        $this->template->set_title("Prodi - $row->prodi");
        $this->template->view("prodi/index",array(),$data);
    }else {
      $this->template->set_title("ERROR 404 DATA TIDAK DITEMUKAN");
      $this->template->view("error/error404");
    }
  }

}
