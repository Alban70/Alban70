<?php


$erreur = false;
$message = false;
if(isset($_POST['login'])) {
    if (isset($_POST['OK'])) {
        //if (isset($_SESSION['token']) && ($_POST['token'] == $_SESSION['token'] && time() - $_SESSION['token_time'] <= 5 * 60)){
        ////////////

        $login = $_POST['login'];
        $pwd = $_POST['pwd'];

        $sql = 'SELECT * FROM user WHERE login = :login';
        $result = $pdo->prepare($sql);
        $result->execute([':login' => $login]);
        if ($user = $result->fetch()) {

            ////
            $verifPwd = password_verify($pwd, $user['pwd']);
            if ($verifPwd == FALSE) {
                $message = "Login ou Mdp non reconnu(s) ou inscrivez vous";
                sleep(1);
                /*if (isset($_POST['OK2']) !== false)
                    var_dump($_POST);
                if ($_POST['login'] != '')
                    $login = $_POST['login'];
                else $erreur .= '-Entrez votre login';
                if ($_POST['pwd'] != '')
                    $pwd = $_POST['pwd'];
                else $erreur .= '-Entrez votre password';
                if ($erreur == '') {
                    $sql = 'INSERT INTO user VALUES(null,NOW(),?,?, null, null, null, null)';
                    $result = $pdo->prepare($sql);
                    $result->bindValue(1, $login);
                    $result->bindValue(2, $pwd);

                    $result->execute();

                    header('Location: membres.php');
                }*/
            } else {
                if (isset($_SESSION['token']) && ($_POST['token'] == $_SESSION['token'] && time() - $_SESSION['token_time'] <= 5 * 60)) {
                    $_SESSION['IPaddress'] = sha1($_SERVER['REMOTE_ADDR']);
                    $_SESSION['userAgent'] = sha1($_SERVER['HTTP_USER_AGENT']);
                    $_SESSION['auth'] = true;
                    $_SESSION['login'] = $user['login'];
                    $_SESSION['user_id'] = $user['id'];
                    //pour session 1 h "fixe"
                    //setcookie(session(), session(), time() + 3600, null, null, true);
                    setcookie(session_name(), session_id(), time() + 3600, '/', null, null, true);
                    header('Location: membres.php');
                } else {
                    $message = 'Erreur, Veuillez re-essayer ou inscrivez vous';
                }
            }
        } else {
            $message = 'codes erronées, ou inscrivez vous';



            }

        }

        /*if (isset($_POST['OK2'])) {

            if (isset($_POST['token'])) {
                if ($_POST['token'] == $_SESSION['token'] AND time() - $_SESSION['token_time'] <= 5 * 60) {

                    $login = $_POST['login'];
                    $pwd = $_POST['pwd'];

                    $sql = 'SELECT id, login, pwd FROM user WHERE login = :login';
                    $result = $pdo->prepare($sql);
                    $result->execute([':login' => $login]);
                    if ($user = $result->fetch()) {

                        ////
                        $verifPwd = password_verify($pwd, $user['pwd']);

                        if ($verifPwd == true) {
                            var_dump($_POST);
                            $message = "vous etes déjà incrit à l'espace membre";
                            //sleep(1);
                            unset($_SESSION);
                            //session_destroy();
                        }


                    } else {

                        $_SESSION['IPaddress'] = sha1($_SERVER['REMOTE_ADDR']);
                        $_SESSION['userAgent'] = sha1($_SERVER['HTTP_USER_AGENT']);
                        $_SESSION['auth'] = true;
                        $_SESSION['login'] = $user['login'];
                        $_SESSION['user_id'] = $user['id'];
                        //pour session 1 h "fixe"
                        //setcookie(session(), session(), time() + 3600, null, null, true);


                        if ($_POST['login'] != '')
                            $login = $_POST['login'];
                        else $erreur .= '-Entrez votre login<br>';
                        if ($_POST['pwd'] != '')
                            $pwd = password_hash($_POST['pwd'], PASSWORD_DEFAULT);
                        //$pwd = $_POST['pwd'];
                        else $erreur .= '-Entrez votre password<br>';


                        if ($erreur == '') {

                            $sql = 'INSERT INTO USER VALUES(null,NOW(),?,?, null, null, null, null)';
                            $result = $pdo->prepare($sql);
                            $result->bindValue(1, $login);
                            $result->bindValue(2, $pwd);

                            $result->execute();
                            $message .= 'Bravo';
                            //header('Location: membres.php');
                        } else {
                            $message = 'Erreur, Veuillez re-essayer à vous instrire';
                        }
                    }

                }

                }


            }*/



}
$token = sha1(uniqid(rand(), true));
$token_time = time();
$_SESSION['token'] = $token;
$_SESSION['token_time'] = time();

include 'theme_membres/vue/connexion.html.php';





















/*$erreur = false;
$message = false;
if(isset($_POST['login'])) {
    if (isset($_POST['OK']) | isset($_POST['OK2'])) {
        //if (isset($_SESSION['token']) && ($_POST['token'] == $_SESSION['token'] && time() - $_SESSION['token_time'] <= 5 * 60)){
        ////////////
        $login = $_POST['login'];
        $pwd = $_POST['pwd'];

        $sql = 'SELECT id, login, pwd FROM user WHERE login = :login';
        $result = $pdo->prepare($sql);
        $result->execute([':login' => $login]);
        if ($user = $result->fetch()) {

            ////
            $verifPwd = password_verify($pwd, $user['pwd']);
            if ($verifPwd == FALSE) {
                $message = "Login ou Mdp non reconnu(s) ou inscrivez vous";
                sleep(1);
                if (isset($_POST['OK2']) !== false)
                    var_dump($_POST);
                if ($_POST['login'] != '')
                    $login = $_POST['login'];
                else $erreur .= '-Entrez votre login';
                if ($_POST['pwd'] != '')
                    $pwd = $_POST['pwd'];
                else $erreur .= '-Entrez votre password';
                if ($erreur == '') {
                    $sql = 'INSERT INTO user VALUES(null,NOW(),?,?, null, null, null, null)';
                    $result = $pdo->prepare($sql);
                    $result->bindValue(1, $login);
                    $result->bindValue(2, $pwd);

                    $result->execute();

                    header('Location: membres.php');
                }
            } else {
                if (isset($_SESSION['token']) && ($_POST['token'] == $_SESSION['token'] && time() - $_SESSION['token_time'] <= 5 * 60)) {
                    $_SESSION['IPaddress'] = sha1($_SERVER['REMOTE_ADDR']);
                    $_SESSION['userAgent'] = sha1($_SERVER['HTTP_USER_AGENT']);
                    $_SESSION['auth'] = true;
                    $_SESSION['login'] = $user['login'];
                    $_SESSION['user_id'] = $user['id'];
                    //pour session 1 h "fixe"
                    //setcookie(session(), session(), time() + 3600, null, null, true);
                    header('Location: membres.php');
                } else {
                    $message = 'Erreur, Veuillez re-essayer ou inscrivez vous';
                }
            }
        } else {
            $message = 'codes erronées, ou inscrivez vous';
            var_dump($_POST);
                if (isset($_POST['OK2']) !== false) {

                    if ($_POST['login'] != '')
                        $login = $_POST['login'];
                    else $erreur .= '-Entrez votre login<br>';
                    if ($_POST['pwd'] != '')
                        $pwd = password_hash($_POST['pwd'], PASSWORD_DEFAULT);
                        //$pwd = $_POST['pwd'];
                    else $erreur .= '-Entrez votre password<br>';

                    var_dump($erreur);
                    if ($erreur == '') {

                        $sql = 'INSERT INTO USER VALUES(null,NOW(),?,?, null, null, null, null)';
                        $result = $pdo->prepare($sql);
                        $result->bindValue(1, $login);
                        $result->bindValue(2, $pwd);

                        $result->execute();

                        header('Location: membres.php');
                    }
                }


            }


        }

}
$token = sha1(uniqid(rand(), true));
$token_time = time();
$_SESSION['token'] = $token;
$_SESSION['token_time'] = time();

include 'theme_membres/vue/connexion.html.php';*/







/*$erreur = false;
$message = false;

//if ($_SERVER['REQUEST_METHOD']== 'POST') {
if (isset($_POST['OK'])) {
    var_dump($_POST);
    if (isset($_POST['token'])) {
        if ($_POST['token'] == $_SESSION['token'] AND time() - $_SESSION['token_time'] <= 5 * 60) {


            $pwd = $_POST['pwd'];
            $login = $_POST['login'];

            $sql = 'SELECT login, pwd FROM user WHERE login = :login';

            $result = $pdo->prepare($sql);
            $result->execute([':login' => $login]);
            $user = $result->fetch();


            if ($user = $result->fetch()) {

                $verifPwd = password_verify($pwd, $user['pwd']);
                if ($verifPwd == FALSE) {
                    $erreur .= "Login ou Mdp non reconnu(s)";
                    sleep(1);

                } else {
                    $_SESSION['IPaddress'] = sha1($_SERVER['REMOTE_ADDR']);
                    $_SESSION['userAgent'] = sha1($_SERVER['HTTP_USER_AGENT']);

                    $erreur .= "Vous êtes bien identifié " . $_POST['login'] . " AdresseIP : " . $_SESSION['IPaddress'];
                    $_SESSION['auth'] = true;
                    var_dump($user);
                    var_dump($_SESSION);
                    var_dump($_POST);
                    header('Location: membres.php');

                }

            } else {
                sleep(1);
                $erreur = true;
            }

        } else {
            sleep(1);
            $erreur = true;
        }

    } else {
        echo "Erreur token";
        $erreur = true;
        header('Location: membres.php');
    }
}

if (isset($_POST['OK2'])) {
    if (isset($_POST['token'])) {
        if ($_POST['token'] == $_SESSION['token'] AND time() - $_SESSION['token_time'] <= 5 * 60) {

            $login = $_POST['login'];
            $pwd = $_POST['pwd'];

            $sql = 'SELECT id, login, pwd FROM user WHERE login = :login';
            $result = $pdo->prepare($sql);
            $result->execute([':login' => $login]);
            $user = $result->fetch();

            ////
            $verifPwd = password_verify($pwd, $user['pwd']);
            if ($verifPwd == true) {
                var_dump($_POST);
                $message = "vous etes déjà incrit à l'espace membre";
                //sleep(1);


            } else {

                $_SESSION['IPaddress'] = sha1($_SERVER['REMOTE_ADDR']);
                $_SESSION['userAgent'] = sha1($_SERVER['HTTP_USER_AGENT']);
                $_SESSION['auth'] = true;
                $_SESSION['login'] = $user['login'];
                $_SESSION['user_id'] = $user['id'];
                //pour session 1 h "fixe"
                //setcookie(session(), session(), time() + 3600, null, null, true);


                if ($_POST['login'] != '')
                    $login = $_POST['login'];
                else $erreur .= '-Entrez votre login<br>';
                if ($_POST['pwd'] != '')
                    $pwd = password_hash($_POST['pwd'], PASSWORD_DEFAULT);
                //$pwd = $_POST['pwd'];
                else $erreur .= '-Entrez votre password<br>';


                if ($erreur == '') {

                    $sql = 'INSERT INTO USER VALUES(null,NOW(),?,?, null, null, null, null)';
                    $result = $pdo->prepare($sql);
                    $result->bindValue(1, $login);
                    $result->bindValue(2, $pwd);

                    $result->execute();
                    $message .= 'Bravo';
                    header('Location: membres.php');
                } else {
                    $message = 'Erreur, Veuillez re-essayer à vous instrire';
                }


            }

        }
    }
}
}

$token = sha1(uniqid(rand(), true));
$token_time = time();
$_SESSION['token'] = $token;
$_SESSION['token_time'] = time();

include 'theme_membres/vue/connexion.html.php';*/





















?>