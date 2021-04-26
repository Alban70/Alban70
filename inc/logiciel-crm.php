<?php
$action = (isset($_GET['action']))? $_GET['action'] : 'index';

ob_start();
switch($action){
    default:
    case 'definition-crm' :
        indexAction();
        break;
    case 'solution-crm-tpe-pme' :
        solutionCrmTpePme();
        break;


    case 'gestion-des-affaires' :
        opportuniteAction();
        break;

    case 'gestion-des-objectifs' :
        suiviAction();
        break;



}

$buffer = ob_get_flush();
file_put_contents($file, $buffer);


function indexAction()
{
    include THEME.'vue/definition/crm/definitionCrm.html.php';
}
function solutionCrmTpePme()
{
    include THEME.'vue/definition/crm/solution-crm-tpe-pme.php';
}
function opportuniteAction()
{
    include THEME.'vue/fonctionnalite/vente/opportunite.html.php';
}
function suiviAction()
{
    include THEME.'vue/fonctionnalite/vente/suivi.html.php';
}