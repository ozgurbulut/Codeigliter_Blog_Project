<?php
class Message extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Admin');

        if(!$_SESSION['username']){
            redirect(base_url().'giris');
        }
    }
    public function index(){

        $this->load->model('Admin');
        $data['records'] = $this->Admin->getmessages();

        $this->load->view('admin_views/admin_panel_view');
        $this->load->view('admin_views/message_inbox',$data);
        $this->load->view('admin_views/admin_panel_footer');


    }

    public function message_sendbox(){
        $this->load->model('Admin');
        $data['records'] = $this->Admin->getmessages();

        $this->load->view('admin_views/admin_panel_view');
        $this->load->view('admin_views/message_sendbox',$data,$_SESSION);
        $this->load->view('admin_views/admin_panel_footer');

    }
    public function message_new(){
        $this->load->model('Admin');
        $data['records'] = $this->Admin->getmembers();



        $this->load->view('admin_views/admin_panel_view');
        $this->load->view('admin_views/message_new',$data);
        $this->load->view('admin_views/admin_panel_footer');


        if($this->input->post('save'))
        {

            $title = $this->input->post('title');
            $content = $this->input->post('subject');
            $sender = $_SESSION['username'];
            $rec = $this->input->post('rec');
            $date = rand(1,20);
            $this->Admin->saverecords($title,$content,$sender,$rec,$date);

        }
        echo $_SESSION['username'];
    }






}
