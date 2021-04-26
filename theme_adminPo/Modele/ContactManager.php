<?php
namespace Modele;

use PDO;

class ContactManager
{
    /**
     * @var PDO
     */
    private $pdo;

    /**
     * auteurManager constructor.
     * @param $pdo
     */
    public function __construct()
    {
        $this->pdo = new PDO('mysql:host=localhost;dbname=poo', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }

    public function createContact($contact)
    {
        $sql = 'INSERT INTO contact VALUES (null, ?, ?, ?, ?, NULL)';
        $result = $this->pdo->prepare($sql);
        $result->bindValue(1, $contact->getNom());
        $result->bindValue(2, $contact->getEmail());
        $result->bindValue(3, $contact->getVente());
        $result->bindValue(4, $contact->getType());
        //$result->bindValue(3, $contact->getDate()->format('Y-m-d'));
        $result->execute();
}
    public function controleEmail($contact)
    {
        $sql = 'SELECT * FROM contact WHERE email = ?';
        $result = $this->pdo->prepare($sql);
        $result->bindValue(1, $contact->getEmail());


        //$result->bindValue(3, $contact->getDate()->format('Y-m-d'));
        $result->execute();
    }
}





