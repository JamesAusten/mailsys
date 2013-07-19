<?php
class User_Model extends CI_Model {
  
  public function validate_user($email, $password) {
    $this->db->from('users')
             ->where('email', $email)
             ->where('password', hash('sha512', $password));
    $login = $this->db->get()->result();
    
    if (is_array($login) && count($login) == 1) {
      $this->set_session($login[0]);
      return true;
    }
    
    return false;
  }
  
  public function set_session($details) {
    $this->session->set_userdata(array(
      'user_id'=>$details->user_id,
      'name'=>$details->firstName.' '.$details->lastName,
      'firstName'=>$details->firstName,
      'lastName'=>$details->lastName,
      'email'=>$details->email,
      'isLoggedIn'=>true
    ));
  }
  
}
?>