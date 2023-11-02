<?php
use FPDF as GlobalPDF;
require('fpdf/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetMargins(20, 20, 20);
$pdf->SetFont('Arial', 'B', 13);
$pdf->Image('imagenes/g.jpg', 20, 10, 100, 0);

//Informacion de la empresa
$pdf->SetMargins(20, 20, 20);
$pdf->SetFont('Arial', 'B', 13);
$pdf->Cell(80, 80, "Direccion:");
$pdf->SetFont('Arial', '', 13);
$pdf->SetX(40);
$pdf->Cell(0, 80, "San Juan 1451 - Mendoza");

$pdf->SetFont('Arial', 'B', 13);
$pdf->SetX(120);
$pdf->Cell(0, 80, "Telefono:");
$pdf->SetFont('Arial', '', 13);
$pdf->SetX(150);
$pdf->Cell(0, 80, " 261-0000000");

$pdf->SetY(55);
$pdf->SetFont('Arial', 'B', 13);
$pdf->Cell(90, 0, "Email:");
$pdf->SetFont('Arial', '', 13);
$pdf->SetX(40);
$pdf->Cell(90, 0, " giigashoop@gmail.com");
$pdf->Ln();
$pdf->SetFont('Arial', 'B', 20);
$pdf->Cell(0, 30, 'Ticket de Compra', 0, 1, 'C');
$pdf->Ln();

//Informacion del Cliente
$nombre = $_SESSION["nombre"];
$apellido = $_SESSION["apellido"];
$dni = $_SESSION["dni"];
$email = $_SESSION["email"];
$telefono = $_SESSION["telefono"];

$pdf->SetY(80);
$pdf->SetFont('Arial', 'B', 13);
$pdf->Cell(90, 0, "Cliente:");
$pdf->SetFont('Arial', '', 13);
$pdf->SetX(40);
$pdf->Cell(90, 0, ucfirst($nombre . " " . $apellido));
$pdf->Cell(90, 0, '');

$pdf->SetFont('Arial', 'B', 13);
$pdf->SetX(110);
$pdf->Cell(90, 0, "D.N.I:");
$pdf->SetFont('Arial', '', 13);
$pdf->SetX(130);
$pdf->Cell(90, 0, $dni);


$pdf->SetY(90);
$pdf->SetFont('Arial', 'B', 13);
$pdf->Cell(90, 0, "Telefono:");
$pdf->SetFont('Arial', '', 13);
$pdf->SetX(45);
$pdf->Cell(90, 0, $telefono);
$pdf->SetX(40);


$pdf->SetFont('Arial', 'B', 13);
$pdf->SetX(110);
$pdf->Cell(90, 0, "Email:");
$pdf->SetFont('Arial', '', 13);
$pdf->SetX(130);
$pdf->Cell(90, 0, $email);


$pdf->SetY(100);
$pdf->Ln();
$pdf->SetFont('Arial', 'B', 13);
$pdf->Cell(40, 10, 'Cantidad', 1, 0, 'C');
$pdf->Cell(100, 10, 'Descripcion', 1, 0, 'C');
$pdf->Cell(40, 10, 'Precio', 1, 1, 'C');

$total = 0;
$subtotal = 0;
foreach ($_SESSION["carrito_aux"] as $articulo) {
    $pdf->SetFont('Arial', '', 10);
    $pdf->Cell(40, 10, $articulo["cantidad"], 1, 0, 'C');
    $pdf->Cell(100, 10, $articulo["nombre"], 1, 0, 'C');
    $pdf->Cell(40, 10, $articulo["precio"], 1, 1, 'C');

    // Totales
    $subtotalArticulo = $articulo["precio"] * $articulo["cantidad"];
    $subtotal = $subtotalArticulo;
    $ivaArticulo = $subtotalArticulo * 0.21;
    $total = $total + $subtotalArticulo + $ivaArticulo;
}

$pdf->SetX(130);
$pdf->SetFont('Arial', 'B', 13);
$pdf->Cell(30, 10, '  Subtotal', 1, 0);
$pdf->SetFont('Arial', '', 13);
$pdf->Cell(40, 10, $subtotal, 1, 1, 'C');
$pdf->SetX(130);
$pdf->SetFont('Arial', 'B', 13);
$pdf->Cell(30, 10, '  IVA', 1, 0);
$pdf->SetFont('Arial', '', 13);
$pdf->Cell(40, 10, $ivaArticulo, 1, 1, 'C');
$pdf->SetX(130);
$pdf->SetFont('Arial', 'B', 13);
$pdf->Cell(30, 10, '  Total', 1, 0);
$pdf->SetFont('Arial', '', 13);
$pdf->Cell(40, 10, $total, 1, 1, 'C');

$pdf->AliasNbPages();
$pdf->Output();

?>
