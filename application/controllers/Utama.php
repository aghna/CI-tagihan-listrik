<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Utama extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->model('m_utama');
		// $this->load->library('dompdf_gen');

		// if($this->session->userdata('status') != "login"){
		// 	redirect(base_url("login"));		
	}
	public function index()
	{
		$this->load->view('v_utama');
	}

	public function pilihdata()

	{
		
		$nomor_meter=$this->input->post('nomor');

		$data2['data']=$this->m_utama->ambil_data($nomor_meter)->result();
		$this->load->view('v_report',$data2);

	}
	


}