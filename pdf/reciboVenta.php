<?php 
session_start();
$id=$_GET['id'];

include('plantilla.php');
include('../config.php');
///// query datos con id 93 //
$query = "SELECT s.fecha, CONCAT(u.paterno,' ',u.materno,' ',u.nombres) as uNombres, CONCAT(c.paterno,' ',c.materno,' ',c.nombres)as Nombres, v.total, SUM(d.cantidad) as suma, p.tipo_pago FROM usuario u, cliente c, venta v ,detalle d, moto m, pagos p, salida s WHERE (v.idventa = d.nventa AND c.idcliente = v.idcliente) AND (u.idusuario = v.idusuario) AND (v.idventa = '$id' AND v.estado_venta=2 ) AND d.codmoto = m.codmoto AND p.idpago = v.idpago AND s.idventa=v.idventa";

$result = mysqli_query($link,$query);
$fila = mysqli_fetch_array($result);

///// query para las motos por pre-venta ////
$query2 = "SELECT m.marca, d.cantidad, m.precio, d.importe FROM moto m, detalle d, venta v WHERE m.codmoto = d.codmoto AND d.nventa=v.idventa AND v.idventa = '$id'";

$result1 = mysqli_query($link,$query2);


$pdf = new PDF('p','mm',array(80,180));
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','I',10);
$pdf->Cell(20);
$pdf->Cell(20,5, '(Venta Confirmada)' ,0,1,'C');
$pdf->SetFont('Arial','I',8);
$pdf->Cell(20);
$pdf->Cell(20,5,'Fecha / Hora',0,1,'C'); 
$pdf->Cell(20);
$pdf->Cell(20,2,$fila['0'] ,0,1,'C'); 
$pdf->Cell(-2);
$pdf->Cell(15,8,'Vendedor:',0,0,'L');
$pdf->Cell(20,8, $fila['1'],0,1,'L');
$pdf->Cell(-2);
$pdf->Cell(15,7,'Cliente:',0,0,'L');
$pdf->Cell(20,7, $fila['2'],0,1,'L');
$pdf->Cell(-2);
$pdf->Cell(15,7,'pago:',0,0,'L');
$pdf->Cell(20,7, $fila['5'],0,1,'L');
$pdf->Ln(5);

$pdf->SetFont('Arial','B',8);
$pdf->Cell(15,5,'Detalles',1,0,'C');
$pdf->Cell(15,5,'Cantidad',1,0,'C');
$pdf->Cell(15,5,'Precio',1,0,'C');
$pdf->Cell(15,5,'Importe',1,1,'C');
$pdf->SetFont('Arial','I',8);
while($fila2 = mysqli_fetch_array($result1)){
	$pdf->Cell(15,10,$fila2['0'],1,0,'L');
	$pdf->Cell(15,10,$fila2['1'],1,0,'C');
	$pdf->Cell(15,10,$fila2['2'],1,0,'C');
	$pdf->Cell(15,10,$fila2['3'],1,1,'C');
}
$pdf->Ln(5);
$pdf->Cell(10,10,'Total:',0,0,'L');
$pdf->Cell(20,10,'Bs. '.$fila['total'],0,1,'L');

$pdf->SetFont('Arial','I',8);
$pdf->Ln(5);
$pdf->Cell(15,5,'* No hay devolucion del adelanto por motivos',0,1,'L');
$pdf->Cell(15,5,'   de tramites de las motos.',0,1,'L');
$pdf->Cell(15,5,'* Pago a credito mas el 15%.',0,1,'L');
$pdf->Ln(10);
$pdf->Cell(5);
$pdf->SetFont('Arial','I',11);
$pdf->Cell(15,5,'venta realizada y confirmada',0,1,'L');
$pdf->Cell(15,5,'Gracias por comprar en Vm Motors',0,1,'L');
$pdf->Output();



?>