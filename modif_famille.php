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

    if (strlen($_POST['libelle']) < 3) {
        $erreur .= 'libelle invalide';
    } else {
        $nom = $_POST['libelle'];
    }

    if ($erreur == '') {
        //$Date= date('Y-m-d h : i : s ');

        $result = $pdo->prepare('update famille set libelle = :libelle  where fam_id = :id ');

        $result->execute(array(
            'libelle' => $_POST['libelle'],
            'id' => $_POST['id']
        ));
        //$success = 'Edito modifié :';
        //header('location:admin.php?page=famille');
        //header('location: admin.php?page=famille');
        //header('theme_admin/vue/famille/listeFamille.html.php');
        //header('Location: http://localhost/wcMVCp/');

        //header("url=http://www.google.fr");

    }

}
//header('Localisation: http://www.google.fr');
echo "<script type='text/javascript'>document.location.replace('admin.php?page=famille');</script>";
?>