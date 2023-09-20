<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Users
 *
 * @package   CodeIgniter
 * @category  Controller CI
 *
 */

class Users extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $data = array(
      'title' => 'Usuarios',
      'styles' => array(
        'vendor/datatables/dataTables.bootstrap4.min.css'
      ),
      'scripts' => array(
        'vendor/datatables/jquery.dataTables.min.js',
        'vendor/datatables/dataTables.bootstrap4.min.js',
        'vendor/datatables/app.js',
      ),
      'users' => $this->ion_auth_model->users()->result(),
    );

    // echo '<pre>';
    // print_r($data['users']);
    // echo '</pre>';
    // exit();

    $this->load->view('layout/header', $data);
    $this->load->view('users/index');
    $this->load->view('layout/footer');
  }
}


/* End of file Users.php */
/* Location: ./application/controllers/Users.php */