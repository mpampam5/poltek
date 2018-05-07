<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video_model extends CI_Model{

  var $table = "video";
  var $id    = "id_video";


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
      $output .='
                <div class="photo-box">
                  <figure class="photo-item col-sm-4">
                    <a href="https://www.youtube.com/embed/'.$row->embed.'?autoplay=1" class="fancybox" title="<h5>'.$row->video.'</h5><p>'.$row->desc.'</p>">
                        <span class="photo-img" style="background-image:none!important">
                          <img src="'.base_url().'temp/image_video/f.png" alt="image" style="width:100%!important;height:100%;" class="img-responsive">
                        </span>
                        <label>
                            <span class="item-title">'.$row->video.'</span>
                        </label>
                    </a>
                  </figure>
                </div>
                ';
    }

    return $output;
  }

}
