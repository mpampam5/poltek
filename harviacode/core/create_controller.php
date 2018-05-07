<?php

$string = "<?php if (!defined('BASEPATH')) exit('No direct script access allowed');";

$string .= "\n\n\n\n/* $c_file */
/* HARVIACODE CRUD GENERATOR MVC/HMVC AJAX CRUD */
/* PENGEMBANG : MPAMPAM */
/* EMAIL : MPAMPAM5@GMAIL.COM */
/* FACEBOOK : https://www.facebook.com/mpampam */
/* Location: ./application/controllers/$c_file */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator ".date('Y-m-d H:i:s')." */
/* http://harviacode.com */";


$string .="\n\n class " . $c . " extends MY_Controller{
  function __construct(){
      parent::__construct();
      \$this->load->model('$m','model');
      \$this->load->library(\"Cl\");
      if (\$this->cl->acl(\"".lcfirst("$c")."\")==false) {
        redirect(\"errors/er403\");
      }";
$string .="
  }";

$string .="\n\n function _rules(){";
$string .= "\n\t\t\$this->form_validation->set_rules('$pk', '$pk', 'trim');";
foreach ($non_pk as $row) {
    $int = $row3['data_type'] == 'int' || $row['data_type'] == 'double' || $row['data_type'] == 'decimal' ? '|numeric' : '';
    $string .= "\n\t\t\$this->form_validation->set_rules('".$row['column_name']."', '".  strtolower(label($row['column_name']))."', 'trim|xss_clean|required$int');";
}
$string .= "\n\t\t\$this->form_validation->set_error_delimiters('<span class=\"text-danger\">', '</span>');
  }";


if ($jenis_tabel == 'reguler_table') {
$string .="\n\n function index(){
    \$this->layouts->set_title('".ucwords($title)."');
    \$data['row'] = \$this->model->get_data()->result();
    \$this->layouts->view('$load_view$c_url/$v_list',array(),\$data);
  }";
}else {
$string .="\n\n function index(){
    \$this->layouts->set_title('".ucwords($title)."');
    \$this->layouts->view('$load_view$c_url/$v_list');
  }

function json() {
    header('Content-Type: application/json');
    echo \$this->model->json();
}
";
}


$string .="\n\n function detail(\$id){
    if(\$row=\$this->model->get_where(\$id)){
      \$this->layouts->set_title('".ucwords($title)."');
        \$data=array('layout_title' => '".ucwords($title)."',";
foreach ($all as $row) {
  $string .= "\n\t\t\t\t\t\t\t\t\t\t'" . $row['column_name'] . "' => \$row->" . $row['column_name'] . ",";
}
$string .= "\n\t\t\t\t\t\t\t\t\t);";
$string .="\n\t\t\t\t \$this->layouts->view('$load_view$c_url/$v_read',array(),\$data);
//MODAL DETAIL
//\$this->layouts->view('$load_view$c_url/$v_read',array(),\$data,false);
    }else {
        \$this->error_404();
    }
  }";


$string .="\n\n function tambah(\$status=''){
    if (\$status=='aksi') {
        \$json = array('success'=>false ,'alert'=>array());
        if (\$this->input->is_ajax_request()) {
            \$this->_rules();
            if (\$this->form_validation->run()) {
                \$insert = array(";
foreach ($non_pk as $row) {
 $string .= "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'" . $row['column_name'] . "' => \$this->input->post('" . $row['column_name'] . "',TRUE),";
}

$string .="     \n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t);
                \$this->model->get_insert(\$insert);
                \$json['alert']   = 'Berhasil Menyimpan!';
                \$json['success'] = true;
            }else{
                foreach (\$_POST as \$key => \$value) {
                  \$json['alert'][\$key] = form_error(\$key);
                }
            }
            echo json_encode(\$json);
        }
    }else{
      \$this->layouts->set_title('".ucwords($title)."');
      \$data = array('layout_title' => '".ucwords($title)."',
                      'button'=>'tambah',
                      'aksi' =>site_url('$direct_url$c_url/tambah/aksi'),";
foreach ($all as $row) {
    $string .= "\n\t\t\t\t\t\t\t\t\t\t\t'" . $row['column_name'] . "' => set_value('" . $row['column_name'] . "'),";
}
$string .="\n\t\t\t\t\t\t\t\t\t\t\t);";
$string .="\n\t\t\t \$this->layouts->view('$load_view$c_url/form',array(),\$data);
  //MODAL TAMBAH
  //\$this->layouts->view('$load_view$c_url/form',array(),\$data,false);
     }
  }";


$string .="\n\n function edit(\$id,\$status=''){
      if (\$status=='aksi') {
          \$json = array('success'=>false ,'alert'=>array());
          if (\$this->input->is_ajax_request()) {
              \$this->_rules();
              if (\$this->form_validation->run()) {
                  \$update = array(";
foreach ($non_pk as $row) {
 $string .= "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'" . $row['column_name'] . "' => \$this->input->post('" . $row['column_name'] . "',TRUE),";
}

$string .="     \n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t);
                \$this->model->get_update(\$id,\$update);
                \$json['alert']   = 'Berhasil Mengedit!';
                \$json['success'] = true;
            }else{
                foreach (\$_POST as \$key => \$value) {
                  \$json['alert'][\$key] = form_error(\$key);
                }
            }
            echo json_encode(\$json);
        }
    }else{
      if(\$row=\$this->model->get_where(\$id)){
        \$this->layouts->set_title('".ucwords($title)."');
        \$data = array('layout_title' => '".ucwords($title)."',
                      'button'=>'edit',
                      'aksi' =>site_url('$direct_url$c_url/edit/'.\$id.'/aksi'),";
foreach ($all as $row) {
    $string .= "\n\t\t\t\t\t\t\t\t\t\t\t'" . $row['column_name'] . "' => set_value('" . $row['column_name'] . "', \$row->". $row['column_name']."),";
}
$string .="\n\t\t\t\t\t\t\t\t\t\t\t);";
$string .="\n\t\t\t \$this->layouts->view('$load_view$c_url/form',array(),\$data);
  //MODAL EDIT
  //\$this->layouts->view('$load_view$c_url/form',array(),\$data,false);";
$string .="\n\t\t\t}else{
      \$this->error_404();
    }
  }
}";


$string .="\n\n function hapus(\$id){
  if (\$this->input->is_ajax_request()) {
      \$this->model->get_delete(\$id);
      \$data['alert'] = 'Berhasil menghapus!';
      echo json_encode(\$data);
    }
}";






$string .="\n\n}
/* End Controller */
";

$hasil_controller = createFile($string, $target ."".$direct_created."controllers/" . $c_file);
 ?>
