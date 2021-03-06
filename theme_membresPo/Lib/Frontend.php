<?php
/**
 * Created by PhpStorm.
 * User: HB1
 * Date: 17/02/2018
 * Time: 14:55
 */
namespace Lib;
class Frontend extends \Lib\Application
{
    protected $controleur;


    public function __construct()
    {
        $this->name = 'Frontend';
        $this->layout = 'layoutFrontend.html.php';
        parent::__construct();
    }


    public function run()
    {
        $module = (isset($_GET['module'])) ? $_GET['module'] : 'connexion';
        $action = (isset($_GET['action'])) ? $_GET['action'] : 'index';
        try {

            $controleur = $this->getControleur($module);
            $controleur->action($action);
            var_dump('hello');
        } catch(HttpErrorException $e) {
            new \Controleur\Frontend\ErrorControleur($this, $e);
            exit;

        }

    }


}