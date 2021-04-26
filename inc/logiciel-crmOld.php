<?php
$action = (isset($_GET['action']))? $_GET['action'] : 'index';

ob_start();
switch($action){
    default:
    case 'def-crm' :
        indexAction();
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
    //include THEME.'vue/definition/definitionCrm.html.php';
    include THEME.'vue/fonctionnalite/vente/opportunite.html.php';
}
function opportuniteAction()
{
    include THEME.'vue/fonctionnalite/vente/opportunite.html.php';
}
function crmAction()
{
    include THEME.'vue/accueil.vente.html.php';
}

