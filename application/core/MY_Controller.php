<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Security');
    $this->Security->getsecurity();
    $this->load->library(array("Cl","Layouts"));
    $this->load->helper(array('menus','mpampam'));
  }

  function error_404()
  {
    $this->layouts->set_title('Error 404 Not Found');
    $this->layouts->view(config_item("cpanel").'/404');
  }


}
