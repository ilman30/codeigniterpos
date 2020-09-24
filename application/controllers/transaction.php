<?php
class transaction extends CI_Controller{

	function __construct() {
        parent::__construct();
        $this->load->model(array('model_car','model_transaction'));
        chek_session();
    }
    
    function index()
    {
        if(isset($_POST['submit']))
        {
            $this->model_transaction->simpan_car();
            redirect('transaction');
        }
        else
        {
            $data['car']=  $this->model_car->tampil_data();
            $data['detail']= $this->model_transaction->tampilkan_detail_transaction()->result();
            $this->template->load('template3','transaction/form_transaksi',$data);
        }
    }
    
    
    function hapusitem()
    {
        $id=  $this->uri->segment(3);
        $this->model_transaction->hapusitem($id);
        redirect('transaction');
    }
    
    
    function selesai_belanja()
    {
        $tanggal=date('Y-m-d');
        $user=  $this->session->userdata('username');
        $id_op=  $this->db->get_where('admin',array('username'=>$user))->row_array();
        $data=array('admin_id'=>$id_op['admin_id'],'transaction_date'=>$tanggal);
        $this->model_transaction->selesai_belanja($data);
        redirect('transaction');
    }
    
    
    function laporan()
    {
        if(isset($_POST['submit']))
        {
            $tanggal1=  $this->input->post('tanggal1');
            $tanggal2=  $this->input->post('tanggal2');
            $data['record']=  $this->model_transaction->laporan_periode($tanggal1,$tanggal2);
            $this->template->load('template3','transaction/laporan',$data);
        }
        else
        {
            $data['record']=  $this->model_transaction->laporan_default();
            $this->template->load('template3','transaction/laporan',$data);
        }
    }
    
    
    function excel()
    {
        header("Content-type=appalication/vnd.ms-excel");
        header("content-disposition:attachment;filename=laporantransaksi.xls");
        $data['record']=  $this->model_transaction->laporan_default();
        $this->load->view('transaction/laporan_excel',$data);
    }
    
    function pdf()
    {
        $this->load->library('cfpdf');
        $pdf=new FPDF('P','mm','A4');
        $pdf->AddPage();
        $pdf->SetFont('Arial','B','L');
        $pdf->SetFontSize(14);
        $pdf->Text(10, 10, 'Transaction Report');
        $pdf->SetFont('Arial','B','L');
        $pdf->SetFontSize(10);
        $pdf->Cell(10, 10,'','',1);
        $pdf->Cell(10, 7, 'No', 1,0);
        $pdf->Cell(27, 7, 'Date', 1,0);
        $pdf->Cell(30, 7, 'Admin', 1,0);
        $pdf->Cell(38, 7, 'Total', 1,1);
        // tampilkan dari database
        $pdf->SetFont('Arial','','L');
        $data=  $this->model_transaction->laporan_default();
        $no=1;
        $total=0;
        foreach ($data->result() as $r)
        {
            $pdf->Cell(10, 7, $no, 1,0);
            $pdf->Cell(27, 7, $r->transaction_date, 1,0);
            $pdf->Cell(30, 7, $r->full_name, 1,0);
            $pdf->Cell(38, 7, $r->total, 1,1);
            $no++;
            $total=$total+$r->total;
        }
        // end
        $pdf->Cell(67,7,'Total',1,0,'R');
        $pdf->Cell(38,7,$total,1,0);
        $pdf->Output();
    }
}