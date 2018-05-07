<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Album_model extends CI_Model{

  var $table = 'album';
  var $id    = 'id_album';

  function count_all()
  {
    return $this->db->get($this->table)
                    ->num_rows();
  }

  function fetch_details($limit,$start)
  {
    $output = '';
    $query = $this->db->select("album.id_album,album.album,album.desc")
             ->from($this->table)
             // ->join('galery_image', 'album.id_album = galery_image.id_album','left')
             ->order_by($this->id,"desc")
              ->limit($limit,$start)
              ->get();
    foreach ($query->result() as $row) {

      $image = $this->db->query("SELECT * FROM galery_image where id_album=$row->id_album ORDER BY id_galery_image DESC limit 1")->row();

      $output .='
                  <div class="photo-box">
                    <figure class="photo-item col-sm-4">
                      <a href="'.site_url('album/detail/'.$row->id_album).'" id="detail">
                          <span class="photo-img">
                            <img src="'.base_url().'temp/upload/thumbs/'.$image->image.'" alt="'.$image->image.'" style="width:100%!important;height:100%" class="img-responsive">
                          </span>
                          <label>
                              <span class="item-title">'.$row->album.'</span>
                          </label>
                      </a>
                    </figure>
                  </div>

      ';
    }

    return $output;
  }


  function get_data($where)
   {
      $query = $this->db->select("*")
              ->from($this->table)
              ->where($this->id,$where)
              ->get();
       return $query;
   }

}
