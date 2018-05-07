<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Mpampam{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $this->aku();
  }

}
