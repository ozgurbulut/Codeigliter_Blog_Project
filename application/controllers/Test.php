<?php
class Test extends CI_Controller{
    public function index(){
        $this->load->library('encryption');
        $str = '12345';
        $key = 'my-secret-key';
        $encrypted = $this->encrypt->encode($str, $key);
        var_dump($encrypted);
        var_dump($this->encrypt->decode($encrypted, $key));
        die();
    }



}