<?php
class Panel extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Post');

        if(!$this->session->username){
            redirect(base_url().'LoginUser');
        }
    }
    public function index(){

        $this->load->model('Post');
        $data['records'] = $this->Post->getData();



        $this->load->view('admin_views/AdminHeader',$data);
        $this->load->view('admin_views/HomeAdmin',$data);
        $this->load->view('admin_views/AdminFooter');


    }
}
