<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_laporan extends CI_Model {

	function __construct()
	{
		parent :: __construct();
	}

    public function invoicebynomor($nomor=null)
    {
        $this->db->where('no_inv',$nomor);
        $query = $this->db->get('tb_invoice');
        if ($query->num_rows()>0)   
        {
            foreach ($query->result_array() as $row)
            { $hasil=$row ; }
            
            return $hasil;
        }
    } 
     
}
