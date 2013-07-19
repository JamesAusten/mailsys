<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
  
  public function index() {
    $this->load->library('encrypt');
    
    if ($this->session->userdata('isLoggedIn')) {
      redirect('home');
    } else {
      $this->show_login();
    }
  }
  
  public function show_login($show_error = false) {
    $data['error'] = $show_error;
    
    $this->load->helper('form');
    
    $this->load->view('fragments/header.php', $data);
    $this->load->view('login', $data);
    $this->load->view('fragments/footer.php', $data);
  }
  
  public function login_user() {
    $this->load->model('user_model');
    
    $email = $this->input->post('email');
    $password = $this->input->post('password');
    
    if ($email && $password && $this->user_model->validate_user($email, $password)) {
      redirect('home');
    } else {
      $this->show_login(true);
    }
  }
  
}

?>