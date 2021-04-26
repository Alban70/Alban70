<?php
/**
 * Created by PhpStorm.
 * User: HB1
 * Date: 29/03/2018
 * Time: 09:54
 */

namespace Modele;


use Lib\Entite;

class Edito extends Entite
{
    private $titre, $contenu;

    /**
     * @return mixed
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @param mixed $titre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    /**
     * @return mixed
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * @param mixed $contenu
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;
    }



}