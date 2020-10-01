<?php
class Home2 extends CI_Model
{
	
	public function savedata()
	{
		$data['fname']=$this->input->post('fname');
		$data['lname']=$this->input->post('lname');
		$data['bdate']=$this->input->post('bdate');
		$data['gender']=$this->input->post('gender');
		$data['phone']=$this->input->post('phone');
		$data['email']=$this->input->post('email');
		$data['oplace']=$this->input->post('oplace');
		$data['lplace']=$this->input->post('lplace');
		$data['pass1']=$this->input->post('pass1');
		$data['pass2']=$this->input->post('pass2');
	   $this->db->insert('registered', $data);
	}

}