<?php

class Posts extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Post');
        $this->load->helper(array('form', 'url'));
        if (!$this->session->username) {
            redirect(base_url() . 'login');
        }
    }

    public function index()
    {

        $data['records'] = $this->Post->getdata();

        $this->load->view('admin_views/AdminHeader', $data);
        $this->load->view('admin_views/AdminMyPosts', $data);
        $this->load->view('admin_views/AdminFooter');
    }

    public function gonderi_ekle()
    {


        $this->load->model('Post');
        //$data['records'] = $this->Post->kisi_bilgileri_yazdir($this->session->username);

        $this->load->view('admin_views/AdminHeader');
        $this->load->view('admin_views/AdminNewPost');
        $this->load->view('admin_views/AdminFooter');


    }


    public function do_upload()
    {

        $config['upload_path'] = FCPATH . 'uploads/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 100;
        $config['max_width'] = 1024;
        $config['max_height'] = 768;

        //var_dump($config, is_dir( $config['upload_path'] ));
        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if ($this->input->post('submit')) {

            $title = $this->input->post('title');
            $content = $this->input->post('content');
            $senddate = date("Y/m/d/h:i:sa");//String olmadigı icin sorun olabilir geri don...
            $membername = $this->session->username;
            $about = $this->input->post('content');
            $tr = array('ı', 'İ', 'ç', 'Ç', 'Ü', 'ü', 'Ö', 'ö', 'ş', 'Ş', 'ğ', 'Ğ', ' ');
            $trok = array('i', 'I', 'c', 'C', 'U', 'u', 'O', 'o', 's', 'S', 'g', 'G', '');
            $url = str_replace($tr, $trok, $title);

            //$filename = $this->input->post('picname');
            $picname = $_FILES['picname']['name'];

            $img = $config['upload_path'] . $picname;
            $this->Post->Insertsubmissions($title, $content, $senddate, $membername, $about, $url);

        }

        if (!$this->upload->do_upload('picname')) {

            $error = array('error' => $this->upload->display_errors());
            //var_dump($error);exit();
            $this->load->view('admin_views/AdminHeader', $error);
            $this->load->view('admin_views/AdminNewPost', $error);
            $this->load->view('admin_views/AdminFooter', $error);
        } else {
            $data = array('upload_data' => $this->upload->data());
            $this->load->view('admin_views/AdminHeader');
            $this->load->view('admin_views/AdminNewPost', $data);
            $this->load->view('admin_views/AdminFooter');
        }
    }

    public function neweditpost($id = '')
    {
        $newid = $id;
        echo "id" . $id;
        $this->load->model('Post');

        $data["records"] = $this->Post->getpostwithid($id);

        //print_r($data);

        $this->load->view('admin_views/AdminHeader');
        $this->load->view('admin_views/AdminEditPost', $data);
        $this->load->view('admin_views/AdminFooter');


        $title = $this->input->post('title');
        $content = $this->input->post('content');


        $this->Post->updateYourPost($newid, $title, $content);


    }

    public function editposts($id = "")
    {
        $this->load->model('Post');
        $data['records'] = $this->Post->getdata();

        $this->load->view('admin_views/AdminHeader');
        $this->load->view('admin_views/AdminEditView', $data);
        $this->load->view('admin_views/AdminFooter');


    }

    public function deleteposts($id)
    {
        $this->load->model('Post');


        $membername = $this->session->username;
        $this->Post->deleteposts($id, $membername);
        redirect(base_url() . "posts/editposts");


    }


}
