<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        // $this->output->enable_profiler(true);
		$this->load->model('model_admin');	
		$this->load->model('model_admin_proses');	
	}

    public function get_armadabyvendor()
    {
        $id = $this->input->post('id');
        $data = $this->model_admin->get_data_armada_join_vendorbyvendor($id);
        echo json_encode($data);
    }      
    public function get_harga_vendor()
    {
        $vendor = $this->input->post('vendor');
        $tujuan = $this->input->post('tujuan');
        $dari = $this->input->post('dari');
        $armada = $this->input->post('armada');

        $data = $this->model_admin->get_harga_vendor($vendor,$dari,$tujuan,$armada);

        echo json_encode($data);
    }   
		
}

/* End of file laporan.php */
/* Location: ./application/controllers/laporan.php */