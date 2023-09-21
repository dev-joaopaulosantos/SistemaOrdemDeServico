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

    $this->load->view('layout/header', $data);
    $this->load->view('users/index');
    $this->load->view('layout/footer');
  }

  public function edit($user_id = null)
  {

    if (!$user_id || !$this->ion_auth_model->user($user_id)->row()) {

      $this->session->set_flashdata('error', 'Usuário não encontrado!');
      redirect('/users');

    } else {

      // (
      //   [first-name] =>  Admin 
      //   [last-name] =>  istrator 
      //   [email] => admin@admin.com
      //   [username] =>  administrator 
      //   [active] => 1
      //   [user-profile] => 1
      //   [password] => 
      //   [confirm-password] => 
      //   [user-id] => 1
      // )

      $this->form_validation->set_rules('first-name', 'Nome', 'trim|required');
      $this->form_validation->set_rules('last-name', 'Sobrenome', 'trim|required');
      $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
      $this->form_validation->set_rules('username', 'Usuário', 'trim|required');
      // $this->form_validation->set_rules('password', 'Senha', 'trim|required');

      if ($this->form_validation->run()) {
        exit('Validado!');
      } else {

        $data = array(
          'title' => 'Editar usuário',
          'user' => $this->ion_auth_model->user($user_id)->row(),
          'user_profile' => $this->ion_auth_model->get_users_groups($user_id)->row(),
        );

        $this->load->view('layout/header', $data);
        $this->load->view('users/edit');
        $this->load->view('layout/footer');
      }
    };
  }
}


/* End of file Users.php */
/* Location: ./application/controllers/Users.php */