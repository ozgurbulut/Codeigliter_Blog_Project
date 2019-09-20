<?php
class Member extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Admin');

        if(!$_SESSION['username']){
            redirect(base_url().'giris');
        }
    }
    public function index(){
        $this->load->model('Admin');
        $username = $_SESSION['username'];
        $data['records'] = $this->Admin->kisi_bilgileri_yazdir($username);

        $this->load->view('admin_views/admin_panel_view',$data);
        $this->load->view('admin_views/goruntule',$data);
        $this->load->view('admin_views/admin_panel_footer');
    }
    public function duzenle(){
        $this->load->model('Admin');
        $data['records'] = $this->Admin->kisi_bilgileri_yazdir($_SESSION['username']);

        $this->load->view('admin_views/admin_panel_view',$data);
        $this->load->view('admin_views/adminedtview',$data);
        $this->load->view('admin_views/admin_panel_footer');




    }
    public function parola_degistir(){
        $this->load->model('Admin');
        $data['records'] = $this->Database_Panel->kisi_bilgileri_yazdir('2');

        $this->load->view('admin_views/admin_panel_view',$data);
        $this->load->view('admin_views/goruntule',$data);
        $this->load->view('admin_views/admin_panel_footer');
    }
    public function profil_foto_degistir(){
        $this->load->model('Admin');
        $data['records'] = $this->Database_Panel->kisi_bilgileri_yazdir('2');

        $this->load->view('admin_views/admin_panel_view',$data);
        $this->load->view('admin_views/goruntule',$data);
        $this->load->view('admin_views/admin_panel_footer');
    }
    public function hesabı_dondur(){
        $this->load->model('Admin');
        $data['records'] = $this->Database_Panel->kisi_bilgileri_yazdir('2');

        $this->load->view('admin_views/admin_panel_view',$data);
        $this->load->view('admin_views/goruntule',$data);
        $this->load->view('admin_views/admin_panel_footer');
    }
    public function deleteaccount(){
        $this->load->model('Admin');
        $data['records'] = $this->Database_Panel->kisi_bilgileri_yazdir('2');

        $this->load->view('admin_views/admin_panel_view',$data);
        $this->load->view('admin_views/deletemyaccount',$data);
        $this->load->view('admin_views/admin_panel_footer');
    }

}
