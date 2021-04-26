<?php

$action = (isset($_GET['action']))? $_GET['action'] : 'index';

ob_start();
switch($action){
    default:
    case 'logiciel-gestion-des-prostects' :
        indexAction();
        break;

    case 'logiciel-gestion-des-taches' :
        tachesAction();
        break;

    case 'logiciel-suivi-des-affaires' :
        suiviAction();
        break;

    case 'logiciel-gestion-des-opportunites' :
        opportuniteAction();
        break;


}
$buffer = ob_get_flush();
file_put_contents($file, $buffer);
function indexAction()
{
    //include './theme/vue/contactManager.html.php';
    include THEME .'vue/fonctionnalite/contactManager/contact.html.php';
}
function tachesAction()
{
    //include './theme/vue/contactManager.html.php';
    include THEME .'vue/fonctionnalite/contactManager/taches.html.php';
}
function suiviAction()
{
    include THEME.'vue/fonctionnalite/vente/suivi.html.php';

}
function opportuniteAction()
{
    include THEME.'vue/fonctionnalite/vente/opportunite.html.php';
}