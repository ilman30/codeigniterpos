<?php
class Dashboard extends CI_Controller{
    
    
    function index(){
        chek_session();
        //$this->load->view('view_dashboard');
        $this->load->view('view_dashboard');
    }
}