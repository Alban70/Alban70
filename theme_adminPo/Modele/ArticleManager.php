<?php
/**
 * Created by PhpStorm.
 * User: Alban
 * Date: 08/04/2018
 * Time: 09:44
 */

namespace Modele;

use Lib\EntiteManager;
use \PDO;

class ArticleManager extends EntiteManager
{
    public function getAllArticleByFamId(Famille $famille)
    {
    $sql = 'SELECT * FROM article WHERE fam_id = ?';
    $result =  $this->prepare($sql);
    $result->execute([$contact->getSocId()]);
    $result->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Article::class);
    return $result->fetchAll();

    }

    public function getAllArticle()
    {
        $sql = 'SELECT * FROM article GROUP BY article_id';
        $result=$this->query($sql);
        $result->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Article::class);
        return $result->fetchAll();

    }
    public function addArticle(Article $article)
    {
        $sql = 'INSERT INTO article(libelle, designation, prixHT, tva, prixTTC, actif, dateCreation, fam_id, sFam_id, type, statut) VALUES(?,?,?,NULL ,NULL ,NULL ,?, NULL,null,?, ?)';

        $result = $this->prepare($sql);
        $result->execute([$article->getLibelle(), $article->getDesignation(), $article->getPrixHT(), $article->getDate()->format('Y-m-d H:i:s'), $article->getType(), $article->getStatut()]);
        //$article->setSlug($article->getTitre(),$this->getBdd()->lastInsertId());

    }
}