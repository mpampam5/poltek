<?php
function profile($str)
{
  $ci = get_instance();
  $data = $ci->db->where("id_profile",1)
                  ->get("profile")
                  ->row();
  return $data->$str;
}

 ?>
