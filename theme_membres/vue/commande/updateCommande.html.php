<section id="CM" class="content3">
<section class="view" id="cm_vente">
<form method="post" action="?page=commandeAction">

    <fieldset>
        <legend>Panier</legend> <!-- Titre du fieldset -->
        <input type="number"  name="id" id="id" value= "<?php echo $commande['soc_id'];?>" >

        <label for="id2">Commande °</label>
        <input type="number" id="id2" name="id2" value= "<?php echo $commande['com_id'];?>" >

            <label for="libelle">libelle</label>
            <input type="text"  name="libelle" id="libelle" value= "<?php echo $commande['libelle'];?>">


            <label for="type">type</label>
            <input type="text"  name="type" id="type">

            <label for="statut">statut</label>
            <input type="text"  name="statut" id="statut">
        </fieldset>
        <!--<input type="number" id="valeur_id" name="valeur_id" >-->
    <button class = "btn btn-primary" name="ValCom">Valider</button>

    </form>
</section>



    <section class="view" id="cm_vente">
        <form method="post" action="?page=commandeLigne">
            <input type="number" id="id2" name="id2" value= "<?php echo $commande['com_id'];?>" >




            <input type="number" id="valeur_id" name="valeur_id" ></br>

            <button class = "btn btn-primary" name="addLigne">Ajouter</button>
            <button class = "btn btn-primary" name="updateLigne">Modifier</button>
            <button class = "btn btn-primary" name="deleteLigne" value = "Supprimer" >Supprimer</button><hr></br>

        </form>
    </section>






<table id="tableau" class="table table-sm table-dark table-hover" weight="400px">
    <tr>
        <th>N°</th>
        <th>Libellé</th>
        <th>prix</th>
        <th>Qté</th>
        <th>Total HT</th>
        <th>Sel</th>
    </tr>

    <?php

    $i=1;
    foreach($commandeLignes as $i => $commandeLigne):

        $i++;
        echo "<tr id='id".(string)$i."'>";
        echo "<td id='id".$i."'>".$commandeLigne['comL_id']."</td>";
        echo "<td >".$commandeLigne['libelle']."</td>";
        echo "<td >".$commandeLigne['prix']."</td>";
        echo "<td >".$commandeLigne['qte']."</td>";
        echo "<td >".$commandeLigne['sTotalLigne']."</td>";
        echo "<td><input type='checkbox' id='suppr".(string)$i."' onclick='numeroL();' /></td>";
        echo"</tr>";

    endforeach;

    ?>

</table>

</section>





    <!--<section id="CM" class="content3">


        <input type="hidden" id="valeur_id" name="valeur_id" value="">
        <a href=""><button class = "btn btn-primary" name="">test</button></a><hr>


        <a href="?page=article&action=ajouterArticle"><button class = "btn btn-primary" name="Ajouter">Ajouter</button></a>
        <a href="?page=marketing&action=index"><button class = "btn btn-primary" name="Modifier">Modifier</button></a>
        <a href="?action=supprimer"><button class = "btn btn-primary" name="supprimer" value = "Supprimer" >Supprimer</button></a><hr>
        <br>
        <table id="tableau" class="table table-sm table-dark table-hover" weight="400px">
            <tr>
                <th>N°</th>
                <th>Libellé</th>
                <th>date</th>
                <th>Sel</th>
            </tr>


            <?php
            //$i=1;
            //foreach($commandes as $i => $commande):

                //echo"<tr>";
                //echo "<td id='id".(string)$i."'>".$commande['com_id']."</td>";
                //echo "<td>".$commande['libelle']."</td>";
                //echo "<td>".$commande['dateCom']."</td>";
                //echo "<td><input type='checkbox' id='suppr".(string)$i."' onclick='numeroLigne();' /></td>";
                //echo"</tr>";
//$i++;

            //endforeach;

            ?>





            </table>


    </section>-->


