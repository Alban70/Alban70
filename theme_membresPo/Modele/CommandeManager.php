<?php
/**
 * Created by PhpStorm.
 * User: Alban
 * Date: 04/04/2018
 * Time: 18:16
 */

namespace Modele;

use Lib\EntiteManager;
use PDO;

class CommandeManager extends EntiteManager
{
    public function getAllCommandesById(Contact $contact)
    {
        $sql = 'SELECT * FROM commande WHERE soc_id = ?';
        $result =  $this->prepare($sql);
        $result->execute([$contact->getSocId()]);
        $result->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Commande::class);
        return $result->fetchAll();

    }
    public function getCommandeBySocieteId(Contact $contact)
    {
        $sql = 'SELECT * FROM commande WHERE soc_id = ?';
        $result =  $this->prepare($sql);
        $result->execute([$contact->getSocId()]);
        $result->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Commande::class);
        return $result->fetch();
    }

    public function getAllCommmande()
    {
        $sql = 'SELECT * FROM commande';
        $result=$this->query($sql);
        $result->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Commande::class);
        return $result->fetchAll();

    }
    public function addCommande(Commande $commande, Contact $contact)
    {
        /*$libelle='commande';
        $type='commande';
        $statut='Encours';*/
        $sql = 'INSERT INTO commande(libelle, dateCom, dateLivrSouh, dateLivrPrevu, type, statut, totalHt, totalTTC, totalTVA, tva, actif, dateCreation, soc_id) VALUES(?, ?, NOW(), NOW(), NULL, NULL, NULL, NULL, NULL, NULL, NULL, NOW(), ?)';

        $result = $this->prepare($sql);
        $result->execute([$commande->getLibelle(), $commande->getDateCom()->format('Y-m-d H:i:s'),$contact->getSocId()]);
        //$article->setSlug($article->getTitre(),$this->getBdd()->lastInsertId());

    }
    public function getCommandeByLastId(Commande $commande)
    {
        $sql = 'SELECT * FROM commande WHERE soc_id = ?';
        $result =  $this->prepare($sql);
        $result->execute($commande->getComId());
        $result->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Commande::class);
        return $result->fetch();
    }
}