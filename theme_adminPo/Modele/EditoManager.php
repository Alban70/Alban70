<?php
/**
 * Created by PhpStorm.
 * User: Alban
 * Date: 28/03/2018
 * Time: 18:56
 */

namespace Modele;

use Lib\EntiteManager;
use \PDO;

class EditoManager extends EntiteManager
{
    public function getAllEdito()
    {
        $sql = 'SELECT * FROM edito GROUP BY id';

        $result = $this->query($sql);
        $result->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Edito::class);
        return $result->fetchAll();

    }
}