
<?php

require('fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(40, 10, 'Facture numero');
$pdf->Output();
$pdf = new PDF();
class PDF extends FPDF {
    
    function Footer() {
        // Positionnement à 1,5 cm du bas
        $this->SetY(-15);
        // Police Arial italique 8
        $this->SetFont('Arial', 'I', 8);
        // Numéro de page centré
        $this->Cell(0, 10, 'Page ' . $this->PageNo(), 0, 0, 'C');
        print_r("test");
    }

}

?>
