<?php 

	require('../fpdf/fpdf.php');

	class PDF extends FPDF
	{
		
		function Header()
		{
			$this->Image('../catalogo/logo/logo1.jpeg',25,10,30);
			$this->SetTitle('Recibo Vm Motors');
			$this->SetFont('Arial','B',16);
			$this->Cell(20);
			$this->Cell(20,35,'VM Motors',0,0,'C');
			$this->Ln(20);
		}

		function Footer(){
			$this->SetY(-15);
			$this->SetFont('Arial', 'I', 8);
			$this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
		}
	}

 ?>