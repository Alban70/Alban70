<?php
/**
 * Created by PhpStorm.
 * User: HB1
 * Date: 27/02/2018
 * Time: 13:18
 */

namespace Modele;
use Lib\EntiteManager;
use \PDO;

class FamilleManager extends EntiteManager
{
    public function getAllFamilles()
    {

        $sql = 'SELECT * FROM famille GROUP BY fam_id ';
        $result=$this->query($sql);
        $result->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Famille::class);
        return $result->fetchAll();

    }
    public function addFamille(Famille $famille)
    {
        $sql = 'INSERT INTO famille (libelle, actif, dateCreation, type, statut)
                            VALUES (?, ?, ?, ?, ?)';
        $result = $this->prepare($sql);
        $result->execute([$famille->getLibelle(), $famille->getActif(), $famille->getDate()->format('Y-m-d H:i:s'), $famille->getType(), $famille->getStatut()]);
        //$article->setSlug($article->getTitre(),$this->getBdd()->lastInsertId());

    }
    public function getFamilleById($id){

        $sql = 'SELECT  * FROM famille
            WHERE fam_id = ?';
        $result =  $this->prepare($sql);
        $result->execute([$id]);
        $result->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Famille::class);
        $famille = $result->fetch();
        return $famille;
    }
    public function updateFamille(Famille $famille){

        $sql = 'UPDATE famille SET libelle = ?, actif = ?, dateCreation = ?, type = ?, statut = ? WHERE fam_id = ?';
        $result = $this->prepare($sql);
        $result->execute([$famille->getLibelle(), $famille->getActif(), $famille->getDate()->format('Y-m-d H:i:s'), $famille->getType(), $famille->getStatut(), $famille->getFamId()]);
    }
}