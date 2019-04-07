<?php 
 
class Upload2 extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->model('m_admin');
                $this->load->helper(array('form', 'url'));
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
	function index(){
		$this->load->view('v_adminupload/form-basicdengankotak');
	}
	public function aksi_upload(){
		$config['upload_path']          = './gambar/';
		$config['allowed_types']        = 'zip';
		$this->load->library('upload', $config);
 
		if ( ! $this->upload->do_upload('berkas'))
		{
			//$error = array('error' => $this->upload->display_errors());
			$error = array('error' => $this->session->set_flashdata('Gagal', '<p>Gagal Upload</p>'));
			$this->load->view('v_adminupload/form-basicdengankotak', $error);
			redirect('upload2/', $data);
		}
		else{
			$data = array('upload_data' => $this->upload->data());
			$berhasil = array('error' => $this->session->set_flashdata('Berhasil', '<p>File Berhasil Di Upload</p>'));
			$zip = new ZipArchive;
            $file = $data['upload_data']['full_path'];
            chmod($file,0777);
            if ($zip->open($file) === TRUE) {
                    $zip->extractTo('./gambar/hasil/');
                    $zip->close();
                    @unlink($config['upload_path'].'/'.$data['upload_data']['file_name']);
                    redirect( site_url('upload2') );
            } else {
                    echo 'failed';
            }
			redirect('upload2/', $data);
		}
	}
}