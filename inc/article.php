<?php

if(isset($_POST['ajouter'])) $action='ajouterArticle';
elseif(isset($_POST['modifier'])) $action='modifierrArticle';
elseif(isset($_POST['supprimer'])) $action='deleteArticle';
else $action = (isset($_GET['action'])) ? $_GET['action'] : 'index';


ob_start();
switch($action){
    default:
    case 'index' :
    listeArticle();
        break;


    case 'ajouterArticle' :
        ajouterArticle();
        break;

    case 'modifierrArticle' :
        modifierArticle();
        break;


    case 'deleteArticle' :
        deleteArticle();
        break;


}

$buffer = ob_get_flush();
file_put_contents($file, $buffer);

/*function indexAction(){
    include 'theme_admin/vue/acceuil_admin.html.php';
}*/



function listeArticle(){
    global $pdo;

    $sql = 'SELECT article_id, libelle, designation FROM article GROUP BY article_id ';
    $result=$pdo->query($sql);
    $articles = $result->fetchAll();

    $sql = 'SELECT * FROM article';
    $result=$pdo->query($sql);
    $article = $result->fetch();


    include 'theme_admin/vue/article/listeArticle.html.php';
}


function ajouterArticle(){

    global $pdo;
    $sql = 'SELECT * FROM famille GROUP BY fam_id ';
    $result=$pdo->query($sql);
    $familles = $result->fetchAll();


    include 'theme_admin/vue/article/createArticle.html.php';

}

function modifierArticle()
{
    global $pdo;
    $id = $_POST['valeur_id'];
    $sql = 'SELECT * FROM article WHERE article_id = :id';
    $result = $pdo->prepare($sql);
    $result->bindParam(':id', $id, PDO::PARAM_INT);
    $result->execute();
    $article = $result->fetch();

    include 'theme_admin/vue/article/modifierArticle.html.php';

}
function deleteArticle()
{

    global $pdo;

        $id = $_POST['valeur_id'];
        $result = $pdo->prepare('delete FROM article WHERE article_id = :id ');
        $result->execute(array(
           'id' => $id
        ));

        header('location:?page=article');



}
/*<script type="text/javascript" src='theme_admin/js/cours.js'></script>*/

