<?php


//$action = (isset($_GET['action']))? $_GET['action'] : 'modifierFamille';

if(isset($_POST['modifProfil'])) $action='modifierEntre';
else $action = (isset($_GET['action'])) ? $_GET['action'] : 'index';
var_dump($_POST);
ob_start();
switch($action){
    default:
    case 'index' :
    indexAction();
        break;


    case 'modifierEntre' :
        modifierEntre();
        break;

    case 'modifierContact' :
        modifierContact();
        break;


}

$buffer = ob_get_flush();
file_put_contents($file, $buffer);


function indexAction(){

}


function modifierEntre()
{
    var_dump($_POST);
    global $pdo;
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $erreur = '';
        var_dump($_POST);
        if (strlen($_POST['rs']) < 3) {
            $erreur .= 'nom invalide';
        } else {
            $rs = $_POST['rs'];
        }


        if (strlen($_POST['nom']) < 3) {
            $erreur .= 'nom invalide';
        } else {
            $nom = $_POST['nom'];
        }
        if (strlen($_POST['prenom']) < 3) {
            $erreur .= 'prenom invalide';
        } else {
            $prenom = $_POST['prenom'];
        }

        if ($erreur == '') {
            //$Date= date('Y-m-d h : i : s ');


            $result = $pdo->prepare('update societe set nom = :nom  where soc_id = :id ');
            $result->execute(array(
                'nom' => $rs,
                'id' => $_POST['idSte']
            ));

            $result = $pdo->prepare('update contact set nom = :nom, prenom = :prenom  where contact_id = :id ');
            $result->execute(array(
                'nom' => $nom,
                'prenom' => $prenom,
                'id' => $_POST['idContact']
            ));
            $result = $pdo->prepare('update coordonnees set email = :email, tel = :tel  where contact_id = :id AND soc_id = :id2');
            $result->execute(array(
                'email' => $_POST['email'],
                'tel' => $_POST['tel'],
                'id' => $_POST['idContact'],
                'id2' => $_POST['idSte']
            ));
            //$success = 'Edito modifié :';
            header('location:?page=entreprise');
        }

    }

}

function modifierContact()
{

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $erreur = '';

        /*if (isset($_POST['genre'])) {
            $erreur .= 'genre invalide';
        } else {
            $genre = $_POST['genre'];
        }*/

        if (strlen($_POST['nom']) < 3) {
            $erreur .= 'nom invalide';
        } else {
            $nom = $_POST['nom'];
        }
        if (strlen($_POST['prenom']) < 3) {
            $erreur .= 'prenom invalide';
        } else {
            $prenom = $_POST['prenom'];
        }

        if ($erreur == '') {
            //$Date= date('Y-m-d h : i : s ');

            var_dump($_POST);

            global $pdo;
            $result = $pdo->prepare('update contact set nom = :nom, prenom = :prenom, genre = :genre  where contact_id = :id ');
            $result->execute(array(
                'genre' => $_POST['genre'],
                'nom' => $_POST['nom'],
                'prenom' => $_POST['prenom'],
                'id' => $_POST['id']
            ));
            /*$result = $pdo->prepare('update user set pwd = :pwd  where contact_id = :id ');
            $result->execute(array(
                'pwd' => $_POST['pwd'],
                'id' => $_POST['id']
            ));*/

            $id = $_POST['id'];
            $sql = 'SELECT * FROM contact WHERE contact_id = :id';
            $result = $pdo->prepare($sql);
            $result->bindParam(':id', $id, PDO::PARAM_INT);
            $result->execute();
            $contact = $result->fetch();


            $result = $pdo->prepare('update coordonnees set email = :email, tel = :tel  where contact_id = :id AND soc_id = :id2');
            $result->execute(array(
                'email' => $_POST['email'],
                'tel' => $_POST['tel'],
                'id' => $contact['contact_id'],
                 'id2' => $contact['soc_id']
            ));
            //$success = 'Edito modifié :';
            header('location:?page=entreprise');
        }

    }

}


?>


