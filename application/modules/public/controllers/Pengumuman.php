<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('Template');
    $this->load->helper('public');
    $this->load->model("Pengumuman_model","model");
  }

  function index()
  {
    $this->template->set_title("Pengumuman");
    $this->template->view("pengumuman/index",array("berita"=>"widget/berita","agenda"=>"widget/agenda","aplikasi"=>"widget/aplikasi"));
  }

  function paging()
  {
    if ($this->input->is_ajax_request()) {
      $this->load->library("pagination");
      $config = array();
      // $config[""] = "";
      $config["base_url"] = "#";
      $config["total_rows"] = $this->model->count_all();
      $config["per_page"] = 10;
      $config["uri_segment"] = 3;
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
      $page = $this->uri->segment(3);
      $start = ($page - 1) * $config["per_page"];

      $output = array(  'pagination' => $this->pagination->create_links(),
                        'load_data_news' => $this->model->fetch_details($config['per_page'],$start)
                      );
      echo json_encode($output);
    }else {
    $this->template->set_title("ERROR 404 DATA TIDAK DITEMUKAN");
    $this->template->view("error/error404");
  }
}

function detail($id,$slug)
{
  $where = array( 'id_pengumuman' => $id,
                  'slug'      => $slug,
                );
  $query = $this->model->get_data($where);
  if ($query->num_rows()>0) {
    $row = $query->row();
    $data = array( 'id_pengumuman'  =>$row->id_pengumuman ,
                   'pengumuman'     =>$row->pengumuman,
                   'slug'           =>$row->slug,
                   'date'           =>$row->created_at,
                   'desc'           =>$row->desc,
                   'image'          =>$row->image
                  );
    $this->template->set_title("Pengumuman - $row->pengumuman");
    $this->template->view("pengumuman/detail",
                          array("widget_berita"=>"widget/berita",
                                "widget_kategori"=>"widget/kategori",
                                "widget_agenda"=>"widget/agenda",
                                "widget_aplikasi"=>"widget/aplikasi"
                                ),
                          $data);
    }else {
    $this->template->set_title("ERROR 404 DATA TIDAK DITEMUKAN");
    $this->template->view("error/error404");
  }
}





}
