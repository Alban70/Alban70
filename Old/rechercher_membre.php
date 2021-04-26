<?php
session_start();
$titre="recherche"

?>


<?php
// { Début - Première partie
if(!empty($_POST))
{
    $_SESSION['sauvegarde'] = $_POST ;
 echo 'Bonjour avant P '. $_POST['secteur'] . ' ' . $_POST['secteur'] . ' ' . $_POST['secteur'] . '!' ;	   
 echo 'Bonjour avant S '. $_SESSION['secteur'] . ' ' . $_SESSION['secteur'] . ' ' . $_SESSION['secteur'] . '!' ;	
   /*
   $fichierActuel = $_SERVER['PHP_SELF'] ;
    if(!empty($_SERVER['QUERY_STRING']))
    {
        $fichierActuel .= '?' . $_SERVER['QUERY_STRING'] ;
    } 
       header('Location: ' . $fichierActuel);
    exit;
  */ 
  // ou   
  header('location: consult_membres2_modification.php');
   echo 'Bonjour madame '. $_SESSION['secteur'] . ' ' . $_SESSION['secteur'] . ' ' . $_SESSION['secteur'] . '!' ;   
	//header('location: consult_membres2_modification.php');
}
// } Fin - Première partie

// { Début - Seconde partie
if(isset($_SESSION['sauvegarde']))
{
    $_POST = $_SESSION['sauvegarde'] ;
	$_SESSION['secteur']=$_POST['secteur'];
 echo 'Bonjour APRES P '. $_POST['secteur'] . ' ' . $_POST['secteur'] . ' ' . $_POST['secteur'] . '!' ;	   
 echo 'Bonjour APRES S '. $_SESSION['secteur'] . ' ' . $_SESSION['secteur'] . ' ' . $_SESSION['secteur'] . '!' ;

 
    unset($_SESSION['sauvegarde']);
}
// } Fin - Seconde partie

?>





