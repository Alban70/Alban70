<?php
/**
 * Created by PhpStorm.
 * User: Alban
 * Date: 28/03/2018
 * Time: 18:54
 */

namespace Controleur\Frontend;
use \Modele\EditoManager;

class EditoControleur extends \Lib\Controleur
{
    protected function indexAction()
    {
        var_dump('hello');
        $ed = new EditoManager();
        $all_editos = $ed->getAllEdito();
        $data = ['all_editos' => $all_editos];
        $this->render('edito/listeArticle.html.php', $data);

    }
}