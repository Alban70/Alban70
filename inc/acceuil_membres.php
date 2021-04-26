<?php

$action = (isset($_GET['action']))? $_GET['action'] : 'index';

ob_start();
    switch($action){
        default:
        case 'index' :
            indexAction();
            break;

        case 'modifier' :
            modifierMembre();
            break;

        case 'supprimer' :
            supprimerMembre();
            break;

        case 'ListeCommande' :
            supprimerMembre();
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
        case 'suprimerLigneCommande' :
            supprimerligneCommande();
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


        $sql = 'SELECT * FROM commande WHERE soc_id = :id GROUP BY libelle ';
        $result = $pdo->prepare($sql);
//$result->bindValue(':id', 1, PDO::PARAM_INT);
        $result->bindParam(':id', $id2, PDO::PARAM_INT);
        $result->execute();
//$result->execute([':id'=>$id]);
        $commande = $result->fetch();

        $id = $commande['com_id'];
        $sql = 'SELECT * FROM commandeLigne WHERE com_id = :id GROUP BY libelle ';
        $result = $pdo->prepare($sql);
//$result->bindValue(':id', 1, PDO::PARAM_INT);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->execute();
//$result->execute([':id'=>$id]);
        $comLignes = $result->fetchAll();



        include 'theme_membres/vue/acceuil_membres.html.php';
    }
}



function supprimerligneCommande(){


    global $pdo;

    $id = $_POST['valeur_id'];

    $result = $pdo->prepare('delete from commandeLigne where comL_id = :id ');
    $result->execute(array(
        'id' => $id
    ));
    header('theme_membres/vue/acceuil_membres.html.php');
}







function modifierMembre(){

        if (isset($_SESSION['user_id']) === true) {
            if($_SERVER['REQUEST_METHOD']=='POST'){
                if (isset($_POST['ok'])) {
                    $erreur = '';

                    if (strlen($_POST['nom']) < 3) {
                        $erreur .= 'Nom invalide';
                    } else {
                        $nom = $_POST['nom'];
                    }
                    if ($_POST['email'] == '') {
                        $erreur .= 'email obligatoire';
                    } else {
                        $email = $_POST['email'];
                        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                            $email = $_POST['email'];
                        } else {
                            $erreur .= 'email invalide';
                        }
                    }
                    if ($_POST['ville'] == '0')
                        $erreur .= 'Saisissez une ville';
                    else
                        $ville = $_POST['ville'];


                    if ($erreur == ''){
                        //$Date= date('Y-m-d h : i : s ');


                        global $pdo;
                        $result = $pdo->prepare('update membre set pwd = :pwd, login = :login, nom = :nom, prenom = :prenom, ville = :ville, pays = :pays, email = :email, profil = :profil where id = :id ');
                        $result->execute(array(
                            'pwd' => $_POST['pwd'],
                            'login' => $_POST['login'],
                            'email' => $_POST['email'],
                            'nom' => $_POST['nom'],
                            'prenom' => $_POST['prenom'],
                            'ville' => $_POST['ville'],
                            //'pays' => $_POST['pays'],
                            //'profil' => $_POST['profil'],
                            'id' => $_SESSION['user_id']
                        ));
                        $success = 'Edito modifié :';
                    }
}
                global $pdo;
                $id = $_SESSION['user_id'];
                $sql = 'SELECT * FROM membre WHERE id = :id';
                $result = $pdo->prepare($sql);
//$result->bindValue(':id', 1, PDO::PARAM_INT);
                $result->bindParam(':id', $id, PDO::PARAM_INT);
                $result->execute();
//$result->execute([':id'=>$id]);
                $membre = $result->fetch();
            }
            include 'theme_membres/vue/acceuil_membres.html.php';
        }
    }




function supprimerMembre(){

}

