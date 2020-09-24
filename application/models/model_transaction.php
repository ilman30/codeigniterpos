<?php
class model_transaction extends CI_Model{

	function simpan_car()
    {
        $car_name    	=  $this->input->post('car');
        $qty            =  $this->input->post('qty');
        $idcar       	= $this->db->get_where('car',array('car_name'=>$car_name))->row_array();
        $data           = array('car_id'=>$idcar['car_id'],
                                'qty'=>$qty,
                                'price'=>$idcar['price'],
                                'status'=>'0');
        $this->db->insert('transaction_detail',$data);
    }
    
    function tampilkan_detail_transaction()
    {
        $query  ="SELECT td.t_detail_id,td.qty,td.price,b.car_name
                FROM transaction_detail as td,car as b
                WHERE b.car_id=td.car_id and td.status='0'";
        return $this->db->query($query);
    }
    
    function hapusitem($id)
    {
        $this->db->where('t_detail_id',$id);
        $this->db->delete('transaction_detail');
    }
    
    
    function selesai_belanja($data)
    {
        $this->db->insert('transaction',$data);
        $last_id=  $this->db->query("select transaction_id from transaction order by transaction_id desc")->row_array();
        $this->db->query("update transaction_detail set transaction_id='".$last_id['transaction_id']."' where status='0'");
        $this->db->query("update transaction_detail set status='1' where status='0'");
    }
    
    
    function laporan_default()
    {
        $query="SELECT t.transaction_date,o.full_name,sum(td.price*td.qty) as total
                FROM transaction as t,transaction_detail as td,admin as o
                WHERE td.transaction_id=t.transaction_id and o.admin_id=t.admin_id
                group by t.transaction_id";
        return $this->db->query($query);
    }
    
    function laporan_periode($tanggal1,$tanggal2)
    {
        $query="SELECT t.transaction_date,o.full_name,sum(td.price*td.qty) as total
                FROM transaction as t,transaction_detail as td,admin as o
                WHERE td.transaction_id=t.transaction_id and o.admin_id=t.admin_id 
                and t.transaction_date between '$tanggal1' and '$tanggal2'
                group by t.transaction_id";
        return $this->db->query($query);
    }
}