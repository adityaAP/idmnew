<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_admin extends CI_Model {

	function __construct()
	{
		parent :: __construct();
	}

    public function getUserByID($id=null)
    {
        $this->db->where('user_id',$id);
        $query = $this->db->get('tb_user');
        if ($query->num_rows()>0)   
        {
            foreach ($query->result_array() as $row)
            { $hasil=$row ; }
            
            return $hasil;
        }
    }     
    public function datakotabyid($id=null)
    {
        $this->db->where('id_kota',$id);
        $query = $this->db->get('tb_kota');
        if ($query->num_rows()>0)   
        {
            foreach ($query->result_array() as $row)
            { $hasil=$row ; }
            
            return $hasil;
        }
    }     
    public function dataPengirimanByid($id=null)
    {
        // $this->db->join('tb_customer','tb_pengiriman.id_customer=tb_customer.id_cust');
        
        $this->db->where('id',$id);
        $query = $this->db->get('tb_pengiriman');
        if ($query->num_rows()>0)   
        {
            foreach ($query->result_array() as $row)
            { $hasil=$row ; }
            
            return $hasil;
        }
    }  

    public function riwayat_status_pengiriman($id=null)
    {
        $this->db->where('idpeng',$id);
        $query = $this->db->get('riwayat_pengiriman');
        if ($query->num_rows()>0)   
        {
            foreach ($query->result_array() as $row)
            { $hasil[]=$row ; }
            
            return $hasil;
        }
    }      
    public function get_data_pengiriman_bynopo($nopo=null)
    {
        $this->db->join('tb_customer','tb_pengiriman.id_customer=tb_customer.id_cust');
        $this->db->where('no_po',$nopo);
        $query = $this->db->get('tb_pengiriman');
        if ($query->num_rows()>0)   
        {
            foreach ($query->result_array() as $row)
            { $hasil[]=$row ; }
            
            return $hasil;
        }
    }     
    public function getdataadmin()
    {
        $this->db->where('rule !=','superadmin');
        $query = $this->db->get('tb_user');
        if ($query->num_rows()>0)   
        {
            foreach ($query->result_array() as $row)
            { $hasil[]=$row ; }
            
            return $hasil;
        }
    }     
    public function getdataadminbyid($id=null)
    {
        $this->db->where('user_id',$id);
        $query = $this->db->get('tb_user');
        if ($query->num_rows()>0)   
        {
            foreach ($query->result_array() as $row)
            { $hasil=$row ; }
            
            return $hasil;
        }
    }     
    public function getdatacustomer()
    {
        $query = $this->db->get('tb_customer');
        if ($query->num_rows()>0)   
        {
            foreach ($query->result_array() as $row)
            { $hasil[]=$row ; }
            
            return $hasil;
        }
    }     
    public function datacustbyid($id=null)
    {
        $this->db->where('id_cust',$id);
        $query = $this->db->get('tb_customer');
        if ($query->num_rows()>0)   
        {
            foreach ($query->result_array() as $row)
            { $hasil=$row ; }
            
            return $hasil;
        }
    }    
    public function dataPengiriman()
    {
        if ($this->session->userdata('rule')=='admin_jkt') {
            $this->db->where('created_by',$this->session->userdata('user_id'));
        }
        $query = $this->db->get('tb_pengiriman');
        if ($query->num_rows()>0)   
        {
            foreach ($query->result_array() as $row)
            { $hasil[]=$row ; }
            
            return $hasil;
        }
    }
    public function VerifdataPengiriman()
    {
        if ($this->session->userdata('rule')=='admin_jkt') {
            $this->db->where('created_by',$this->session->userdata('user_id'));
        }
        $this->db->where('verif','baru');
        $query = $this->db->get('tb_pengiriman');
        if ($query->num_rows()>0)   
        {
            foreach ($query->result_array() as $row)
            { $hasil[]=$row ; }
            
            return $hasil;
        }
    }
    public function Verifsuratjalan()
    {
        if ($this->session->userdata('rule')=='admin_jkt') {
            $this->db->where('created_by',$this->session->userdata('user_id'));
        }
        $this->db->where('verif','baru');
        $query = $this->db->get('surat_jalan');
        if ($query->num_rows()>0)   
        {
            foreach ($query->result_array() as $row)
            { $hasil[]=$row ; }
            
            return $hasil;
        }
    } 
    public function Verifinvoice()
    {
        if ($this->session->userdata('rule')=='admin_jkt') {
            $this->db->where('created_by',$this->session->userdata('user_id'));
        }
        $this->db->where('verif','baru');
        $query = $this->db->get('tb_invoice');
        if ($query->num_rows()>0)   
        {
            foreach ($query->result_array() as $row)
            { $hasil[]=$row ; }
            
            return $hasil;
        }
    }     
    public function pengirimbynomorpo($nopo=null)
    {
        $this->db->where('no_po',$nopo);
        $query = $this->db->get('tb_pengiriman');
        if ($query->num_rows()>0)   
        {
            foreach ($query->result_array() as $row)
            { $hasil=$row ; }
            
            return $hasil;
        }
    }    
    public function datakota()
    {
        $this->db->order_by('kota');
        $query = $this->db->get('tb_kota');
        if ($query->num_rows()>0)   
        {
            foreach ($query->result_array() as $row)
            { $hasil[]=$row ; }
            
            return $hasil;
        }
    }

    public function totalpengiriman(){
        $q = $this->db->get("tb_pengiriman");
        return $q->num_rows();
    }    
    public function totalcustomer(){
        $q = $this->db->get("tb_customer");
        return $q->num_rows();
    }    
    public function totalkota(){
        $q = $this->db->get("tb_kota");
        return $q->num_rows();
    }    
    public function totalbarang(){
        $q = $this->db->get("tb_barang");
        return $q->num_rows();
    }    
    public function totalvendor(){
        $q = $this->db->get("tb_vendor");
        return $q->num_rows();
    }    
    public function totalarmada(){
        $q = $this->db->get("tb_armada");
        return $q->num_rows();
    }

    public function get_data_vendor()
    {
        $this->db->order_by('nama_vendor');
        $query = $this->db->get('tb_vendor');
        if ($query->num_rows()>0)   
        {
            foreach ($query->result_array() as $row)
            { $hasil[]=$row ; }
            
            return $hasil;
        }
    }     
    public function get_data_vendor_byid($id=null)
    {
        $this->db->where('id_vendor',$id);
        $query = $this->db->get('tb_vendor');
        if ($query->num_rows()>0)   
        {
            foreach ($query->result_array() as $row)
            { $hasil=$row ; }
            
            return $hasil;
        }
    } 

    public function get_data_armada()
    {
        $query = $this->db->get('tb_armada');
        if ($query->num_rows()>0)   
        {
            foreach ($query->result_array() as $row)
            { $hasil[]=$row ; }
            
            return $hasil;
        }
    }     
    public function get_data_armada_join_vendor()
    {
        $query = $this->db->get('tb_armada');
        if ($query->num_rows()>0)   
        {
            foreach ($query->result_array() as $row)
            { $hasil[]=$row ; }
            
            return $hasil;
        }
    }      
    public function get_data_armadabyid($id=null)
    {
        $this->db->where('id_armada',$id);
        $query = $this->db->get('tb_armada');
        if ($query->num_rows()>0)   
        {
            foreach ($query->result_array() as $row)
            { $hasil=$row ; }
            
            return $hasil;
        }
    }     
    public function getdatabarang()
    {
        $query = $this->db->get('tb_barang');
        if ($query->num_rows()>0)   
        {
            foreach ($query->result_array() as $row)
            { $hasil[]=$row ; }
            
            return $hasil;
        }
    }     
    public function getdatabarangbyid($id=null)
    {
        $this->db->where('id_barang',$id);
        $query = $this->db->get('tb_barang');
        if ($query->num_rows()>0)   
        {
            foreach ($query->result_array() as $row)
            { $hasil=$row ; }
            
            return $hasil;
        }
    }  
    public function get_data_pengirim_vendor()
    {
        if ($this->session->userdata('rule')=='admin_jkt') {
            $this->db->where('created_by',$this->session->userdata('user_id'));
        }
        $query = $this->db->get('tb_pengirim_vendor');
        if ($query->num_rows()>0)   
        {
            foreach ($query->result_array() as $row)
            { $hasil[]=$row ; }
            
            return $hasil;
        }
    }     
    public function get_data_pengirim_vendor_byid($id=null)
    {
        $this->db->where('id_pengirim',$id);
        $query = $this->db->get('tb_pengirim_vendor');
        if ($query->num_rows()>0)   
        {
            foreach ($query->result_array() as $row)
            { $hasil=$row ; }
            
            return $hasil;
        }
    }  
    public function get_data_harga_vendor($id=null)
    {
        $this->db->where('id_vendor',$id);
        $query = $this->db->get('tb_harga_vendor');
        if ($query->num_rows()>0)   
        {
            foreach ($query->result_array() as $row)
            { $hasil[]=$row ; }
            
            return $hasil;
        }
    }    
    public function get_data_harga_vendorbyid($id=null)
    {
        $this->db->where('id_harga',$id);
        $query = $this->db->get('tb_harga_vendor');
        if ($query->num_rows()>0)   
        {
            foreach ($query->result_array() as $row)
            { $hasil=$row ; }
            
            return $hasil;
        }
    }
    public function get_data_armada_join_vendorbyvendor($id=null)
    {
        $this->db->where('tb_harga_vendor.id_vendor',$id);
        $this->db->join('tb_armada','tb_harga_vendor.armada=tb_armada.id_armada');
        $query = $this->db->get('tb_harga_vendor');
        if ($query->num_rows()>0)   
        {
            foreach ($query->result_array() as $row)
            { $hasil[]=$row ; }
            
            return $hasil;
        }
    }     
    public function get_harga_vendor($vendor=null,$dari=null,$tujuan=null,$armada=null)
    {
        $this->db->where('id_vendor',$vendor); 
        $this->db->where('dari',$dari); 
        $this->db->where('tujuan',$tujuan); 
        $this->db->where('armada',$armada); 

        $query = $this->db->get('tb_harga_vendor');
        if ($query->num_rows()>0)   
        {
            foreach ($query->result_array() as $row)
            { $hasil=$row ; }
            
            return $hasil;
        }
    }    
    public function get_data_invoice()
    {
        if ($this->session->userdata('rule')=='admin_jkt') {
            $this->db->where('created_by',$this->session->userdata('user_id'));
        }
        $query = $this->db->get('tb_invoice');
        if ($query->num_rows()>0)   
        {
            foreach ($query->result_array() as $row)
            { $hasil[]=$row ; }
            
            return $hasil;
        }
    }     
    public function get_data_invoicebyid($id=null)
    {
        $this->db->where('id_inv',$id);
        $query = $this->db->get('tb_invoice');
        if ($query->num_rows()>0)   
        {
            foreach ($query->result_array() as $row)
            { $hasil=$row ; }
            
            return $hasil;
        }
    }  

     public function data_surat_jalan()
    {
        if ($this->session->userdata('rule')=='admin_jkt') {
            $this->db->where('user_id',$this->session->userdata('user_id'));
        }
        $query = $this->db->get('surat_jalan');
        if ($query->num_rows()>0)   
        {
            foreach ($query->result_array() as $row)
            { $hasil[]=$row ; }
            
            return $hasil;
        }
    } 
    public function data_surat_jalanByid($id=null)
    {
        $this->db->where('id_sj',$id);
        $query = $this->db->get('surat_jalan');
        if ($query->num_rows()>0)   
        {
            foreach ($query->result_array() as $row)
            { $hasil=$row ; }
            
            return $hasil;
        }
    } 

    public function totalverifpengiriman()
    {
        $this->db->where('verif','baru');
        $q = $this->db->get("tb_pengiriman");
        return $q->num_rows();
    }  
    public function totalverifinvoice()
    {
        $this->db->where('verif','baru');
        $q = $this->db->get("tb_invoice");
        return $q->num_rows();
    }
    public function totalsuratjalan()
    {
        $this->db->where('verif','baru');
        $q = $this->db->get("surat_jalan");
        return $q->num_rows();
    }
}
