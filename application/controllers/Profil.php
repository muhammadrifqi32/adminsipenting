<?php 
 
class Profil extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->model('m_admin');
                $this->load->helper(array('form', 'url'));
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
	function index(){
		$data['username'] = $this->m_admin->tampil_data()->result();
		//print_r($this->m_admin->tampil_data()->result());
		$this->load->view('v_adminprofil/pages-profile',$data, array('error' => ' ' ));
	}
	// function edit($id){
	// $where = array('id' => $id);
	// $data['username'] = $this->m_admin->edit_data($where,'username')->result();
	// $this->load->view('v_adminprofil/pages-profile',$data);
	// }
	function update(){
	$id = $this->input->post('id');
	$username = $this->input->post('username');
	$password = $this->input->post('password');
	$nama = $this->input->post('nama');
	$email = $this->input->post('email');
	$alamat = $this->input->post('alamat');
	$telpon = $this->input->post('telpon');
 
	$data = array(
		'username' => $username,
		'password' => md5($password),
		'nama' => $nama,
		'email' => $email,
		'alamat' => $alamat,
		'telpon' => $telpon,
	);
 
	$where = array(
		'id' => $id
	);
 
	$this->m_admin->update_data($where,$data,'username');
	redirect('profil');
	}	
}