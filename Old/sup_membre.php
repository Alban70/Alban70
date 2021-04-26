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
echo 'Bonjour Monsieur '. $_SESSION['pass'] . ' ' . $_SESSION['pass'] . ' ' . $_SESSION['pass'] . '!' ;	
$reponse = $bdd->prepare('SELECT * FROM membre WHERE pass = ?');
$reponse->execute(array($_SESSION['pass']));

while ($donnees = $reponse->fetch())
{
?>



<?php
$id = $donnees['id'];
if ($_SESSION['pass'] = $donnees['pass'])
{
$req = $bdd->prepare('DELETE FROM membre where id = :id ');
$req->execute(array(
	'id' => $id,
	));
 header('location: connexion2.php');

}
else
{
    echo "vous n'avez pas renseigné votre mot de pass";
}
?>


<?php
}
$reponse->closeCursor(); // Termine le traitement de la requête
?>





















