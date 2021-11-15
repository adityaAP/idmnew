<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class Kode_converter {
	
	protected $CI;
	function __construct(){
		$this->CI = &get_instance();
	}


	public function vendor($id=null)
	{
		$this->CI->db->select('nama_vendor');
		$this->CI->db->where('id_vendor', $id);
		$this->CI->db->limit(1);
		$query = $this->CI->db->get('tb_vendor');
		if ($query->num_rows()>0){
			foreach ($query->result_array() as $row)
			{ $hasil=$row['nama_vendor']; }
			return $hasil;
		}
	}	
	public function customer($id=null)
	{
		$this->CI->db->select('nama_cust');
		$this->CI->db->where('id_cust', $id);
		$this->CI->db->limit(1);
		$query = $this->CI->db->get('tb_customer');
		if ($query->num_rows()>0){
			foreach ($query->result_array() as $row)
			{ $hasil=$row['nama_cust']; }
			return $hasil;
		}
	}	
	public function kota($id=null)
	{
		$this->CI->db->select('kota');
		$this->CI->db->where('kode', $id);
		$this->CI->db->limit(1);
		$query = $this->CI->db->get('tb_kota');
		if ($query->num_rows()>0){
			foreach ($query->result_array() as $row)
			{ $hasil=$row['kota']; }
			return $hasil;
		}
	}	
	public function armada($id=null)
	{
		$this->CI->db->select('jenis_armada');
		$this->CI->db->where('id_armada', $id);
		$this->CI->db->limit(1);
		$query = $this->CI->db->get('tb_armada');
		if ($query->num_rows()>0){
			foreach ($query->result_array() as $row)
			{ $hasil=$row['jenis_armada']; }
			return $hasil;
		}
	}		
	
	public function barang($id=null)
	{
		$this->CI->db->select('nama_barang');
		$this->CI->db->where('id_barang', $id);
		$this->CI->db->limit(1);
		$query = $this->CI->db->get('tb_barang');
		if ($query->num_rows()>0){
			foreach ($query->result_array() as $row)
			{ $hasil=$row['nama_barang']; }
			return $hasil;
		}
	}
}

/* End of file login.php */
/* Location: ./application/libraries/login.php */