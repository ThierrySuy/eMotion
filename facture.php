<?php
// (c) Xavier Nicolay
// Exemple de génération de devis/facture PDF

require('invoice.php');

header('Content-Type: text/html; charset=utf-8');

$pdf = new PDF_Invoice( 'P', 'mm', 'A4' );
$pdf->AddPage();
$pdf->addSociete( "Emotion",
                  "24 Rue de Rennes, 75006 Paris\n" .
                  "75006 PARIS\n".
                  "Capital : 120.000 " . EURO );
$pdf->fact_dev( "Devis","Temporaire" ); 
$pdf->addDate( "03/12/2003"); // Donnée dynamique
$pdf->addClient("CL01"); // Donnée dynamique
$pdf->addPageNumber("1");
$pdf->addClientAdresse("Ste\nM. XXXX\n3eme etage\n33, rue Didier Druiot\n75000 PARIS"); // Donnée dynamique
$pdf->addReglement("Cheque a reception de facture");
$pdf->addEcheance("03/12/2003");
$pdf->addNumTVA("FR888777666");
$pdf->addReference("Devis ... du ....");
$cols=array( "ID VEHICULE"    => 23,
             "VEHICULE"  => 78,
             "NB JOUR"     => 22,
             "P.U. HT"      => 26,
             "MONTANT H.T." => 30,
             "TVA"          => 11 );
$pdf->addCols( $cols);
$cols=array( "ID VEHICULE"    => "L",
             "VEHICULE"  => "L",
             "NB JOUR"     => "C",
             "P.U. HT"      => "R",
             "MONTANT H.T." => "R",
             "TVA"          => "C" );
$pdf->addLineFormat( $cols);
$pdf->addLineFormat($cols);

$y    = 109;
$line = array( "ID VEHICULE"    => "REF1", // Données dynamique
               "VEHICULE"  => "Mercedes Classe C\n" , // Données dynamique
               "NB JOUR"     => "1\n" , // Données dynamique
               "P.U. HT"      => "60.000", // Données dynamique
               "MONTANT H.T." => "60.000", // Données dynamique
               "TVA"          => "1" ); // Données dynamique
$size = $pdf->addLine( $y, $line );
$y   += $size + 2;

/*$line = array( "REFERENCE"    => "REF2",
               "DESIGNATION"  => "Câble RS232",
               "QUANTITE"     => "1",
               "P.U. HT"      => "10.00",
               "MONTANT H.T." => "60.00",
               "TVA"          => "1" );
$size = $pdf->addLine( $y, $line );
$y   += $size + 2;*/

$pdf->addCadreTVAs();
        
// invoice = array( "px_unit" => value,
//                  "qte"     => qte,
//                  "tva"     => code_tva );
// tab_tva = array( "1"       => 19.6,
//                  "2"       => 5.5, ... );
// params  = array( "RemiseGlobale" => [0|1],
//                      "remise_tva"     => [1|2...],  // {la remise s'applique sur ce code TVA}
//                      "remise"         => value,     // {montant de la remise}
//                      "remise_percent" => percent,   // {pourcentage de remise sur ce montant de TVA}
//                  "FraisPort"     => [0|1],
//                      "portTTC"        => value,     // montant des frais de ports TTC
//                                                     // par defaut la TVA = 19.6 %
//                      "portHT"         => value,     // montant des frais de ports HT
//                      "portTVA"        => tva_value, // valeur de la TVA a appliquer sur le montant HT
//                  "AccompteExige" => [0|1],
//                      "accompte"         => value    // montant de l'acompte (TTC)
//                      "accompte_percent" => percent  // pourcentage d'acompte (TTC)
//                  "Remarque" => "texte"              // texte
$tot_prods = array( array ( "px_unit" => 600, "qte" => 1, "tva" => 1 ), // Données dynamique
                    array ( "px_unit" =>  10, "qte" => 1, "tva" => 1 )); // Données dynamique
$tab_tva = array( "1"       => 19.6, // Données dynamique
                  "2"       => 5.5); // Données dynamique
$params  = array( "RemiseGlobale" => 1,
                      "remise_tva"     => 1,       // {la remise s'applique sur ce code TVA} // Données dynamique
                      "remise"         => 0,       // {montant de la remise} // Données dynamique
                      "remise_percent" => 10,      // {pourcentage de remise sur ce montant de TVA} // Données dynamique
                  "FraisPort"     => 1,
                      "portTTC"        => 10,      // montant des frais de ports TTC // Données dynamique
                                                   // par defaut la TVA = 19.6 % // Données dynamique
                      "portHT"         => 0,       // montant des frais de ports HT // Données dynamique
                      "portTVA"        => 19.6,    // valeur de la TVA a appliquer sur le montant HT // Données dynamique
                  "AccompteExige" => 1,
                      "accompte"         => 0,     // montant de l'acompte (TTC) // Données dynamique
                      "accompte_percent" => 15,    // pourcentage d'acompte (TTC) // Données dynamique
                  "Remarque" => "Avec un acompte, svp..." );

$pdf->addTVAs( $params, $tab_tva, $tot_prods);
$pdf->addCadreEurosFrancs();
$pdf->Output();
?>