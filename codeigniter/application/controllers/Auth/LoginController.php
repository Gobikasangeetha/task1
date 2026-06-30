<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller{

 public function __construct()
    {
        parent:: __construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('UserModel');

    }

public function index()
{
    $this->load->view('template/header');
    $this->load->view('auth/login');
    $this->load->view('template/footer');

}

public function login()
{
        $this->form_validation->set_rules('email_address', 'Email ID', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if($this->form_validation->run()==FALSE)
        {
            $this->index();
        }
        else
        {

        $data = [
                'email'      => $this->input->post('email_address'), 
                'password'      => $this->input->post('password')];
        
                echo "<script> console.log(" . json_encode($data) . ");</script>";
        
        $result = $this->UserModel->loginUser($data);
         if($result != FALSE)
        {
            echo $result->first_name;
            $auth_userdetails=[
                'first_name' =>  $result->first_name,
                'last_name' =>  $result->last_name,
                'email' =>  $result->email,
            ];
            

            $this->session->set_userdata('authenticated','1');
            $this->session->set_userdata('auth_user',$auth_userdetails);
            $this->session->set_flashdata('status','you are login successfully');
            redirect(base_url('userpage'));
        }
            else
        { 
        $this->session->set_flashdata('status','invalid Email Id or Password');
        redirect(base_url('register'));
        }
        
        }


            
}


}
?>