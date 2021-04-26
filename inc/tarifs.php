<?php

//$action = (isset($_GET['action']))? $_GET['action'] : 'index';


if(isset($_POST['commande'])) $action='ajouterCommande';
//elseif(isset($_POST['updateCom'])) $action='modifierCommande';
//elseif(isset($_POST['deleteCom'])) $action='supprimerCommande';

else $action = 'index';

var_dump($_POST);

//else $action = (isset($_GET['action']))? $_GET['action'] : 'index';

ob_start();
switch($action){
    default:
    case 'index' :
        indexAction();
        break;

    case 'ajouterCommande' :
        ajouterCommande();
        break;

}
$buffer = ob_get_flush();
file_put_contents($file, $buffer);
function indexAction()
{
    global $pdo;
    $cm = 'contactManager';
    $vente = 'vente';
    $marketing = 'marketing';
    $sc = 'serviceClient';
    $gestion = 'gestion';

    $sql = 'SELECT * FROM article WHERE type = ?';
    $result = $pdo->prepare($sql);
    $result->bindValue(1, $cm);
    $result->execute();
    $cm = $result->fetch();

    $sql = 'SELECT * FROM article WHERE type = ?';
    $result = $pdo->prepare($sql);
    $result->bindValue(1, $vente);
    $result->execute();
    $vente = $result->fetch();

    $sql = 'SELECT * FROM article WHERE type = ?';
    $result = $pdo->prepare($sql);
    $result->bindValue(1, $marketing);
    $result->execute();
    $marketing = $result->fetch();

    $sql = 'SELECT * FROM article WHERE type = ?';
    $result = $pdo->prepare($sql);
    $result->bindValue(1, $sc);
    $result->execute();
    $sc = $result->fetch();

    $sql = 'SELECT * FROM article WHERE type = ?';
    $result = $pdo->prepare($sql);
    $result->bindValue(1, $gestion);
    $result->execute();
    $gestion = $result->fetch();


    include './theme/vue/tarifs/tarifs.html.php';
}

function ajouterCommande()
{
    global $pdo;
    $cm = 'contactManager';
    $vente = 'vente';
    $marketing = 'marketing';
    $sc = 'serviceClient';
    $gestion = 'gestion';

    $sql = 'SELECT * FROM article WHERE type = ?';
    $result = $pdo->prepare($sql);
    $result->bindValue(1, $cm);
    $result->execute();
    $cm = $result->fetch();

    $sql = 'SELECT * FROM article WHERE type = ?';
    $result = $pdo->prepare($sql);
    $result->bindValue(1, $vente);
    $result->execute();
    $vente = $result->fetch();

    $sql = 'SELECT * FROM article WHERE type = ?';
    $result = $pdo->prepare($sql);
    $result->bindValue(1, $marketing);
    $result->execute();
    $marketing = $result->fetch();

    $sql = 'SELECT * FROM article WHERE type = ?';
    $result = $pdo->prepare($sql);
    $result->bindValue(1, $sc);
    $result->execute();
    $sc = $result->fetch();

    $sql = 'SELECT * FROM article WHERE type = ?';
    $result = $pdo->prepare($sql);
    $result->bindValue(1, $gestion);
    $result->execute();
    $gestion = $result->fetch();






    $soc_id = 'NULL';
    $libelle = 'Devis abonnement logiciels';
    $type = 'Devis';
    $statut = 'encours';

    $sql = 'INSERT INTO commande(libelle, dateCom, dateLivrSouh, dateLivrPrevu, type, statut, totalHt, totalTTC, totalTVA, tva, actif, dateCreation, soc_id) VALUES(?, NOW(), NOW(), NOW(),?,?, NULL, NULL, NULL, NULL, NULL, NOW(), NULL)';
    $result = $pdo->prepare($sql);
    $result->bindValue(1, $libelle);
    $result->bindValue(2, $type);
    $result->bindValue(3, $statut);
    //$result->bindValue(4, $soc_id);
    $result->execute();

    $_SESSION['com_id'] = $pdo->lastInsertId();
    $com_id = $_SESSION['com_id'];

    var_dump($com_id);
    var_dump($_SESSION['com_id']);



    // inerer autant de ligne que d'articles sélectionnés   Faire un foreach

    $aricles[$_POST['cm_id']] = $_POST['nbCm'];
    $aricles[$_POST['vente_id']] = $_POST['nbVente'];
    $aricles[$_POST['gestion_id']] = $_POST['nbGestion'];
    $aricles[$_POST['marketing_id']] = $_POST['nbMarketing'];
    $aricles[$_POST['sc_id']] = $_POST['nbSc'];

foreach($aricles as $key => $value)
{
    if($value > 0) {



        $sql = 'SELECT * FROM article WHERE article_id = ?';
        $result = $pdo->prepare($sql);
        $result->bindValue(1, $key);
        $result->execute();
        $article = $result->fetch();
        $total = $value*$article['prixHT'];



        $sql = 'INSERT INTO commandeLigne(qte, libelle, designation, remise, typeRemise, prix, typePrix, sTotalLigne, statut, dateCreation, com_id, article_id) VALUES(?, ?, NULL, NULL, NULL, ?, NULL, ?, NULL, NOW(), ?, ?)';
        $result = $pdo->prepare($sql);
        $result->bindValue(1, $value);
        $result->bindValue(2, $article['libelle']);
        $result->bindValue(3, $article['prixHT']);
        $result->bindValue(4, $total);
        $result->bindValue(5, $com_id);
        $result->bindValue(6, $article['article_id']);
        $result->execute();
    }

}










    include 'theme_membres/vue/connexionSite.html.php';
}

//}

