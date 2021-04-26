<?php



//$action = (isset($_GET['action']))? $_GET['action'] : 'modifierFamille';
if(isset($_POST['ValCom'])) $action='validerCommandeLigne';
elseif(isset($_POST['valComLigne'])) $action='valComLigne';
elseif(isset($_POST['updateCom'])) $action='modifierCommande';
elseif(isset($_POST['deleteCom'])) $action='supprimerCommande';
//elseif(isset($_POST['modifier'])) $action='modifier';
else $action = 'index';

ob_start();
switch($action){
    default:
    case 'index' :
        indexAction();
        break;

    case 'validerCommandeLigne' :
        validerCommandeLigne();
        break;

    case 'valComLigne' :
        valComLigne();
        break;




}

$buffer = ob_get_flush();
file_put_contents($file, $buffer);


function indexAction()
{
    global $pdo;
    if (isset($_SESSION['user_id']) === true) {
        //$id = $_POST['id2'];

        $id = $_SESSION['comID'];

        $sql = 'SELECT * FROM commande WHERE com_id = :id';
        $result = $pdo->prepare($sql);
//$result->bindValue(':id', 1, PDO::PARAM_INT);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->execute();
//$result->execute([':id'=>$id]);
        $commande = $result->fetch();

        $sql = 'SELECT * FROM commandeLigne WHERE com_id = :id GROUP BY comL_id ';
        $result = $pdo->prepare($sql);
//$result->bindValue(':id', 1, PDO::PARAM_INT);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->execute();
//$result->execute([':id'=>$id]);
        $commandeLignes = $result->fetchAll();
        include 'theme_membres/vue/commande/updateCommande.html.php';
    }
}
/*{
    global $pdo;

    if (isset($_SESSION['user_id']) === true) {
        $id = $_POST['id2'];
        $sql = 'SELECT * FROM commande WHERE com_id = :id';
        $result = $pdo->prepare($sql);
//$result->bindValue(':id', 1, PDO::PARAM_INT);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->execute();
//$result->execute([':id'=>$id]);
        $commande = $result->fetch();

        $sql = 'SELECT * FROM commandeLigne WHERE com_id = :id GROUP BY comL_id ';
        $result = $pdo->prepare($sql);
//$result->bindValue(':id', 1, PDO::PARAM_INT);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->execute();
//$result->execute([':id'=>$id]);
        $commandeLignes = $result->fetchAll();
        include 'theme_membres/vue/commande/updateCommande.html.php';
    }
}*/


function valComLigne()
{
    global $pdo;

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $erreur = '';


        $com_id = $_POST['com_id'];
        $comL_id = $_POST['comL_id'];
        $article_id = $_POST['article_id'];
        $libelle = $_POST['libelle'];
        $prix = $_POST['prix'];
        $qte = $_POST['qte'];
        $sTotalLigne = $_POST['sTotalLigne'];

        /*if (strlen($_POST['libelle']) < 3) {
            $erreur .= 'article invalide';
        } else {
            $libelle = $_POST['libelle'];
        }*/

        if ($erreur == '') {
            //$Date= date('Y-m-d h : i : s ');

            $result = $pdo->prepare('update commandeLigne set qte= :qte, libelle = :libelle, prix = :prix, sTotalLigne = :sTotalLigne where comL_id = :id');
            $result->execute(array(
                'qte' => $qte,
                'libelle' => $libelle,
                'prix' => $prix,
                'sTotalLigne' => $sTotalLigne,
                'id' => $comL_id
            ));
            //$success = 'Edito modifié :';
            header('location:?page=commandeLigne');
        }

    }

}





function validerCommandeLigne()
{
    global $pdo;

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $erreur = '';

        if (strlen($_POST['libelle']) < 3) {
            $erreur .= 'article invalide';
        } else {
            $libelle = $_POST['libelle'];
        }

        if ($erreur == '') {
            //$Date= date('Y-m-d h : i : s ');

            $result = $pdo->prepare('update commandeLigne set libelle = :libelle where comL_id = :id2');
            $result->execute(array(
                //'qte' => $_POST['qte'],
                'libelle' => $_POST['libelle'],
                //'sTotalLigne' => $_POST['sTotalLigne'],
                'id2' => $_POST['id2'],
                //'id' => $_POST['id']
            ));
            //$success = 'Edito modifié :';
            header('location:?page=commandeLigneAction');
        }

    }

}

?>
<!--<script type="text/javascript" src='theme_admin/js/cours.js'></script>-->

