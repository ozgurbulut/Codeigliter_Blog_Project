<?php
class Blog extends CI_Controller{
    public function index(){
        $this->load->view('header');
        $this->load->view('blog');
        $this->load->view('footer');


    }
}
