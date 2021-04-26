<?php
$action = (isset($_GET['action']))? $_GET['action'] : 'index';

ob_start();
switch($action){
    default:
    case 'installation-crm' :
    indexAction();
        break;

    case 'deploiement' :
        deploiementAction();
        break;

    case 'configuration' :
        configurationtAction();
        break;

    case 'parametrage' :
        parametrageAction();
        break;

    case 'formation' :
        formationAction();
        break;

    case 'assistance' :
        assistanceAction();
        break;

}
$buffer = ob_get_flush();
file_put_contents($file, $buffer);
function indexAction()
{
    include THEME .'vue/accompagnement/installation.html.php';
}
function deploiementAction()
{
    include THEME .'vue/accompagnement/deploiement.html.php';
}
function configurationtAction()
{
    include THEME .'vue/accompagnement/configuration.html.php';
}
function parametrageAction()
{
    include THEME .'vue/accompagnement/parametrage.html.php';
}
function formationAction()
{
    include THEME .'vue/accompagnement/formation.html.php';
}
function assistanceAction()
{
    include THEME .'vue/accompagnement/assistance.html.php';
}
