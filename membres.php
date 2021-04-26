<?php

include 'config.php';
setlocale(LC_ALL, $locale);

include 'inc/connexion.php';


include 'inc/tools.php';

session_start();

//setcookie(session(), session(), time() + 3600, null, null, true);
if(isset($_SESSION['auth']) && $_SESSION['auth']===true){




    if ($_SESSION['IPaddress'] != sha1($_SERVER['REMOTE_ADDR']) ||
        $_SESSION['userAgent'] != sha1($_SERVER['HTTP_USER_AGENT']))
        exit('possible session hijacking attempt');




    $page = (isset($_GET['page'])) ? $_GET['page'] : 'acceuil';

    switch ($page){
        default:
        case 'acceuil':
            //$file = 'acceuil_membres.php';
        $file = 'entreprise.php';
            break;
        case 'demande':
            $file = 'demande.php';
            break;

        //case 'profil':
            //$file = 'profil.php';
            //break;

        case 'membreAction':
            $file = 'membreAction.php';
            break;

        case 'commande':
        $file = 'commande.php';
        break;


        case 'commandeAction':
            $file = 'commandeAction.php';
            break;

        case 'commandeLigne':
            $file = 'commandeLigne.php';
            break;

        case 'commandeLigneAction':
            $file = 'commandeLigneAction.php';
            break;


        //case 'commandeSite':
            //$file = 'commandeSite.php';
            //break;


        case 'livraison':
            $file = 'livraison.php';
            break;
        case 'facture':
            $file = 'facture.php';
            break;

        case 'deconnexion':
            $file = 'deconnexion.php';
            break;
    }
    ob_start();
    include 'inc/' .$file;
    $buffer = ob_get_clean();
    include 'theme_membres/layoutMembres.html.php';

} else{
    $page = (isset($_GET['page'])) ? $_GET['page'] : 'acceuil';
    //$page = (isset($_GET['page'])) ? $_GET['page'] : 'connexion';

    //session_start();

//setcookie(session(), session(), time() + 3600, null, null, true);
    switch ($page) {
        default:
        case 'acceuil':
            $file = 'formulaire.php';
            break;

        case 'register':
            $file = 'register.php';
            break;
    }
        ob_start();
        include 'inc/' .$file;
        $buffer = ob_get_clean();
        include 'theme_membres/layoutMembres.html.php';
}
