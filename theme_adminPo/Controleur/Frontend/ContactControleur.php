<?php

namespace Controleur\Frontend;



class ContactControleur extends \Lib\Controleur{

    public function indexAction()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $contact = new\Modele\Contact($_POST);
            //if ($contact->getVente() == ['Oui']) {


            if ($contact->getErreur() == []) {
                $cm = new \Modele\ContactManager();
                //$contact = $cm->controleEmail($contact);

                $contact = $cm->createContact($contact);
                $this->render('succes.html.php');
                exit;
            } else {
                //$this->render('index.html.php', ['message' => implode('<br>', $contact->getErreur())]);
                $this->render('connexion.html.php', ['message' => implode('<br>', $contact->getErreur())]);
                exit;
            }


        }
    //}
        //$this->render('index.html.php');
        $this->render('connexion.html.php');
    }
    public function detailAction(){

}

            /*protected function render($vue, Array $data=[]){
                extract($data);
                ob_start();
                //include 'theme_membresPo/vue/layoutMembres.html.php';
                include __DIR__ . '/../Vue/' .$vue;
                $contenu = ob_get_clean();

                //include __DIR__ . '/../Vue/layout.html_old.php';
                include __DIR__ . '/../Vue/layoutMembres.html.php';
            }*/

}