<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 

class RegisterController extends CI_Controller
{   
    public function __construct()
    {
        parent:: __construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('UserModel');

    }
    public function index()
    {
           $this->load->view('template/header.php');
            $this->load->view('auth/register.php');
           $this->load->view('template/footer.php');

    }
    public function register()
    {
        $this->form_validation->set_rules('first_name', 'First Name', 'trim|required|alpha');
        $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|alpha');
        $this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|matches[password]');
        if($this->form_validation->run()==FALSE)
        {
            $this->index();
        }
        else
        {
        $data = [
                'first_name' => $this->input->post('first_name'),
                'last_name'  => $this->input->post('last_name'),
                'email'      => $this->input->post('email'), 
                'password'      => $this->input->post('password'),
                'confirm_password' => $this->input->post('confirm_password')];

            

        $register_user  =  new UserModel;
        $checking = $register_user->registerUser($data);
        if($checking)
        {
            $this->session->set_flashdata('status','Registered Successfully..! Go to login');
            redirect(base_url('login'));
        }
        else
            {
            $this->session->set_flashdata('status','Something went wrong..! Go to login');
            redirect(base_url('register'));
            }
       }
    }
}
?>