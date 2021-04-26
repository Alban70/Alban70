<?php
//if(isset($_POST['ajouter'])) $action='ajouter';
//if(isset($_POST['ListeAction'])) $action='ListeDesAction';
//else $action = (isset($_GET['action'])) ? $_GET['action'] : 'index';

if(isset($_POST['ajouter'])) $action='ajouter';
elseif(isset($_POST['ajouterAction'])) $action='ajouterAction';
elseif(isset($_POST['modifier'])) $action='modifier';
elseif(isset($_POST['supprimer'])) $action='supprimer';
else $action = (isset($_GET['action'])) ? $_GET['action'] : 'index';

ob_start();
switch($action){
    default:
    case 'index' :
    listeAction();
        break;

    case 'ajouterAction' :
        ajouterAction();
        break;

    /*case 'ListeAction' :
        ListeDesAction();
        break;*/



}

$buffer = ob_get_flush();
file_put_contents($file, $buffer);



function listeAction()
{
    global $pdo;

    $id = $_POST['valeur_id'];
    $sql = 'SELECT * FROM societe WHERE soc_id = :id';
    $result = $pdo->prepare($sql);
    $result->bindParam(':id', $id, PDO::PARAM_INT);
    $result->execute();
    $societe = $result->fetch();

    $id2 = $societe['soc_id'];
    $sql = 'SELECT * FROM coordonnees WHERE soc_id = :id';
    $result = $pdo->prepare($sql);

    $result->bindParam(':id', $id2, PDO::PARAM_INT);
    $result->execute();

    $coordonnees = $result->fetch();



    $sql = 'SELECT * FROM action WHERE soc_id = :id';
    $result = $pdo->prepare($sql);

    $result->bindParam(':id', $id, PDO::PARAM_INT);
    $result->execute();

    $actions = $result->fetchAll();
    include 'theme_admin/vue/societe/ListeActions_client.html.php';



    /*if (isset($_SESSION['user_id']) === true) {
        global $pdo;
        $id = $_SESSION['user_id'];
        $sql = 'SELECT * FROM user WHERE id = :id';
        $result = $pdo->prepare($sql);

        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->execute();

        $membre = $result->fetch();

        $id = $membre['contact_id'];
        $sql = 'SELECT * FROM contact WHERE contact_id = :id';
        $result = $pdo->prepare($sql);

        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->execute();

        $contact = $result->fetch();

        $id = $contact['contact_id'];
        $sql = 'SELECT * FROM societe WHERE soc_id = :id';
        $result = $pdo->prepare($sql);

        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->execute();

        $societe = $result->fetch();

        $id2 = $societe['soc_id'];
        $id = $contact['contact_id'];
        $sql = 'SELECT * FROM coordonnees WHERE contact_id = :id AND soc_id = :id2';
        $result = $pdo->prepare($sql);

        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':id2', $id2, PDO::PARAM_INT);
        $result->execute();

        $coordonnees = $result->fetch();


        $sql = 'SELECT * FROM commande WHERE soc_id = :id GROUP BY com_id ';
        $result = $pdo->prepare($sql);

        $result->bindParam(':id', $id2, PDO::PARAM_INT);
        $result->execute();

        $commandes = $result->fetchAll();

        include 'theme_membres/vue/commande/listeCommande.html.php';
    }*/
}

/*function ListeDesAction(){
    global $pdo;
    var_dump($_POST);
    var_dump('hello');
    $id = $_POST['valeur_id'];
    $sql = 'SELECT * FROM societe WHERE soc_id = :id';
    $result = $pdo->prepare($sql);
    $result->bindParam(':id', $id, PDO::PARAM_INT);
    $result->execute();
    $societe = $result->fetch();

    $id2 = $societe['soc_id'];
    $sql = 'SELECT * FROM coordonnees WHERE soc_id = :id';
    $result = $pdo->prepare($sql);

    $result->bindParam(':id', $id2, PDO::PARAM_INT);
    $result->execute();

    $coordonnees = $result->fetch();



    $sql = 'SELECT * FROM action WHERE soc_id = :id';
    $result = $pdo->prepare($sql);

    $result->bindParam(':id', $id, PDO::PARAM_INT);
    $result->execute();

    $actions = $result->fetchAll();
    include 'theme_admin/vue/societe/ListeActions_client.html.php';

}*/
function ajouterAction()
{

    global $pdo;
    $erreur = '';

    $soc_id = $_POST['idSte'];

    $libelle = 'Commande Web';
    $type = 'Web';
    $statut = 'Encours';




    /*if (isset($_SESSION['user_id']) === true) {
        $id = $_SESSION['user_id'];
        $sql = 'SELECT * FROM user WHERE id = :id';
        $result = $pdo->prepare($sql);

        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->execute();

        $membre = $result->fetch();

        $id = $membre['contact_id'];
        $sql = 'SELECT * FROM contact WHERE contact_id = :id';
        $result = $pdo->prepare($sql);

        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->execute();

        $contact = $result->fetch();

        $id = $contact['contact_id'];
        $sql = 'SELECT * FROM societe WHERE soc_id = :id';
        $result = $pdo->prepare($sql);

        $result->bindParam(':id', $id,         $result->execute();
        PDO::PARAM_INT);

        $societe = $result->fetch();*/


    $soc_id = $_POST['idSte'];


    $idSte = $_POST['idSte'];
    $sql = 'SELECT * FROM societe WHERE soc_id = :id';
    $result = $pdo->prepare($sql);
    $result->bindParam(':id', $idSte, PDO::PARAM_INT);
    $result->execute();
    $societe = $result->fetch();

    //$idContact = $societe['soc_id'];
    $sql = 'SELECT * FROM contact WHERE soc_id = :id';
    $result = $pdo->prepare($sql);
    $result->bindParam(':id', $idSte, PDO::PARAM_INT);
    $result->execute();
    $contact = $result->fetch();


    //$idCoord = $societe['soc_id'];
    $sql = 'SELECT * FROM coordonnees WHERE soc_id = :id';
    $result = $pdo->prepare($sql);
    $result->bindParam(':id', $idSte, PDO::PARAM_INT);
    $result->execute();
    $coordonnees = $result->fetch();


        /*$id = $societe['soc_id'];
        $sql = 'INSERT INTO action(libelle, designation, dateCreation, dateRelance, type, statut, actif, fait, soc_id, contact_id, coord_id) VALUES(?, NOW(), NOW(), NOW(),?,?, NULL, NULL, NULL, NULL, NULL, NOW(), ?)';
        $result = $pdo->prepare($sql);
        $result->bindValue(1, $libelle);
        $result->bindValue(2, $type);
        $result->bindValue(3, $statut);
        $result->bindValue(4, $societe['soc_id']);
        $result->execute();*/

        /*$id = $pdo->lastInsertId();
        $_SESSION['comID'] = $id;

        $sql = 'SELECT * FROM commande WHERE com_id = :id';
        $result = $pdo->prepare($sql);

        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->execute();

        $commande = $result->fetch();

        $statut = 'tarif';

        $sql = 'SELECT * FROM article WHERE statut = "tarif"';
        //$result->bindParam(':statut', $statut);
        $result = $pdo->prepare($sql);
        $result->execute();
        $articles = $result->fetchAll();*/







    include 'theme_admin/vue/action/ajouter.html.php';



}

?>
<!--<script type="text/javascript" src='theme_admin/js/cours.js'></script>-->