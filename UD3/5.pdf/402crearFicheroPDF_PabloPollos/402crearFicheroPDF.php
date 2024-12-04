<?php
    include('conexion+consulta.php');
    require ('C:\Users\pablo.poligl.1\Documents\xampp\htdocs\fpdf\fpdf.php');
    //require('C:\xampp\htdocs\fpdf.php');

    class PDF extends FPDF
    {
    // Page header
    function Header()
    {
        // Logo
        $this->Image('logo.png',10,6,30);
        // Arial bold 15
        $this->SetFont('Arial','B',15);
        // Move to the right
        $this->Cell(80);
        // Title
        $this->Cell(30,10,'Pablo Pollos Iglesias',1,0,'C');
        // Line break
        $this->Ln(20);
    }

    // Page footer
    function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Page number
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }
    }

    // Instanciation of inherited class
    $pdf = new PDF();
    $pdf->AliasNbPages();
    /*
    for($i=1;$i<=40;$i++){
        $pdf->Cell(0,10,'Printing line number '.$i,0,1);
    }
    */
    $arc = fopen('fichero_salida.txt',"r");
    while(! feof($arc))  {
        $pdf->AddPage();
        $pdf->SetFont('Times','',12);
        $linea = fgets($arc);
        $pdf->Cell(0,10,$linea,0,1);
        $linea = fgets($arc);
        $pdf->Cell(0,10,$linea,0,1);
    }
    fclose($arc);
    $pdf->Output('PabloPollos.pdf','D');
?>
