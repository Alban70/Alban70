<?php
/**
 * Created by PhpStorm.
 * User: HB1
 * Date: 27/02/2018
 * Time: 15:23
 */

namespace Modele;

use Tools\Date_Locale;
//use Tools\Extrait;

class Famille extends \Lib\Entite
{
    use Date_Locale;
    //use Extrait;


    /**
     * @var string
     */
private $libelle, $actif, $date, $type, $statut;

    /**
     * @var number
     */
private $fam_id, $valeur_id, $aricle_id;


public function __construct(array $data = [])
{
    $this->date = new \DateTime();
    parent::__construct($data);
}

    /**
     * @return number
     */
    public function getAricleId()
    {
        return $this->aricle_id;
    }

    /**
     * @param number $aricle_id
     * @return Famille
     */
    public function setAricleId($aricle_id)
    {
        $this->aricle_id = $aricle_id;
        return $this;
    }

    /**
     * @return number
     */
    public function getValeurId()
    {
        return $this->valeur_id;
    }

    /**
     * @param number $valeur_id
     * @return Famille
     */
    public function setValeurId($valeur_id)
    {
        $this->valeur_id = $valeur_id;
        return $this;
    }

    /**
     * @return number
     */
    public function getFamId()
    {
        return $this->fam_id;
    }

    /**
     * @param number $fam_id
     * @return Famille
     */
    public function setFamId($fam_id)
    {
        $this->fam_id = $fam_id;
        return $this;
    }

/**
 * @return mixed
 */
public function getLibelle()
{
    return $this->libelle;
}/**
 * @param mixed $libelle
 * @return Famille
 */
public function setLibelle($libelle)
{
    if (strlen($libelle) <= 2)
        $this->erreur[] = 'Titre non rempli';
    else
        $this->libelle = $libelle;
    return $this;
}/**
 * @return mixed
 */
public function getActif()
{
    return $this->actif;
}/**
 * @param mixed $actif
 * @return Famille
 */
public function setActif($actif)
{
    $this->actif = $actif;
    return $this;
}


public function getDate()
{
    return $this->date;
}/**
 * @param \DateTime $date
 * @return Famille
 */
public function setDate(\DateTime $date)
{
    $this->date = $date;
    return $this;
}/**
 * @return mixed
 */
public function getType()
{
    return $this->type;
}/**
 * @param mixed $type
 * @return Famille
 */
public function setType($type)
{
    $this->type = $type;
    return $this;
}/**
 * @return mixed
 */
public function getStatut()
{
    return $this->statut;
}/**
 * @param mixed $statut
 * @return Famille
 */
public function setStatut($statut)
{
    $this->statut = $statut;
    return $this;
}
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }


    public function getId()
    {
        return $this->id;
    }

}