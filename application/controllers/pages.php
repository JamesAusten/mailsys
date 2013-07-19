<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {
  
  public function __construct() {
    parent::__construct();
    
    // $this->session->sess_destroy();
    
    if (!$this->session->userdata('isLoggedIn')) redirect('login');
  }
  
  public function view($page = 'home') {
    if (!file_exists('application/views/pages/'.$page.'.php')) {
      show_404();
    }
    
    $data['title'] = ucfirst($page);
    
    $this->load->view('fragments/header.php', $data);
    $this->load->view('pages/'.$page.'.php', $data);
    $this->load->view('fragments/footer.php', $data);
  }
  
}
?>