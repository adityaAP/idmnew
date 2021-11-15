<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_m extends CI_Model {

	function __construct()
	{
		parent :: __construct();
	}

    public function data_tracking($nomor=null)
    {
        $this->db->join('tb_customer','tb_pengiriman.id_customer=tb_customer.id_cust');
        $this->db->where('no_po',$nomor);
        $query = $this->db->get('tb_pengiriman');
        if ($query->num_rows()>0)   
        {
            foreach ($query->result_array() as $row)
            { $hasil[]=$row ; }
            
            return $hasil;
        }
    } 
     
}
