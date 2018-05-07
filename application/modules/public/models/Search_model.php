<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search_model extends CI_Model{

  var $table = 'berita';
  var $id    = 'id_berita';


  function count_all($str)
  {
    return $this->db->like('judul',$str)
                    ->get($this->table)
                    ->num_rows();
  }

  function fetch_details($limit,$start,$str)
  {
    $output = '';
    $query = $this->db->select("id_berita,judul,image,slug")
             ->from($this->table)
             ->like('judul',$str)
             ->order_by($this->id,"desc")
              ->limit($limit,$start)
              ->get();
    foreach ($query->result() as $row) {
      if ($row->image=="") {
        $image = "default.png";
      }else {
        $image = "thumbs/".$row->image;
      }
      $output .='
                  <article class="post">
                      <div class="row">
                      <div class="col-md-12 post-content">
                          <div class="post-title">
                              <h3>
                                  <a title="'.$row->judul.'" href="'.site_url('berita/detail/'.$row->id_berita.'/'.$row->slug).'">
                                      '.$row->judul.'
                                   </a>
                              </h3>
                          </div>
                      </div>
                      </div>
                    </article>

      ';
    }

    return $output;
  }

}
