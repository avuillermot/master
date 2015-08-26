<?php  
include("class.phpmailer.php");
include("class.smtp.php");
date_default_timezone_set("Europe/Paris");
header('Location: http://www.lequipe.fr/');

$link = mysql_connect("localhost", "uillH_takedocfr", "Cam31122010") or die("Impossible de se connecter : " . mysql_error());
mysql_select_db('uillhot84013com22148_takedocfr',$link); 
echo 'Connexion réussie';

$sql = 'SELECT name,value FROM email_contact'; 
$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 

while($data = mysql_fetch_assoc($req)) 
{ 
	if ($data['name'] == 'USERNAME') $username = $data['value'];
	if ($data['name'] == 'PASSWORD') $password = $data['value'];
	if ($data['name'] == 'SUBJECT') $subject = $data['value'];
	if ($data['name'] == 'FROM') $from = $data['value'];
	if ($data['name'] == 'FROM_NAME') $fromName = $data['value'];
}
mysql_close($link);
 
$mail             = new PHPMailer();
 
$body             =  "Prénom : " . $_POST['firstName'] . "<br/>Nom : " . $_POST['lastName'] 
		. "<br/>Message : " . $_POST['message'] . "<br/>Email : " . $_POST['email'];
 
$mail->IsSMTP();
$mail->SMTPAuth   = true;
$mail->Host       = "mail.takedoc.fr";  
$mail->Port       = 25;             
 
$mail->Username   = $username;
$mail->Password   = $password;        
$mail->From       = $from; //adresse d’envoi correspondant au login entrée précédement
$mail->FromName   = $fromName; // nom qui sera affiché
$mail->Subject    = "Vous avez un nouveau contact TakeDoc.fr :" . $_POST['email']; // sujet
$mail->AltBody    = "Vous avez un contact"; //Body au format texte

$mail->WordWrap   = 50; // nombre de caractere pour le retour a la ligne automatique
$mail->MsgHTML($body);
 
$mail->AddReplyTo("no-reply@takedoc.fr","no-reply");
//$mail->AddAttachment("./examples/images/phpmailer.gif");             // piéce jointe si besoin
$mail->AddAddress("contact@takedoc.fr");
$mail->IsHTML(true); // envoyer au format html, passer a false si en mode texte
 
if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "<script>alert('Le message à bien été envoyé. L'équipe TakeDoc vous remercie.');</script>";
}
 
?>