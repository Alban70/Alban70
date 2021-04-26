<?php

$action = (isset($_GET['action']))? $_GET['action'] : 'index';

ob_start();
switch($action){
    default:
    case 'index' :
        indexAction();
        break;
    case 'vente' :
        venteAction();
        break;


}
$buffer = ob_get_flush();
file_put_contents($file, $buffer);
function indexAction()
{
    global $pdo;

    $p = (isset($_GET['p']))? $_GET['p']:1;
    $limit = 2;
    $offset=($p-1) * $limit;

    $sql = 'SELECT (SELECT count(*) FROM edito) total, titre, contenu, type, id FROM edito LIMIT '.$limit.' OFFSET ' . $offset;
    $result=$pdo->query($sql);

    $articles = $result->fetchAll();
    $total = $articles[0]['total'];
    $nbPage = ceil($total / $limit);


    /*$sql = 'SELECT * FROM edito GROUP BY id ';
    $result=$pdo->query($sql);
    $articles = $result->fetchAll();*/



    include THEME .'vue/fonctionnalite/blog/blogNews.html.php';
}
function venteAction()
{
    global $pdo;

    $p = (isset($_GET['p']))? $_GET['p']:1;
    $limit = 2;
    $offset=($p-1) * $limit;

    $sql = 'SELECT (SELECT count(*) FROM edito) total, titre, contenu, type, id FROM edito WHERE type="vente" LIMIT '.$limit.' OFFSET ' . $offset;
    $result=$pdo->query($sql);

    $articles = $result->fetchAll();
    $total = $articles[0]['total'];
    $nbPage = ceil($total / $limit);

    /*$sql = 'SELECT * FROM edito where type = "vente"';
    $result=$pdo->query($sql);
    $articles = $result->fetchAll();*/


    include THEME .'vue/fonctionnalite/blog/blogNews.html.php';
}