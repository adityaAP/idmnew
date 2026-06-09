<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('home_m');	
        // $this->output->enable_profiler(TRUE);
		
	}	
	
	public function getip(){
		$ip = $_SERVER['REMOTE_ADDR'];
		$url = "https://ipinfo.io/".$ip."/?token=1332b0256a531e";
		$ch = curl_init();
		curl_setopt ($ch, CURLOPT_URL, $url);
		curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, 5);
		curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
		$contents = curl_exec($ch);
		if (curl_errno($ch)) {
		  $contents = '';
		} else {
		  curl_close($ch);
		}

		if (!is_string($contents) || !strlen($contents)) {
		  $contents = '';
		}
		return $contents;
	}

	private function getCountry()
	{
		$ip = json_decode($this->getip());
		if (!is_object($ip) || empty($ip->country)) {
			return 'ID';
		}
		return $ip->country;
	}

	public function index()
	{
		$negara = $this->getCountry();
		$this->load->view('home/header');
		if ($negara!== false && $negara!='ID') {
			$this->load->view('home/home');
			$this->load->view('home/footer');			
		}else{
			$this->load->view('home/id/home');
			$this->load->view('home/id/footer');
		}
	}
	public function hometry()
	{
		// $ip = json_decode($this->getip());
		// $negara = $ip->country;
		$this->load->view('home/header');
			$this->load->view('home/id/home');
			$this->load->view('home/id/footer');
		$this->load->view('home/scriptform');
	}
	
	public function about()
	{
		$negara = $this->getCountry();
		$this->load->view('home/header');
		if ($negara!== false && $negara!='ID') {
			$this->load->view('home/about');
			$this->load->view('home/footer');			
		}else{
			$this->load->view('home/id/about');
			$this->load->view('home/id/footer');
		}
	}
	public function estimate()
	{
		$name = $this->input->post('name');
		$phone = $this->input->post('phone');
		$email = $this->input->post('email');
		$dimension = $this->input->post('dimension');
		$payload = $this->input->post('payload');
		$loading = $this->input->post('loading');
		$unloading = $this->input->post('unloading');
		$type = $this->input->post('type');
		$message = $this->input->post('message');
		$this->sendEmailEstimasi($name,$email,$loading,$unloading,$payload,$dimension,$type,$message);

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
		$negara = $this->getCountry();
		$this->load->view('home/header');
		if ($negara!== false && $negara!='ID') {
			$this->load->view('home/services');
			$this->load->view('home/footer');
		}else{
			$this->load->view('home/id/services');
			$this->load->view('home/id/footer');			
		}
	}
	public function contact()
	{
		$negara = $this->getCountry();
		$this->load->view('home/header');
		if ($negara!== false && $negara!='ID') {
			$this->load->view('home/contact');
			$this->load->view('home/footer');			
		}else{
			$this->load->view('home/id/contact');
			$this->load->view('home/id/footer');
		}
	}
	public function tracking()
	{
		$data =[];
		if ($this->input->get('ponumb')) {
			$data['datatrck'] = $this->home_m->data_tracking($this->input->get('ponumb'));
			$data['drt'] = $this->home_m->data_riwayat_tracking($this->input->get('ponumb'));
			$data['drtfirst'] = $this->home_m->data_riwayat_trackingbyid($this->input->get('ponumb'));
		}

		$negara = $this->getCountry();

		$this->load->view('home/header');
		if ($negara=='ID') {
			$this->load->view('home/id/tracking',$data);
			$this->load->view('home/id/footer');			
		}else{
			$this->load->view('home/tracking',$data);
			$this->load->view('home/footer');
		}
	}

	public function sendEmailEstimasi($nama=null,$email=null,$loading=null,$unloading=null,$payload=null,$dimension=null,$jeniscargo=null,$pesan=null){
        $this->load->library('email');
        $config['useragent']    = "PT Intan Daya Mandiri";
        $config['protocol']     = "smtp";
        $config['smtp_host']    = "ptintandayamandiri.co.id";
        $config['smtp_port']    = "465";
        $config['smtp_user']    = 'info@ptintandayamandiri.co.id';
        $config['smtp_pass']    = 'infoidm_123456';
        $config['mailtype']     = 'html';
        $config['charset']      = 'utf-8';
        $config['newline']      = "\r\n";
        $config['wordwrap']     = TRUE;

        $kepada = 'info@ptintandayamandiri.co.id';
        
        $this->email->initialize($config);

        $this->email->from('info@ptintandayamandiri.co.id', '');
        $this->email->to($kepada);
        $judul = "Estimasi harga pengiriman customer";
        $this->email->subject($judul);
        $pesan = '	
            <table>
				<tr><td>Nama</td><td>:</td><td>'.$nama.'</td></tr>
				<tr><td>Email</td><td>:</td><td>'.$email.'</td></tr>
				<tr><td>loading</td><td>:</td><td>'.$loading.'</td></tr>
				<tr><td>unloading</td><td>:</td><td>'.$unloading.'</td></tr>
				<tr><td>payload</td><td>:</td><td>'.$payload.' KG </td></tr>
				<tr><td>dimension</td><td>:</td><td>'.$dimension.'</td></tr>
				<tr><td>jeniscargo</td><td>:</td><td>'.$jeniscargo.'</td></tr>
				<tr><td>pesan</td><td>:</td><td>'.$pesan.'</td></tr>
			</table>';
        $this->email->message($pesan);
        $this->email->send();
    }	
    public function sendContactUs($name=null,$email=null,$telp=null,$message=null)
    {
        $this->load->library('email');
        $config['useragent']    = "PT Intan Daya Mandiri";
        $config['protocol']     = "smtp";
        $config['smtp_host']    = "ptintandayamandiri.co.id";
        $config['smtp_port']    = "465";
        $config['smtp_user']    = 'info@ptintandayamandiri.co.id';
        $config['smtp_pass']    = 'infoidm_123456';
        $config['mailtype']     = 'html';
        $config['charset']      = 'utf-8';
        $config['newline']      = "\r\n";
        $config['wordwrap']     = TRUE;

        $kepada = 'dimas@ptintandayamandiri.co.id';
        
        $this->email->initialize($config);

        $this->email->from('info@ptintandayamandiri.co.id', '');
        $this->email->to($kepada);
        $judul = "Contact us website";
        $this->email->subject($judul);
        $pesan = '	
            <table>
				<tr><td>Nama</td><td>:</td><td>'.$name.'</td></tr>
				<tr><td>Email</td><td>:</td><td>'.$email.'</td></tr>
				<tr><td>Telp</td><td>:</td><td>'.$telp.'</td></tr>
				<tr><td>Pesan</td><td>:</td><td>'.$message.'</td></tr>
			</table>';
        $this->email->message($pesan);
        $this->email->send();
    }	
}
