<?php
class Car extends CI_Controller{

        function __construct() {
        parent::__construct();
        $this->load->model('model_car');
        chek_session();
    }


    function index()
    {
        $this->load->library('pagination');
        $config['base_url'] = base_url().'index.php/car/index/';
        $config['total_rows'] = $this->model_car->tampil_data()->num_rows();
        $config['per_page'] = 10; 
        $this->pagination->initialize($config); 
        $data['paging']     =$this->pagination->create_links();
        $halaman            =  $this->uri->segment(3);
        $halaman            =$halaman==''?0:$halaman;
        $data['record']     =    $this->model_car->tampil_data_paging($halaman,$config['per_page']);
        //$this->load->view('barang/lihat_data',$data);
        $this->template->load('template3','car/lihat_data',$data);
    }

    function spec()
    {
  
            $id=  $this->uri->segment(3);
            $this->load->model('model_classi');
            $data['classi']   =  $this->model_classi->tampilkan_data()->result();
            $data['record']     =  $this->model_car->get_one($id)->row_array();
            $this->template->load('template3','car/view_spec',$data);       
    }
    
    function post()
    {
        if(isset($_POST['submit'])){
            // proses barang
            $name       =   $this->input->post('car_name');
            $classi     =   $this->input->post('classi');
            $price      =   $this->input->post('price');
            $spec       =   $this->input->post('spec');
            $data       = array('car_name'=>$name,
                                'classi_id'=>$classi,
                                'price'=>$price,
                                'spec'=>$spec);
            $this->model_car->post($data);
            redirect('car');
        }
        else{
            $this->load->model('model_classi');
            $data['classi']=  $this->model_classi->tampilkan_data()->result();
            //$this->load->view('barang/form_input',$data);
            $this->template->load('template3','car/form_input',$data);
        }
    }
    
    
    function edit()
    {
       if(isset($_POST['submit'])){
            // proses barang
            $id         =   $this->input->post('id');
            $name       =   $this->input->post('car_name');
            $classi     =   $this->input->post('classi');
            $price      =   $this->input->post('price');
            $spec       =   $this->input->post('spec');
            $data       = array('car_name'=>$name,
                                'classi_id'=>$classi,
                                'price'=>$price,
                                'spec'=>$spec);
            $this->model_car->edit($data,$id);
            redirect('car');
        }
        else{
            $id=  $this->uri->segment(3);
            $this->load->model('model_classi');
            $data['classi']   =  $this->model_classi->tampilkan_data()->result();
            $data['record']     =  $this->model_car->get_one($id)->row_array();
            //$this->load->view('barang/form_edit',$data);
            $this->template->load('template3','car/form_edit',$data);
        }
    }
    
    
    function delete()
    {
        $id=  $this->uri->segment(3);
        $this->model_car->delete($id);
        redirect('car');
    }
}