<?php

$action = (isset($_GET['action']))? $_GET['action'] : 'index';

ob_start();
switch($action){
    default:
    case 'index' :
        indexAction();
        break;



}
$buffer = ob_get_flush();
file_put_contents($file, $buffer);
function indexAction()
{
    //include './theme/vue/contactManager.html.php';
    include THEME .'vue/fonctionnalite/contactManager/contact.html.php';
}
