<?php
class model_car extends CI_Model{

	function tampil_data()
    {
        $query= "SELECT b.car_id,b.car_name,b.price,kb.classi_name
                FROM car as b,classi_car as kb
                WHERE b.classi_id=kb.classi_id";
        return $this->db->query($query);
    }
    
        function tampil_data_paging($halaman,$batas)
    {
        $query= "SELECT b.car_id,b.car_name,b.price,kb.classi_name
                FROM car as b,classi_car as kb
                WHERE b.classi_id=kb.classi_id limit $halaman,$batas";
        return $this->db->query($query);
    }
    
    function post($data)
    {
        $this->db->insert('car',$data);
    }
    
    function get_one($id)
    {
        $param  =   array('car_id'=>$id);
        return $this->db->get_where('car',$param);
    }
    
    function edit($data,$id)
    {
        $this->db->where('car_id',$id);
        $this->db->update('car',$data);
    }
    
    
    function delete($id)
    {
        $this->db->where('car_id',$id);
        $this->db->delete('car');
    }
}