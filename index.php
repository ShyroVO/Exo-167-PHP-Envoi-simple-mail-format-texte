<?php

/**
 * 1. Complétez $from et $to ( évitez d'utiliser la même adresse mail )
 * 2. Envoyez un mail avec ces informations, si certaines choses manquent, complétez
 * 3. Déployez sur votre serveur et testez !
 */

$from = 'personne@example.com';
$to = 'rarovar914@200cai.com';
/*
$subject = 'Sujet';
$header = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
$message = 'Hello World, sending a simple mail !';
// TODO Votre code ici.

mail($to, $subject, $message, $header);
*/

/**
 * 4. Commentez le code précédent, mais gardez les variables $from et $to
 * 5. Définissez un message long d'au moins 120 caractères au choix.
 * 6. Faites en sorte de couper la phrase puisqu'elle fera plus de 70 caractères
 * 7. Envoyez le mail.
 * 8. En cas d'erreur, affichez le message: Une erreur est survenue lors de l'envoi du mail
 * 9. En cas de succès, affichez le message: Le message a bien été envoyé. Merci !
 * 10. Faites en sorte que chaque message envoyé soit enregistré dans un fichier 'mails.txt'
 *     Les valeurs à enregistrer SUR UNE SEULE LIGNE sont: $message, $to
 *     N'écrasez pas les valeurs déjà existantes ( s'il y en a ).
 */
// TODO Votre code ici.
$message = "AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa";
$subject = "Sujet";
$header = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
$message = wordwrap($message, 70, "\r\n");

$sucess = mail($to, $subject, $message, $header);

if ($sucess){
    echo "Envois reussis";
    $errorMessage = error_get_last()['message'];
    fopen('mails.txt', 'w', '\n');
    file_put_contents('mails.txt', $message);
}
else{
    echo "Erreur dans l'envois";
}