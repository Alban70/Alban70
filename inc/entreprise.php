<?php

//$action = (isset($_GET['action'])) ? $_GET['action'] : 'index';
if(isset($_POST['ajouter'])) $action='ajouter';
elseif(isset($_POST['ModifSte'])) $action='modifierEntreprise';
elseif(isset($_POST['ListeAction'])) $action='ListeDesAction';
elseif(isset($_POST['ModifContact'])) $action='modifierContact';
elseif(isset($_POST['supprimer'])) $action='supprimer';
else $action = (isset($_GET['action'])) ? $_GET['action'] : 'index';
ob_start();
switch($action){
    default:
    case 'index' :
        indexAction();
        break;

    case 'modifierEntreprise' :
        modifierEntreprise();
        break;

    case 'modifierContact' :
        modifierContact();
        break;

    case 'ListeAction' :
        ListeDesAction();
        break;

        //case 'modifier' :
        //modifierCommand();
        //break;


    //case 'modifier' :
        //modifierCommand();
        //break;
    //case 'supprimer' :
        //supprimerFamille();
        //break;



}

$buffer = ob_get_flush();
file_put_contents($file, $buffer);


function indexAction()
{
    global $pdo;
    if (isset($_SESSION['user_id']) === true) {

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

        $id = $contact['soc_id'];
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

        $sql = 'SELECT * FROM commande WHERE soc_id = :id';
        $result = $pdo->prepare($sql);

        $result->bindParam(':id', $id2, PDO::PARAM_INT);
        $result->execute();

        $commandes = $result->fetchAll();
        include 'theme_membres/vue/acceuil_membres.html.php';
    }
}







function modifierEntreprise()
    {
if (isset($_SESSION['user_id']) === true) {
    global $pdo;
    /*$id = $_SESSION['user_id'];
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
    $societe = $result->fetch();*/


    $idMembre = $_POST['idMembre'];
    $sql = 'SELECT * FROM user WHERE id = :id';
    $result = $pdo->prepare($sql);
    $result->bindParam(':id', $idMembre, PDO::PARAM_INT);
    $result->execute();
    $membre = $result->fetch();

        $idSte = $_POST['idSte'];
        $sql = 'SELECT * FROM societe WHERE soc_id = :id';
        $result = $pdo->prepare($sql);
        $result->bindParam(':id', $idSte, PDO::PARAM_INT);
        $result->execute();
        $societe = $result->fetch();

    $idContact = $_POST['idContact'];
    $sql = 'SELECT * FROM contact WHERE contact_id = :id';
    $result = $pdo->prepare($sql);
    $result->bindParam(':id', $idContact, PDO::PARAM_INT);
    $result->execute();
    $contact = $result->fetch();


    $idCoord = $_POST['idCoord'];
    $sql = 'SELECT * FROM coordonnees WHERE coord_id = :id';
    $result = $pdo->prepare($sql);
    $result->bindParam(':id', $idCoord, PDO::PARAM_INT);
    $result->execute();
    $coordonnees = $result->fetch();



        include 'theme_membres/vue/societe/modifier.html.php';
}
}
function modifierContact()
{
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

        include 'theme_membres/vue/contact/modifier.html.php';
    }
}

?>
<!--<script type="text/javascript" src='theme_admin/js/cours.js'></script>-->

