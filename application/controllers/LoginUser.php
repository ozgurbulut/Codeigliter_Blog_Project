<?php
class LoginUser extends CI_Controller{

    public function __construct()
    {
        parent::__construct();


    }

    public function index(){
        if($this->session->username){
            redirect(base_url().'Panel');
        }


        $this->load->view('header');
        $this->load->view('Login');
        $this->load->view('footer');
    }

    public function login() {
        $this->load->model('User');

        $name = $this->input->post('kadi');
        $pass = $this->input->post('sifre');
        $data = $this->User->getUSerData($name, $pass);


        if($name == $data["membername"] && $pass == $data["password"]){
            $userdata = array(
                'id' => $data["id"],
                'username'  => $data["membername"],
                'email'     => $data["email"],
                'logged_in' => TRUE
            );

            $this->session->set_userdata($userdata);

            redirect(base_url(). 'Panel');

        }
        else{
            redirect(base_url().'LoginUser');
        }

    }
    public function sing(){
        $this->load->model('Post');
        $this->load->view('header');
        $this->load->view('sing');
        $this->load->view('footer');



        if($this->input->post('submit'))
        {

            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $email = $this->input->post('email');
            $this->Post->newmembercreate($username,$password,$email);

        }



    }
    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url());
    }

}