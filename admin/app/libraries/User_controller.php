<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_controller extends Site_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('user');
  }

}