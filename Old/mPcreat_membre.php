<?php
session_start();
$titre="Connexion";
$_SESSION['pass'];
$_SESSION['pseudo'];
$_SESSION['email'];
?>
<?php

try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}
?>



<?php
echo 'Bonjour Monsieur '. $_POST['pass'] . ' ' . $_POST['pass'] . ' ' . $_POST['pass'] . '!' ;
if ($_POST['pass'] != NULL)
{
$req = $bdd->prepare('INSERT INTO membre(pass, pseudo, nom, prenom, ville, pays, email, profil) VALUES(:pass, :pseudo, :nom, :prenom, :ville, :pays, :email, :profil)');
$req->execute(array(
	'pass' => $_POST['pass'],
	'pseudo' => $_POST['pseudo'],
	'email' => $_POST['email'],
	'nom' => $_POST['nom'],
	'prenom' => $_POST['prenom'],
	'ville' => $_POST['ville'],
	'pays' => $_POST['pays'],
	'profil' => $_POST['profil'],
	));
	$_SESSION['pass'];
	header('location: mConsultMembres.php');
}
else
{
    echo "vous n'avez pas renseigné votre mot de pass";
}

?>
















