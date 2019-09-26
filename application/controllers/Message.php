<?php
class Message extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Post');

        if(!$this->session->username){
            redirect(base_url().'login');
        }
    }
    public function index(){

        $this->load->model('Post');
        $data['records'] = $this->Post->getmessages();

        $this->load->view('admin_views/AdminHeader');
        $this->load->view('admin_views/AdminMessageInbox',$data);
        $this->load->view('admin_views/AdminFooter');


    }

    public function message_sendbox(){
        $this->load->model('Post');
        $data['records'] = $this->Post->getmessages();

        $this->load->view('admin_views/AdminHeader');
        $this->load->view('admin_views/AdminMessageSendbox',$data,$this->session->username);
        $this->load->view('admin_views/AdminFooter');

    }
    public function message_new(){
        $this->load->model('Post');
        $data['records'] = $this->Post->getmembers();



        $this->load->view('admin_views/AdminHeader');
        $this->load->view('admin_views/AdminMessageNew',$data);
        $this->load->view('admin_views/AdminFooter');


        if($this->input->post('save'))
        {

            $title = $this->input->post('title');
            $content = $this->input->post('subject');
            $sender =$this->session->username;
            $rec = $this->input->post('rec');
            $date = rand(1,20);
            $this->Post->saverecords($title,$content,$sender,$rec,$date);

        }
        echo $this->session->username;
    }






}
