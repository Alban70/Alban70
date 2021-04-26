<?php
/**
 * Created by PhpStorm.
 * User: HB1
 * Date: 30/03/2018
 * Time: 19:28
 */

namespace Modele;

use Lib\Entite;
use Tools\Date_Locale;

class Coordonnees extends Entite
{
    use Date_Locale;
private $email, $tel, $dateCreation, $banq_id, $contact_id, $soc_id;

    public function __construct(array $data = [])
    {
        $this->date = new \DateTime();
        $this->auteur = new Auteur();

        parent::__construct($data);
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     * @return Coordonnees
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * @param mixed $tel
     * @return Coordonnees
     */
    public function setTel($tel)
    {
        $this->tel = $tel;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * @param mixed $dateCreation
     * @return Coordonnees
     */
    public function setDateCreation(\DateTime $dateCreation)
    {
        $this->dateCreation = $dateCreation;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBanqId()
    {
        return $this->banq_id;
    }

    /**
     * @param mixed $banq_id
     * @return Coordonnees
     */
    public function setBanqId($banq_id)
    {
        $this->banq_id = $banq_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getContactId()
    {
        return $this->contact_id;
    }

    /**
     * @param mixed $contact_id
     * @return Coordonnees
     */
    public function setContactId($contact_id)
    {
        $this->contact_id = $contact_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSocId()
    {
        return $this->soc_id;
    }

    /**
     * @param mixed $soc_id
     * @return Coordonnees
     */
    public function setSocId($soc_id)
    {
        $this->soc_id = $soc_id;
        return $this;
    }


}