<?php
$action = (isset($_GET['action']))? $_GET['action'] : 'index';

ob_start();
switch($action){
    default:
    case 'logiciel-force-de-vente' :
        indexAction();
        break;
    case 'logiciel-prospection-commerciale' :
        logicielProsptionCommercialeAction();
        break;

    case 'gestion-des-contacts' :
    gestionContactsAction();
    break;

    case 'gestion-des-taches' :
        gestionTachesAction();
        break;

    case 'definition-logiciel-gestion-en-ligne' :
        opportuniteAction();
        break;

    case 'definition-logiciel-marketing-en-ligne' :
        crmAction();
        break;


}

$buffer = ob_get_flush();
file_put_contents($file, $buffer);


function indexAction()
{
    include THEME.'vue/definition/prospection/definitionFsa.html.php';

}
function logicielProsptionCommercialeAction()
{
    include THEME.'vue/definition/prospection/logicielProspectionCommerciale.html.php';

}
function gestionContactsAction()
{
    include THEME .'vue/fonctionnalite/contactManager/contact.html.php';

}
function gestionTachesAction()
{
    include THEME .'vue/fonctionnalite/contactManager/taches.html.php';

}
function opportuniteAction()
{
    include THEME.'vue/fonctionnalite/vente/opportunite.html.php';
}
function crmAction()
{
    include THEME.'vue/accueil.vente.html.php';
}

