<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
	
    // Arial bold 15
    $this->SetFont('Arial','B',16);
    // Movernos a la derecha
    $this->Cell(60);
    // Título
    $this->Cell(70,10,'Resenas',0,0,'C');
    // Salto de línea
    $this->Ln(20);

    $this->Cell(80,10,'No. Resena',1,0,'C',0);
	$this->Cell(50,10,'Remitente',1,0,'C',0);
	$this->Cell(50,10,'Comentario',1,1,'C',0);
  
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página') .$this->PageNo().'/{nb}',0,0,'C');
}
}

require $_SERVER['DOCUMENT_ROOT'] . "/xampp/purificadora/conexionBD/conexion.php";
$consulta = "SELECT * FROM resenas";
$resultado = mysqli_query($mysqli, $consulta);

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',10);

while ($row=$resultado->fetch_assoc()) {
	$pdf->Cell(80,10,$row['noResena'],1,0,'C',0);
	$pdf->Cell(50,10,$row['remitente'],1,0,'C',0);
	$pdf->Cell(50,10,$row['comentario'],1,1,'C',0);

} 


	$pdf->Output();
?>