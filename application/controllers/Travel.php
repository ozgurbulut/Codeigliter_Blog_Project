
<?php
class Travel extends CI_Controller{


    public function index(){
        $this->load->view('header');
        $this->load->view('travel');
        $this->load->view('footer');

    }
}