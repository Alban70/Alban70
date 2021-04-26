<?php
session_start();
$titre="ajout";

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
// { Début - Première partie
if(!empty($_POST))
{
    $_SESSION['sauvegarde'] = $_POST ;

 /*
   $fichierActuel = $_SERVER['PHP_SELF'] ;
    if(!empty($_SERVER['QUERY_STRING']))
    {
        $fichierActuel .= '?' . $_SERVER['QUERY_STRING'] ;
    } 
       header('Location: ' . $fichierActuel);
    exit;
  */ 
 header('location: consult_membres2_consult.php');
  
   
   
   
   
}
// } Fin - Première partie

// { Début - Seconde partie
if(isset($_SESSION['sauvegarde']))
{
    $_POST = $_SESSION['sauvegarde'] ;
    $_SESSION['valeur_id']=$_POST['valeur_id'];



 // Préparation de la requète de selection du fournisseur

    //Récupération du $_POST pour execution du SELECT
	//Remettre le delete ici
echo 'valeur id '. $_POST['valeur_id'] . ' ' . $_SESSION['valeur_id'] . ' ' . $_SESSION['valeur_id'] . '!' ;
if($_SESSION['valeur_id'] !=0)
{
$ajou_ms=$bdd->prepare('INSERT INTO membre_selection(ms_idm) VALUES(:id');
$ajou_ms->execute(array(
	'id' => $_SESSION['valeur_id']));
echo "le consultant n° " .$_SESSION['valeur_id']. " a été ajouté";
}
else        
{
echo 'Pas de case cochées';
}






 
    unset($_SESSION['sauvegarde']);
}
// } Fin - Seconde partie

?>





















