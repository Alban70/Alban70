<section id="CM" class="content3">

    <section class="view" id="cm_vente">
        <form method="post" action="?page=commandeLigneAction">
            <fieldset>
                <legend>Panier</legend> <!-- Titre du fieldset -->
                <!--<label for="id2">Commande N°</label>
                <input type="number"  name="id" id="id" value= "<?php //echo $commandeLigne['com_id'];?>" >

                <label for="id2">CommandeLigne N°</label>
                <input type="number" id="id2" name="id2" value= "<?php //echo $commandeLigne['comL_id'];?>" >-->

                <label>Article N°</label>
                <input type="number" id="valeur_id" name="valeur_id" >

                <!--<label for="libelle">Article</label>
                <input type="text"  name="libelle" id="libelle">

                <label for="prix">Prix HT</label>
                <input type="decimal"  name="prix" id="prix">

                <label for="qte">Qté</label>
                <input type="number"  name="qte" id="qte"></br>

                <label for="sTotalLigne">Total HT</label>
                <input type="decimal"  name="sTotalLigne" id="sTotalLigne"></br>-->


                <!--<button class = "btn btn-primary" name="addLigne">Valider la selection</button>
                <button class = "btn btn-primary" name="uddateLigne">Modifier</button>
                <button class = "btn btn-primary" name="deleteLigne" value = "Supprimer" >Supprimer</button><hr></br>-->

                <!--<button class = "btn btn-primary" name="ValCom" onclick="valideArticle();">Valider</button>-->
                <button type="submit" class = "btn btn-primary" name="modifier" formaction ="<?php echo \Lib\Application::$racine ?>theme_membresPo/web/commande/add">Ajouter</button>
            </fieldset>
        </form>
    </section>






<table id="tableau" class="table table-sm table-dark table-hover" weight="400px">
    <tr>
        <th>N°</th>
        <th>Libellé</th>
        <th>prix</th>
        <th>Sel</th>
    </tr>

    <?php

    $i=1;
    foreach($articles as $i => $article):

        $i++;
        echo "<tr id='id".(string)$i."'>";
        echo "<td>".$article->getArticleId()."</td>";
        echo "<td >".$article->getLibelle()."</td>";
        echo "<td >".$article->getPrixHT()."</td>";
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


