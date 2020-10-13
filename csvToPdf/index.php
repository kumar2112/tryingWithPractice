<?php
    error_reporting(E_ALL);
    require_once 'TCPDF/tcpdf.php';
    $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
    $pdf->SetFont('times', 'BI', 20);
    
    $txt = "<table>";

    $fileName="sample.csv";
    
    $channel= fopen($fileName,'r');
    while(!feof($channel)){
       $file_data= fgetcsv($channel,1024);
       $data.="<tr><td>".$file_data[0]."</td><td>".$file_data[2]."</td><td>".$file_data[3]."</td><td>".$file_data[4]."</td><td>".$file_data[5]."</td></tr>";

    }
    
    fclose($channel);
    $txt.=$data."</table";
    $pdf->AddPage();
    $pdf->writeHTML($txt, true, false, true, false, '');
    $pdf->Output('example_001.pdf', 'I');
?>
   