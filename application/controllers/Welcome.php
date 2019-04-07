<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_admin');
                $this->load->helper(array('form', 'url'));
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
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
		$this->load->view('index');
	}
	public function knn()
	{
		$this->load->view('index3');
	}
// 	public function aksi_upload(){
// 		$config['upload_path']          = './gambar/datatestingtanpakotak';
// 		$config['allowed_types']        = 'jpeg|jpg';
 
// 		$data=$this->load->library('upload', $config);
//  		//print_r($data);
// 		if ( !$this->upload->do_upload('image')){
// 			$error = array('error' => $this->session->set_flashdata('Gagal', '<p>Gagal Upload</p>'));
// 			$this->load->view('index', $error);
// 		}else{
// 			$berhasil = array('error' => $this->session->set_flashdata('Berhasil', '<p>File Berhasil Di Upload</p>'));
// 						$data = array('upload_data' => $this->upload->data());
// 						$nama_file=$data['upload_data']['orig_name'];
// //			echo $nama_file;
// 			$this->load->library('image_lib');
// 	    		$config['image_library']='gd2';
//                 $config['source_image']='./gambar/datatestingtanpakotak/'.$nama_file;
//                 $config['create_thumb']= FALSE;
//                 $config['maintain_ratio']= FALSE;
//                 $config['quality']= '100%';
//                 $config['width']= 640;
//                 $config['height']= 480;
//                 $config['new_image']= './gambar/datatestingtanpakotak/'.$nama_file;
//                 $this->image_lib->clear();
//     			$this->image_lib->initialize($config);
//     			$this->image_lib->resize();
// 						$imlayak = imagecreatefromjpeg("gambar/datatestingtanpakotak/".$nama_file);
// 						$rata=0;	
// 						$r=$g=$b=0;
// 						for ($i=160; $i < 318; $i+=10) { 
// 							for ($j=213; $j < 425; $j+=10) { 
// 								$rgb = imagecolorat($imlayak, $j, $i);
// 								$r += ($rgb >> 16) & 0xFF;
// 								$g += ($rgb >> 8) & 0xFF;
// 								$b += $rgb & 0xFF;
// 								$rata++;	
// 							}
// 						}
//   	      				$datas['r']=$r/$rata;
//   	      				$datas['g']=$g/$rata;
//   	      				$datas['b']=$b/$rata;
// 			$this->load->view('index', $datas);
// 		}
// 		// redirect('welcome/index');      	
        
// 	}
// 	public function aksi_upload2(){
// 		$config['upload_path']          = './gambar/datatestingdengankotak';
// 		$config['allowed_types']        = 'jpeg|jpg';
 
// 		$data=$this->load->library('upload', $config);
//  		//print_r($data);
// 		if ( !$this->upload->do_upload('berkas')){
// 			$error = array('error' => $this->session->set_flashdata('Gagal', '<p>Gagal Upload</p>'));
// 			$this->load->view('index', $error);
// 		}else{
// 			$berhasil = array('error' => $this->session->set_flashdata('Berhasil', '<p>File Berhasil Di Upload</p>'));
// 						$data = array('upload_data' => $this->upload->data());
// 						$nama_file=$data['upload_data']['orig_name'];
// //			echo $nama_file;
// 			$this->load->library('image_lib');
// 	    		$config['image_library']='gd2';
//                 $config['source_image']='./gambar/datatestingdengankotak/'.$nama_file;
//                 $config['create_thumb']= FALSE;
//                 $config['maintain_ratio']= FALSE;
//                 $config['quality']= '100%';
//                 $config['width']= 640;
//                 $config['height']= 480;
//                 $config['new_image']= './gambar/datatestingdengankotak/'.$nama_file;
//                 $this->image_lib->clear();
//     			$this->image_lib->initialize($config);
//     			$this->image_lib->resize();
// 						$imlayak = imagecreatefromjpeg("gambar/datatestingdengankotak/".$nama_file);
// 						$rata=0;	
// 						$r=$g=$b=0;
// 						for ($i=160; $i < 318; $i+=10) { 
// 							for ($j=213; $j < 425; $j+=10) { 
// 								$rgb = imagecolorat($imlayak, $j, $i);
// 								$r += ($rgb >> 16) & 0xFF;
// 								$g += ($rgb >> 8) & 0xFF;
// 								$b += $rgb & 0xFF;
// 								$rata++;	
// 							}
// 						}
//   	      				$datas['r']=$r/$rata;
//   	      				$datas['g']=$g/$rata;
//   	      				$datas['b']=$b/$rata;
// 			$this->load->view('index', $datas);
// 		}      	
        
// 	}
}
