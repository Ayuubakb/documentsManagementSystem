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

    $mail = new PHPMailer(true);

    $userMail=$_POST['mail'];
    $objct=$_POST['object'];
    $desc=$_POST['desc'];

    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'akoubriayoub@gmail.com';                     //SMTP username
    $mail->Password   = 'cxbwlbjbdeuacarn';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom($userMail,$userMail);
    $mail->addAddress('ayoubakoubri@gmail.com',"ENSATE SCOLARITE");     //Add a recipient
    //Attachments
    //$mail->addStringAttachment($pdf->Output("S",'Document.pdf'), 'OrderDetails.pdf', $encoding = 'base64', $type = 'application/pdf');
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $objct;
    $mail->Body    = $desc;

    $mail->send()?header('Location:../pages/complaint.php?sent=true'):header('Location:../pages/complaint.php?sent=false');
    
?>