<html>
<head>
<meta charset="utf-8" /> 
<title>Contacts</title>
</head>
<body>
<?php


$civilite = $_POST['CIVILITE'];
$prenom = $_POST['Prénom'];
$nom = $_POST['NOM'];

$email = $_POST['courriel'];
$message = $_POST['Taper votre message'];

$msg = "Civilite = $civilite
Prénom= $prenom
NOM = $nom
Adresse Courriel= $email
Message= $message";
$recipient = "enzo.rc@outlook.fr"; //On met l'adresse email ou on veut recevoire le mail
$subject = "Formulaire de  contact"; //On met le sujet du mail
$mailheaders = "From: Mon site Perso<> \n"; //depuis où il a été posté
mail($recipient, $subject, $msg, $mailheaders); // message confirmation que le mail a bien été envoyé
echo "<HTML><HEAD>";
echo "<TITLE> CONTACT</TITLE></HEAD><BODY>";
echo "<H3 align=center><br>Merci $civilite $prenom $nom,<br> Votre formulaire a bien était envoyé.<br> Nous faisons le nécessaire pour vous répondre dans les meilleurs délai<br><br> Vous allez être redirigé sur l'accueil </H3>";
echo "<P align=center>";
echo "</P>";
echo "</BODY></HTML>";
header('Refresh: 7; index.html');

?> 
</body>
</html>