<?php

if(isset($_POST['commande'])) $action='ajouter';
elseif(isset($_POST['modifier'])) $action='modifier';
elseif(isset($_POST['supprimer'])) $action='supprimer';
else $action = (isset($_GET['action'])) ? $_GET['action'] : 'index';

var_dump($_POST);
var_dump($_POST);

ob_start();
switch($action){
    default:
    case 'index' :
    listeCommande();
        break;


    case 'commande' :
        ajouterCommande();
        break;

    case 'modifier' :
        modifierCommande();
        break;
    case 'supprimer' :
        supprimerCommande();
        break;



}

$buffer = ob_get_flush();
file_put_contents($file, $buffer);



function listeCommande()
{
    global $pdo;

    if (isset($_SESSION['user_id']) === true) {
        global $pdo;
        $id = $_SESSION['user_id'];
        $sql = 'SELECT * FROM user WHERE id = :id';
        $result = $pdo->prepare($sql);
//$result->bindValue(':id', 1, PDO::PARAM_INT);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->execute();
//$result->execute([':id'=>$id]);
        $membre = $result->fetch();

        $id = $membre['contact_id'];
        $sql = 'SELECT * FROM contact WHERE contact_id = :id';
        $result = $pdo->prepare($sql);
//$result->bindValue(':id', 1, PDO::PARAM_INT);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->execute();
//$result->execute([':id'=>$id]);
        $contact = $result->fetch();

        $id = $contact['contact_id'];
        $sql = 'SELECT * FROM societe WHERE soc_id = :id';
        $result = $pdo->prepare($sql);
//$result->bindValue(':id', 1, PDO::PARAM_INT);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->execute();
//$result->execute([':id'=>$id]);
        $societe = $result->fetch();

        $id2 = $societe['soc_id'];
        $id = $contact['contact_id'];
        $sql = 'SELECT * FROM coordonnees WHERE contact_id = :id AND soc_id = :id2';
        $result = $pdo->prepare($sql);
//$result->bindValue(':id', 1, PDO::PARAM_INT);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':id2', $id2, PDO::PARAM_INT);
        $result->execute();
//$result->execute([':id'=>$id]);
        $coordonnees = $result->fetch();


        $sql = 'SELECT com_id, libelle, dateCom, dateLivrPrevu, totalHt FROM commande WHERE soc_id = :id GROUP BY com_id ';
        $result = $pdo->prepare($sql);
//$result->bindValue(':id', 1, PDO::PARAM_INT);
        $result->bindParam(':id', $id2, PDO::PARAM_INT);
        $result->execute();
//$result->execute([':id'=>$id]);
        $commandes = $result->fetchAll();


        include 'theme_membres/vue/commande/listeCommande.html.php';
    }
}

function ajouterCommande()
{
    global $pdo;
    $erreur = '';
//var_dump($_POST);
    //if (isset($_POST['libelle'])) {

        //if ($_POST['libelle'] != '')
            $libelle = //$_POST['libelle'];
        //else $erreur .= '-Entrez un titre<br>';

        $libelle = 'null';
        $type = 'null';
        $statut = 'null';


        //if ($erreur == '') {

            if (isset($_SESSION['user_id']) === true) {
                $id = $_SESSION['user_id'];
                $sql = 'SELECT * FROM user WHERE id = :id';
                $result = $pdo->prepare($sql);
//$result->bindValue(':id', 1, PDO::PARAM_INT);
                $result->bindParam(':id', $id, PDO::PARAM_INT);
                $result->execute();
//$result->execute([':id'=>$id]);
                $membre = $result->fetch();

                $id = $membre['contact_id'];
                $sql = 'SELECT * FROM contact WHERE contact_id = :id';
                $result = $pdo->prepare($sql);
//$result->bindValue(':id', 1, PDO::PARAM_INT);
                $result->bindParam(':id', $id, PDO::PARAM_INT);
                $result->execute();
//$result->execute([':id'=>$id]);
                $contact = $result->fetch();

                $id = $contact['contact_id'];
                $sql = 'SELECT * FROM societe WHERE soc_id = :id';
                $result = $pdo->prepare($sql);
//$result->bindValue(':id', 1, PDO::PARAM_INT);
                $result->bindParam(':id', $id, PDO::PARAM_INT);
                $result->execute();
//$result->execute([':id'=>$id]);
                $societe = $result->fetch();


                $id = $societe['soc_id'];
                $sql = 'INSERT INTO commande(libelle, dateCom, dateLivrSouh, dateLivrPrevu, type, statut, totalHt, totalTTC, totalTVA, tva, actif, dateCreation, soc_id) VALUES(?, NOW(), NOW(), NOW(),?,?, NULL, NULL, NULL, NULL, NULL, NOW(), ?)';
                $result = $pdo->prepare($sql);
                $result->bindValue(1, $libelle);
                $result->bindValue(2, $type);
                $result->bindValue(3, $statut);
                $result->bindValue(4, $societe['soc_id']);
                $result->execute();

                $id = $pdo->lastInsertId();
                //$id = $societe['soc_id'];
                $sql = 'SELECT * FROM commande WHERE com_id = :id';
                $result = $pdo->prepare($sql);
//$result->bindValue(':id', 1, PDO::PARAM_INT);
                $result->bindParam(':id', $id, PDO::PARAM_INT);
                $result->execute();
//$result->execute([':id'=>$id]);
                $commande = $result->fetch();
                var_dump($_POST);


                /*$id = $_POST['soc_id'];
                $sql = 'SELECT * FROM commande WHERE com_id = :id';
                $result = $pdo->prepare($sql);
                $result->bindParam(':id', $id, PDO::PARAM_INT);
                $result->execute();
                $commande = $result->fetch();
                $id = $commande['com_id'];*/

                $sql = 'SELECT * FROM commandeLigne WHERE com_id = :id GROUP BY comL_id ';
                $result = $pdo->prepare($sql);
//$result->bindValue(':id', 1, PDO::PARAM_INT);
                $result->bindParam(':id', $id, PDO::PARAM_INT);
                $result->execute();
//$result->execute([':id'=>$id]);
                $commandeLignes = $result->fetchAll();


                //$success = 'Edito enregistré :';
                //header('location: admin.php');
                //header('location:?page=commande');
            }
            include 'theme_membres/vue/commande/createCommande.html.php';
        //}


    }
    function modifierCommande()
    {
        global $pdo;
        if (isset($_SESSION['user_id']) === true) {
            $id = $_POST['valeur_id'];
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
            include 'theme_membres/vue/commande/updateCommande.html.php';

        }
    }
    function supprimerCommande()
    {

            if (isset($_POST['supprimer'])) {


                global $pdo;
                $id = $_POST['valeur_id'];

                $result = $pdo->prepare('delete from commande where com_id = :id ');
                $result->execute(array(
                    'id' => $id
                ));
                //header('theme_admin/vue/famille/listeFamille.html.php');

            }
            header('location:?page=commande');




    }



?>
<!--<script type="text/javascript" src='theme_admin/js/cours.js'></script>-->