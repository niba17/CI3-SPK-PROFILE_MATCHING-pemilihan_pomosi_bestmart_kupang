<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Autentifikasi extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->library('session');
  }

  public function index_login()
  {
    $this->form_validation->set_rules('username', 'Username', 'trim|required');
    $this->form_validation->set_rules('password', 'Password', 'trim|required');
    if ($this->form_validation->run() == false) {
      $data['title'] = 'Login Page';
      $this->load->view('templates/header', $data);
      $this->load->view('Autentifikasi/index_login');
      $this->load->view('templates/footer');
    } else {
      $this->_login();
    }
  }

  //load logika login
  private function _login()
  {
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $where = array(
      'username' => $username,
      'password' => md5($password)
    );

    $cek = $this->M_barang->cekLogin("admin", $where)->num_rows();
    if ($cek > 0) {
      $data_session = array(
        'nama' => $username,
        'status' => "login",
        'detail_user' => $this->M_barang->getDataRoleUser($username)
      );
      $this->session->set_userdata($data_session);
      redirect(base_url('Admin/index'));
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Data tidak sesuai!</div>');
      redirect(base_url('Autentifikasi/index_login'));
    }
  }

  public function logout()
  {
    $this->session->unset_userdata('nama');
    redirect('Autentifikasi/index_login');
  }
}
