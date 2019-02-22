<?php



if(!empty($_POST["pdf_submit"])){

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$position = $_POST["position"];
$number = $_POST["number"];
$new_file_name = $_POST["file"];








require("fpdf.php");
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Business card',0,1);
$pdf->Cell(50,10, 'Name:'.$firstname.'', 0, 1);
$pdf->Cell(50,10, 'Lastname:'.$lastname.'', 0, 1);
$pdf ->Cell(50,10, 'Position:'.$position.'',0,1);
$pdf ->Cell(50,10, 'Number:'.$number.'',0,1);
$pdf ->image('media/'.$new_file_name.'',10,60,70,60);
$pdf->Output();







}


?>