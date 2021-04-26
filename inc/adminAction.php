<?php



//$action = (isset($_GET['action']))? $_GET['action'] : 'modifierFamille';
if(isset($_POST['addFam'])) $action='ajouterFammille';
if(isset($_POST['modFam'])) $action='modifierFamille';
if(isset($_POST['addArticle'])) $action='ajouterArticle';
if(isset($_POST['annuleAricle'])) $action='annuleAricle';
if(isset($_POST['modArticle'])) $action='modifierArticle';
if(isset($_POST['addEdito'])) $action='ajouterEdito';
if(isset($_POST['modEdito'])) $action='modifierEdito';
if(isset($_POST['ValAction'])) $action='ValAction';
//if(isset($_POST['ListeAction'])) $action='ListeDesAction';

//else $action = 'index';

ob_start();
switch($action){
    default:
    case 'index' :
    listeFamille();
        break;

    /*case 'ListeAction' :
ListeDesAction();
break;*/

    case 'ajouterFammille' :
        ajouterFamille();
        break;

    case 'modifierFammille' :
        modifierFammille();
        break;

    case 'ajouterArticle' :
        ajouterArticle();
        break;

    case 'modifierArticle' :
        modifierArticle();
        break;

    case 'annuleAricle' :
        annuleAricle();
        break;

    case 'ajouterEdito' :
        ajouterEdito();
        break;

    case 'modifierEdito' :
        modifierEdito();
        break;
    case 'ValAction' :
        ValAction();
        break;

}

$buffer = ob_get_flush();
file_put_contents($file, $buffer);


function listeFamille(){
    /*global $pdo;
    $sql = 'SELECT fam_id, libelle, dateCreation FROM famille GROUP BY fam_id ';
    $result=$pdo->query($sql);
    $familles = $result->fetchAll();

    $sql = 'SELECT * FROM famille';
    $result=$pdo->query($sql);
    $famille = $result->fetch();

//var_dump($article);

    include 'theme_admin/vue/famille/listeFamille.html.php';*/
}
/*function ListeDesAction()
{
    global $pdo;
    var_dump($_POST);
    var_dump('hello');
    $id = $_POST['valeur_id'];
    $sql = 'SELECT * FROM societe WHERE soc_id = :id';
    $result = $pdo->prepare($sql);
    $result->bindParam(':id', $id, PDO::PARAM_INT);
    $result->execute();
    $societe = $result->fetch();

    $id2 = $societe['soc_id'];
    $sql = 'SELECT * FROM coordonnees WHERE soc_id = :id';
    $result = $pdo->prepare($sql);

    $result->bindParam(':id', $id2, PDO::PARAM_INT);
    $result->execute();

    $coordonnees = $result->fetch();



    $sql = 'SELECT * FROM action WHERE soc_id = :id';
    $result = $pdo->prepare($sql);

    $result->bindParam(':id', $id, PDO::PARAM_INT);
    $result->execute();

    $actions = $result->fetchAll();
    include 'theme_admin/vue/societe/ListeActions_client.html.php';

}*/
function annuleAricle(){
    global $pdo;

    $sql = 'SELECT * FROM article GROUP BY article_id ';
    $result=$pdo->query($sql);
    $articles = $result->fetchAll();

    $sql = 'SELECT * FROM article';
    $result=$pdo->query($sql);
    $article = $result->fetch();


    include 'theme_admin/vue/article/listeArticle.html.php';
}

function ajouterArticle()
{
        global $pdo;

    //$Date= date('Y-m-d h : i : s ');

    $erreur = '';
        if (isset($_SESSION['user_id']) === true) {

        if($_POST['libelle'] != '')
            $libelle = $_POST['libelle'];
        else $erreur .= '-Entrez un libelle<br>';

        $designation = $_POST['designation'];
        $prixHT = $_POST['prixHT'];
        $tva = $_POST['tva'];
        $prixTTC = $_POST['prixTTC'];
        $actif = $_POST['actif'];


//$id = (isset($_GET['id'])) ? $_GET['id'] : 0;
        if ($_POST['famille'] != '0')
            $famille = $_POST['famille'];
        else
            $erreur .= '- Selectionnez une famille<br>';


            $sql = 'SELECT * FROM famille WHERE fam_id = ?';
            $result = $pdo->prepare($sql);
            $result->bindValue(1, $famille);
            $result->execute();
            $famille = $result->fetch();
            $famID = $famille['fam_id'];
            $type = $_POST['type'];
            $statut = $_POST['statut'];


        if ($erreur == ''){
            $sql = 'INSERT INTO article(libelle, designation, prixHT, tva, prixTTC, actif, dateCreation, fam_id, sFam_id, type, statut) VALUES(?,?,?,?,?,?,NOW(), ?,NULL,?,?)';
            $result = $pdo->prepare($sql);
            $result->bindValue(1, $libelle);
            $result->bindValue(2, $designation);
            $result->bindValue(3, $prixHT, PDO::PARAM_INT);
            $result->bindValue(4, $tva, PDO::PARAM_INT);
            $result->bindValue(5, $prixTTC, PDO::PARAM_INT);
            $result->bindValue(6, $actif);
            $result->bindValue(7, $famID, PDO::PARAM_INT);
            $result->bindValue(8, $type);
            $result->bindValue(9, $statut);



            $result->execute();
            $success = 'Edito enregistré :';
            header('location:?page=article');
        }
    }
}

function modifierArticle()
{
    var_dump($_POST);
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $erreur = '';

        if (strlen($_POST['libelle']) < 3) {
            $erreur .= 'libelle invalide';
        } else {
            $libelle = $_POST['libelle'];
        }
        $id = $_POST['id'];
        $prixHT = $_POST['prixHT'];

        if ($erreur == '') {
            //$Date= date('Y-m-d h : i : s ');



            global $pdo;
            $result = $pdo->prepare('update article set libelle = :libelle, prixHT = :prixHT  where article_id = :id ');
            $result->execute(array(
                'libelle' => $libelle,
                'prixHT' => $prixHT,
                'id' => $id
            ));
            //$success = 'Edito modifié :';
            header('location:?page=article');
        }

    }

}



function ajouterFamille()
{
    global $pdo;

    $erreur = '';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($_POST['libelle'] != '')
                $libelle = $_POST['libelle'];
            else $erreur .= '-Entrez un libelle<br>';
            $actif = 'null';
            $type = $_POST['type'];
            $statut = $_POST['statut'];


            if ($erreur == '') {
                $sql = 'INSERT INTO famille(libelle, actif, dateCreation, type, statut) VALUES(?, ?, NOW(), ?, ?)';
                $result = $pdo->prepare($sql);
                $result->bindValue(1, $libelle);
                $result->bindValue(2, $actif);
                $result->bindValue(3, $type);
                $result->bindValue(4, $statut);

                $result->execute();
                if ($result->execute() == true) {
                    $success = 'Edito enregistré :';
                    header('location:?page=famille');

                }

            }
            //}
            //}
            //include 'theme_admin/vue/famille/create.html.php';
            //header('theme_admin/vue/famille/listeFamille.html.php');

        }


    //include 'theme_admin/vue/famille/create.html.php';
}
function modifierFamille()
{
    //if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //$erreur = '';

        //if (strlen($_POST['libelle']) < 3) {
            //$erreur .= 'libelle invalide';
        //} else {
            //$nom = $_POST['libelle'];
        //}

        //if ($erreur == '') {
            //$Date= date('Y-m-d h : i : s ');


            global $pdo;
            $result = $pdo->prepare('update famille set libelle = :libelle  where fam_id = :id ');
            $result->execute(array(
                'libelle' => $_POST['libelle'],
                'id' => $_POST['id']
            ));
            //$success = 'Edito modifié :';
            header('location:?page=famille');
        //}

    //}

}

function ajouterEdito()
{
    global $pdo;

    //$Date= date('Y-m-d h : i : s ');

    $erreur = '';
    if (isset($_SESSION['user_id']) === true) {

        if($_POST['titre'] != '')
            $titre = $_POST['titre'];
        else $erreur .= '-Entrez un titre<br>';

        $contenu = $_POST['contenu'];

        $publier = 0;
        $contact_id = 0;
        $user_id = 0;
        /*$fam_id = $_POST['fam_id'];
        if ($_POST['famille'] != '')
            $famille = $_POST['famille'];
        else
            $erreur .= '- Selectionnez une famille<br>';*/
        if ($_POST['famille'] != '0')
            $famille = $_POST['famille'];
        else
            $erreur .= '- Selectionnez une famille<br>';


        /*$sql = 'SELECT * FROM famille WHERE fam_id = ?';
        $result = $pdo->prepare($sql);
        $result->bindValue(1, $famille);
        $result->execute();
        $famille = $result->fetch();*/

        $type = $_POST['type'];
        $statut = $_POST['statut'];


        if ($erreur == ''){
            $sql = 'INSERT INTO edito(titre, contenu, image, dateCreation, publier, slug, contact_id, user_id, type, statut, actif, fam_id) VALUES(?,?,NULL ,NOW(),?,NULL,? ,? ,?,?,NULL , ? )';
            $result = $pdo->prepare($sql);
            $result->bindValue(1, $titre);
            $result->bindValue(2, $contenu);
            $result->bindValue(3, $publier);
            $result->bindValue(4, $contact_id);
            $result->bindValue(5, $user_id);
            $result->bindValue(6, $type);
            $result->bindValue(7, $statut);
            $result->bindValue(8, $famille, PDO::PARAM_INT);



            $result->execute();
            $success = 'Edito enregistré :';
            header('location:?page=edito');
        }
    }
}

function modifierEdito()
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $erreur = '';

        if (strlen($_POST['titre']) < 3) {
            $erreur .= 'titre invalide';
        } else {
            $nom = $_POST['libelle'];
        }

        if ($erreur == '') {
            //$Date= date('Y-m-d h : i : s ');



            global $pdo;
            $result = $pdo->prepare('update edito set titre = :titre  where id = :id ');
            $result->execute(array(
                'titre' => $_POST['titre'],
                'id' => $_POST['id']
            ));
            //$success = 'Edito modifié :';
            header('location:?page=edito');
        }

    }

}
function ValAction()
{
    global $pdo;

    $erreur = '';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if ($_POST['libelle'] != '')
            $libelle = $_POST['libelle'];
        else $erreur .= '-Entrez un libelle<br>';
        if ($_POST['designation'] != '')
            $designation = $_POST['designation'];
        else $erreur .= '-Entrez un désignation<br>';

        $type = $_POST['type'];
        $statut = $_POST['statut'];
        $soc_id = $_POST['idSte'];
        $contact_id = $_POST['idContact'];
        $coord_id = $_POST['idCoord'];
        var_dump($coord_id);
        if ($erreur == '') {

            /*$libelle = 'Demande de contacts';
            $type = 'Contact';
            $fait = 'A Faire';
            $sql = 'INSERT INTO action(libelle, designation, dateCreation, dateRelance, type, statut, actif, fait, soc_id, contact_id, coord_id) VALUES(?, NULL,  NOW(), NOW(), ?, NULL, NULL, ?, ?, ?, ?)';
            $result = $pdo->prepare($sql);
            $result->bindValue(1, $libelle);
            $result->bindValue(2, $type);
            $result->bindValue(3, $fait);
            $result->bindValue(4, $soc_id);
            $result->bindValue(5, $contact_id);
            $result->bindValue(6, $coord_id);
            $result->execute();*/

            $sql = 'INSERT INTO action(libelle, designation, dateCreation, dateRelance, type, statut, actif, fait, soc_id, contact_id, coord_id) VALUES(?, ?, NOW(), NOW(), ?, ?, NULL, NULL, ?, ?, NULL)';
            $result = $pdo->prepare($sql);
            $result->bindValue(1, $libelle);
            $result->bindValue(2, $designation);
            $result->bindValue(3, $type);
            $result->bindValue(4, $statut);
            $result->bindValue(5, $soc_id);
            $result->bindValue(6, $contact_id);
            //$result->bindValue(7, $coord_id);
$result->execute();

            if ($result->execute() == true) {
                $success = 'Edito enregistré :';
                header('location:?page=action');

            }

        }


    }


    //include 'theme_admin/vue/famille/create.html.php';
}

?>
<!--<script type="text/javascript" src='theme_admin/js/cours.js'></script>-->

