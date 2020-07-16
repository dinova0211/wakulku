<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kuliner extends CI_Controller {

	public function __construct()
	{

		parent::__construct();	
		 $this->load->model(array('model_konten'));
	}
	public function index()
	{
/*        $data['konten'] = $this->model_konten->get_event();
		$data['destinasi'] = $this->model_konten->get_destinasi();
		$data['penginapan'] = $this->model_konten->get_penginapan();*/
		// $data['konten'] = $this->model_konten->get_data_by_id($id);
		// $this->load->view('layout/v_head');
        // $this->load->view('layout/v_header');
        // $this->load->view('layout/v_nav');
		// $this->load->view('v_kuliner',$data);
        // $this->load->view('layout/v_footer');
        $data['title'] = "Halaman Kuliner";
        $this->load->view('v_kuliner',$data);
	}
	
	public function sejarah()
	{
		$data_konten['konten']= $this->model_konten->get_data();
		$data['konten'] = $this->model_konten->get_sejarah();
		

		$data['title'] = "Halaman Sejarah";
		$this->load->view('v_sejarah',$data);
	}

	public function resep_kuliner()
	{
		$data_konten['konten']= $this->model_konten->get_data();
		$data['konten'] = $this->model_konten->get_resep_kuliner();
		

		$data['title'] = "Halaman Resep Kuliner";
		$this->load->view('v_kuliner',$data);
	}

	public function info_festival()
	{
		$data_konten['konten']= $this->model_konten->get_data();
		$data['konten'] = $this->model_konten->get_info_festival();
		

		$data['title'] = "Halaman Informasi Festival";
		$this->load->view('v_info_festival',$data);
	}

	public function data_penjual()
	{
		$data_konten['konten']= $this->model_konten->get_data();
		$data['konten'] = $this->model_konten->get_data_warung();
		

		$data['title'] = "Halaman Data Warung Penjual";
		$this->load->view('v_data_warung',$data);
	}

	public function cerita_kuliner()
	{
		$data_konten['konten']= $this->model_konten->get_data();
		$data['konten'] = $this->model_konten->get_cerita_kuliner();
		

		$data['title'] = "Halaman Cerita Kuliner";
		$this->load->view('v_cerita_kuliner',$data);
	}

		public function detail_konten($judul)
	{
		$data_konten['konten']= $this->model_konten->get_data();
		$data['konten'] = $this->model_konten->detail_konten($judul);

		$data['title'] = "Halaman Cerita Kuliner";
		$this->load->view('v_detail_konten',$data);
		/*$this->load->view('/list',$data_konten);
		$this->load->view('admin/template/footer');*/

		
	}
}
