<?php

if(isset($_POST['addLigne'])) $action='ajouter';
elseif(isset($_POST['addComL'])) $action='addComL';
elseif(isset($_POST['addComLselArticle'])) $action='addComLselArticle';
elseif(isset($_POST['updateLigne'])) $action='modifier';
elseif(isset($_POST['deleteLigne'])) $action='supprimer';
else $action = (isset($_GET['action'])) ? $_GET['action'] : 'index';


ob_start();
switch($action){
    default:
    case 'index' :
    listeCommande();
        break;


    case 'ajouter' :
        ajouterCommandeLigne();
        break;

    case 'addComL' :
        addComL();
        break;

    case 'addComLselArticle' :
        addComLselArticle();
        break;



    case 'modifier' :
        modifierCommandeLigne();
        break;
    case 'supprimer' :
        supprimerCommandeLigne();
        break;



}

$buffer = ob_get_flush();
file_put_contents($file, $buffer);



function listeCommande()
{
    global $pdo;
    if (isset($_SESSION['user_id']) === true) {
        //$id = $_POST['id2'];

        $id = $_SESSION['comID'];

        $sql = 'SELECT * FROM commande WHERE com_id = :id';
        $result = $pdo->prepare($sql);
//$result->bindValue(':id', 1, PDO::PARAM_INT);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->execute();
//$result->execute([':id'=>$id]);
        $commande = $result->fetch();

        $sql = 'SELECT * FROM commandeLigne WHERE com_id = :id GROUP BY comL_id ';
        $result = $pdo->prepare($sql);
//$result->bindValue(':id', 1, PDO::PARAM_INT);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->execute();
//$result->execute([':id'=>$id]);
        $commandeLignes = $result->fetchAll();
        //include 'theme_membres/vue/commande/updateCommande.html.php';
        include 'theme_membres/vue/commande/updateCommandeMobile.html.php';
    }
}

function addComL()
{
    global $pdo;

    $erreur = '';
//var_dump($_POST);
    //if (isset($_POST['libelle'])) {

    //if ($_POST['libelle'] != '')
    $libelle = //$_POST['libelle'];
        //else $erreur .= '-Entrez un titre<br>';

    $libelle = 'null';

    //if ($erreur == '') {

    if (isset($_SESSION['user_id']) === true) {
        /*$id = $_POST['id'];
        $sql = 'SELECT * FROM societe WHERE soc_id = :id';
        $result = $pdo->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->execute();
        $societe = $result->fetch();*/


        $soc_id = $_POST['soc_id'];
        $com_id = $_POST['com_id'];
        $article_id = $_POST['valeur_id'];

        //$_SESSION['comID'] = $id2;


var_dump($_POST);
        var_dump($_POST);
        var_dump($_POST);
        var_dump($_POST['article']);

        $sql = 'INSERT INTO commandeLigne(qte, libelle, designation, remise, typeRemise, prix, typePrix, sTotalLigne, statut, dateCreation, com_id, article_id) VALUES(NULL, ?, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NOW(), ?, ?)';
        $result = $pdo->prepare($sql);
        $result->bindValue(1, $libelle);
        $result->bindValue(2, $com_id);
        $result->bindValue(3, $article_id);
        $result->execute();

        $id = $pdo->lastInsertId();
        //$id = $societe['soc_id'];
        $sql = 'SELECT * FROM commandeLigne WHERE comL_id = :id';
        $result = $pdo->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->execute();
        $commandeLigne = $result->fetch();


        $sql = 'SELECT * FROM article WHERE article_id = :id ';
        $result = $pdo->prepare($sql);
        $result->bindParam(':id', $article_id, PDO::PARAM_INT);
        $result->execute();
        $article = $result->fetch();

        //header('location:?page=commandeLigne');

    }
    //include 'theme_membres/vue/commandeLigne/createCommandeLigneMobile.html.php';
    include 'theme_membres/vue/commandeLigne/createCommandeLigneTarifs.html.php';
    //}


}

function addComLselArticle()
{
    global $pdo;

        $id = $_SESSION['comID'];

        $sql = 'SELECT * FROM commande WHERE com_id = :id';
        $result = $pdo->prepare($sql);

        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->execute();

        $commande = $result->fetch();

        $sql = 'SELECT * FROM article GROUP BY article_id ';
        $result = $pdo->prepare($sql);
        $result->execute();
        $articles = $result->fetchAll();


        //$success = 'Edito enregistré :';
        //header('location: admin.php');
        //header('location:?page=commande');

    include 'theme_membres/vue/commande/selectorArticleMobile.html.php';

}





    function ajouterCommandeLigne()
    {
        global $pdo;

        $erreur = '';
//var_dump($_POST);
        //if (isset($_POST['libelle'])) {

        //if ($_POST['libelle'] != '')
        $libelle = //$_POST['libelle'];
            //else $erreur .= '-Entrez un titre<br>';

        $libelle = 'null';

        //if ($erreur == '') {

        if (isset($_SESSION['user_id']) === true) {
            /*$id = $_POST['id'];
            $sql = 'SELECT * FROM societe WHERE soc_id = :id';
            $result = $pdo->prepare($sql);
            $result->bindParam(':id', $id, PDO::PARAM_INT);
            $result->execute();
            $societe = $result->fetch();*/


            $id2 = $_POST['id2'];


            $_SESSION['comID'] = $id2;



            $article_id = '0';
            $sql = 'INSERT INTO commandeLigne(qte, libelle, designation, remise, typeRemise, prix, typePrix, sTotalLigne, statut, dateCreation, com_id, article_id) VALUES(NULL, ?, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NOW(), ?, ?)';
            $result = $pdo->prepare($sql);
            $result->bindValue(1, $libelle);
            $result->bindValue(2, $id2);
            $result->bindValue(3, NULL);
            $result->execute();

            $id = $pdo->lastInsertId();
            //$id = $societe['soc_id'];
            $sql = 'SELECT * FROM commandeLigne WHERE comL_id = :id';
            $result = $pdo->prepare($sql);
            $result->bindParam(':id', $id, PDO::PARAM_INT);
            $result->execute();
            $commandeLigne = $result->fetch();


            $sql = 'SELECT * FROM article GROUP BY article_id ';
            $result = $pdo->prepare($sql);
            $result->execute();
            $articles = $result->fetchAll();

            //header('location:?page=commandeLigne');

        }
        include 'theme_membres/vue/commandeLigne/createCommandeLigne.html.php';
        //}


    }

    function modifierCommandeLigne()
    {
        global $pdo;

        if (isset($_SESSION['user_id']) === true) {
            /*$id = $_POST['id2'];
            $sql = 'SELECT * FROM commande WHERE com_id = :id';
            $result = $pdo->prepare($sql);
            $result->bindParam(':id', $id, PDO::PARAM_INT);
            $result->execute();
            $commande = $result->fetch();*/

            $id2 = $_POST['id2'];
            $id = $_POST['valeur_id'];

            $_SESSION['comID'] = $id2;


            $sql = 'SELECT * FROM commandeLigne WHERE comL_id = :id AND com_id = :id2';
            $result = $pdo->prepare($sql);
//$result->bindValue(':id', 1, PDO::PARAM_INT);
            $result->bindParam(':id', $id, PDO::PARAM_INT);
            $result->bindParam(':id2', $id2, PDO::PARAM_INT);
            $result->execute();
//$result->execute([':id'=>$id]);
            $commandeLigne = $result->fetch();


            $sql = 'SELECT * FROM article GROUP BY article_id ';
            $result = $pdo->prepare($sql);
            $result->execute();
            $articles = $result->fetchAll();
            //header('location:?page=commandeLigne');

        }
        include 'theme_membres/vue/commandeLigne/updateCommandeLigne.html.php';
    }

    function supprimerCommandeLigne()
    {

        if (isset($_SESSION['user_id']) === true) {


            global $pdo;
            /*$id = $_POST['id2'];
            $sql = 'SELECT * FROM commande WHERE com_id = :id';
            $result = $pdo->prepare($sql);
            $result->bindParam(':id', $id, PDO::PARAM_INT);
            $result->execute();
            $commande = $result->fetch();*/

            $id2 = $_POST['id2'];
            $id = $_POST['valeur_id'];

            $id2 = $_POST['id2'];
            $id = $_POST['valeur_id'];

            $_SESSION['comID'] = $id2;


            $result = $pdo->prepare('delete from commandeLigne  WHERE comL_id = :id AND com_id = :id2');
            $result->execute(array(
                'id' => $_POST['valeur_id'],
                'id2' => $_POST['id2']
            ));
            header('location:?page=commandeLigne');

        }



    }



?>
<!--<script type="text/javascript" src='theme_admin/js/cours.js'></script>-->