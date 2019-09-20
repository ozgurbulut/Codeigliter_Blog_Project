<?php
class Giris extends CI_Controller{

    public function index(){


        $this->load->view('header');
        $this->load->view('giris');
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
            redirect(base_url().'giris');
        }

    }
    public function logout(){
        $this->session->sess_destroy();
        redirect('welcome');
    }

}