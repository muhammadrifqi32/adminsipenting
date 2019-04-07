<?php 

class M_admin extends CI_Model{	
	function tampil_data(){
		return $this->db->get('admin');
	}
	// function edit_data($where,$table){		
	// 	return $this->db->get_where('admin',$where);
	// }
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update('admin',$data);
	}
	function tampildatatraining(){
		return $this->db->get('datatraining');
	}
	function inputdatatraining($data,$table){
		$this->db->insert($table,$data);
	}
	function hapus_data($group_id, $group_picture){
		$this->db->where('namafile', $group_picture);

		$this->db->delete('datatraining', array('namafile' => $group_picture));
	}
}	