<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('Template');
    $this->load->helper('public');
    $this->load->model("Search_model","model");
  }

  function index()
  {
    $this->template->set_title("Pencarian");
    $data['search'] = $this->input->get('index');
    $this->template->view("search/index",array("pengumuman"=>"widget/pengumuman","agenda"=>"widget/agenda","sosialshare"=>"widget/sosial_share"),$data);
  }

  function paging($str)
  {
    if ($this->input->is_ajax_request()) {
      $this->load->library("pagination");
      $config = array();
      // $config[""] = "";
      $config["base_url"] = "#";
      $config["total_rows"] = $this->model->count_all($str);
      $config["per_page"] = 9;
      $config["uri_segment"] = 4;
      $config["use_page_numbers"] = true;
      $config['full_tag_open'] = '<nav aria-label="Page navigation example"><ul class="pagination" style="margin-top:0px">';
      $config['full_tag_close'] = '</ul></nav>';

      $config['first_link'] = 'First';
      $config['first_tag_open'] = '<li>';
      $config['first_tag_close'] = '</li>';

      $config['last_link'] = 'Last';
      $config['last_tag_open'] = '<li>';
      $config['last_tag_close'] = '</li>';

      $config['next_link'] = 'Next';
      $config['next_tag_open'] = '<li>';
      $config['next_tag_close'] = '</li>';

      $config['prev_link'] = 'Prev';
      $config['prev_tag_open'] = '<li>';
      $config['prev_tag_close'] = '</li>';

      $config['cur_tag_open'] = '<li class="active"><a>';
      $config['cur_tag_close'] = '</a></li>';

      $config['num_tag_open'] = '<li>';
      $config['num_tag_close'] = '</li>';
      $config["num_links"] = 1;

      $this->pagination->initialize($config);
      $page = $this->uri->segment(4);
      $start = ($page - 1) * $config["per_page"];


      if ($this->model->count_all($str)>0) {
        $out =  $this->model->fetch_details($config['per_page'],$start,$str);
      }else {
        $out = '';
        $out .="<p> Tidak Di temukan</p>";
        $out .='<form action="'.base_url().'search" class="search-form" id="search-form" method="get">';
        $out .='<div class="input-group btn-group">';
        $out .='<input type="text" class="form-control" name="index" id="index" placeholder="Pencarian ..." >';
        $out .='<button type="submit" class="btn"><i class="fa fa-search"></i></button>';
        $out .='</div>';
        $out .='</form>';
      }
      $output = array(  'pagination' => $this->pagination->create_links(),
                        'load_data_news' => $out
                      );
      echo json_encode($output);
    }else {
    $this->template->set_title("ERROR 404 DATA TIDAK DITEMUKAN");
    $this->template->view("error/error404");
  }
  }

}
