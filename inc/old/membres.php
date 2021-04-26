<?php
session_start();
$titre="identification";

$membres = (isset($_GET['membres']))? $_GET['membres'] : 'index';

switch($membres){
    default:
    case 'index' :
    //$file = 'mConnexion.php';
    connexionMembre();
        break;

    case 'valider' :
        //$file = 'mSwitch.php';
        validerMembre();
        break;

    case 'produit' :
        detailProduit();
        break;

    case 'Listetag' :
        listeProduitTag();
        break;

}


function connexionMembre()
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['ok'])) {
            $erreur = '';

            if (strlen($_POST['nom']) < 3) {
                $erreur .= 'Nom invalide';
            } else {
                $nom = $_POST['nom'];
            }

            //if (isset($_POST['genre']))
            //$genre = $_POST['genre'];
            //else
            //$erreur .= 'Genre obligatoire';


            if ($_POST['email'] == '') {
                $erreur .= 'email obligatoire';
            } else {
                $email = $_POST['email'];
                if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $email = $_POST['email'];
                } else {
                    $erreur .= 'email invalide';
                }
            }
            //$email = $_POST['email'];
            //else
            //$erreur .= 'email obligatoire';




        }
    }
    include theme . 'vue/membres/mConnexion.htlm.php';
}



function validerMembre()
{



if(!empty($_POST))
{
    $_SESSION['sauvegarde'] = $_POST ;

    $fichierActuel = $_SERVER['PHP_SELF'] ;
    if(!empty($_SERVER['QUERY_STRING']))
    {
        $fichierActuel .= '?' . $_SERVER['QUERY_STRING'] ;
    }
    header('Location: ' . $fichierActuel);
    exit;
}
// } Fin - Première partie

// { Début - Seconde partie
if(isset($_SESSION['sauvegarde']))
{
    $_POST = $_SESSION['sauvegarde'] ;
    $_SESSION['pass']=$_POST['pass'];
    unset($_SESSION['sauvegarde']);
}
// } Fin - Seconde partie


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
echo $_SESSION['email'];







// avant recevoir la variable initialiser$_SESSION['pass']=$_POST['pass'];


$reponse = $bdd->prepare('SELECT * FROM membre WHERE pass = ?');
$reponse->execute(array($_SESSION['pass'])); // $_POST['pass'] remplacé par $_SESSION['pass']

if($donnees = $reponse->fetch()) {
    do {
        if ($_SESSION['pass'] == $donnees['pass'])
        {
            $autorisation_entrer = true;
            if ($autorisation_entrer)
            {
                $_SESSION['pass']=$donnees['pass'];
                $_SESSION['pseudo']=$donnees['pseudo']; // mettre avant $_SESSION['pass']=$donnees['pass'];
                $_SESSION['email']=$donnees['email'];
                $_SESSION['nom']=$donnees['nom'];
                $_SESSION['prenom']=$donnees['prenom'];
                $_SESSION['ville']=$donnees['ville'];
                $_SESSION['pays']= $donnees['pays'];
                $_SESSION['profil']=$donnees['profil'];
                $_SESSION['id']=$donnees['id'];

                header('location: mConsultMembres.php');
            }// mettre avant header('location: consult_membres2_modification.php');

        }

    }while ($donnees = $reponse->fetch());

}
else
{
    $_SESSION['pass']=$_POST['pass'];
    $_SESSION['pseudo']=$_POST['pass'];
    $_SESSION['email']=$_POST['email'];
    header('location: mCreationMembres.php');
}
/*else
{
// mettre ici header('location: CONNEXION2.php');
header('location: mConnexion.php');
}*/

}



            //ob_start();
            //include 'incMembres/' .$file;
            //$buffer = ob_get_clean();
            //include theme .'layoutMembres.html.php';



