"SELECT img FROM vehicule WHERE disponibilite = 0 AND modele = ".$modele." AND ville = ".$ville." AND type_vehicule = ".$type_vehicule." AND prix_achat = ".$prix_achat." AND couleur = ".$couleur." AND date_achat = ".$date_achat.""



$ville = $_POST["ville"];
$disponibilite = $_POST["disponibilite"];
$modele = $_POST["modele"];
$ville = $_POST["paris"];:
$type_vehicule = $_POST["type_vehicule"];
$prix_achat = $_POST["prix_achat"];
$couleur = $_POST["couleur"];
$date_achat = $_POST["date_achat"];


SELECT img FROM vehicule WHERE disponibilite = 0 AND modele = $modele AND 

$date_prise = SELECT * FROM vehicule WHERE date_prise = $date_prise;
$date_rendu = SELECT * FROM vehicule WHERE date_rendu = $date_rendu;

if ($date_debut => $rec['date_prise'] AND $date_fin =< $rec['date_rendu']) {
	
	//impossibiliter de reservé

}

else if ($date_debut =< $rec['date_prise'] AND $date_fin => $rec['date_rendu']) {
	
	//reservation ok

}