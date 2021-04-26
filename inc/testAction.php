<?php


//$action = (isset($_GET['action']))? $_GET['action'] : 'modifierFamille';
if(isset($_POST['ValTest'])) $action='validerTest';

//elseif(isset($_POST['modifier'])) $action='modifier';
else $action = 'index';

ob_start();
switch($action){
    default:
    case 'index' :
        indexAction();
        break;

    case 'validerTest' :
        validerTest();
        break;

}

$buffer = ob_get_flush();
file_put_contents($file, $buffer);


function indexAction()
{

}

function validerTest()
{
    global $pdo;
    //if (isset($_SESSION['user_id']) !== true) {

    $erreur = false;
    $message = false;

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $login = $_POST['nom'];
        $pwd = $_POST['pwd'];


        $sql = 'SELECT * FROM user WHERE login = :login';
        $result = $pdo->prepare($sql);
        $result->execute([':login' => $login]);
        if ($user = $result->fetch()) {
            var_dump($user);
            $verifPwd = password_verify($pwd, $user['pwd']);
            if ($verifPwd == true) {

                $contact_id = $user['contact_id'];
                $sql = 'SELECT * FROM contact WHERE contact_id = :id';
                $result = $pdo->prepare($sql);
                $result->bindParam(':id', $contact_id, PDO::PARAM_INT);
                $result->execute();
                $contact = $result->fetch();

                $soc_id = $contact['soc_id'];


                // fetch societe            Pas besoin car soc_id hydraté

                /*$sql = 'SELECT * FROM societe WHERE soc_id = :id';
                $result = $pdo->prepare($sql);
                $result->bindParam(':id', $id, PDO::PARAM_INT);
                $result->execute();
                $societe = $result->fetch();*/


                // il faut faire un fetch sur coordonnées pour récuperer l'id afin d'hydrater coord_id de action            Non pas sur


                //header('Location: tarifs.php');

                //include 'theme_membres/vue/connexionSite.html.php';        Non à la fin
            } else {
                $message = "Votre Mdp est incorrect(e), veuillez recommencez !";
            }

        } else {

            if ($_POST['ste'] != '')
                $ste = $_POST['ste'];
            else $erreur .= '-Entrez votre société<br>';

            if ($_POST['tel'] != '')
                $tel = $_POST['tel'];
            else $erreur .= '-Entrez votre téléphone<br>';


            if ($_POST['nom'] != '')
                $nom = $_POST['nom'];
            else $erreur .= '-Entrez votre nom<br>';

            if ($_POST['prenom'] != '')
                $prenom = $_POST['prenom'];
            else $erreur .= '-Entrez votre prenom<br>';

            if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
                $email = $_POST['email'];
            else $erreur .= '-Entrez votre email<br>';

            if ($_POST['login'] != '')
                $login = $_POST['login'];
            else $erreur .= '-Entrez votre login<br>';


            if ($_POST['pwd'] != '')
                $pwd = password_hash($_POST['pwd'], PASSWORD_DEFAULT);
            //$pwd = $_POST['pwd'];
            else $erreur .= '-Entrez votre password<br>';


            if ($erreur == '') {

                $sql = 'INSERT INTO societe(nom, adresse1, adresse2, adresse3, adresse4, adresse5, cp, ville, pays, actif, type, dateCreation) VALUES(?, NULL, NULL, NULL, NULL , NULL , NULL, NULL, NULL, NULL, NULL, NOW())';
                $result = $pdo->prepare($sql);
                $result->bindValue(1, $ste);
                $result->execute();
                $soc_id = $pdo->lastInsertId();

                $sql = 'INSERT INTO contact(nom, prenom, genre, dateCreation, soc_id) VALUES(?, ?, NULL, NOW(), ?)';
                $result = $pdo->prepare($sql);
                $result->bindValue(1, $nom);
                $result->bindValue(2, $prenom);
                $result->bindValue(3, $soc_id);
                $result->execute();
                $contact_id = $pdo->lastInsertId();


                $sql = 'INSERT INTO USER(dateCreation, login, pwd, actif, statut, type, contact_id) VALUES(NOW(),? ,?, null, null, null, ?)';
                $result = $pdo->prepare($sql);
                $result->bindValue(1, $login);
                $result->bindValue(2, $pwd);
                $result->bindValue(3, $contact_id);
                $result->execute();

                $banq_id = '0';
                $sql = 'INSERT INTO coordonnees(email, tel, fax, type, actif, statut, dateCreation, banq_id, contact_id, soc_id) VALUES(?, ?, NULL, NULL, NULL, NULL, NOW(),NULL ,?, ?)';
                $result = $pdo->prepare($sql);
                $result->bindValue(1, $email);
                $result->bindValue(2, $tel);
                $result->bindValue(3, $contact_id);
                $result->bindValue(4, $soc_id);
                $result->execute();


                //header('Location: tarifs.php');

            }


        }
        $sql = 'SELECT * FROM commande WHERE soc_id = :id AND type="test"';
        $result = $pdo->prepare($sql);
        $result->bindParam(':id', $soc_id, PDO::PARAM_INT);
        $result->execute();
        //$commande = $result->fetch();
        if ($commande = $result->fetch()) {
            $message .= 'Vous avez déjà une demande de test en cours, veuillez vous identifiez, pour visualiser vos actions dans votre espace membre';
            include 'theme/vue/test/testConfirmation.html.php';
        } else {
            $test = 'test';

            $sql = 'SELECT * FROM article WHERE type = ?';
            $result = $pdo->prepare($sql);
            $result->bindValue(1, $test);
            $result->execute();
            $article = $result->fetch();


            $libelle = $article['libelle'];
            $type = 'test';
            $statut = 'encours';

            $sql = 'INSERT INTO commande(libelle, dateCom, dateLivrSouh, dateLivrPrevu, type, statut, totalHt, totalTTC, totalTVA, tva, actif, dateCreation, soc_id) VALUES(?, NOW(), NOW(), NOW(),?,?, NULL, NULL, NULL, NULL, NULL, NOW(), ?)';
            $result = $pdo->prepare($sql);
            $result->bindValue(1, $libelle);
            $result->bindValue(2, $type);
            $result->bindValue(3, $statut);
            $result->bindValue(4, $soc_id);
            $result->execute();

            $com_id = $pdo->lastInsertId();

            $sql = 'INSERT INTO commandeLigne(qte, libelle, designation, remise, typeRemise, prix, typePrix, sTotalLigne, statut, dateCreation, com_id, article_id) VALUES(?, ?, NULL, NULL, NULL, ?, NULL, ?, NULL, NOW(), ?, ?)';
            $result = $pdo->prepare($sql);
            $result->bindValue(1, 1);
            $result->bindValue(2, $article['libelle']);
            $result->bindValue(3, $article['prixHT']);
            $result->bindValue(4, 0);
            $result->bindValue(5, $com_id);
            $result->bindValue(6, $article['article_id']);
            $result->execute();

            $message .= 'Bravo, vous pouvez vous identifier maintenant pour accédez à l\'espace membre, vous avez recu un mail de confirmation';
            include 'theme/vue/test/testConfirmation.html.php';
            //include 'theme_membres/vue/connexion.html.php';
        }

    }
}
?>
<!--<script type="text/javascript" src='theme_admin/js/cours.js'></script>-->

