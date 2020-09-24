<?php
class classi extends CI_Controller{

	function __construct() {
        parent::__construct();
        $this->load->model('model_classi');
        chek_session();
    }
    
    function index(){
        $this->load->library('pagination');
        $config['base_url'] = base_url().'index.php/classi/index/';
        $config['total_rows'] = $this->model_classi->tampilkan_data()->num_rows();
        $config['per_page'] = 10; 
        $this->pagination->initialize($config); 
        $data['paging']     =$this->pagination->create_links();
        $halaman            =  $this->uri->segment(3);
        $halaman            =$halaman==''?0:$halaman;
        $data['record']     =    $this->model_classi->tampilkan_data_paging($halaman,$config['per_page']);
        $this->template->load('template3','classi/lihat_data',$data);
    }
    
    function post()
    {
        if(isset($_POST['submit'])){
            // proses classi
            $this->model_classi->post();
            redirect('classi');
        }
        else{
            $this->template->load('template3','classi/form_input');
        }
    }
    
    function edit()
    {
        if(isset($_POST['submit'])){
            // proses classi
            $this->model_classi->edit();
            redirect('classi');
        }
        else{
            $id=  $this->uri->segment(3);
            $data['record']=  $this->model_classi->get_one($id)->row_array();
            $this->template->load('template3','classi/form_edit',$data);
        }
    }
    
    
    function delete()
    {
        $id=  $this->uri->segment(3);
        $this->model_classi->delete($id);
        redirect('classi');
    }
}