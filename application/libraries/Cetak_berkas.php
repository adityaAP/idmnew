<?php if ( !defined('BASEPATH')) exit();
class Cetak_berkas
{
    function __construct()
    {
    	$this->_ci = &get_instance();
        $this->_ci->load->library(array('myfpdf','tgl_indonesia','kode_converter'));
    }


 	function invoice($invoice)
 	{
 		$no = 1;
 		if (isset($invoice)) {
 			// print_r($pengiriman);
		$this->_ci->myfpdf->SetMargins(15,15,15);
		$this->_ci->myfpdf->AddPage('L','A4');

		$this->_ci->myfpdf->SetFont('Arial','B',50);
		$this->_ci->myfpdf->Cell(200,8,'',0,0);		
		$this->_ci->myfpdf->SetFont('Arial','',15);
		$this->_ci->myfpdf->Cell(60,8,'PT.INTAN DAYA MANDIRI',0,1,'R');
		$this->_ci->myfpdf->SetFont('Arial','B',50);		
		$this->_ci->myfpdf->Cell(200,8,'INVOICE',0,0);	
		$this->_ci->myfpdf->SetFont('Arial','',15);
		$this->_ci->myfpdf->Cell(60,8,"Mutiara Gading blok E nomor 5Jl",0,1,'R');
		$this->_ci->myfpdf->Cell(200,8,'',0,0);			
		$this->_ci->myfpdf->Cell(60,8,'. Ketileng, Klipang, Semarang, Jawa Tengah',0,1,'R');
		$this->_ci->myfpdf->Cell(200,8,'',0,0);			
		$this->_ci->myfpdf->Cell(60,8,'50272',0,1,'R');
		$this->_ci->myfpdf->ln();

		$dpp = "Rp ".number_format($invoice['dpp'],2,',','.');
		$ppn = "Rp ".number_format($invoice['ppn'],2,',','.');
		$total = "Rp ".number_format($invoice['total'],2,',','.');
		$datas[]=array("No","Nomor Invoice","Description","DPP","PPN 1%","Total");
		$no=1;
		$datas[] = array($no,$invoice['no_inv'],$invoice['description'],$dpp,$ppn,$total);
		$this->_ci->myfpdf->SetFont('Arial','B',12);
		$this->_ci->myfpdf->SetWidths(array(12,60,70,40,40,40));
		foreach ($datas as $data) {
			$this->_ci->myfpdf->row($data,2);
			$this->_ci->myfpdf->SetFont('Arial','',11);
		}

		$this->_ci->myfpdf->Output('temp/invoice_'.$invoice['id_inv'].'.pdf','F');			
 		}else{
		$this->_ci->myfpdf->SetMargins(10,5,10);
		$this->_ci->myfpdf->AddPage('L','legal');
		$this->_ci->myfpdf->SetFont('Arial','B',15);
		$this->_ci->myfpdf->Cell(8, 0.75, "DATA TIDAK ADA", '0', '1', 'L', false);

		$this->_ci->myfpdf->Output('temp/invoice_'.$invoice['id_inv'].'.pdf','F');	 			
 		}
 	}
		
}
