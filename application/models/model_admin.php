<?php
class model_admin extends CI_Model{

	function login($username,$password)
    {
        $chek=  $this->db->get_where('admin',array('username'=>$username,'password'=>  md5($password)));
        if($chek->num_rows()>0){
            return 1;
        }
        else{
            return 0;
        }
    }
    
    
    function tampildata()
    {
        return $this->db->get('admin');
    }
    
    function get_one($id)
    {
        $param  =   array('admin_id'=>$id);
        return $this->db->get_where('admin',$param);
    }
}