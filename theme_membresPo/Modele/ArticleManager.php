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
        $sql = 'SELECT * FROM article';
        $result=$this->query($sql);
        $result->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Article::class);
        return $result->fetchAll();

    }
    public function getArticleById(Article $article)
    {
        $sql = 'SELECT * FROM article WHERE article_id = ?';
        $result =  $this->prepare($sql);
        $result->execute([$article->getValeurId()]);
        $result->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Article::class);
        return $result->fetch();

    }
}