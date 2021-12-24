<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Verif extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('logged_in')!==FALSE) {
			redirect('login');
		}
		if ($this->session->userdata('rule')=='admin_jkt') {
			redirect('admin/dashboard');
		}
		$this->load->model('model_admin');	
		$this->load->model('model_admin_proses');	
		$this->data['ttlp'] = $this->model_admin->totalverifpengiriman();
		$this->data['ttlv'] = $this->model_admin->totalverifinvoice();
		$this->data['ttls'] = $this->model_admin->totalsuratjalan();
		// $this->output->enable_profiler(TRUE);
	}

	public function index(){
		$this->datapengiriman();
	}
	public function datapengiriman()
	{
		$data = [];
		$data['ttlp'] = $this->data['ttlp'];
		$data['ttlv'] = $this->data['ttlv'];
		$data['ttls'] = $this->data['ttls'];
		$data['pengiriman'] = $this->model_admin->VerifdataPengiriman();
		$this->load->view('template/header',$data);
		$this->load->view('admin/verif_pengiriman',$data);
		$this->load->view('template/footer');
	}
	public function invoice()
	{
		$data = [];
		$data['ttlp'] = $this->data['ttlp'];
		$data['ttlv'] = $this->data['ttlv'];
$data['ttls'] = $this->data['ttls'];
		$data['invoice'] = $this->model_admin->Verifinvoice();
		$this->load->view('template/header',$data);
		$this->load->view('admin/verif_invoice',$data);
		$this->load->view('template/footer');
	}
	public function suratjalan()
	{
		$data = [];
		$data['ttlp'] = $this->data['ttlp'];
		$data['ttlv'] = $this->data['ttlv'];
$data['ttls'] = $this->data['ttls'];
		$data['sj'] = $this->model_admin->Verifsuratjalan();
		$this->load->view('template/header',$data);
		$this->load->view('admin/verif_surat_jalan',$data);
		$this->load->view('template/footer');
	}

	public function verifikasiProses(){
		$data = [];
		$data['ttlp'] = $this->data['ttlp'];
		$data['ttlv'] = $this->data['ttlv'];
$data['ttls'] = $this->data['ttls'];
		$id = $this->input->get('id');
		$data['kota'] 		= $this->model_admin->datakota();
		$data['cust'] 		= $this->model_admin->getdatacustomer();
		$data['vendor'] 	= $this->model_admin->get_data_vendor();
		$data['armada'] 	= $this->model_admin->get_data_armada_join_vendor();
		$data['barang'] 	= $this->model_admin->getdatabarang();		
		$data['pengiriman'] = $this->model_admin->dataPengirimanByid($id);
		if ($this->input->post()) {
			if ($this->model_admin_proses->verifpengiriman($id)) {
				    $this->session->set_flashdata('Kota',TRUE);
                    $this->session->set_flashdata('success','Tambah Pengiriman Berhasil');
                    redirect('verif/datapengiriman');
			}else{
				    $this->session->set_flashdata('Kota',TRUE);
                    $this->session->set_flashdata('danger','Tambah Pengiriman gagal');				
			}
		}
		$this->load->view('template/header',$data);
		$this->load->view('admin/verifikasiProses',$data);
		$this->load->view('template/footer');	
	}

	public function verifikasiInvoiceProses()
	{
		$data = [];
		$data['ttlp'] = $this->data['ttlp'];
		$data['ttlv'] = $this->data['ttlv'];
$data['ttls'] = $this->data['ttls'];
		$id = $this->input->get('id');
		$data['cust'] 	= $this->model_admin->getdatacustomer();
		$data['inv'] 	= $this->model_admin->get_data_invoicebyid($id);
		if ($this->input->post()) {
			if ($this->model_admin_proses->verif_invoice($id)) {
				    $this->session->set_flashdata('Invoice',TRUE);
                    $this->session->set_flashdata('success','Edit Invoice Berhasil');
                    redirect('admin/data_invoice');
			}else{
				    $this->session->set_flashdata('Invoice',TRUE);
                    $this->session->set_flashdata('danger','Edit Invoice gagal');				
			}
		}
		$this->load->view('template/header',$data);
		$this->load->view('admin/verifinvoiceproses',$data);
		$this->load->view('template/footer');			
	}


	public function verifikasisuratjalan(){

		$data = [];
		$data['ttlp'] = $this->data['ttlp'];
		$data['ttlv'] = $this->data['ttlv'];
$data['ttls'] = $this->data['ttls'];
		$id = $this->input->get('id');
		$data['sj'] = $this->model_admin->data_surat_jalanByid($id);
		if ($this->input->post()) {
			$simpan = $this->model_admin_proses->verifsuratjalan($id);
			if ($simpan) {
                    $this->session->set_flashdata('success','Verifikasi Surat Jalan Berhasil');
                    redirect('verif/suratjalan');
			}else{
                    $this->session->set_flashdata('danger','Verifikasi Surat Jalan gagal');				
			}
		}
		$this->load->view('template/header',$data);
		$this->load->view('admin/verifsuratjalanproses',$data);
		$this->load->view('template/footer');
	}

}
