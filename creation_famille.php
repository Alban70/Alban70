<?php
/**
 * Created by PhpStorm.
 * User: Alban
 * Date: 21/02/2018
 * Time: 19:02
 */

$pdo = new PDO('mysql:host=localhost;dbname=membres', 'root', '',
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    $erreur = '';


        if ($_POST['libelle'] != '')
            $libelle = $_POST['libelle'];
        else $erreur .= '-Entrez un libelle<br>';
        $actif = 'null';
        $type = 'null';
        $statut = 'null';

        if ($erreur == '') {
            $sql = 'INSERT INTO famille(libelle, actif, dateCreation, type, statut) VALUES(?, ?, NOW(), ?, ?)';
            //$sql = 'INSERT INTO famille VALUES(?,?,NOW(),?,?)';
            $result = $pdo->prepare($sql);
            $result->bindValue(1, $libelle);
            $result->bindValue(2, $actif);
            $result->bindValue(3, $type);
            $result->bindValue(4, $statut);

            $result->execute();
            if ($result->execute() == true) {
                //header('location:?page=famille');

            }

        }


    }
echo "<script type='text/javascript'>document.location.replace('admin.php?page=famille');</script>";