<?php
/**
 * Created by PhpStorm.
 * User: HB1
 * Date: 06/02/2018
 * Time: 13:42
 */

namespace Controleur\Frontend;


use Lib\Application;
use Modele\Auteur;
use Modele\contact;
use Modele\ContactManager;
use Modele\Coordonnees;
use Modele\CoordonneesManager;
use Modele\Membre;
use Modele\AuteurManager;
use Modele\MembreManager;
use Tools\Token_Form;


class ConnexionControleur extends \Lib\Controleur
{


    use Token_Form;

    public function indexAction()
    {
        $token = $this->token_form();
        $this->render('connexion.html.php', ["token" => $token]);
    }


    public function connectAction()
    {
        if (!isset($_POST)) {
            header('Location: ' . \Lib\Application::$racine . 'theme_membresPo/web/connexion');
            exit;
        } else {
            if (isset($_POST['valider']) !== false) {
                if ($_POST['token'] == $_SESSION['token']) {

                    $auteur = new Auteur($_POST);
                    $am = new AuteurManager();
                    $auteur_bdd = $am->getAuteurByLogin($auteur);
                    if ($auteur_bdd === False) {

                        $auteur->setErreur(['Identifiant et/ou mot de passe non-reconnu(s)']);
                    } elseif (password_verify($auteur->getPass(), $auteur_bdd->getPass()) === false) {
                        $auteur->setErreur(['Identifiant et/ou mot de passe non-reconnu(s)']);
                        sleep(1);
                    } else {
                        $_SESSION['IPaddress'] = sha1($_SERVER['REMOTE_ADDR']);
                        $_SESSION['userAgent'] = sha1($_SERVER['HTTP_USER_AGENT']);
                        $_SESSION['auteur'] = $auteur_bdd;
                        $_SESSION['auth'] = true;
                        header('Location: ' . \Lib\Application::$racine . 'theme_membresPo/web/app.php');
                        exit;
                    }
                }
            }
        }
    }
        public function disconnectAction(){
        var_dump(ello);
            /*if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                if ($_POST['confirm'] === 'OK') {
                    session_destroy();
                    //setcookie(session_name(), session_id(), time() - 10, '/', null, null, true);
                    header('Location: ' . \Lib\Application::$racine . 'theme_adminPo/web/connexion');
                    exit();
                } else {
                    //header('Location: '.Application::RACINE.'admin');
                    header('Location: ' . \Lib\Application::$racine . 'theme_adminPo/web/app.php');
                    exit();
                }
            }*/
            $this->render('disconnect.html.php');
        }

        public function registerAction()
        {
            $auteur = new Auteur;
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                if (!isset($_SESSION['token'])) {
                    header('Location: ' . \Lib\Application::$racine . 'theme_membresPo/web/connexion');
                    exit();
                } else {

                    if ($_POST['token'] == $_SESSION['token'] && time() - $_SESSION['token_time'] <= Application::TIME_STORE_TOKEN) {

                        $membre = new Membre;
                        $mm = new MembreManager();
                        $membre->setNom($_POST['ste']);

                        $contact = new Contact;
                        $cm = new ContactManager();
                        $contact->setNom($_POST['nom']);
                        $contact->setPrenom($_POST['prenom']);

                        $coordonnees = new Coordonnees();
                        $coorm = new CoordonneesManager();
                        $coordonnees->setTel($_POST['tel']);
                        $coordonnees->setEmail($_POST['email']);


                        $auteur->setNom($_POST['login']);
                        $auteur->setPass($_POST['pass']);

                        $am = new AuteurManager();
                        $am->getAuteurByLogin($auteur);
                        if ($am->getAuteurByLogin($auteur)!== false) {
                            $auteur->setErreur(['Login déjà pris. Essayez en un autre']);
                        }

                        if ($auteur->getErreur() == []) {
                                //$am->insertAuteur($auteur);
                            $am->insertAuteur($auteur, $membre, $contact, $coordonnees);
                                $this->connectAction($auteur);
                            header('Location: ' . \Lib\Application::$racine . 'theme_membresPo/web/connexion/connect');
                                exit();

                        }
                    }
                }
            }
            $token = $this->token_form();
            $this->render('register.html.php', ["token" => $token, "erreurs" => $auteur->getErreur()]);
        }

}