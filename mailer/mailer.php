<?php  
include("class.phpmailer.php");
include("class.smtp.php");
date_default_timezone_set("Europe/Paris");
header('Location: http://www.lemonde.fr/');
 
$mail             = new PHPMailer();
 
$body             =  "Pr�nom : " . $_POST['firstName'] . "<br/>Nom : " . $_POST['lastName'] 
		. "<br/>Message : " . $_POST['message'] . "<br/>Email : " . $_POST['email'];
 
$mail->IsSMTP();
$mail->SMTPAuth   = true;
$mail->Host       = "mail.takedoc.fr";  
$mail->Port       = 25;             
 
$mail->Username   = "contact@takedoc.fr";
$mail->Password   = "Kerenann06041979";        
$mail->From       = "contact@takedoc.fr"; //adresse d�envoi correspondant au login entr�e pr�c�dement
$mail->FromName   = "Contact TakeDoc.fr"; // nom qui sera affich�
$mail->Subject    = "Vous avez un nouveau contact TakeDoc.fr :" . $_POST['email']; // sujet
$mail->AltBody    = "Vous avez un contact"; //Body au format texte

$mail->WordWrap   = 50; // nombre de caractere pour le retour a la ligne automatique
$mail->MsgHTML($body);
 
$mail->AddReplyTo("no-reply@takedoc.fr","no-reply");
//$mail->AddAttachment("./examples/images/phpmailer.gif");             // pi�ce jointe si besoin
$mail->AddAddress("contact@takedoc.fr");
$mail->IsHTML(true); // envoyer au format html, passer a false si en mode texte
 
if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Le message � bien �t� envoy�. L'�quipe TakeDoc vous remercie.";
}
 
?>