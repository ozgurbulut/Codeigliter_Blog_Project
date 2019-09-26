<?php
class Member extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Post');

        if(!$this->session->username){
            redirect(base_url().'login');
        }
    }
    public function index(){
        $this->load->model('User');
        $username = $this->session->username;

        $data['records'] = $this->User->getMember($username);

        $this->load->view('admin_views/AdminHeader');
        $this->load->view('admin_views/Show',$data);
        $this->load->view('admin_views/AdminFooter');
    }
    public function freeze(){
        $this->load->model('Post');
        $data['records'] = $this->Post->kisi_bilgileri_yazdir($this->session->username);

        $this->load->view('admin_views/AdminHeader',$data);
        $this->load->view('admin_views/AdminFreezeView',$data);
        $this->load->view('admin_views/AdminFooter');




    }
    public function changepassword(){
        $username = $this->session->username;
        $this->load->model('Post');

        $this->load->view('admin_views/AdminHeader');
        $this->load->view('admin_views/AdminChangePassword');
        $this->load->view('admin_views/AdminFooter');
        //$sorgu = $this->Post->changeuserpassword('ozgur','123','1234');
        //echo $sorgu->password;
        if($this->input->post('submit'))
        {
            $curretpass = $this->input->post('currentpass');
            $newpass = $this->input->post('newpass');
            $againnewpass = $this->input->post('againnewpass');
            if($newpass==$againnewpass){
                $this->Post->changeuserpassword($username,$curretpass,$newpass);

            }
            else{
                echo"<center> <h1>Incorrect Password</h1></center>";
            }
        }

    }

    public function freezeaccount(){
        $this->load->model('Post');
        $data['records'] = $this->Post->kisi_bilgileri_yazdir('2');

        $this->load->view('admin_views/AdminHeader',$data);
        $this->load->view('admin_views/Show',$data);
        $this->load->view('admin_views/AdminFooter');
    }
    public function deleteaccount(){

        $this->load->view('admin_views/AdminHeader');
        $this->load->view('admin_views/AdminDeleteMyAccount');
        $this->load->view('admin_views/AdminFooter');

        $this->load->model('Post');
        $username = $this->session->userdata['username'];
        $this->Post->deletemyaccount($username);

           }

}
