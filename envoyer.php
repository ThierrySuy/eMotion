
<?php

$destinataire = 'suy.thierry21@gmail.com';

$expediteur = 'suy.thierry21@gmail.com';

$objet = 'Test'; 

$headers  = 'MIME-Version: 1.0' . "\n";
$headers .= 'Reply-To: '.$expediteur."\n"; 
$headers .= 'From: "Nom_de_expediteur"<'.$expediteur.'>'."\n";
$headers .= 'Delivered-to: '.$destinataire."\n";
     
$message = 'Bonjour!';
if (mail($destinataire, $objet, $message, $headers))
{
    echo 'Votre message a bien été envoyé ';
}
else // Non envoyé
{
    echo "Votre message n'a pas pu être envoyé";
}

?>