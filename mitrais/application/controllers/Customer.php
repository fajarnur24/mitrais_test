<?php

class Customer extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Customer_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        
    }

     public function login()
    {
               


        $data['judul'] = 'Login';

        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('customer/login');
            $this->load->view('templates/footer');
        } else {
        
            $this->session->set_flashdata('flash', 'Login');
            $this->load->view('templates/header', $data);
            $this->load->view('customer/homepage');
            $this->load->view('templates/footer');

        }
    }

    public function registration()
    {
               


        $data['judul'] = 'Registration';

        $this->form_validation->set_rules('first_name', 'First Name', 'required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required');
        $this->form_validation->set_rules('phone', 'Mobile Number', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[customer.email]',
        array(
                'required'      => 'You have not provided %s.',
                'is_unique'     => 'This %s already exists.'
        ));
        $this->form_validation->set_rules('day', 'Day', 'trim');
        $this->form_validation->set_rules('month', 'Month', 'trim');
        $this->form_validation->set_rules('years', 'Years', 'trim');
        $this->form_validation->set_rules('gender', 'Gender', 'trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('customer/registration');
            $this->load->view('templates/footer');
        } else {
        
            $this->Customer_model->tambahDataCustomer();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            $this->load->view('templates/header', $data);
            $this->load->view('customer/registration_succes');
            $this->load->view('templates/footer');

        }
    }

    

}
