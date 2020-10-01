<?php
  
   class Home extends CI_Controller {
   
      public function __construct() { 
         parent::__construct(); 
         $this->load->helper(array('form', 'url')); 
      } 
	
      public function regis() {
			
         /* Load form validation library */ 
         $this->load->library('form_validation');
         $this->load->helper('url');
			
	 /* Validation rule */
	 $this->form_validation->set_rules('fname', 'Name', 'required|alpha');
	 $this->form_validation->set_rules('lname', 'Name', 'required|alpha');
	 $this->form_validation->set_rules('bdate', 'Birth date', 'required');
	 $this->form_validation->set_rules('gender', 'gender', 'required');
	 $this->form_validation->set_rules('phone', 'phone Number', 'required');
	 $this->form_validation->set_rules('email', 'Email', 'required|valid_email|callback_check_customer');
	 $this->form_validation->set_rules('oplace', 'Origin place', 'required');
	 $this->form_validation->set_rules('lplace', 'Living place', 'required');
	 $this->form_validation->set_rules('pass1', 'Password', 'required|min_length[6]|max_length[15]');
	 $this->form_validation->set_rules('pass2', 'confirm Password', 'required|min_length[6]|max_length[15]');		 
			
         if ($this->form_validation->run() == FALSE) { 
            $this->load->view('registration'); 
         } 
         else { 
            $this->load->model('home2');
		    $this->home2->savedata();
		    ?><script>window.alert("Registration successfully!");</script><?php
            $this->load->view('login');
         } 
      }
	  public function check_customer($email)
	   {
	         $query = $this->db->where('email', $email)->get("registered");
		 if ($query->num_rows() > 0)
		    {
			 $this->form_validation->set_message('check_customer','The '.$email.' belongs to an existing account');
		        return FALSE;
		    }
		  else 
			  return TRUE;
	  }	



	  public function balozikijana(){
	  	$this->load->view('index');
	  	$this->load->helper('url');
	  	$this->load->helper('html');
	  	$this->load->library('image_lib');
	  }



 public function login()
 {
         $this->load->helper('url');
  $this->load->library('form_validation');

  $this->form_validation->set_rules('phone', 'Phone number', 'required');
  $this->form_validation->set_rules('pass1', 'Password', 'required');
 	
         if ($this->form_validation->run() == FALSE) { 
            $this->load->view('login'); 
         } 
         else { 
            $this->load->model('login_m');
		    $this->login_m->can_login();
            $query = $this->db->where(array('phone'=> $this->input->post('phone'),'pass1'=>$this->input->post('pass1')))->get('registered');
  if($query->num_rows() > 0)
  {
    ?><script>window.alert("Welcome to Balozikijana foundation");</script><?php
  }
  else
  {
    ?><script>window.alert("Wrong Phone number or Password");</script><?php
  } 
         }
 }
	  
		}


 

?>