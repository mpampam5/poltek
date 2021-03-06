<?php if (!defined('BASEPATH')) exit('No direct script access allowed');



/* Dosen.php */
/* HARVIACODE CRUD GENERATOR MVC/HMVC AJAX CRUD */
/* PENGEMBANG : MPAMPAM */
/* EMAIL : MPAMPAM5@GMAIL.COM */
/* FACEBOOK : https://www.facebook.com/mpampam */
/* Location: ./application/controllers/Dosen.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-04-19 20:42:30 */
/* http://harviacode.com */

 class Dosen extends MY_Controller{
  function __construct(){
      parent::__construct();
      $this->load->model('Dosen_model','model');
      if ($this->cl->acl("dosen")==false) {
        redirect("errors/er403");
      }
  }

 function _rules(){
		$this->form_validation->set_rules('nidn', 'nidn', 'trim|xss_clean|required|numeric');
    $this->form_validation->set_rules('desc', 'Biografi', 'trim|xss_clean');
    $this->form_validation->set_rules('id_prodi', 'Prodi', 'trim|xss_clean|required|numeric');
		$this->form_validation->set_rules('nama', 'nama', 'trim|xss_clean|required');
		$this->form_validation->set_rules('image', 'image', 'trim|xss_clean');
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
  }

 function index(){
    $this->layouts->set_title('Dosen');
    $this->layouts->view(config_item("cpanel").'content/dosen/index');
  }

function json() {
    header('Content-Type: application/json');
    echo $this->model->json();
}


 function detail($id){
    if($row=$this->model->get_where_join($id)){
      $this->layouts->set_title('Dosen');
        $data=array('layout_title' => 'Dosen',
										'prodi' => $row->prodi,
										'nidn' => $row->nidn,
										'nama' => $row->nama,
										'image' => $row->image,
                    'desc' =>   $row->desc,
									);
				 $this->layouts->view(config_item("cpanel").'content/dosen/detail',array(),$data);
//MODAL DETAIL
// $this->layouts->view(config_item("cpanel").'content/dosen/detail',array(),$data,false);
    }else {
        $this->error_404();
    }
  }

 function tambah($status=''){
    if ($status=='aksi') {
        $json = array('success'=>false ,'alert'=>array());
        if ($this->input->is_ajax_request()) {
            $this->_rules();
            if ($this->form_validation->run()) {
                $insert = array(
																'id_prodi' => $this->input->post('id_prodi',TRUE),
																'nidn' => $this->input->post('nidn',TRUE),
																'nama' => $this->input->post('nama',TRUE),
																'image' => $this->input->post('image',TRUE),
                                'desc' => $this->input->post('desc',TRUE),
                                'created_by' => sess('id_auth'),
																'created_at' => date('Y-m-d h:i:s'),
															);
                $this->model->get_insert($insert);
                $json['alert']   = 'Berhasil Menyimpan!';
                $json['success'] = true;
            }else{
                foreach ($_POST as $key => $value) {
                  $json['alert'][$key] = form_error($key);
                }
            }
            echo json_encode($json);
        }
    }else{
      $this->layouts->set_title('Dosen');
      $data = array('layout_title' => 'Dosen',
                      'button'=>'tambah',
                      'aksi' =>site_url(config_item("cpanel").'dosen/tambah/aksi'),
											'id_pegawai' => set_value('id_pegawai'),
											'id_prodi' => set_value('id_prodi'),
											'nidn' => set_value('nidn'),
											'nama' => set_value('nama'),
											'image' => set_value('image'),
                      'desc' => set_value('image'),
											);
			 $this->layouts->view(config_item("cpanel").'content/dosen/form',array(),$data);
  //MODAL TAMBAH
    //$this->layouts->view(config_item("cpanel").'content/dosen/form',array(),$data,false);
     }
  }

 function edit($id,$status=''){
      if ($status=='aksi') {
          $json = array('success'=>false ,'alert'=>array());
          if ($this->input->is_ajax_request()) {
              $this->_rules();
              if ($this->form_validation->run()) {
                  $update = array(
																'id_prodi' => $this->input->post('id_prodi',TRUE),
																'nidn' => $this->input->post('nidn',TRUE),
																'nama' => $this->input->post('nama',TRUE),
																'image' => $this->input->post('image',TRUE),
                                'desc' => $this->input->post('desc',TRUE),
                                'update_by' => sess('id_auth'),
																'update_at' => date('Y-m-d h:i:s'),
															);
                $this->model->get_update($id,$update);
                $json['alert']   = 'Berhasil Mengedit!';
                $json['success'] = true;
            }else{
                foreach ($_POST as $key => $value) {
                  $json['alert'][$key] = form_error($key);
                }
            }
            echo json_encode($json);
        }
    }else{
      if($row=$this->model->get_where($id)){
        $this->layouts->set_title('Dosen');
        $data = array('layout_title' => 'Dosen',
                      'button'=>'edit',
                      'aksi' =>site_url(config_item("cpanel").'dosen/edit/'.$id.'/aksi'),
											'id_pegawai' => set_value('id_pegawai', $row->id_pegawai),
											'id_prodi' => set_value('id_prodi', $row->id_prodi),
											'nidn' => set_value('nidn', $row->nidn),
											'nama' => set_value('nama', $row->nama),
											'image' => set_value('image', $row->image),
                      'desc' => set_value('image', $row->desc),
											);
			 $this->layouts->view(config_item("cpanel").'content/dosen/form',array(),$data);
  //MODAL EDIT
      // $this->layouts->view(config_item("cpanel").'content/dosen/form',array(),$data,false);
			}else{
      $this->error_404();
    }
  }
}

 function hapus($id){
  if ($this->input->is_ajax_request()) {
      $this->model->get_delete($id);
      $data['alert'] = 'Berhasil menghapus!';
      echo json_encode($data);
    }
}

}
/* End Controller */
