<section id="CM" class="content3" style="margin-top:40px">
<section class="view" id="cm_vente">
    <div class="content4" id="fonct_search">
        <div class="form">
            <input style="width: 25em" type="text" id="libelle" name="libelle" placeholder="Libellé*"/>
        </div>
        <div class="form">
            <input style="width: 25em" type="text" id="statut" name="statut" placeholder="Statut*"/>
        </div>
        <a href="?page=demande" class="btn btn-primary"  id="search" name="search" onclick="search1();" >search</a>
    </div>



<form method="post" action="?page=demande">

    <!--<fieldset>
        <legend>Panier</legend>

            <label for="libelle">libelle</label>
            <input type="text"  name="libelle" id="libelle" value= "<?php //echo $commande['libelle'];?>" >


            <label for="type">type</label>
            <input type="text"  name="type" id="type" value= "<?php //echo $commande['libelle'];?>" >

            <label for="statut">statut</label>
            <input type="text"  name="statut" id="statut" value= "<?php //echo $commande['statut'];?>" >
        </fieldset>-->

    <!--<div class="content4" id="fonct_search">
        <div class="form">
            <input style="width: 25em" type="text" id="libelle" name="libelle" placeholder="Libellé*"/>
        </div>
        <div class="form">
            <input style="width: 25em" type="text" id="statut" name="statut" placeholder="Statut*"/>
        </div>
        <button  class="btn btn-primary"  id="search" name="search" onclick="search1()">search</button><br>
    </div>-->

        <!--<input type="number" id="valeur_id" name="valeur_id" >-->
    <button class = "btn btn-primary" name="ajouter">Ajouter</button>
    <button class = "btn btn-primary" name="modifier">Modifier</button>
    <button class = "btn btn-primary" name="supprimer" value = "Supprimer" onclick="return confirm('sur ?')">Supprimer</button><hr><br>

    </form>
</section>



<table id="tableau" class="table table-sm table-dark table-hover" weight="400px">
    <tr>
        <th>N°</th>
        <th>Libellé</th>
        <!--<th>date</th>-->
        <th>Sel</th>
    </tr>

    <?php

    $i=1;
    foreach($actions as $i => $action):

        //$i++;
        echo "<tr id='id".(string)$i."'>";
        echo "<td id='id".$i."'>".$action['action_id']."</td>";
        //echo "<td id='id".(string)$i."'>".$famille['comL_id']."</td>";
        //echo "<td>".$famille['fam_id']."</td>";
        echo "<td >".$action['libelle']."</td>";
        //echo "<td>".$commande['dateCreation']."</td>";
        echo "<td><input type='checkbox' id='suppr".(string)$i."' onclick='numeroLigne();' /></td>";
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


