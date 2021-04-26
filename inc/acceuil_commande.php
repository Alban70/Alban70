<?php

$action = (isset($_GET['action']))? $_GET['action'] : 'index';

ob_start();
    switch($action){
        default:
        case 'index' :
            indexAction();
            break;

        case 'createCommande' :
            createCommande();
            break;

        case 'modifierCommande' :
            modifierCommande();
            break;

        case 'supprimerCommande' :
            supprimerCommande();
            break;

        case 'createCommandeLigne' :
            createCommandeLigne();
            break;
    }

$buffer = ob_get_flush();
file_put_contents($file, $buffer);



function indexAction()
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

        include 'theme_membres/vue/acceuil_membres.html.php';
    }
}
