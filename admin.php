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
            //$file = 'accueilAdmin.php';
        $file = 'client.php';
            break;
        case 'action':
            $file = 'action.php';
            break;

        case 'famille':
            $file = 'famille.php';
            break;

        case 'adminAction':
            $file = 'adminAction.php';
            break;

        case 'article':
            $file = 'article.php';
            break;
        case 'edito':
            $file = 'edito.php';
            break;

        case 'deconnexion':
            $file = 'deconnexion.php';
            break;

    }
    ob_start();
    include 'inc/' .$file;
    $buffer = ob_get_clean();
    //include 'theme_admin/layoutAdmin.html.php';

} else{
    $page = (isset($_GET['page'])) ? $_GET['page'] : 'acceuil';

    switch ($page) {
        default:
        case 'acceuil':
            $file = 'formulaire.php';

            break;
    }
        ob_start();
        include 'inc/' .$file;
        $buffer = ob_get_clean();
        //include 'theme_admin/layoutAdmin.html.php';
}
//include theme .'layout.html.php';
include 'theme_admin/layoutAdmin.html.php';