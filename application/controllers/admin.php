<?php
class admin extends CI_Controller{

	function __construct() {
        parent::__construct();
        $this->load->model('model_admin');
        chek_session();
    }
    
    function index()
    {
        $data['record']=  $this->model_admin->tampildata();
        //$this->load->view('operator/lihat_data',$data);
        $this->template->load('template3','admin/lihat_data',$data);
    }
    
    function post()
    {
        if(isset($_POST['submit'])){
            // proses data
            $name       =  $this->input->post('name',true);
            $username   =  $this->input->post('username',true);
            $password   =  $this->input->post('password',true);
            $data       =  array(   'full_name'=>$name,
                                    'username'=>$username,
                                    'password'=>md5($password));
            $this->db->insert('admin',$data);
            redirect('admin');
        }
        else{
            //$this->load->view('operator/form_input');
            $this->template->load('template3','admin/form_input');
        }
    }
    
    function edit()
    {
        if(isset($_POST['submit'])){
            // proses kategori
            $id         =  $this->input->post('id',true);
            $name       =  $this->input->post('name',true);
            $username   =  $this->input->post('username',true);
            $password   =  $this->input->post('password',true);
            if(empty($password)){
                 $data  =  array(   'full_name'=>$name,
                                    'username'=>$username);
            }
            else{
                  $data =  array(   'full_name'=>$name,
                                    'username'=>$username,
                                    'password'=>md5($password));
            }
             $this->db->where('admin_id',$id);
             $this->db->update('admin',$data);
             redirect('admin');
        }
        else{
            $id=  $this->uri->segment(3);
            $data['record']=  $this->model_admin->get_one($id)->row_array();
            //$this->load->view('operator/form_edit',$data);
            $this->template->load('template3','admin/form_edit',$data);
        }
    }
    
    
    function delete()
    {
        $id=  $this->uri->segment(3);
        $this->db->where('admin_id',$id);
        $this->db->delete('admin');
        redirect('admin');
    }
}