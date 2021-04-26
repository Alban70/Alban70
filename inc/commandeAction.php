<?php



//$action = (isset($_GET['action']))? $_GET['action'] : 'modifierFamille';
if(isset($_POST['ValCom'])) $action='validerCommande';
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

    case 'validerCommande' :
        validerCommande();
        break;





}

$buffer = ob_get_flush();
file_put_contents($file, $buffer);


function indexAction(){
    $id = $_POST['soc_id'];
    $sql = 'SELECT * FROM commande WHERE com_id = :id';
    $result = $pdo->prepare($sql);
//$result->bindValue(':id', 1, PDO::PARAM_INT);
    $result->bindParam(':id', $id, PDO::PARAM_INT);
    $result->execute();
//$result->execute([':id'=>$id]);
    $commande = $result->fetch();

    $id = $commande['com_id'];
    $sql = 'SELECT * FROM commandeLigne WHERE com_id = :id GROUP BY comL_id ';
    $result = $pdo->prepare($sql);
//$result->bindValue(':id', 1, PDO::PARAM_INT);
    $result->bindParam(':id', $id, PDO::PARAM_INT);
    $result->execute();
//$result->execute([':id'=>$id]);
    $commandeLignes = $result->fetchAll();
}


/**
 *
 */
function validerCommande()
{
    global $pdo;


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $erreur = '';

        if (strlen($_POST['libelle']) < 3) {
            $erreur .= 'libellé invalide';
        } else {
            $libelle = $_POST['libelle'];
        }

        if ($erreur == '') {
            //$Date= date('Y-m-d h : i : s ');

            $result = $pdo->prepare('update commande set libelle = :libelle  where com_id = :id2');
            $result->execute(array(
                'libelle' => $_POST['libelle'],
                'id2' => $_POST['id2'],
                //'id' => $_POST['id']
            ));
            //$success = 'Edito modifié :';
            header('location:?page=commande');
        }

    }

}

?>
<!--<script type="text/javascript" src='theme_admin/js/cours.js'></script>-->

