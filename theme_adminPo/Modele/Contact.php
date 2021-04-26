<?php
namespace Modele;

class Contact{



    private $id, $type, $nom, $email, $date, $vente;



    protected $erreur = [];
    /**
     * @return mixed
     */
    public function getErreur()
    {
        return $this->erreur;
    }


    public function setErreur(array $erreur)
    {
        $this->erreur = $erreur;
        return $this;
    }



    /**
     * Contact constructor.
     * @param $date
     */

    public function __construct($data = [])
    {
        //$this->date = new \DateTime();
        //$this->setNom($data);
       $this->verifVente($data);
        $this->hydratation($data);
    }

    protected function hydratation(array $data = []){

        foreach ($data as $key => $value){

            $setter = 'set' . ucfirst($key);
            if(method_exists($this, $setter))
                $this->$setter($value);
        }
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }




    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     * @return Contact
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }



    public function getVente()
    {
        return $this->vente;
    }


    public function setVente($vente)
    {
        $this->vente = $vente;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     * @return Contact
     */
    public function setNom($nom)
    {
        if(strlen($nom)<2)
            $this->erreur[]='Entrez votre nom';
        else
            $this->nom = $nom;
        return $this;
    }





    public function verifVente($data)
    {
        if (array_key_exists('vente', $data))
            return true;
        else {
            $this->erreur[] = 'Repondre à la question';
            return false;
        }
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
     * @return Contact
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    public function getType()
    {
        return $this->type;
    }


    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }


}
