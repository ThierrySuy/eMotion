<?php
mb_internal_encoding('UTF-8'); 
session_start(); 
require('invoice.php');


$bdd = new PDO('mysql:host=localhost;dbname=emotion', 'root', '');

$id_loc = $_GET['loc'];



$pdf = new PDF_Invoice( 'P', 'mm', 'A4' );
$pdf->AddPage();
$pdf->addSociete( "Emotion",
                  "24 Rue de Rennes\n" .
                  "75006 PARIS\n".
                  "Capital : 120000 " . EURO );
$pdf->fact_dev( "Devis", "TEMPO" );
$pdf->temporaire( "Emotion" );
$pdf->addDate( "03/03/1995");
$pdf->addClient("CL01");
$pdf->addPageNumber("1");
$pdf->addClientAdresse("Ste\nM. XXXX\n3ème étage\n33, rue d'ailleurs\n75000 PARIS");
$pdf->addReglement("Chèque à réception de facture");
$pdf->addEcheance("03/03/1995");
$pdf->addNumTVA("FR888777666");
$pdf->addReference("Devis ... du ....");
$cols=array( "ID VEHICULE"    => 23,
             "VEHICULE"  => 78,
             "QUANTITE"     => 22,
             "PRIX PAR JOUR"      => 26,
             "MONTANT H.T." => 30,
             "TVA"          => 11 );
$pdf->addCols( $cols);
$cols=array( "ID VEHICULE"    => "L",
             "VEHICULE"  => "L",
             "QUANTITE"     => "C",
             "PRIX PAR JOUR"      => "R",
             "MONTANT H.T." => "R",
             "TVA"          => "C" );
$pdf->addLineFormat( $cols);
$pdf->addLineFormat($cols);


$recup = $bdd->query("SELECT * FROM location WHERE id_location  = '$id_loc'");

   while ( $ligne = $recup->fetch()) {
 
  $numero_serie = $ligne['numero_serie'];
  
 } 

 $donnees2 = $bdd->query("SELECT * FROM vehicule WHERE numero_serie = '$numero_serie'");

  while ($ligne2 = $donnees2->fetch()) {
 
  $marque = $ligne2['marque'];
  $modele = $ligne2['modele'];
  $prix = $ligne2['prix'];


 } 

$y    = 109;
$line = array( "ID VEHICULE"    => "$numero_serie",
               "VEHICULE"  => "$marque $modele",
               "QUANTITE"     => "1",
               "PRIX PAR JOUR"      => "$prix",
               "MONTANT H.T." => "$prix",
               "TVA"          => "20%" );
$size = $pdf->addLine( $y, $line );
$y   += $size + 2;

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
$tot_prods = array( array ( "px_unit" => 600, "qte" => 1, "tva" => 1 ),
                    array ( "px_unit" =>  10, "qte" => 1, "tva" => 1 ));
$tab_tva = array( "1"       => 19.6,
                  "2"       => 5.5);
$params  = array( "RemiseGlobale" => 1,
                      "remise_tva"     => 1,       // {la remise s'applique sur ce code TVA}
                      "remise"         => 0,       // {montant de la remise}
                      "remise_percent" => 10,      // {pourcentage de remise sur ce montant de TVA}
                  "FraisPort"     => 1,
                      "portTTC"        => 10,      // montant des frais de ports TTC
                                                   // par defaut la TVA = 19.6 %
                      "portHT"         => 0,       // montant des frais de ports HT
                      "portTVA"        => 19.6,    // valeur de la TVA a appliquer sur le montant HT
                  "AccompteExige" => 1,
                      "accompte"         => 0,     // montant de l'acompte (TTC)
                      "accompte_percent" => 15,    // pourcentage d'acompte (TTC)
                  "Remarque" => "Avec un acompte, svp..." );

$pdf->addTVAs( $params, $tab_tva, $tot_prods);
$pdf->addCadreEurosFrancs();
$pdf->Output();
?>