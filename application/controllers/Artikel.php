<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {

	public function __construct()
	{

		parent::__construct();	
		$this->load->model(array('model_konten'));
	}
	public function index($id)
	{
		$data['konten'] = $this->model_konten->get_data_by_id($id);
		$this->load->view('templates/header/head');
		$this->load->view('templates/header/banner');
		$this->load->view('artikel',$data);
		$this->load->view('templates/footer/footer');
	}
}
