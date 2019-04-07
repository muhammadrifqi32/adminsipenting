<?php
class model_upldgbr extends CI_Model {

    var $tabel = 'upload_img';

    function __construct() {
        parent::__construct();
    }
    
    //fungsi untuk menampilkan semua data dari tabel database
	function get_allimage() {
        $this->db->from($this->tabel);
		$query = $this->db->get();
        return $query->result();

	}

    //fungsi insert ke database
    function get_insert($data){
       $this->db->insert($this->tabel, $data);
       return TRUE;
    }

}

?>