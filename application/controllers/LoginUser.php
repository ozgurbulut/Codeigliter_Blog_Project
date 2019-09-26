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
        $encode_password = base64_encode($pass);

        $data = $this->User->getUSerData($name, $encode_password);


        if($name == $data["membername"] && $pass == $orjinal_veri = base64_decode($data["password"])){
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

            $encode_password = base64_encode($password);





            $this->Post->newmembercreate($username,$encode_password,$email);

        }



    }
    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url());
    }

}