<?php


require './PHPMailer/PHPMailerAutoload.php';                     // localise le fichier PHPMailerAutoload

$mail = new PHPMailer;

$mail->CharSet = "UTF-8";   //encodage utilisé
$mail->isSMTP();
$mail->Host = 'smtp.laposte.net';                              // Server SMTP
$mail->SMTPAuth = true;                                      // Si il y à une authentification
$mail->Username = 'mailer.php@laposte.net';                 // SMTP mail
$mail->Password = '123456Seven';                           // SMTP pass
$mail->SMTPSecure = '';                                   // Encryption en TLS ou SSL
$mail->Port = 587;                                       // Port TCP du server SMTP

$mail->setFrom('mailer.php@laposte.net', 'Mailer');                      //Ton MailAddresse
$mail->addAddress('vincent.gerard70@gmail.com', 'Joe User');            // Celui qui receptionne
$mail->addReplyTo('mailer.php@laposte.net', 'Information');            // Pour le réponse
$mail->Subject = 'Salut Cedric';                                     //Sujet du eMail
$mail->Body = 'ééééééééééééèàèéàèéàèéàèéàèéàéèàéè';                 //Body du eMail

if(!$mail->send()) {
    echo 'Message could not be sent.';                               //Si ton message ne s'envoie pas
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
else {                                                              //Si envoyé

header('location: ./confirmation.html');                            //Retourne la page de confirmation

}
