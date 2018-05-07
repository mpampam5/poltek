<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('Template');
    $this->load->helper('public');
  }

  function index()
  {
    $this->template->set_title("home");
    $data['banner'] = $this->db->query("SELECT * FROM banner ORDER BY id_banner ASC");
    $this->template->view("home/index",array(),$data);
  }

  function berita_json()
  {
    $query = $this->db->query("SELECT * FROM berita ORDER BY id_berita DESC limit 3");
    foreach ($query->result() as $row) {
      $data[] = array("id_berita"=>$row->id_berita,"judul"=>substr("$row->judul",0,80)."...","image"=>$row->image,"slug"=>$row->slug);

    }

    echo json_encode($data);

  }


  function agenda_json()
  {
    $query = $this->db->query("SELECT * FROM agenda ORDER BY date DESC limit 5");
    foreach ($query->result() as $row) {
      $tahun = date("Y",strtotime($row->date));
      $bulan = date("M",strtotime($row->date));
      $tanggal   = date("d",strtotime($row->date));
      $data[] = array("id_agenda"=>$row->id_agenda,"agenda"=>$row->agenda,"tahun"=>$tahun,"bulan"=>$bulan,"tanggal"=>$tanggal,"created_at"=>$row->date);

    }

    echo json_encode($data);

  }

  function beritalain_json()
  {
    $query = $this->db->query("SELECT * FROM berita ORDER BY id_berita DESC limit 5 offset 4");
    foreach ($query->result() as $row) {
      if ($row->image!="") {
        $image = "thumbs/".$row->image;
       }else {
         $image = "default.png";
      }
      $date = date("d,M Y",strtotime($row->created_at));
      $data[] = array("id_berita"=>$row->id_berita,"judul"=>substr("$row->judul",0,80)."...","image"=>$image,"slug"=>$row->slug,"date"=>$date);
    }

    echo json_encode($data);
  }


  function pengumuman_json()
  {
    $query = $this->db->query("SELECT * FROM pengumuman ORDER BY id_pengumuman DESC limit 5");
    foreach ($query->result() as $row) {
      $tanggal   = date("d-m-Y",strtotime($row->created_at));
      $data[] = array("id_pengumuman"=>$row->id_pengumuman,"pengumuman"=>$row->pengumuman,"slug"=>$row->slug,"date"=>$tanggal);

    }

    echo json_encode($data);

  }








}
