<?php
class Panel extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Admin');

        if(!$_SESSION['username']){
            redirect(base_url().'giris');
        }
    }
    public function index(){

        $this->load->model('Admin');
        $data['records'] = $this->Admin->getData();



        $this->load->view('admin_views/admin_panel_view',$data);
        $this->load->view('admin_views/a_ana_sayfa',$data);
        $this->load->view('admin_views/admin_panel_footer');


    }
}
