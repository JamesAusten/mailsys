<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {
  
  public function __construct() {
    parent::__construct();
  }
  
  public function view($page = 'login') {
    if (!file_exists('application/views/pages/'.$page.'.php')) {
      show_404();
    }
    
    $data['title'] = ucfirst($page);
    
    $this->load->view('templates/header.php', $data);
    $this->load->view('pages/'.$page.'.php', $data);
    $this->load->view('templates/footer.php', $data);
  }
  
}
?>