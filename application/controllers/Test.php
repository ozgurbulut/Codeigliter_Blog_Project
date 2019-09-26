<?php
class Test extends CI_Controller{
    public function index(){
        $key = $this->encryption->create_key(16);
        $config['encryption_key'] = '231';
        $ciphertext = $this->encryption->encrypt('My secret message');
        echo $this->encryption->decrypt($ciphertext);
    }



}