    <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
        $this->load->model('User');
        $blogdatas['records'] = $this->User->getfulldata();

        $this->load->view('header');
		$this->load->view('ana_sayfa',$blogdatas);
		$this->load->view('footer');
	}
}
