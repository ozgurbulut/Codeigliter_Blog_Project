    <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{


    public function index()
    {
        $this->load->model('User');
        $this->load->model('Post');
        $blogposts['posts'] = $this->Post->getData();

        $this->load->view('header');
        $this->load->view('ana_sayfa', $blogposts);
        $this->load->view('footer');
    }

    public function showposts($url){

        $this->load->model('Post');//her tabloya m
        $query['data'] = $this->Post->getPostByUrl($url);
        //var_dump($query);
        if (!$query) {
            //show_404($url);
            redirect("/");
        }
        $this->load->view('header');
        $this->load->view('showpost', $query);
        $this->load->view('footer');


    }



}
