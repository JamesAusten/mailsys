<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lists extends CI_Controller {
  
  public function __construct() {
    parent::__construct();

    if (!$this->session->userdata('isLoggedIn')) redirect('login');
  }
  
  public function index() {
    echo 'Show lists';
  }
  
  public function manage() {
    echo 'Manage';
  }
  
}
?>