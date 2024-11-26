<?php
    require ('C:\Users\pablo.poligl.1\Documents\xampp\htdocs\fpdf\fpdf.php');

    $pdf= new FPDF();
    $pdf -> AddPage();
    $pdf -> SetFont('Arial','B',16);
    $pdf -> Cell (40,10,'PDF generado');
    //$pdf -> Cell (40,100,$contents);
    //Nombre del fichero y opción de descarga
    $pdf -> Output('basico.pdf','D');
    //$pdf->Output('basico.pdf,'I');
?>