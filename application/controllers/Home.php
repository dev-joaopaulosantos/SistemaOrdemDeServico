<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 * João Paulo Santos
 */

class Home extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->load->view('layout/header');
    $this->load->view('home/index');
    $this->load->view('layout/footer');
  }

}


/* End of file Home.php */
/* Location: ./application/controllers/Home.php */