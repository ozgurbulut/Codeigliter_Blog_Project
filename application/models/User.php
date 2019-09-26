<?php
class User extends CI_Model{

    public function getData(){
        $query= $this->db->get('member')->result();
        return $query;

    }
    public function getMember($username){
        $userdata = $this->db->get_where('member',array('membername' =>$username))->result();
        return $userdata;
    }

    /**
     * @param $membername
     * @return where
     */
    public function where_email($membername){//Exercise about query-where....
        $email = $this->db->where("membername",$membername)->get("member")->row("email");
        return $email;
    }

    public function login($username,$password){
        $loginquery = $this->db->get_where('member', array('membername'=>$username, 'password'=>$password));
        return $loginquery->row_array();
    }

    public function logintrue($username){//Giriş yaptığımızda isim döndürecek.
        return $username;

    }

    public function accountinfo($username){

        return $this->db->get_where('member',array('membername'=>$username))->result();
    }
    public function getUSerData($username,$password){
        $loginquery = $this->db->get_where('member', array('membername'=>$username, 'password'=>$password));

        return $loginquery->row_array();
    }
    function saverecords($title,$content,$sender,$reciver,$date)
    {

        $data = array(
            'id'=>'2',
            'title' => $title,
            'content'  => $content,
            'sender'  => $sender,
            'reciver'  => $reciver,
            'date'  => $date
        );

        $sql = $this->db->set($data)->get_compiled_insert('messagebox');
        echo $sql;

    }
    public function getfulldata()
    {
        $getdata = $this->db->get('submissions')->result();
        return $getdata;

    }



}