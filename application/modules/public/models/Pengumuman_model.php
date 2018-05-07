<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman_model extends CI_Model{

  var $table = 'pengumuman';
  var $id    = 'id_pengumuman';

  function count_all()
  {
    return $this->db->get($this->table)
                    ->num_rows();
  }

  function fetch_details($limit,$start)
  {
    $output = '';
    $query = $this->db->select("*")
                      ->from($this->table)
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
                  <article class="single-post" style="border-bottom:1px solid #E6E6E6">
                    <div class="post-content">
                      <div class="related-post">
                        <ul class="post-list">
                              <li>
                                <a href="'.site_url('pengumuman/'.$row->id_pengumuman.'/'.$row->slug).'">
                                    '.$row->pengumuman.'
                                  </a>
                                <div class="entry-meta">
                                    <span class="meta-date"> post : '.date('d, M Y',strtotime($row->created_at)).'</span>
                                </div>
                            </li>
                        </ul>
                      </div>
                    </div>
                  </article>
      ';
    }

    return $output;
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
