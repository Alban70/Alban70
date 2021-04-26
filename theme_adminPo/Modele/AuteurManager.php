<?php
/**
 * Created by PhpStorm.
 * User: HB1
 * Date: 07/02/2018
 * Time: 10:59
 */

namespace Modele;


use Lib\EntiteManager;
use \PDO;

class AuteurManager extends EntiteManager
{
    public function getAuteurById($id){
        
        $sql = 'SELECT  id, statut, login, pwd FROM user
            WHERE id = ?';
        $result =  $this->prepare($sql);
        $result->execute([$id]);
        $result->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Auteur::class);
        return $result->fetch();
    }

    public function getAuteurByLogin(Auteur $auteur){
        $sql = 'SELECT id, login, pwd as pass, statut FROM user WHERE login = ?';
        $result = $this->prepare($sql);
        $result->execute([$auteur->getLogin()]);
        $result->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Auteur::class);
        return $result->fetch();
    }
    public function insertAuteur(Auteur $auteur){
        $sql = 'INSERT INTO user(dateCreation, login, pwd, actif, statut, type, contact_id) VALUES(NOW(),?,?, null, null, null, NULL)';
        $result = $this->prepare($sql);
        $result->bindValue(1, $auteur->getNom());
        $result->bindValue(2, $auteur->getPassHash());
        $result->execute();
    }


}