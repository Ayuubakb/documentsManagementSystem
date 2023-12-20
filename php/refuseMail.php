<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../phpmailer/src/Exception.php';
require '../phpmailer/src/PHPMailer.php';
require '../phpmailer/src/SMTP.php';

require('../php/connexion.php');

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

$q=$_REQUEST['q'];
$f=$_REQUEST['f'];
$l=$_REQUEST['l'];
$em=$_REQUEST['e'];
$id=$_REQUEST['id'];

$query="UPDATE ".$q." SET status=2 WHERE id=".$id.";";

$req=mysqli_query($connection,$query);

if(!strcmp($q,"demanderel")){
    $q="Votre demande de relevee de note a été refuser";
}else if(!strcmp($q,"demandeconv")){
    $q="Votre demande de convention de stage a été refuser";
}else{
    $q="Votre demande d'attestation de scolarité a été refuser";
}

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'akoubriayoub@gmail.com';                     //SMTP username
    $mail->Password   = 'cxbwlbjbdeuacarn';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('akoubriayoub@gmail.com', 'ENSATE SCOLARITEE');
    $mail->addAddress($em, $l." ".$f);     //Add a recipient
    /*//Attachments
    $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name*/

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Refus de document';
    $mail->Body    = $q;

    $mail->send();
    echo "true";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}