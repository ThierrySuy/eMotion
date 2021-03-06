
<?php
mb_internal_encoding('UTF-8'); 
session_start(); 
require('invoice.php');


$bdd = new PDO('mysql:host=localhost;dbname=emotion', 'root', '');

$id_loc = $_GET['loc'];

$recup = $bdd->query("SELECT * FROM location l, user u WHERE u.id_user = l.id_user AND l.id_location  = '$id_loc'"); // requête pour pointer les tables concernant les données du tableau et le client

   while ( $ligne = $recup->fetch()) {
 
  $numero_serie = $ligne['numero_serie'];
  $date_debut = $ligne['date_debut'];
  $date_fin = $ligne['date_fin'];
  $nom = $ligne['nom'];
  $prenom = $ligne['prenom'];
  $adresse = $ligne['adresse'];
  $code_postal = $ligne['code_postal'];
  $ville = $ligne['ville'];
  $id_user = $ligne['id_user'];
  $duree_jour = $ligne['duree_jour'];
  $id_location = $ligne['id_location'];
  
 } 

  $donnees2 = $bdd->query("SELECT * FROM vehicule WHERE numero_serie = '$numero_serie'"); 
  // requête pour pointer sur la tablea: vehicule et récupérer les données de la voiture louée

  while ($ligne2 = $donnees2->fetch()) {
 
  $marque = $ligne2['marque'];
  $modele = $ligne2['modele'];
  $prix = $ligne2['prix'];
  $immatriculation = $ligne2['immatriculation'];
  $couleur = $ligne2['couleur'];
  $annee = $ligne2['annee'];
  
 } 

$pdf = new PDF_Invoice( 'P', 'mm', 'A4' );
$pdf->AddPage();
// information sur notre société
$pdf->addSociete( "Emotion",
                  "24 Rue de Rennes\n" .
                  "75006 PARIS\n".
                  "Capital : 20M " . EURO );
$pdf->fact_dev( "Facture Num.", "$id_location" );
$pdf->temporaire( "Emotion" );
$pdf->addClient("$id_user");
$pdf->addPageNumber("1");
$pdf->addClientAdresse("\n$prenom $nom\n$adresse\n$code_postal $ville");
$pdf->addReglement("Carte Bancaire");
$pdf->addNumTVA("FR888777666");

$cols=array( "NUM. SERIE"    => 23,
             "VEHICULE"  => 78,
             "NB JOUR"     => 22,
             "DATE PRISE"      => 26,
             "MONTANT HT" => 30,
             "TVA"          => 11 );
$pdf->addCols( $cols);
$cols=array( "NUM. SERIE"    => "L",
             "VEHICULE"  => "L",
             "NB JOUR"     => "C",
             "DATE PRISE"      => "R",
             "MONTANT HT" => "R",
             "TVA"          => "C" );
$pdf->addLineFormat( $cols);
$pdf->addLineFormat($cols);



$y    = 109;

// attribution des données récupérées dans le tableau avec les libellés correspondant
$line = array( "NUM. SERIE"    => "$numero_serie",
               "VEHICULE"  => "$marque $modele $immatriculation $couleur $annee",
               "NB JOUR"     => "$duree_jour",
               "DATE PRISE"      => "$date_debut",
               "MONTANT HT" => "$prix" * "$duree_jour",
               "TVA"          => "20%" );
$size = $pdf->addLine( $y, $line );
$y   += $size + 2;

$pdf->addCadreTVAs();

// calcul du montant final que le client devra payer
$tot_prods = array( array ( "px_unit" => "$prix" * "$duree_jour", "qte" => 1, "tva" => 1 ));
$tab_tva = array( "1"       => 20,
                  "2"       => 5.5);
$params  = array( "RemiseGlobale" => 1,
                      "remise_tva"     => 0,       // {la remise s'applique sur ce code TVA}
                      "remise"         => 0,       // {montant de la remise}
                      "remise_percent" => 10,      // {pourcentage de remise sur ce montant de TVA}
                  "FraisPort"     => 5,
                      "portTTC"        => 10,      // montant des frais de ports TTC
                      "portHT"         => 0,       // montant des frais de ports HT
                      "portTVA"        => 19.6,    // valeur de la TVA a appliquer sur le montant HT
                  "AccompteExige" => 1,
                      "accompte"         => 0,     // montant de l'acompte (TTC)
                      "accompte_percent" => 0,    // pourcentage d'acompte (TTC)
                  "Remarque" => "Avec un acompte, svp..." );

$pdf->addTVAs( $params, $tab_tva, $tot_prods);
$pdf->addCadreEurosFrancs();
$pdf->Output();
?>