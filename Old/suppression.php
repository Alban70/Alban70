<?php
session_start();
$titre="suppression"

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
 header('location: connexion2.php');
  
   
   
   
   
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
if($_POST['valeur_id'] !=0)
{
$sup_frs=$bdd->prepare('DELETE FROM membre where id = :id ');
$sup_frs->execute(array(
	'id' => $_SESSION['valeur_id']));
echo "le fournisseur n° " .$_SESSION['valeur_id']. " a été supprimé";
}
else        
{
echo 'Pas de case cochées';
}






 
    unset($_SESSION['sauvegarde']);
}
// } Fin - Seconde partie

?>





