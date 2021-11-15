<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('home_m');	
	}	
	
	public function index()
	{
	
		$getloc = json_decode(file_get_contents("http://ipinfo.io/"));
		$negara = $getloc->country;
		$this->load->view('home/header');
		if ($negara=='ID') {
			$this->load->view('home/id/home');
			$this->load->view('home/footer');			
		}else{
			$this->load->view('home/home');
			$this->load->view('home/footer');
		}
		$this->load->view('home/scriptform');
	}
	
	public function about()
	{
		$getloc = json_decode(file_get_contents("http://ipinfo.io/"));
		$negara = $getloc->country;
		$this->load->view('home/header');
		if ($negara=='ID') {
			$this->load->view('home/id/about');
			$this->load->view('home/id/footer');			
		}else{
			$this->load->view('home/about');
			$this->load->view('home/footer');
		}
	}
	public function estimate()
	{
		$response = "success";
		$resp = array(	
			'response'	=> $response,
			'errorMessage'	=> "",
		);
		echo json_encode($resp);
	}
	public function contactus()
	{
		$response = "success";
		$resp = array(	
			'response'	=> $response,
			'errorMessage'	=> "",
		);
		echo json_encode($resp);
	}
	public function services()
	{
		$getloc = json_decode(file_get_contents("http://ipinfo.io/"));
		$negara = $getloc->country;
		$this->load->view('home/header');
		if ($negara=='ID') {
			$this->load->view('home/id/services');
			$this->load->view('home/id/footer');			
		}else{
			$this->load->view('home/services');
			$this->load->view('home/footer');
		}
	}
	public function contact()
	{
		$getloc = json_decode(file_get_contents("http://ipinfo.io/"));
		$negara = $getloc->country;
		$this->load->view('home/header');
		if ($negara=='ID') {
			$this->load->view('home/id/contact');
			$this->load->view('home/id/footer');			
		}else{
			$this->load->view('home/contact');
			$this->load->view('home/footer');
		}
	}
	public function tracking()
	{
		$data =[];
		if ($this->input->get('ponumb')) {
			$data['datatrck'] = $this->home_m->data_tracking($this->input->get('ponumb'));
		}
		$getloc = json_decode(file_get_contents("http://ipinfo.io/"));
		$negara = $getloc->country;
		$this->load->view('home/header');
		if ($negara=='ID') {
			$this->load->view('home/id/tracking',$data);
			$this->load->view('home/id/footer');			
		}else{
			$this->load->view('home/tracking',$data);
			$this->load->view('home/footer');
		}
	}
}
