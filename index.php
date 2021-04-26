<?php

include 'config.php';
setlocale(LC_ALL, $locale);

include 'inc/connexion.php';


include 'inc/tools.php';


session_start();

//var_dump($_SESSION);
//var_dump($_SESSION);

//setcookie(session(), session(), time() + 3600, null, null, true);
if(isset($_SESSION['auth']) && $_SESSION['auth']===true) {


    if ($_SESSION['IPaddress'] != sha1($_SERVER['REMOTE_ADDR']) ||
        $_SESSION['userAgent'] != sha1($_SERVER['HTTP_USER_AGENT']))
        exit('possible session hijacking attempt');

}

$page = (isset($_GET['page'])) ? $_GET['page'] : 'accueil';

switch ($page){
    default:
    case 'accueil':
        $file = 'accueil.php';

        break;

        
    case 'societe':
        $file = 'societe.php';
        
        break;

    case 'DemandeContact':
        $file = 'DemandeContact.php';

        break;
        
    case 'contactManager':
        $file = 'contactManager.php';

        break;
    case 'applications-crm':
        $file = 'applications-crm.php';

        break;
    case 'blog':
        $file = 'blog.php';

        break;

    case 'vente':
        $file = 'vente.php';
        break;

    case 'marketing':
        $file = 'marketing.php';
        break;



    case 'test':
        $file = 'test.php';

        break;

    case 'testAction':
        $file = 'testAction.php';

        break;

    case 'tarifs':
        $file = 'tarifs.php';
        break;

    case 'tarifsModules':
        $file = 'tarifs_modules.php';
        break;

    case 'tarifs_essentiel':
        $file = 'tarifs.php';
        break;

    case 'tarifsAction':
        $file = 'tarifsAction.php';

        break;
        
        break;
    case 'contact':
        $file = 'contact.php';
        
        break;

    case 'deconnexion':
        $file = 'deconnexion.php';
        break;

    //case 'membres':
        //$file = 'membres.php';
        
        //break;
    case 'logiciel-force-de-vente':
        $file = 'logiciel-force-de-vente.php';
        break;
    case 'logiciel-crm':
        $file = 'logiciel-crm.php';
        break;

    /*case 'solution-crm':
        $file = 'solution-crm.php';
        break;*/

    case 'crm-services':
        $file = 'crm-services.php';
        break;
}
ob_start();
include 'inc/' .$file;
$buffer = ob_get_clean();


include THEME .'layout.html.php';