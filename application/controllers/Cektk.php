<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cektk extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('admintestk');
	}
	public function aksi_upload(){
		$config['upload_path']          = '../adminsipenting/gambar/datatestingtanpakotak';
		$config['allowed_types']        = 'jpg';

		$data=$this->load->library('upload', $config);
 		//print_r($data);
		if ( !$this->upload->do_upload('image')){
			$error = array('error' => $this->session->set_flashdata('Gagal', '<p>Gagal Upload</p>'));
			$this->load->view('admintestk', $error);
			redirect('cektk');
		}else{
			$berhasil = array('error' => $this->session->set_flashdata('Berhasil', '<p>File Berhasil Di Upload</p>'));
			$data = array('upload_data' => $this->upload->data());
			$nama_file=$data['upload_data']['orig_name'];
			$this->load->library('image_lib');
			$config['image_library']='gd2';
			$config['source_image']='../adminsipenting/gambar/datatestingtanpakotak/'.$nama_file;
			$config['create_thumb']= FALSE;
			$config['maintain_ratio']= FALSE;
			$config['quality']= '100%';
			$config['width']= 640;
			$config['height']= 480;
			$config['new_image']= '../adminsipenting/gambar/datatestingtanpakotak/'.$nama_file;
			$this->image_lib->clear();
			$this->image_lib->initialize($config);
			$this->image_lib->resize();
			$imlayak = imagecreatefromjpeg("../adminsipenting/gambar/datatestingtanpakotak/".$nama_file);
			$rata=0;	
			$r=$g=$b=0;
			for ($i=160; $i < 318; $i+=10) { 
				for ($j=213; $j < 425; $j+=10) { 
					$rgb = imagecolorat($imlayak, $j, $i);
					$r += ($rgb >> 16) & 0xFF;
					$g += ($rgb >> 8) & 0xFF;
					$b += $rgb & 0xFF;
					$rata++;	
				}
			}
			$datas['r']=$r/$rata;
			$datas['g']=$g/$rata;
			$datas['b']=$b/$rata;
			$this->load->view('admintestk', $datas);
		}
	}
}
