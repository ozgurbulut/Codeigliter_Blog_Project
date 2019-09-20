<?php
class Test extends CI_Controller{
    public function index(){


        $this->load->library('session');
        $this->load->model('User');

        $data['records'] = $this->User->getData();
        $this->load->view('test');
        //print_r(getdate('year/month/day');



    }



}