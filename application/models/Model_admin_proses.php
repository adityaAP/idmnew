<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_admin_proses extends CI_Model {

	function __construct()
	{
		parent :: __construct();
	}
    public function tambahadmin()
    {
        $pass = md5($this->input->post('password'));
        $status = "aktif";
        $data = array(
            'email'     => $this->input->post('email'), 
            'nama'      => $this->input->post('nama'), 
            'telp'      => $this->input->post('telp'),
            'password'  => $pass, 
            'rule'      => $this->input->post('rule'), 
            'status'    => $status, 
        );
        $query = $this->db->insert('tb_user',$data);
        return $query;
    }     
    public function editadmin($id=null)
    {

        $data = array(
            'email'     => $this->input->post('email'), 
            'nama'      => $this->input->post('nama'), 
            'telp'      => $this->input->post('telp'),

        );
        $this->db->where('user_id',$id);
        $query = $this->db->update('tb_user',$data);
        return $query;
    } 
    public function hapus_admin($id=null)
    {
        $this->db->where('user_id',$id);
        $query = $this->db->delete('tb_user');
        return $query;
    }
    public function tambahpengiriman_namapabrik()
    {
        $jangka_waktu = date('Y-m-d',strtotime($this->input->post('jangka_waktu')));        
        $data = array(
            'id_cust'   => $this->input->post('nama_pabrik'), 
            'no_po'         => $this->input->post('no_po'), 
            'jangka_waktu'  => $jangka_waktu, 
        );
        $query = $this->db->insert('tb_pabrik_pengiriman',$data);
        return $query;
    }

    public function tambah_pengirimanbarang()
    {
        $userid = $this->session->userdata('user_id');
        $jangka_waktu = date('Y-m-d',strtotime($this->input->post('jangka_waktu')));
        $data = array(
            'id_customer'   => $this->input->post('nama_pabrik'), 
            'no_po'         => $this->input->post('no_po'), 
            'jangka_waktu'  => $jangka_waktu,
            'created_by'    => $userid,

            'nama_barang'   => $this->input->post('nama_barang'),
            'dari'          => $this->input->post('dari'),
            'tujuan'        => $this->input->post('tujuan'),
            'keterangan'    => $this->input->post('keterangan'),
            'vendor'        => $this->input->post('vendor'),
            'armada'        => $this->input->post('armada'),
            'jumlah_barang' => $this->input->post('jumlah_barang'),
            'nilai_inv'     => $this->input->post('nilai_inv'),
        );

        $query = $this->db->insert('tb_pengiriman',$data);
        return $query;
    }    
    public function editpengiriman($id=null)
    {

        $jangka_waktu = date('Y-m-d',strtotime($this->input->post('jangka_waktu')));
        $data = array(
            'jangka_waktu'  => $jangka_waktu,
            'nama_barang'   => $this->input->post('nama_barang'),
            'dari'          => $this->input->post('dari'),
            'tujuan'        => $this->input->post('tujuan'),
            'keterangan'    => $this->input->post('keterangan'),
            'vendor'        => $this->input->post('vendor'),
            'armada'        => $this->input->post('armada'),
            'jumlah_barang' => $this->input->post('jumlah_barang'),
            'nilai_inv'     => $this->input->post('nilai_inv'),
        );
        $this->db->where('id',$id);
        $query = $this->db->update('tb_pengiriman',$data);
        return $query;
    }

    public function tambahkota(){

        $data = array(
            'kode' => $this->input->post('kode'), 
            'kota' => $this->input->post('kota'), 
        );

        $query = $this->db->insert('tb_kota',$data);
        return $query;
    }

    public function editkota($id=null)
    {
        $data = array(
            'kode' => $this->input->post('kode'),
            'kota' => $this->input->post('kota'),
             );
        $this->db->where('id_kota',$id);
        $query = $this->db->update('tb_kota',$data);
        return $query;
    }

    public function hapuskota($id=null)
    {
        $this->db->where('id_kota',$id);
        $query = $this->db->delete('tb_kota');
        return $query;
    }    
    public function hapuspengiriman($id=null)
    {
        $this->db->where('id',$id);
        $query = $this->db->delete('tb_pengiriman');
        return $query;
    }

    public function tambah_cust()
    {

        $data = array(
            'email_cust'     => $this->input->post('email'), 
            'nama_cust'      => $this->input->post('nama'), 
            'telp_cust'      => $this->input->post('telp'),
            'alamat_cust'      => $this->input->post('alamat'),

        );
        $query = $this->db->insert('tb_customer',$data);
        return $query;
    }     
    public function edit_cust($id=null)
    {

        $data = array(
            'email_cust'     => $this->input->post('email'), 
            'nama_cust'      => $this->input->post('nama'), 
            'telp_cust'      => $this->input->post('telp'),
            'alamat_cust'      => $this->input->post('alamat'),

        );
        $this->db->where('id_cust',$id);
        $query = $this->db->update('tb_customer',$data);
        return $query;
    } 
    public function hapus_cust($id=null)
    {
        $this->db->where('id_cust',$id);
        $query = $this->db->delete('tb_customer');
        return $query;
    }


    public function tambah_vendor()
    {

        $data = array(
            'email_vendor'     => $this->input->post('email'), 
            'nama_vendor'      => $this->input->post('nama'), 
            'telp_vendor'      => $this->input->post('telp'),
            'alamat_vendor'    => $this->input->post('alamat'),
            'pic_vendor'       => $this->input->post('nama_pic'),
        );
        $query = $this->db->insert('tb_vendor',$data);
        return $query;
    }     
    public function edit_vendor($id=null)
    {

        $data = array(
            'email_vendor'     => $this->input->post('email'), 
            'nama_vendor'      => $this->input->post('nama'), 
            'telp_vendor'      => $this->input->post('telp'),
            'alamat_vendor'    => $this->input->post('alamat'),
            'pic_vendor'       => $this->input->post('nama_pic'),
        );
        $this->db->where('id_vendor',$id);
        $query = $this->db->update('tb_vendor',$data);
        return $query;
    } 

    public function hapus_vendor($id=null)
    {
        $this->db->where('id_vendor',$id);
        $query = $this->db->delete('tb_vendor');
        return $query;
    } 

    public function tambah_armada()
    {
        $data = array(
            'id_vendor'     => $this->input->post('vendor'), 
            'jenis_armada'  => $this->input->post('jenis'), 
        );
        $query = $this->db->insert('tb_armada',$data);
        return $query;
    }     
    public function edit_armada($id=null)
    {
        $data = array(
            'id_vendor'     => $this->input->post('vendor'), 
            'jenis_armada'  => $this->input->post('jenis'), 
        );
        $this->db->where('id_armada',$id);
        $query = $this->db->update('tb_armada',$data);
        return $query;
    }
    public function hapus_armada($id=null)
    {
        $this->db->where('id_armada',$id);
        $query = $this->db->delete('tb_armada');
        return $query;
    } 

    public function update_status_pengiriman($id=null)
    {
        $data = array(
            'status_pengiriman' => $this->input->post('status_pengiriman'), 
        );

        $this->db->where('id',$id);
        $query  = $this->db->update('tb_pengiriman',$data);
        return $query;
    }

    public function tambah_barang()
    {
        $data = array(
            'nama_barang' => $this->input->post('nama_barang'), 
            'harga_barang' => $this->input->post('harga_barang'), 
        );

        $query = $this->db->insert('tb_barang',$data);
        return $query;
    }    
    public function edit_barang($id=null)
    {
        $data = array(
            'nama_barang' => $this->input->post('nama_barang'), 
            'harga_barang' => $this->input->post('harga_barang'), 
        );
        $this->db->where('id_barang',$id);
        $query = $this->db->update('tb_barang',$data);
        return $query;
    }
    public function hapus_barang($id=null)
    {
        $this->db->where('id_barang',$id);
        $query = $this->db->delete('tb_barang');
        return $query;
    } 

    public function tambah_pengirim_nama_vendor()
    {
        $jangka_waktu = date('Y-m-d',strtotime($this->input->post('jangka_waktu')));        
        $data = array(
            'id_vendor'       => $this->input->post('nama_pabrik'), 
            'no_po'         => $this->input->post('no_po'), 
            'jangka_waktu'  => $jangka_waktu, 
        );
        $query = $this->db->insert('tb_vendor_pengirim',$data);
        return $query;
    }

    public function tambah_pengirim_vendor($namabarang=null,$key=null)
    {
        $userid = $this->session->userdata('user_id');
        $jangka_waktu = date('Y-m-d',strtotime($this->input->post('jangka_waktu')));
        $tgl_muat = date('Y-m-d',strtotime($this->input->post('tgl_muat')));
        $data = array(
            'id_vendor'   => $this->input->post('nama_pabrik'), 
            'no_po'         => $this->input->post('no_po'), 
            'jangka_waktu'  => $jangka_waktu,
            'created_by'    => $userid,

            'nama_barang'   => $this->input->post('nama_barang'),
            'tgl_muat'      => $tgl_muat,
            'dari'          => $this->input->post('dari'),
            'tujuan'        => $this->input->post('tujuan'),
            'keterangan'    => $this->input->post('keterangan'),
            'armada'        => $this->input->post('armada'),
            'jumlah_barang' => $this->input->post('jumlah_barang'),
            'nilai_inv'      => $this->input->post('nilai_inv'),
        );

        $query = $this->db->insert('tb_pengirim_vendor',$data);
        return $query;
    }
    public function edit_pengiriman_vendor($id=null)
    {

        $jangka_waktu = date('Y-m-d',strtotime($this->input->post('jangka_waktu')));
        $tgl_muat = date('Y-m-d',strtotime($this->input->post('tgl_muat')));


        $data = array(
            'jangka_waktu'  => $jangka_waktu,
            'tgl_muat'      => $tgl_muat,
            'nama_barang'   => $this->input->post('nama_barang'),
            'dari'          => $this->input->post('dari'),
            'tujuan'        => $this->input->post('tujuan'),
            'keterangan'    => $this->input->post('keterangan'),
            'armada'        => $this->input->post('armada'),
            'jumlah_barang' => $this->input->post('jumlah_barang'),
            'nilai_inv'     => $this->input->post('nilai_inv'),
        );
        $this->db->where('id_pengirim',$id);
        $query = $this->db->update('tb_pengirim_vendor',$data);
        return $query;
    }    
    public function vendor_lunas($id=null)
    {

        $status = "LUNAS";
        $data = array(
            'status'  => $status,
        );

        $this->db->where('id_pengirim',$id);
        $query = $this->db->update('tb_pengirim_vendor',$data);
        return $query;
    }    
    public function vendor_batal_lunas($id=null)
    {

        $status = "";
        $data = array(
            'status'  => $status,
        );

        $this->db->where('id_pengirim',$id);
        $query = $this->db->update('tb_pengirim_vendor',$data);
        return $query;
    }

    public function hapus_pengirim($id=null){

        $this->db->where('id_pengirim',$id);
        $query = $this->db->delete('tb_pengirim_vendor');
        return $query;
    }
    public function update_profile($id=null)
    {

        $data = array(
            'email' => $this->input->post('email'), 
            'nama' => $this->input->post('nama'), 
            'telp' => $this->input->post('telp'), 
        );
        $this->db->where('user_id',$id);
        $query = $this->db->update('tb_user',$data);
        return $query;
    }   
     public function ganti_password($id=null)
    {
        $pass = md5($this->input->post('password'));
        $data = array(
            'password' => $pass,
        );
        $this->db->where('user_id',$id);
        $query = $this->db->update('tb_user',$data);
        return $query;
    }

    public function tambah_harga_vendor($id=null)
    {
        $data = array(
            'id_vendor' => $id, 
            'dari'      => $this->input->post('dari'), 
            'tujuan'    => $this->input->post('tujuan'), 
            'armada'    => $this->input->post('armada'), 
            'harga'     => $this->input->post('harga'), 
        );

        $query =$this->db->insert('tb_harga_vendor',$data);
        return $query;
    }   
    public function edit_harga_vendor($id=null,$idvendor=null)
    {
        $data = array(
            'dari'      => $this->input->post('dari'), 
            'tujuan'    => $this->input->post('tujuan'), 
            'armada'    => $this->input->post('armada'), 
            'harga'     => $this->input->post('harga'), 
        );
        $this->db->where('id_harga',$id);
        $query =$this->db->update('tb_harga_vendor',$data);
        return $query;
    }

    public function hapus_harga_vendor($id=null)
    {
        $this->db->where('id_harga',$id);
        $query = $this->db->delete('tb_harga_vendor');
        return $query;
    }

    public function tambah_invoice(){
        $dpp = $this->input->post('dpp');
        $tgl_inv = date('Y-m-d',strtotime($this->input->post('tgl_inv')));
        $ppn = ($dpp * 1) / 100;
        $total = $dpp + $ppn;
        $data = array(
            'id_cust'           => $this->input->post('nama_pabrik'), 
            'no_inv'            => $this->input->post('no_inv'), 
            'description'       => $this->input->post('description'),             
            'tgl_inv'           => $tgl_inv, 
            'dpp'               => $dpp, 
            'ppn'               => $ppn, 
            'total'             => $total, 
        );
        $query = $this->db->insert('tb_invoice',$data);
        return $query;
    }    
    public function edit_invoice($id=null){
        $dpp = $this->input->post('dpp');
        $tgl_inv = date('Y-m-d',strtotime($this->input->post('tgl_inv')));
        $ppn = ($dpp * 1) / 100;
        $total = $dpp + $ppn;
        $data = array(
            'id_cust'           => $this->input->post('nama_pabrik'), 
            'no_inv'            => $this->input->post('no_inv'), 
            'description'       => $this->input->post('description'), 
            'tgl_inv'           => $tgl_inv, 
            'dpp'               => $dpp, 
            'ppn'               => $ppn, 
            'total'             => $total, 
        );
        $this->db->where('id_inv',$id);
        $query = $this->db->update('tb_invoice',$data);
        return $query;
    }

    public function hapus_invoice($id=null)
    {
        $this->db->where('id_inv',$id);
        $query = $this->db->delete('tb_invoice');
        return $query;       
    }    
    public function lunas_invoice($id=null)
    {
        $status = "LUNAS";
        $data = array('status_inv' => $status, );
        $this->db->where('id_inv',$id);
        $query = $this->db->update('tb_invoice',$data);
        return $query;       
    }    
    public function batal_lunas_invoice($id=null)
    {
        $status = "";
        $data = array('status_inv' => $status, );
        $this->db->where('id_inv',$id);
        $query = $this->db->update('tb_invoice',$data);
        return $query;       
    }
}
