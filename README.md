
# Document Management System

In this project you can find:\
-> A form to get student infos and type of wanted Document\
-> A login page for admin only\
-> A dashBorad for the last added processed and not yet processed documents\
->A page to processe non processed Document\
->A page containing processed documents

:warning: WampServer is what we used for the server\
change username,password and dataBase in */php/connexion.php*


## Processing Documents

Processing a document means:
+ Send a PDF file to the student's E-Mail
+ OR Send a mail with the reason of declaning the demand




## Documentation

To Send An Email we used PHPMAILER:
[Documentation](https://github.com/PHPMailer/PHPMailer/blob/master/docs/README.md)\
To Create A PDF File we used fpdf186:
[Documentation](http://www.fpdf.org/)



