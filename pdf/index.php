<?php
	require 'fpdf/fpdf.php';
	$pdf = new FPDF();
	$pdf ->AddPage();
	$pdf ->SetFont('Arial','B',15);
	$pdf -> setx(50);
	$pdf ->Cell(100, 10, 'Hola', 1 , 1, 'C');
	$pdf ->Cell(100, 10, 'Hola', 1 , 0, 'C');
	$pdf ->Output();

?>