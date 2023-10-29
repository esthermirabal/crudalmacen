<?php 
    require('fpdf/fpdf.php');

    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',20);
    $pdf->Cell(0,30,"Giga SHOP");
    
    $pdf->Ln();
    $pdf->Cell(0,30,$_SESSION["login"]);
    $pdf->Ln();
    $pdf->SetFont('Arial','B',10);
    foreach ($_SESSION["carrito_aux"] as $articulo) {
        $pdf->Cell(150,10,$articulo["nombre"]);
        $pdf->Cell(0,10,$articulo["precio"]);
        $pdf->Ln();

    }
    $pdf->Output();
    
?>
