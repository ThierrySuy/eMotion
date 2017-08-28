<?php

/*$name=$_POST['name'];
$email=$_POST['email'];
$monmessage=$_POST['monmessage'];
$headers = "From: suy.thierry21@gmail.com" . "\r\n" .

mail($email, $monmessage, $name, $headers, "suy.thierry21@gmail.com");

$to      = 'suy.thierry21@gmail.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: suy.thierry21@gmail.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

 
/*$to = "suy.thierry21@gmail.com";
$subject = "Mon Contact Form";
$message = " Name: " . $name . "\r\n City: " . $city . "\r\n Phone: " . $phone . "\r\n Email: " . $email . "\r\n Monmessage: " . $monmessage;
 
 
$from = "Blueseodesign"
$headers = "From:" . $from . "\r\n";
$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; */


$destinataire = 'suy.thierry21@gmail.com';
// Pour les champs $expediteur / $copie / $destinataire, séparer par une virgule s'il y a plusieurs adresses
$expediteur = 'suy.thierry21@gmail.com';

$objet = 'Test'; // Objet du message
$headers  = 'MIME-Version: 1.0' . "\n"; // Version MIME
$headers .= 'Reply-To: '.$expediteur."\n"; // Mail de reponse
$headers .= 'From: "Nom_de_expediteur"<'.$expediteur.'>'."\n"; // Expediteur
$headers .= 'Delivered-to: '.$destinataire."\n"; // Destinataire
     
$message = 'Un Bonjour de Developpez.com!';
if (mail($destinataire, $objet, $message, $headers)) // Envoi du message
{
    echo 'Votre message a bien été envoyé ';
}
else // Non envoyé
{
    echo "Votre message n'a pas pu être envoyé";
}
 
?>