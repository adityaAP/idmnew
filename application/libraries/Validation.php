<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class Validation {
	
	protected $CI;
	function __construct(){
		$this->CI = &get_instance();
		$this->CI->load->library('form_validation');
	}
	
	function tambah()
	{
		$this->CI->form_validation->set_rules('judul', 'No Registrasi', 'required');
		$this->CI->form_validation->set_rules('sumber', 'Sumber Artikel', 'required');
		$this->CI->form_validation->set_message('required', '{field} dibutuhkan, tidak boleh kosong');	
		return $this->CI->form_validation->run();
	}
}

/* End of file login.php */
/* Location: ./application/libraries/login.php */