<?php

$action = (isset($_GET['action']))? $_GET['action'] : 'index';

ob_start();

switch($action){
    default:
    case 'index' :
        AproposAction();
        break;

    case 'philosophie' :
        philosophieAction();
        break;

    case 'recrutement' :
        recrutementAction();
        break;

    case 'contact' :
        contactAction();
        break;

}
$buffer = ob_get_flush();
file_put_contents($file, $buffer);
function AproposAction()
{
    include THEME .'vue/societe/aPropos.html.php';
}
function philosophieAction()
{
    include THEME .'vue/societe/philosophie.html.php';
}
function recrutementAction()
{
    include THEME .'vue/societe/recrutement.html.php';
}
function contactAction()
{
    include THEME .'vue/societe/contact.html.php';
}
