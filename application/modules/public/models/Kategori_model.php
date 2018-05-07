<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_model extends CI_Model{

  var $table = 'berita';
  var $id    = 'id_berita';

  function count_all($where)
  {
    $query = $this->db->select("id_berita,judul,desc,image,berita.slug,hits,created_at,kategori.id_kategori,kategori.kategori,kategori.slug AS kategori_slug")
            ->from($this->table)
            ->join('kategori', 'berita.id_kategori = kategori.id_kategori','left')
            ->where($where)
            ->get();
     return $query->num_rows();
  }

  function fetch_details($where,$limit,$start)
  {
    $output = '';
    $query = $this->db->select("id_berita,judul,desc,image,berita.slug,hits,created_at,kategori.id_kategori,kategori.kategori,kategori.slug AS kategori_slug")
             ->from($this->table)
             ->join('kategori', 'berita.id_kategori = kategori.id_kategori','left')
             ->where($where)
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
                          <div class="col-md-4 col-sm-4 post-img">
                              <a href="'.site_url('berita/detail/'.$row->id_berita.'/'.$row->slug).'" href="'.$row->slug.'">
                                  <img src="'.base_url().'/temp/upload/'.$image.'" alt="'.$row->slug.'" style="width:100%";height:100%>
                              </a>
                          </div>
                          <div class="col-md-8 col-sm-8 post-content">
                              <div class="post-title">
                                  <h3>
                                      <a title="'.$row->judul.'" href="'.site_url('berita/detail/'.$row->id_berita.'/'.$row->slug).'" href="'.$row->slug.'">
                                        '.$row->judul.'
                                      </a>
                                  </h3>
                                  <p class="post-meta">
                                      <a href="'.site_url('kategori/'.$row->id_kategori.'/'.$row->kategori_slug).'" class="post-category">'.$row->kategori.'</a>
                                      <span class="post-date">'.date("d,M Y",strtotime($row->created_at)).'</span>
                                      <span class="post-category"><i class="fa fa-eye"></i> '.$row->hits.'x</span>
                                  </p>
                              </div>
                              <div class="entry-content" style="text-align:justify">'.substr($row->desc,0,200).' <a href="'.site_url('berita/detail/'.$row->id_berita.'/'.$row->slug).'" href="'.$row->slug.'"> Selengkapnya</a></div>
                          </div>
                      </div>
                  </article>

      ';
    }

    return $output;
  }


     function get_data($where)
      {
         $query = $this->db->select("id_berita,judul,desc,image,berita.slug,hits,created_at,kategori.id_kategori,kategori.kategori,kategori.slug AS kategori_slug")
                 ->from($this->table)
                 ->join('kategori', 'berita.id_kategori = kategori.id_kategori','left')
                 ->where($where)
                 ->get();
          return $query;
      }




}
