<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('logged_in')!==FALSE) {
			redirect('login');
		}
        // $this->output->enable_profiler(true);
		$this->load->model('model_admin');	
		$this->load->model('model_laporan');	
		$this->load->model('model_admin_proses');	
		$this->data['ttlp'] = $this->model_admin->totalverifpengiriman();
		$this->data['ttlv'] = $this->model_admin->totalverifinvoice();
	}

	public function index()
	{
		$this->pdf();
	}
	public function pdf()
	{
		$data = [];
		$data['ttlp'] = $this->data['ttlp'];
		$data['ttlv'] = $this->data['ttlv'];
		$this->load->library('cetak_berkas');

		$nomor_invo = $this->input->get('nomor_invo');
		$data['nomor_invo']=$nomor_invo;
		if ($nomor_invo!='') {
			$pengiriman = $this->model_laporan->invoicebynomor($nomor_invo);
			$id = $pengiriman['id_inv'];
			$this->cetak_berkas->invoice($pengiriman);
			$data['output'] = 'invoice_'.$id.'.pdf';			
		}
		$this->load->view('template/header',$data);
		$this->load->view('admin/laporan_invoice',$data);
		$this->load->view('template/footer');
	}
		
}

/* End of file laporan.php */
/* Location: ./application/controllers/laporan.php */