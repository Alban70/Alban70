<?php

//$action = (isset($_GET['action'])) ? $_GET['action'] : 'index';
if(isset($_POST['ajouter'])) $action='ajouter';
elseif(isset($_POST['modifier'])) $action='modifier';
elseif(isset($_POST['supprimer'])) $action='supprimer';
else $action = (isset($_GET['action'])) ? $_GET['action'] : 'index';

ob_start();
switch($action){
    default:
    case 'index' :
    listeFamille();
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


function listeFamille(){
    global $pdo;
    $sql = 'SELECT fam_id, libelle, dateCreation FROM famille GROUP BY fam_id ';
    $result=$pdo->query($sql);
    $familles = $result->fetchAll();

    $sql = 'SELECT * FROM famille';
    $result=$pdo->query($sql);
    $famille = $result->fetch();

//var_dump($article);

    include 'theme_admin/vue/famille/listeFamille.html.php';
}
function ajouterFamille()
{
    /*global $pdo;
    $erreur = '';
    //var_dump($_POST);
    if (isset($_POST['libelle'])) {
        var_dump($_POST);
        if($_POST['libelle'] != '')
            $libelle = $_POST['libelle'];
        else $erreur .= '-Entrez un titre<br>';

        $actif = 'null';
        $type = 'null';
        $statut = 'null';


        if ($erreur == ''){
            $sql = 'INSERT INTO famille VALUES(?,?,NOW(),?,?)';
            //$sql = 'INSERT INTO famille(libelle, actif, dateCreation, type, statut) VALUES(?, ?, NOW(), ?, ?)';
            $result = $pdo->prepare($sql);
            $result->bindValue(1, $libelle);
            $result->bindValue(2, $actif);
            $result->bindValue(3, $type);
            $result->bindValue(4, $statut);

            $result->execute();
            $success = 'Edito enregistré :';
            //header('location: admin.php');
            header('location:?page=famille');
        }

    }*/
    include 'theme_admin/vue/famille/create.html.php';

}


function modifierFamille()
{
        global $pdo;
        $id = $_POST['valeur_id'];
        $sql = 'SELECT * FROM famille WHERE fam_id = :id';
        $result = $pdo->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->execute();
        $famille = $result->fetch();
        include 'theme_admin/vue/famille/modifier.html.php';
}
function supprimerFamille()
{
    if (isset($_POST['supprimer'])) {

        global $pdo;
        $id = $_POST['valeur_id'];

        $result = $pdo->prepare('delete from famille where fam_id = :id ');
        $result->execute(array(
            'id' => $id
        ));
        //header('theme_admin/vue/famille/listeFamille.html.php');

    }
    header('location:?page=famille');
}



?>
<!--<script type="text/javascript" src='theme_admin/js/cours.js'></script>-->

