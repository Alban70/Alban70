<?php
$action = (isset($_GET['action']))? $_GET['action'] : 'index';

ob_start();
switch($action){
    default:
    case 'index' :
        indexAction();
        break;
    case 'cible' :
        cibleAction();
        break;



}

$buffer = ob_get_flush();
file_put_contents($file, $buffer);


function indexAction()
{
    include './theme/vue/leads.html.php';
}
function cibleAction(){
include './theme/vue/cible.html.php';
}