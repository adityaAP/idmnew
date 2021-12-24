<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	public function aksesdenied()
	{
		$this->load->view('template/header');
		$this->load->view('admin/aksesdenied');
		$this->load->view('template/footer');
	}
}
