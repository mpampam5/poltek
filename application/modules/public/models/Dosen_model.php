<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen_model extends CI_Model{

  var $table = 'dosen';
  var $id    = 'id_pegawai';

  function count_all()
  {
    return $this->db->get($this->table)
                    ->num_rows();
  }

  function fetch_details($limit,$start)
  {
    $output = '';
    $query = $this->db->select("dosen.id_pegawai,nidn,nama,image,prodi.prodi,prodi.slug")
             ->from($this->table)
             ->join('prodi', 'dosen.id_prodi = prodi.id_prodi','left')
             ->order_by($this->id,"desc")
             ->limit($limit,$start)
             ->get();
    foreach ($query->result() as $row) {
      if ($row->image=="") {
        $image = "student.png";
      }else {
        $image = "thumbs/".$row->image;
      }
      $output .='
                  <div class="col-sm-4">

                      <div id="doseng">
                      <div class="panel panel-default">
                        <div class="panel-body">
                          <img src="'.base_url().'temp/upload/'.$image.'" class="img-thumbnail" style="max-width:100%;height:200px;" alt="">

                          <p class=contents style="text-align:center;font-size:12px;">
                            <span>'.$row->nama.'</span></br>
                            NIDN : '.$row->nidn.'</br>
                            <a style="text-decoration:none" href="'.site_url('prodi/'.$row->slug).'">PRODI : '.strtoupper($row->prodi).'</a>
                          </p>
                          <a href="'.site_url('dosen/detail/'.$row->id_pegawai.'/'.$row->nidn).'" class="btn btn-info btn-sm btn-flat btn-block"> Detail</a>
                        </div>
                      </div>
                      </div>
                  </div>

      ';
    }

    return $output;
  }


     function get_data($where)
      {
         $query = $this->db->select("dosen.id_pegawai,nidn,nama,image,dosen.desc,prodi.prodi,prodi.slug")
                 ->from($this->table)
                 ->join('prodi', 'dosen.id_prodi = prodi.id_prodi','left')
                 ->where($where)
                 ->get();
          return $query;
      }



}
