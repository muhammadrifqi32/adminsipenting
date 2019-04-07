<?php 
 
class M_admin2 extends CI_Model{	
	function tampildatatraining(){
		return $this->db->get('datatraining2');
	}
	function inputdatatraining($data,$table){
	$this->db->insert($table,$data);
	}
	function hapus_data($group_id, $group_picture){
		$this->db->where('namafile', $group_picture);

		$this->db->delete('datatraining2', array('namafile' => $group_picture));
	}
}	