<?php



function top_menus()
{
    $ci = get_instance();
    $str ='<ul class="nav navbar-nav">';
    $menu = $ci->db->query("SELECT * FROM menus_public WHERE posisi='header_top' AND parent=0 AND active=1 ORDER BY sort ASC");
      foreach ($menu->result() as $menus) {
        $sub_menu = $ci->db->query("SELECT * FROM menus_public WHERE  posisi='header_top' AND parent=$menus->id_menu AND active=1 ORDER BY sort ASC");
        if ($sub_menu->num_rows()>0) {
          $str .=   '<li class="dropdown pll-parent-menu-item">';
          $str .=  '<a class="no-click" href="#">&nbsp;'.$menus->menu.'<span class="caret"></span></a>';
          $str .=  '<ul role="menu" class=" dropdown-menu " style="display: none;">';
          foreach ($sub_menu->result() as $sub_menus) {
            $str .=    '<li class="lang-item lang-item-206 lang-item-en lang-item-first no-translation menu-item menu-item-type-custom menu-item-object-custom menu-item-1939-en">';
            $str .=      '<a class="" href="'.base_url().$menus->url.'.html"><span style="margin-left:0.3em;">'.$sub_menus->menu.'</span></a>';
            $str .=    '</li>';
          }
          $str .=  '</ul>';
          $str .='</li>';
        }else {
          $str .= "<li>";
          $str .= "<a href='".base_url().$menus->url.".html' title='Berita'>".$menus->menu."</a>";
          $str .="</li>";
        }
      }

    return $str;
}




function menus_header()
{
    $ci = get_instance();

    $str = '<ul class="nav navbar-nav navbar-left">';
    $menu = $ci->db->query("SELECT * FROM menus_public WHERE posisi='header' AND parent=0 AND active=1 ORDER BY sort ASC");
    foreach ($menu->result() as $menus) {
      $sub_menu = $ci->db->query("SELECT * FROM menus_public WHERE posisi='header' AND parent=$menus->id_menu AND active=1 ORDER BY sort ASC");
      if ($sub_menu->num_rows()>0) {
        $str .= "<li class='dropdown'>";
        $str .= "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>".$menus->menu."&nbsp;<span class='caret'></span></a>";
        $str .= "<ul class='dropdown-menu'>";
              foreach ($sub_menu->result() as $sub_menus) {
                $str .= "<li><a href='".site_url($sub_menus->url)."'>".$sub_menus->menu."</a></li>";
              }
        $str .= "</ul>";
        $str .= "</li>";
      }else {
        $str .= "<li><a href='".base_url()."".$menus->url.".html'>".$menus->menu."</a></li>";
      }
    }


    $str .= "</ul>";
    return $str;
}

function footer_menu()
{
      $ci = get_instance();
      $str ='<p class="site-menu text-right">';
      $menu = $ci->db->query("SELECT * FROM menus_public WHERE posisi='footer' AND parent=0 AND active=1 ORDER BY sort ASC");
        foreach ($menu->result() as $menus) {
        $str .= "<a href='".base_url().$menus->url.".html'>".$menus->menu."</a>";
      }
      $str .='</p>';
      return $str;
  }








 ?>
