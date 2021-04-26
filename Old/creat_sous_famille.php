<?php
session_start();
$titre="Connexion";
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
echo 'Bonjour Monsieur '. $_POST['libelle'] . ' ' . $_POST['libelle'] . ' ' . $_POST['libelle'] . '!' ;

$req = $bdd->prepare('INSERT INTO sousfamille(sFam_libelle) VALUES(:libelle)');
$req->execute(array(
	'libelle' => $_POST['sousfamille'],
	));
	header('location: famille.php');

?>
















