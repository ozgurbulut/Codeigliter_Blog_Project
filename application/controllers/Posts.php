<?php
class Posts extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Admin');
        $this->load->helper(array('form', 'url'));
        if(!$this->session->username){
              redirect(base_url().'giris');
        }
    }


    public function index(){

        $data['records'] = $this->Admin->getdata();

        $this->load->view('admin_views/admin_panel_view',$data);
        $this->load->view('admin_views/posts',$data);
        $this->load->view('admin_views/admin_panel_footer');
    }
    public function gonderi_ekle(){


            $this->load->model('Admin');
            $data['records'] = $this->Admin->kisi_bilgileri_yazdir($_SESSION['username']);

            $this->load->view('admin_views/admin_panel_view',$data);
            $this->load->view('admin_views/a_gonderi_ekle',$data);
            $this->load->view('admin_views/admin_panel_footer');



    }


    public function do_upload()
    {

        $config['upload_path']          = FCPATH.'uploads/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 100;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        //var_dump($config, is_dir( $config['upload_path'] ));
        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if($this->input->post('submit'))
        {

            $title = $this->input->post('title');
            $content = $this->input->post('content');
            $senddate = date("Y/m/d/h:i:sa");//String olmadigı icin sorun olabilir geri don...
            $membername =$_SESSION['username'];
            $about = $this->input->post('content');
            //$filename = $this->input->post('picname');
            $picname = $_FILES['picname']['name'];

            $img=$config['upload_path'].$picname;
            $this->Admin->Insertsubmissions($title,$content,$senddate,$membername,$about,$img);

        }

        if ( ! $this->upload->do_upload('picname'))
        {

            $error = array('error' => $this->upload->display_errors());
            //var_dump($error);exit();
            $this->load->view('admin_views/admin_panel_view', $error);
            $this->load->view('admin_views/a_gonderi_ekle', $error);
            $this->load->view('admin_views/admin_panel_footer', $error);
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());
            $this->load->view('admin_views/admin_panel_view');
            $this->load->view('admin_views/a_gonderi_ekle', $data);
            $this->load->view('admin_views/admin_panel_footer');
        }
    }

    public function gonderileri_duzenle(){


        $this->load->model('Admin');
        $data['records'] = $this->Admin->kisi_bilgileri_yazdir('2');

        $this->load->view('admin_views/admin_panel_view',$data);
        $this->load->view('admin_views/a_gonderi_duzenle',$data);
        $this->load->view('admin_views/admin_panel_footer');



    }
    public function deleteposts(){


        $this->load->model('Admin');
        $posts['yourposts'] = $this->Admin->getData();


        $this->load->view('admin_views/admin_panel_view');
        $this->load->view('admin_views/deleteposts',$posts);
        $this->load->view('admin_views/admin_panel_footer');


        if($this->input->post('delete')) {//Delete line and Redirect Post page
            $name = $this->input->post('deletegroup');
            $this->Admin->deleteposts($name);
            redirect(base_url()."posts/deleteposts");



        }
        }




}
