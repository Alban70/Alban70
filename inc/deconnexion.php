<?php

$action = (isset($_GET['action'])) ? $_GET['action'] : 'index';
//if(isset($_POST['ok'])) $action='index';
//else $action = 'index';
ob_start();
switch($action){
    default:
    case 'index' :
        deconnexion();
        break;

    case 'ajouter' :
        ajouterFamille();
        break;

    case 'modifier' :
        modifierFamille();
        break;
    case 'supprimer' :
        supprimerFamille();
        break;



}

$buffer = ob_get_flush();
file_put_contents($file, $buffer);


function deconnexion()
{
    //if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //if ($_POST['confirm'] === 'OK') {
            session_destroy();
            //setcookie(session_name(), session_id(), time() - 10, '/', null, null, true);
            header('Location: '.RACINE);
            exit();

    //}
}
























?>
<!--<script type="text/javascript" src='theme_admin/js/cours.js'></script>-->

