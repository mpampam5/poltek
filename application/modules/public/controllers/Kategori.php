<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('Template');
    $this->load->helper('public');
    $this->load->model("Kategori_model","model");
  }

  function index($id,$slug)
  {
    $where = array('berita.id_kategori'=>$id,'kategori.slug'=>$slug);
    if ( $this->model->count_all($where)>0) {
      $this->template->set_title("Kategori");
      $data = array('id_kategori'=>$id,
                    'slug'=>$slug
                    );
      $this->template->view("kategori/index",array("pengumuman"=>"widget/pengumuman","agenda"=>"widget/agenda","aplikasi"=>"widget/aplikasi"),$data);
    }else {
      $this->template->set_title("ERROR 404 DATA TIDAK DITEMUKAN");
      $this->template->view("error/error404");
    }

  }


  function paging()
  {

    $where = array('berita.id_kategori'=>$this->input->get('id'),'kategori.slug'=>$this->input->get('slug'));
    if ($this->input->is_ajax_request()) {
      $this->load->library("pagination");
      $config = array();
      // $config[""] = "";
      $config["base_url"] = "#";
      $config["total_rows"] = $this->model->count_all($where);
      $config["per_page"] = 2;
      $config["uri_segment"] = 5;
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
      $page = $this->uri->segment(5);
      $start = ($page - 1) * $config["per_page"];


      $output = array(  'pagination' => $this->pagination->create_links(),
                        'load_data_news' => $this->model->fetch_details($where,$config['per_page'],$start)
                      );
      echo json_encode($output);
    }else {
    $this->template->set_title("ERROR 404 DATA TIDAK DITEMUKAN");
    $this->template->view("error/error404");
  }
  }


}
