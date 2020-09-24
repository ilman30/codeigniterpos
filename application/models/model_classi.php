<?php
class model_classi extends CI_Model{

	function tampilkan_data(){
        
        return $this->db->get('classi_car');
    }
    
  function tampilkan_data_paging($halaman,$batas)
  {
      return $this->db->query("select * from classi_car limit $halaman,$batas");
  }
    
    function post(){
        $data=array(
           'classi_name'=>  $this->input->post('classi')
                    );
        $this->db->insert('classi_car',$data);
    }
    
    
    function edit()
    {
        $data=array(
           'classi_name'=>  $this->input->post('classi')
                    );
        $this->db->where('classi_id',$this->input->post('id'));
        $this->db->update('classi_car',$data);
    }
    
    function get_one($id)
    {
        $param  =   array('classi_id'=>$id);
        return $this->db->get_where('classi_car',$param);
    }
    
    
    function delete($id)
    {
        $this->db->where('classi_id',$id);
        $this->db->delete('classi_car');
    }
}