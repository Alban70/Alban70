<?php


//$action = (isset($_GET['action']))? $_GET['action'] : 'modifierFamille';
if (isset($_POST['ValContact'])) $action = 'validerContact';

//elseif(isset($_POST['modifier'])) $action='modifier';
else $action = 'index';

ob_start();
switch ($action) {
    default:
    case 'index' :
        indexAction();
        break;

    case 'validerContact' :
        validerContact();
        break;

}

$buffer = ob_get_flush();
file_put_contents($file, $buffer);


function indexAction()
{

}

function validerContact()
{
    global $pdo;
    $erreur = false;
    $message = false;

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $societe = $_POST['ste'];
        $nom = $_POST['nom'];
        $sql = 'SELECT * FROM societe WHERE nom = :libelle';
        $result = $pdo->prepare($sql);
        $result->execute([':libelle' => $societe]);
        if ($societe = $result->fetch()) {
            $soc_id = $societe['soc_id'];
            $ste = $societe['nom'];
        } else {
            if ($_POST['ste'] != '')
                $ste = $_POST['ste'];
            else $erreur .= '-Entrez votre société<br>';

            //faire un insert dans société

            $sql = 'INSERT INTO societe(nom, adresse1, adresse2, adresse3, adresse4, adresse5, cp, ville, pays, actif, type, dateCreation) VALUES(?, NULL, NULL, NULL, NULL , NULL , NULL, NULL, NULL, NULL, NULL, NOW())';
            $result = $pdo->prepare($sql);
            $result->bindValue(1, $ste);
            $result->execute();
            $soc_id = $pdo->lastInsertId();
        }

//$soc_id = $societe['soc_id'];

        $sql = 'SELECT * FROM contact WHERE soc_id = :id';
        $result = $pdo->prepare($sql);
        $result->execute([':id' => $soc_id]);
        if ($contact = $result->fetch()) {
            $contact_id = $contact['contact_id'];
            $genre = $contact['genre'];
            $nom = $contact['nom'];
            $prenom = $contact['prenom'];

        } else {

            if ($_POST['genre'] != '')
                $genre = $_POST['genre'];
            else $erreur .= '-Entrez votre civilite<br>';

            if ($_POST['nom'] != '')
                $nom = $_POST['nom'];
            else $erreur .= '-Entrez votre nom<br>';

            if ($_POST['prenom'] != '')
                $prenom = $_POST['prenom'];
            else $erreur .= '-Entrez votre prenom<br>';

//faire un insert de contact

            $sql = 'INSERT INTO contact(nom, prenom, genre, dateCreation, soc_id) VALUES(?, ?, ?, NOW(), ?)';
            $result = $pdo->prepare($sql);
            $result->bindValue(1, $nom);
            $result->bindValue(2, $prenom);
            $result->bindValue(3, $genre);
            $result->bindValue(4, $soc_id);
            $result->execute();
            $contact_id = $pdo->lastInsertId();
        }

//$contact_id = $contact['contact_id'];
        $sql = 'SELECT * FROM coordonnees WHERE soc_id = ? AND contact_id = ?';
        $result = $pdo->prepare($sql);
        $result->bindValue(1, $soc_id);
        $result->bindValue(2, $contact_id);
        $result->execute();
        if ($coordonnees = $result->fetch()) {
            $coord_id = $coordonnees['coord_id'];
            $tel = $coordonnees['tel'];
            $email = $coordonnees['email'];

        } else {

            if ($_POST['tel'] != '')
                $tel = $_POST['tel'];
            else $erreur .= '-Entrez votre telephone<br>';

            if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
                $email = $_POST['email'];
            else $erreur .= '-Entrez votre email<br>';

//faire un insert de coordonnees

            $banq_id = '0';
            $sql = 'INSERT INTO coordonnees(email, tel, fax, type, actif, statut, dateCreation, banq_id, contact_id, soc_id) VALUES(?, ?, NULL, NULL, NULL, NULL, NOW(),NULL ,?, ?)';
            $result = $pdo->prepare($sql);
            $result->bindValue(1, $email);
            $result->bindValue(2, $tel);
            $result->bindValue(3, $contact_id);
            $result->bindValue(4, $soc_id);
            $result->execute();
            $coord_id = $pdo->lastInsertId();
        }

//$contact_id = $contact['contact_id'];
        /*$sql = 'SELECT * FROM societeQualif WHERE soc_id = ?';
        $result = $pdo->prepare($sql);
        $result->bindValue(1, $soc_id);
        $result->execute();
        if ($socQualif = $result->fetch()) {
            $socQualif_id = $socQualif['id'];
            $structure = $socQualif['structure'];
            $nbreVendeur = $socQualif['nbreVendeur'];

        } else {

            if ($_POST['structure'] != '')
                $structure = $_POST['structure'];
            else $erreur .= '-Entrez votre structure<br>';

            if ($_POST['effectif_vente'] != '')
                $nbreVendeur = $_POST['$nbreVendeur'];
            else $erreur .= '-Entrez le nombre de vendeur<br>';

//faire un insert de societeQualif

            $sql = 'INSERT INTO societeQualif(structure, nature, dateCreation, nbreVendeur, nbreEmploye, soc_id) VALUES(?, ?, NULL, NOW(), ?)';
            $result = $pdo->prepare($sql);
            $result->bindValue(1, $structure);
            $result->bindValue(2, $nbreVendeur);
            $result->bindValue(3, $soc_id);
            $result->execute();
            $socQualif_id = $pdo->lastInsertId();

        }*/


        if ($erreur == '') {

            /*$sql = 'INSERT INTO societe(nom, adresse1, adresse2, adresse3, adresse4, adresse5, cp, ville, pays, actif, type, dateCreation) VALUES(?, NULL, NULL, NULL, NULL , NULL , NULL, NULL, NULL, NULL, NULL, NOW())';
            $result = $pdo->prepare($sql);
            $result->bindValue(1, $ste);
            $result->execute();
            $soc_id = $pdo->lastInsertId();

            $sql = 'INSERT INTO contact(nom, prenom, genre, dateCreation, soc_id) VALUES(?, ?, NULL, NOW(), ?)';
            $result = $pdo->prepare($sql);
            $result->bindValue(1, $nom);
            $result->bindValue(2, $prenom);
            $result->bindValue(3, $genre);
            $result->bindValue(4, $soc_id);
            $result->execute();
            $contact_id = $pdo->lastInsertId();


            $banq_id = '0';
            $sql = 'INSERT INTO coordonnees(email, tel, fax, type, actif, statut, dateCreation, banq_id, contact_id, soc_id) VALUES(?, ?, NULL, NULL, NULL, NULL, NOW(),NULL ,?, ?)';
            $result = $pdo->prepare($sql);
            $result->bindValue(1, $email);
            $result->bindValue(2, $tel);
            $result->bindValue(3, $contact_id);
            $result->bindValue(4, $soc_id);
            $result->execute();

            $sql = 'INSERT INTO societeQualif(structure, nature, dateCreation, nbreVendeur, nbreEmploye, soc_id) VALUES(?, ?, NULL, NOW(), ?)';
            $result = $pdo->prepare($sql);
            $result->bindValue(1, $nom);
            $result->bindValue(2, $prenom);
            $result->bindValue(3, $genre);
            $result->bindValue(4, $soc_id);
            $result->execute();
            $contact_id = $pdo->lastInsertId();*/

            $libelle = 'Demande de contact';
            $type = 'Contact';
            $fait = 'A Faire';
            $sql = 'INSERT INTO action(libelle, designation, dateCreation, dateRelance, type, statut, actif, fait, soc_id, contact_id, coord_id) VALUES(?, NULL,  NOW(), NOW(), ?, NULL, NULL, ?, ?, ?, ?)';
            $result = $pdo->prepare($sql);
            $result->bindValue(1, $libelle);
            $result->bindValue(2, $type);
            $result->bindValue(3, $fait);
            $result->bindValue(4, $soc_id);
            $result->bindValue(5, $contact_id);
            $result->bindValue(6, $coord_id);
            $result->execute();
        }




    }
}



