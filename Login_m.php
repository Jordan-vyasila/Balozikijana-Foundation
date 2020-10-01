<?php
class Login_m extends CI_Model
{
  public function can_login()
  {
    $data['phone']=$this->input->post('phone');
    $data['pass1']=$this->input->post('pass1');
     $this->db->get('registered', $data);
  }
}
