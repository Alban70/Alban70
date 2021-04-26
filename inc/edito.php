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

    $sql = 'SELECT * FROM edito GROUP BY id ';
    $result=$pdo->query($sql);
    $articles = $result->fetchAll();

    $sql = 'SELECT * FROM edito';
    $result=$pdo->query($sql);
    $article = $result->fetch();


    include 'theme_admin/vue/edito/listeArticle.html.php';
}


function ajouterArticle(){

    global $pdo;
    $sql = 'SELECT * FROM famille GROUP BY fam_id ';
    $result=$pdo->query($sql);
    $familles = $result->fetchAll();



    include 'theme_admin/vue/edito/createArticle.html.php';

}

function modifierArticle()
{
    global $pdo;
    $id = $_POST['valeur_id'];
    $sql = 'SELECT * FROM edito WHERE id = :id';
    $result = $pdo->prepare($sql);
    $result->bindParam(':id', $id, PDO::PARAM_INT);
    $result->execute();
    $article = $result->fetch();

    include 'theme_admin/vue/edito/modifierArticle.html.php';

}
function deleteArticle()
{

    global $pdo;

        $id = $_POST['valeur_id'];
        $result = $pdo->prepare('delete FROM edito WHERE id = :id ');
        $result->execute(array(
           'id' => $id
        ));

        header('location:?page=edito');



}
/*<script type="text/javascript" src='theme_admin/js/cours.js'></script>*/

