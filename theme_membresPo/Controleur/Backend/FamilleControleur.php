<?php
/**
 * Created by PhpStorm.
 * User: HB1
 * Date: 27/02/2018
 * Time: 13:28
 */

namespace Controleur\Backend;

use Modele\FamilleManager;

class familleControleur extends \Lib\Controleur
{
    protected function indexAction()
    {

        $cm = new FamilleManager();
        $familles = $cm->getAllFamilles();

        $data = ['familles' => $familles];
        $this->render('famille/listeFamille.html.php', $data);
    }

    protected function addAction()
    {

        $famille = new \Modele\Famille();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $famille->setLibelle($_POST['libelle']);
            $famille->setActif($_POST['actif']);
            $famille->setType($_POST['type']);
            $famille->setStatut($_POST['statut']);

        if ($famille->getErreur() == []) {
            $fm = new \Modele\FamilleManager();
            //$famille->setAuteur($_SESSION['auteur']);
            $famille->setDate(new \DateTime('now'));


            $fm->addFamille($famille);
            header('Location: ' . \Lib\Application::$racine . 'theme_adminPo/web/famille');
            exit();
        }

        }

        $data = ["erreurs" => $famille->getErreur()];
        $this->render('famille/create.html.php', $data);
    }
    protected function editAction()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id=$_POST['valeur_id'];
            $fm = new \Modele\FamilleManager();
            $famille_edit = $fm->getFamilleById($id);



        }else{
            header('Location: ' . \Lib\Application::$racine . 'theme_adminPo/web/famille');
            exit();
        }

        $data = ["famille_edit" => $famille_edit];
        $this->render('famille/modifier.html.php', $data);


        /*if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id=$_POST['valeur_id'];
            $famille = new \Modele\Famille();
            $fm = new \Modele\FamilleManager();
            $famille_edit = $fm->getFamilleById($id);



                    if ($famille->getErreur() == []) {
                        $fm = new \Modele\FamilleManager();
                        $famille->setId($famille_edit->getId());
                        //$article->setAuteur($_SESSION['auteur']);
                        $famille->setDate(new \DateTime('now'));
                        $famille->setLibelle($_POST['libelle']);
                        $famille->setActif($_POST['actif']);
                        $famille->setType($_POST['type']);
                        $famille->setStatut($_POST['statut']);

                        $fm->updateFamille($famille);
                        header('Location: ' . \Lib\Application::$racine . 'theme_adminPo/web/famille');
                        exit();
                    }

        }else{
            header('Location: ' . \Lib\Application::$racine . 'theme_adminPo/web/famille');
            exit();
        }

        $data = ["erreurs" => $famille->getErreur(), "famille_edit" => $famille_edit];
        $this->render('famille/modifier.html.php', $data);*/
    }
    protected function modifyAction(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $famille = new \Modele\Famille();
            $fm = new \Modele\FamilleManager();

                    if ($famille->getErreur() == []) {
                        $famille->setFamId($_POST['fam_id']);
                        //$article->setAuteur($_SESSION['auteur']);
                        $famille->setDate(new \DateTime('now'));
                        $famille->setLibelle($_POST['libelle']);
                        $famille->setActif($_POST['actif']);
                        $famille->setType($_POST['type']);
                        $famille->setStatut($_POST['statut']);

                        $fm->updateFamille($famille);
                        header('Location: ' . \Lib\Application::$racine . 'theme_adminPo/web/famille');
                        exit();
                    }

        }else{
            header('Location: ' . \Lib\Application::$racine . 'theme_adminPo/web/famille');
            exit();
        }
    }
}