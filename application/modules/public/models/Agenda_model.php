<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agenda_model extends CI_Model{

  var $table = 'agenda';
  var $id    = 'id_agenda';

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
                      ->order_by('date',"desc")
                      ->limit($limit,$start)
                      ->get();
    foreach ($query->result() as $row) {

      $output .='
                  <article class="single-post" style="border-bottom:1px solid #E6E6E6">
                    <div class="post-content">
                      <div class="related-post">
                      <ul class="event-list">

                          <li>
                              <a href="'.site_url('agenda/'.$row->id_agenda.'/'.$row->date).'">
                                  <span class="event-date" style="color:red;">'.date("d",strtotime($row->date)).'
                                    <strong>
                                      '.date("M",strtotime($row->date)).'</br>
                                      '.date("Y",strtotime($row->date)).'
                                    </strong>
                                  </span>
                                  <span class="event-title">'.$row->agenda.'</span>
                              </a>
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
