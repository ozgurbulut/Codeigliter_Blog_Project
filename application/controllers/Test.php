<?php
class Test extends CI_Controller{
    public function index(){
        $x = "selam";
        $encode_veri = base64_encode($x); // çıktısı: MTIzNDU2
        $orjinal_veri = base64_decode($encode_veri); // çıktısı: 123456
        echo 'Encode edilen veri:'.$encode_veri.'<br />';
        echo 'Orjinal veri:'.$orjinal_veri;
    }



}