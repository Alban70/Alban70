<?php
session_start();
$titre="identification";

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

if ($_POST['pass'] != NULL)
{
$req = $bdd->prepare('update membre set pass = :pass, pseudo = :pseudo, nom = :nom, prenom = :prenom, ville = :ville, pays = :pays, email = :email, profil = :profil where id = :id ');
$req->execute(array(
	'pass' => $_POST['pass'],
	'pseudo' => $_POST['pseudo'],
	'email' => $_POST['email'],
	'nom' => $_POST['nom'],
	'prenom' => $_POST['prenom'],
	'ville' => $_POST['ville'],
	'pays' => $_POST['pays'],
	'profil' => $_POST['profil'],
	'id' => $_SESSION['id'],
	));
	$_SESSION['pass']; // avant rien
	echo 'Bonjour Monsieur '. $_SESSION['pass'] . ' ' . $_SESSION['pseudo'] . ' ' . $_SESSION['email'] . '!' ;
	header('location: consult_membres2_consult.php');
}
else
{
    echo "vous n'avez pas renseigné votre mot de pass";
}

?>




















