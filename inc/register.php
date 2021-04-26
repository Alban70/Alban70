<?php


$erreur = false;
$message = false;

if(isset($_POST['loginNew'])) {
    if (isset($_POST['OK'])) {
        $login = $_POST['loginNew'];
        $pwd = $_POST['pwd'];

        $sql = 'SELECT login FROM user WHERE login = ?';
        $result = $pdo->prepare($sql);
        $result->execute([$login]);
        if ($user = $result->fetch()) {
            $message = "vous etes déjà incrit à l'espace membre";
            ////
            /*$verifPwd = password_verify($pwd, $user['pwd']);

            if ($verifPwd == true) {
                var_dump($_POST);
                $message = "vous etes déjà incrit à l'espace membre";
                //sleep(1);
                unset($_SESSION);
                //session_destroy();
            }*/

        } else {
            if ($_POST['ste'] != '')
                $ste = $_POST['ste'];
            else $erreur .= '-Entrez le nom de votre entreprise<br>';

            if ($_POST['tel'] != '')
                $tel = $_POST['tel'];
            else $erreur .= '-Entrez votre N° de téléphone<br>';

            if ($_POST['nom'] != '')
                $nom = $_POST['nom'];
            else $erreur .= '-Entrez votre Nom<br>';

            if ($_POST['prenom'] != '')
                $prenom = $_POST['prenom'];
            else $erreur .= '-Entrez votre Prénom<br>';

            if ($_POST['email'] != '')
                $email = $_POST['email'];
            else $erreur .= '-Entrez votre email<br>';

            if ($_POST['loginNew'] != '')
                $login = $_POST['loginNew'];
            else $erreur .= '-Entrez votre login<br>';

            if ($_POST['pwd'] != '')
                $pwd = password_hash($_POST['pwd'], PASSWORD_DEFAULT);
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


                /*$sql = 'INSERT INTO USER VALUES(null,NOW(),?,?, null, null, null, null)';
                $result = $pdo->prepare($sql);
                $result->bindValue(1, $login);
                $result->bindValue(2, $pwd);

                $result->execute();*/
                $message .= 'Bravo';
                //header('Location: theme_membres/vue/connexion.html.php');
                header('Location: membres.php');
            } else {
                $message = 'Erreur, Veuillez re-essayer à vous instrire';
            }
        }

        }





}

include 'theme_membres/vue/register.html.php';




?>