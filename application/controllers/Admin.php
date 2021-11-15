<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('logged_in')!==FALSE) {
			redirect('login');
		}
		$this->load->model('model_admin');	
		$this->load->model('model_admin_proses');	
		// $this->output->enable_profiler(TRUE);
	}
	
	public function index()
	{
		$this->dashboard();

	}
	public function data_admin()
	{
		$data = [];
		$data['admin'] = $this->model_admin->getdataadmin();
		$this->load->view('template/header',$data);
		$this->load->view('admin/dataadmin',$data);
		$this->load->view('template/footer');		
	}	

	public function hapusadmin(){	
		$id = $this->input->get('id');
			if ($this->model_admin_proses->hapus_admin($id)) {
				    $this->session->set_flashdata('Admin',TRUE);
                    $this->session->set_flashdata('success','Hapus Admin Berhasil');
                    redirect('admin/data_admin');
			}else{
				    $this->session->set_flashdata('Admin',TRUE);
                    $this->session->set_flashdata('danger','Hapus Admin gagal');				
			}		
	}
	public function profile()
	{
		$data = [];
		$id=$this->input->get('id');
		$data['admin'] = $this->model_admin->getdataadminbyid($id);
		if ($this->input->post()) {
			if ($this->model_admin_proses->update_profile($id)) {
				    $this->session->set_flashdata('Admin',TRUE);
                    $this->session->set_flashdata('success','Update Profile Berhasil');
                    redirect('admin/profile?id='.$id);
			}else{
				    $this->session->set_flashdata('Admin',TRUE);
                    $this->session->set_flashdata('danger','Update Profile gagal');				
			}
		}
		$this->load->view('template/header',$data);
		$this->load->view('admin/profile',$data);
		$this->load->view('template/footer');		
	}

	public function ganti_password()
	{
		$data = [];
		$id=$this->input->get('id');
		$data['admin'] = $this->model_admin->getdataadminbyid($id);
		if ($this->input->post()) {
			if ($this->model_admin_proses->ganti_password($id)) {
				    $this->session->set_flashdata('Admin',TRUE);
                    $this->session->set_flashdata('success','Ganti Password Berhasil');
                    redirect('admin/profile?id='.$id);
			}else{
				    $this->session->set_flashdata('Admin',TRUE);
                    $this->session->set_flashdata('danger','Ganti Password gagal');				
			}
		}
		$this->load->view('template/header',$data);
		$this->load->view('admin/ganti_password',$data);
		$this->load->view('template/footer');	
	}
	public function tambahadmin()
	{
		$data = [];
		if ($this->input->post()) {
			if ($this->model_admin_proses->tambahadmin()) {
				    $this->session->set_flashdata('Admin',TRUE);
                    $this->session->set_flashdata('success','Tambah Admin Berhasil');
                    redirect('admin/data_admin');
			}else{
				    $this->session->set_flashdata('Admin',TRUE);
                    $this->session->set_flashdata('danger','Tambah Admin gagal');				
			}
		}
		$this->load->view('template/header',$data);
		$this->load->view('admin/tambahadmin',$data);
		$this->load->view('template/footer');		
	}	
	public function editadmin()
	{
		$id = $this->input->get('id');
		$data['admin'] = $this->model_admin->getUserByID($id);
		if ($this->input->post()) {
			if ($this->model_admin_proses->editadmin($id)) {
				    $this->session->set_flashdata('Admin',TRUE);
                    $this->session->set_flashdata('success','Tambah Admin Berhasil');
                    redirect('admin/data_admin');
			}else{
				    $this->session->set_flashdata('Admin',TRUE);
                    $this->session->set_flashdata('danger','Tambah Admin gagal');				
			}
		}
		$this->load->view('template/header',$data);
		$this->load->view('admin/tambahadmin',$data);
		$this->load->view('template/footer');		
	}

	public function datapengiriman()
	{
		$data = [];
		$data['pengiriman'] = $this->model_admin->dataPengiriman();
		$this->load->view('template/header');
		$this->load->view('admin/dataPengiriman',$data);
		$this->load->view('template/footer');			
	}

	public function tambahpengiriman()
	{
		$data = [];
		$data['kota'] 		= $this->model_admin->datakota();
		$data['cust'] 		= $this->model_admin->getdatacustomer();
		$data['vendor'] 	= $this->model_admin->get_data_vendor();
		$data['armada'] 	= $this->model_admin->get_data_armada_join_vendor();
		$data['barang'] 	= $this->model_admin->getdatabarang();
		if ($this->input->post()) {
			if ($this->model_admin_proses->tambah_pengirimanbarang()) {
				    $this->session->set_flashdata('Pengiriman',TRUE);
                    $this->session->set_flashdata('success','Tambah Pengiriman Berhasil');
                    redirect('admin/datapengiriman');
			}else{
				    $this->session->set_flashdata('Pengiriman',TRUE);
                    $this->session->set_flashdata('danger','Tambah Pengiriman gagal');				
			}			
		}
		$this->load->view('template/header');
		$this->load->view('admin/tambahpengiriman',$data);
		$this->load->view('template/footer');

	}

	public function editpengiriman()
	{
		$id = $this->input->get('id');
		$data['kota'] 		= $this->model_admin->datakota();
		$data['cust'] 		= $this->model_admin->getdatacustomer();
		$data['vendor'] 	= $this->model_admin->get_data_vendor();
		$data['armada'] 	= $this->model_admin->get_data_armada_join_vendor();
		$data['barang'] 	= $this->model_admin->getdatabarang();		
		$data['pengiriman'] = $this->model_admin->dataPengirimanByid($id);
		if ($this->input->post()) {
			if ($this->model_admin_proses->editpengiriman($id)) {
				    $this->session->set_flashdata('Kota',TRUE);
                    $this->session->set_flashdata('success','Tambah Pengiriman Berhasil');
                    redirect('admin/datapengiriman');
			}else{
				    $this->session->set_flashdata('Kota',TRUE);
                    $this->session->set_flashdata('danger','Tambah Pengiriman gagal');				
			}
		}
		$this->load->view('template/header');
		$this->load->view('admin/tambahpengiriman',$data);
		$this->load->view('template/footer');		
	}


	public function dashboard()
	{
		$data = [];
		$data['totalpengiriman']	= $this->model_admin->totalpengiriman();
		$data['totalcustomer'] 		= $this->model_admin->totalcustomer();
		$data['totalkota'] 			= $this->model_admin->totalkota();
		$data['totalbarang'] 		= $this->model_admin->totalbarang();
		$data['totalvendor'] 		= $this->model_admin->totalvendor();
		$data['totalarmada'] 		= $this->model_admin->totalarmada();
		$this->load->view('template/header');
		$this->load->view('admin/dashboard',$data);
		$this->load->view('template/footer');	
	}

	public function datakota()
	{
		$data['kota'] = $this->model_admin->datakota();
		if ($this->input->post()) {
			if ($this->model_admin_proses->tambahkota()) {
				    $this->session->set_flashdata('Kota',TRUE);
                    $this->session->set_flashdata('success','Tambah Kota Berhasil');
                    redirect('admin/datakota');
			}else{
				    $this->session->set_flashdata('Kota',TRUE);
                    $this->session->set_flashdata('danger','Tambah Kota gagal');				
			}
		}
		$this->load->view('template/header');
		$this->load->view('admin/datakota',$data);
		$this->load->view('template/footer');			
	}

	public function editkota()
	{
		$id = $this->input->get('id');
		$data['kota'] = $this->model_admin->datakota();
		$data['kotabyid'] = $this->model_admin->datakotabyid($id);
		if ($this->input->post()) {
			if ($this->model_admin_proses->editkota($id)) {
				    $this->session->set_flashdata('Kota',TRUE);
                    $this->session->set_flashdata('success','Edit Kota Berhasil');
                    redirect('admin/datakota');
			}else{
				    $this->session->set_flashdata('Kota',TRUE);
                    $this->session->set_flashdata('danger','Edit Kota gagal');				
			}
		}
		$this->load->view('template/header');
		$this->load->view('admin/datakota',$data);
		$this->load->view('template/footer');		
	}

	public function hapuskota()
	{
		$id=$this->input->get('id');
			if ($this->model_admin_proses->hapuskota($id)) {
				    $this->session->set_flashdata('Kota',TRUE);
                    $this->session->set_flashdata('success','Hapus Kota Berhasil');
                    redirect('admin/datakota');
			}else{
				    $this->session->set_flashdata('Kota',TRUE);
                    $this->session->set_flashdata('danger','Hapus Kota gagal');				
			}
	}	
	public function hapuspengiriman()
	{
		$id=$this->input->get('id');
			if ($this->model_admin_proses->hapuspengiriman($id)) {
				    $this->session->set_flashdata('Kota',TRUE);
                    $this->session->set_flashdata('success','Hapus Kota Berhasil');
                    redirect('admin/dataPengiriman');
			}else{
				    $this->session->set_flashdata('Kota',TRUE);
                    $this->session->set_flashdata('danger','Hapus Kota gagal');				
			}
	}

	public function data_customer()
	{
		$data = [];
		$data['cust'] = $this->model_admin->getdatacustomer();
		$this->load->view('template/header',$data);
		$this->load->view('admin/datacustomer',$data);
		$this->load->view('template/footer');		
	}	

	public function tambah_cust()
	{
		$data = [];
		if ($this->input->post()) {
			if ($this->model_admin_proses->tambah_cust()) {
				    $this->session->set_flashdata('Kota',TRUE);
                    $this->session->set_flashdata('success','Tambah Customer Berhasil');
                    redirect('admin/data_customer');
			}else{
				    $this->session->set_flashdata('Kota',TRUE);
                    $this->session->set_flashdata('danger','Tambah Customer gagal');				
			}
		}
		$this->load->view('template/header',$data);
		$this->load->view('admin/tambah_cust',$data);
		$this->load->view('template/footer');		
	}	
	public function edit_cust()
	{
		$data = [];
		$id = $this->input->get('id');
		$data['cust'] = $this->model_admin->datacustbyid($id);
		if ($this->input->post()) {
			if ($this->model_admin_proses->edit_cust($id)) {
				    $this->session->set_flashdata('Kota',TRUE);
                    $this->session->set_flashdata('success','Edit Customer Berhasil');
                    redirect('admin/data_customer');
			}else{
				    $this->session->set_flashdata('Kota',TRUE);
                    $this->session->set_flashdata('danger','Edit Customer gagal');				
			}
		}
		$this->load->view('template/header',$data);
		$this->load->view('admin/tambah_cust',$data);
		$this->load->view('template/footer');		
	}

	public function hapus_cust()
	{
		$id=$this->input->get('id');

			if ($this->model_admin_proses->hapus_cust($id)) {
				    $this->session->set_flashdata('Customer',TRUE);
                    $this->session->set_flashdata('success','Hapus Customer Berhasil');
                    redirect('admin/data_customer');
			}else{
				    $this->session->set_flashdata('Customer',TRUE);
                    $this->session->set_flashdata('danger','Hapus Customer gagal');				
			}
	}

	public function data_vendor()
	{
		$data = [];
		$data['vendor'] = $this->model_admin->get_data_vendor();
		$this->load->view('template/header',$data);
		$this->load->view('admin/data_vendor',$data);
		$this->load->view('template/footer');
	}	

	public function tambah_vendor()
	{
		$data = [];
		if ($this->input->post()) {
			if ($this->model_admin_proses->tambah_vendor()) {
				    $this->session->set_flashdata('Vendor',TRUE);
                    $this->session->set_flashdata('success','Tambah Vendor Berhasil');
                    redirect('admin/data_vendor');
			}else{
				    $this->session->set_flashdata('Vendor',TRUE);
                    $this->session->set_flashdata('danger','Tambah Vendor gagal');				
			}
		}
		$this->load->view('template/header',$data);
		$this->load->view('admin/tambah_vendor',$data);
		$this->load->view('template/footer');		
	}		
	public function edit_vendor()
	{
		$data = [];
		$id = $this->input->get('id');
		$data['vendor'] = $this->model_admin->get_data_vendor_byid($id);
		if ($this->input->post()) {
			if ($this->model_admin_proses->edit_vendor($id)) {
				    $this->session->set_flashdata('Vendor',TRUE);
                    $this->session->set_flashdata('success','Edit Vendor Berhasil');
                    redirect('admin/data_vendor');
			}else{
				    $this->session->set_flashdata('Vendor',TRUE);
                    $this->session->set_flashdata('danger','Edit Vendor gagal');				
			}
		}
		$this->load->view('template/header',$data);
		$this->load->view('admin/tambah_vendor',$data);
		$this->load->view('template/footer');		
	}
	public function hapus_vendor()
	{
		$id = $this->input->get('id');

			if ($this->model_admin_proses->hapus_vendor($id)) {
				    $this->session->set_flashdata('Vendor',TRUE);
                    $this->session->set_flashdata('success','Hapus Vendor Berhasil');
                    redirect('admin/data_vendor');
			}else{
				    $this->session->set_flashdata('Vendor',TRUE);
                    $this->session->set_flashdata('danger','Hapus Vendor gagal');				
			}
	}

	public function data_armada()
	{
		$data['vendor'] = $this->model_admin->get_data_vendor();
		$data['armada'] = $this->model_admin->get_data_armada();
		if ($this->input->post()) {
			if ($this->model_admin_proses->tambah_armada()) {
				    $this->session->set_flashdata('Kota',TRUE);
                    $this->session->set_flashdata('success','Tambah Armada Berhasil');
                    redirect('admin/data_armada');
			}else{
				    $this->session->set_flashdata('Kota',TRUE);
                    $this->session->set_flashdata('danger','Tambah Armada gagal');				
			}
		}
		$this->load->view('template/header');
		$this->load->view('admin/data_armada',$data);
		$this->load->view('template/footer');			
	}	
	public function edit_armada()
	{
		$id = $this->input->get('id');
		$data['vendor'] = $this->model_admin->get_data_vendor();
		$data['armada'] = $this->model_admin->get_data_armada();
		$data['armadabyid'] = $this->model_admin->get_data_armadabyid($id);
		if ($this->input->post()) {
			if ($this->model_admin_proses->edit_armada($id)) {
				    $this->session->set_flashdata('Kota',TRUE);
                    $this->session->set_flashdata('success','Edit Armada Berhasil');
                    redirect('admin/data_armada');
			}else{
				    $this->session->set_flashdata('Kota',TRUE);
                    $this->session->set_flashdata('danger','Edit Armada gagal');				
			}
		}
		$this->load->view('template/header');
		$this->load->view('admin/data_armada',$data);
		$this->load->view('template/footer');			
	}

	public function hapus_armada()
	{
		$id = $this->input->get('id');
		if ($this->model_admin_proses->hapus_armada($id)) {
			$this->session->set_flashdata('Kota',TRUE);
            $this->session->set_flashdata('success','Hapus Armada Berhasil');
            redirect('admin/data_armada');
		}else{
			$this->session->set_flashdata('Kota',TRUE);
            $this->session->set_flashdata('danger','Hapus Armada gagal');				
		}
	}

	public function edit_status_pengiriman()
	{
		$id = $this->input->get('id');
		$data = [];
		$data['pengiriman'] = $this->model_admin->dataPengirimanByid($id);

		if ($this->input->post()) {
			if ($this->model_admin_proses->update_status_pengiriman($id)) {
				$this->session->set_flashdata('Pengiriman',TRUE);
	            $this->session->set_flashdata('success','Update Status Pengiriman Berhasil');
	            redirect('admin/dataPengiriman');
			}else{
				$this->session->set_flashdata('Pengiriman',TRUE);
	            $this->session->set_flashdata('danger','Update Status Pengiriman gagal');				
			}
		}
		$this->load->view('template/header');
		$this->load->view('admin/edit_status_pengiriman',$data);
		$this->load->view('template/footer');		
	}

	public function data_barang()
	{

		$data = [];
		$data['barang'] = $this->model_admin->getdatabarang();
		if ($this->input->post()) {
			if ($this->model_admin_proses->tambah_barang()) {
				$this->session->set_flashdata('Barang',TRUE);
	            $this->session->set_flashdata('success','Tambah Barang Berhasil');
	            redirect('admin/data_barang');
			}else{
				$this->session->set_flashdata('Barang',TRUE);
	            $this->session->set_flashdata('danger','Barang gagal');				
			}
		}
		$this->load->view('template/header');
		$this->load->view('admin/data_barang',$data);
		$this->load->view('template/footer');			
	}	
	public function edit_barang()
	{
		$id = $this->input->get('id');
		$data = [];
		$data['barang'] = $this->model_admin->getdatabarang();
		$data['barangbyid'] = $this->model_admin->getdatabarangbyid($id);
		if ($this->input->post()) {
			if ($this->model_admin_proses->edit_barang($id)) {
				$this->session->set_flashdata('Barang',TRUE);
	            $this->session->set_flashdata('success','Edit Barang Berhasil');
	            redirect('admin/data_barang');
			}else{
				$this->session->set_flashdata('Barang',TRUE);
	            $this->session->set_flashdata('danger','Edit gagal');				
			}
		}
		$this->load->view('template/header');
		$this->load->view('admin/data_barang',$data);
		$this->load->view('template/footer');			
	}
	public function hapus_barang()
	{
		$id = $this->input->get('id');
		if ($this->model_admin_proses->hapus_barang($id)) {
			$this->session->set_flashdata('Kota',TRUE);
            $this->session->set_flashdata('success','Hapus Barang Berhasil');
            redirect('admin/data_barang');
		}else{
			$this->session->set_flashdata('Kota',TRUE);
            $this->session->set_flashdata('danger','Hapus Barang gagal');				
		}
	}

	public function data_pengirim_vendor()
	{

		$data = [];
		$data['pengirim'] = $this->model_admin->get_data_pengirim_vendor();
		$this->load->view('template/header');
		$this->load->view('admin/data_pengirim_vendor',$data);
		$this->load->view('template/footer');
	}	

	public function tambah_pengirim_vendor()
	{
		$data = [];
		$data['kota'] 		= $this->model_admin->datakota();
		$data['cust'] 		= $this->model_admin->getdatacustomer();
		$data['vendor'] 	= $this->model_admin->get_data_vendor();
		$data['armada'] 	= $this->model_admin->get_data_armada_join_vendor();
		$data['barang'] 	= $this->model_admin->getdatabarang();	

		if ($this->input->post()) {
			if ($this->model_admin_proses->tambah_pengirim_vendor()) {
				    $this->session->set_flashdata('Pengiriman',TRUE);
                    $this->session->set_flashdata('success','Tambah Pengirim / Vendor Berhasil');
                    redirect('admin/data_pengirim_vendor');
			}else{
				    $this->session->set_flashdata('Pengiriman',TRUE);
                    $this->session->set_flashdata('danger','Tambah Pengirim / Vendor gagal');				
			}			
		}

		$this->load->view('template/header');
		$this->load->view('admin/tambah_pengirim',$data);
		$this->load->view('template/footer');		
	}	
	public function edit_pengirim_vendor()
	{
		$id = $this->input->get('id');
		$data = [];
		$data['kota'] 		= $this->model_admin->datakota();
		$data['cust'] 		= $this->model_admin->getdatacustomer();
		$data['vendor'] 	= $this->model_admin->get_data_vendor();
		$data['armada'] 	= $this->model_admin->get_data_armada_join_vendor();
		$data['barang'] 	= $this->model_admin->getdatabarang();	
		$data['pengiriman']	= $this->model_admin->get_data_pengirim_vendor_byid($id);
		if ($this->input->post()) {
			if ($this->model_admin_proses->edit_pengiriman_vendor($id)) {
				    $this->session->set_flashdata('Pengiriman',TRUE);
                    $this->session->set_flashdata('success','Update Pengirim / Vendor Berhasil');
                    redirect('admin/data_pengirim_vendor');
			}else{
				    $this->session->set_flashdata('Pengiriman',TRUE);
                    $this->session->set_flashdata('danger','Update Pengirim / Vendor gagal');				
			}			
		}

		$this->load->view('template/header');
		$this->load->view('admin/tambah_pengirim',$data);
		$this->load->view('template/footer');		
	}
	public function hapus_pengirim_vendor()
	{
		$id = $this->input->get('id');
			if ($this->model_admin_proses->hapus_pengirim($id)) {
				    $this->session->set_flashdata('Kota',TRUE);
                    $this->session->set_flashdata('success','Hapus Pengirim / Vendor Berhasil');
                    redirect('admin/data_pengirim_vendor');
			}else{
				    $this->session->set_flashdata('Kota',TRUE);
                    $this->session->set_flashdata('danger','Hapus Pengirim / Vendor gagal');				
			}

	}
	public function harga_vendor()
	{
		$data = [];
		$id = $this->input->get('id');
		$data['harga_vendor'] = $this->model_admin->get_data_harga_vendor($id);
		$data['id_vendor'] = $id;
		$this->load->view('template/header');
		$this->load->view('admin/data_harga_vendor',$data);
		$this->load->view('template/footer');			
	}

	public function tambah_harga_vendor()
	{
		$data = [];
		$idvendor = $this->input->get('id_vendor');
		$data['kota'] 		= $this->model_admin->datakota();
		$data['armada'] 	= $this->model_admin->get_data_armada_join_vendorbyvendor($idvendor);
		if ($this->input->post()) {
			if ($this->model_admin_proses->tambah_harga_vendor($idvendor)) {
				    $this->session->set_flashdata('Pengiriman',TRUE);
                    $this->session->set_flashdata('success','Tambah Harga Vendor Berhasil');
                    redirect('admin/harga_vendor?id='.$idvendor.'');
			}else{
				    $this->session->set_flashdata('Pengiriman',TRUE);
                    $this->session->set_flashdata('danger','Tambah Harga Vendor gagal');				
			}	
		}
		$this->load->view('template/header');
		$this->load->view('admin/tambah_harga_vendor',$data);
		$this->load->view('template/footer');		
	}	
	public function edit_harga_vendor()
	{
		$data = [];
		$id = $this->input->get('id');
		$idvendor = $this->input->get('id_vendor');
		$data['kota'] 		= $this->model_admin->datakota();
		$data['armada'] 	= $this->model_admin->get_data_armada_join_vendorbyvendor($idvendor);
		$data['harga'] 		= $this->model_admin->get_data_harga_vendorbyid($id);
		if ($this->input->post()) {
			if ($this->model_admin_proses->edit_harga_vendor($id,$idvendor)) {
				    $this->session->set_flashdata('Pengiriman',TRUE);
                    $this->session->set_flashdata('success','Edit Harga Vendor Berhasil');
                    redirect('admin/harga_vendor?id='.$idvendor.'');
			}else{
				    $this->session->set_flashdata('Pengiriman',TRUE);
                    $this->session->set_flashdata('danger','Edit Harga Vendor gagal');				
			}	
		}
		$this->load->view('template/header');
		$this->load->view('admin/tambah_harga_vendor',$data);
		$this->load->view('template/footer');		
	}

	public function hapus_harga_vendor()
	{
		$id = $this->input->get('id');
		$idvendor = $this->input->get('id_vendor');
			if ($this->model_admin_proses->hapus_harga_vendor($id)) {
				    $this->session->set_flashdata('Pengiriman',TRUE);
                    $this->session->set_flashdata('success','Hapus Harga Vendor Berhasil');
                    redirect('admin/harga_vendor?id='.$idvendor.'');
			}else{
				    $this->session->set_flashdata('Pengiriman',TRUE);
                    $this->session->set_flashdata('danger','Hapus Harga Vendor gagal');				
			}		
	}

	public function data_invoice()
	{
		$data = [];
		$data['invoice'] = $this->model_admin->get_data_invoice();
		$this->load->view('template/header');
		$this->load->view('admin/data_invoice',$data);
		$this->load->view('template/footer');		
	}

	public function tambah_invoice()
	{
		$data = [];
		$data['cust'] 	= $this->model_admin->getdatacustomer();
		if ($this->input->post()) {
			if ($this->model_admin_proses->tambah_invoice()) {
				    $this->session->set_flashdata('Invoice',TRUE);
                    $this->session->set_flashdata('success','Tambah Invoice Berhasil');
                    redirect('admin/data_invoice');
			}else{
				    $this->session->set_flashdata('Invoice',TRUE);
                    $this->session->set_flashdata('danger','Tambah Invoice gagal');				
			}
		}
		$this->load->view('template/header');
		$this->load->view('admin/tambah_invoice',$data);
		$this->load->view('template/footer');			
	}
	public function edit_invoice()
	{
		$data = [];
		$id = $this->input->get('id');
		$data['cust'] 	= $this->model_admin->getdatacustomer();
		$data['inv'] 	= $this->model_admin->get_data_invoicebyid($id);
		if ($this->input->post()) {
			if ($this->model_admin_proses->edit_invoice($id)) {
				    $this->session->set_flashdata('Invoice',TRUE);
                    $this->session->set_flashdata('success','Edit Invoice Berhasil');
                    redirect('admin/data_invoice');
			}else{
				    $this->session->set_flashdata('Invoice',TRUE);
                    $this->session->set_flashdata('danger','Edit Invoice gagal');				
			}
		}
		$this->load->view('template/header');
		$this->load->view('admin/tambah_invoice',$data);
		$this->load->view('template/footer');			
	}	

	public function hapus_invoice()
	{
		$id = $this->input->get('id');
			if ($this->model_admin_proses->hapus_invoice($id)) {
				    $this->session->set_flashdata('Invoice',TRUE);
                    $this->session->set_flashdata('success','Hapus Invoice Berhasil');
                    redirect('admin/data_invoice');
			}else{
				    $this->session->set_flashdata('Invoice',TRUE);
                    $this->session->set_flashdata('danger','Hapus Invoice gagal');				
			}

	}	
	public function lunas_invoice()
	{
		$id = $this->input->get('id');
			if ($this->model_admin_proses->lunas_invoice($id)) {
				    $this->session->set_flashdata('Invoice',TRUE);
                    $this->session->set_flashdata('success','Update Status Invoice Berhasil');
                    redirect('admin/data_invoice');
			}else{
				    $this->session->set_flashdata('Invoice',TRUE);
                    $this->session->set_flashdata('danger','Update Status Invoice gagal');				
			}

	}	
	public function batal_lunas_invoice()
	{
		$id = $this->input->get('id');
			if ($this->model_admin_proses->batal_lunas_invoice($id)) {
				    $this->session->set_flashdata('Invoice',TRUE);
                    $this->session->set_flashdata('success','Update Status Invoice Berhasil');
                    redirect('admin/data_invoice');
			}else{
				    $this->session->set_flashdata('Invoice',TRUE);
                    $this->session->set_flashdata('danger','Update Status Invoice gagal');				
			}

	}	
	public function vendor_lunas()
	{
			$id = $this->input->get('id');
			if ($this->model_admin_proses->vendor_lunas($id)) {
				    $this->session->set_flashdata('Invoice',TRUE);
                    $this->session->set_flashdata('success','Update Status vendor Berhasil');
                    redirect('admin/data_pengirim_vendor');
			}else{
				    $this->session->set_flashdata('Invoice',TRUE);
                    $this->session->set_flashdata('danger','Update Status vendor gagal');				
			}

	}	
	public function vendor_batal_lunas()
	{
			$id = $this->input->get('id');
			if ($this->model_admin_proses->vendor_batal_lunas($id)) {
				    $this->session->set_flashdata('Invoice',TRUE);
                    $this->session->set_flashdata('success','Update Status vendor Berhasil');
                    redirect('admin/data_pengirim_vendor');
			}else{
				    $this->session->set_flashdata('Invoice',TRUE);
                    $this->session->set_flashdata('danger','Update Status vendor gagal');				
			}

	}
}
