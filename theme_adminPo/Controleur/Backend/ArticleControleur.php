<?php
/**
 * Created by PhpStorm.
 * User: Alban
 * Date: 09/04/2018
 * Time: 09:24
 */

namespace Controleur\Backend;

use Modele\ArticleManager;
use Modele\Article;

class ArticleControleur extends \Lib\Controleur
{
    protected function indexAction()
    {

        $am = new ArticleManager();
        $articles = $am->getAllArticle();
        $data = ['articles' => $articles];
        $this->render('article/listeArticle.html.php', $data);
    }


protected function addAction()
{

    $article = new Article();
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $article->setLibelle($_POST['libelle']);
        /*$article->setActif($_POST['actif']);
        $article->setType($_POST['type']);
        $article->setStatut($_POST['statut']);*/

        if ($article->getErreur() == []) {
            $am = new \Modele\ArticleManager();
            //$famille->setAuteur($_SESSION['auteur']);
            $article->setDate(new \DateTime('now'));


            $am->addArticle($article);
            header('Location: ' . \Lib\Application::$racine . 'theme_adminPo/web/article');
            exit();
        }
        $data = ["erreurs" => $article->getErreur()];
        $this->render('article/createArticle.html.php', $data);
    }


}
}