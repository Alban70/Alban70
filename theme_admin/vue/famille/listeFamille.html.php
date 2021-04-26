<section id="CM" class="content3">
    <section class="view3" id="cm_vente">
        <div class="content_main" style="width: 100%">
            <div class="content_titre_gray" style="width: 50%">
                <p class="txt_titre_black_left_margin">Gestion des Familles</p>
            </div>

            <form method="POST" action="?page=famille">
                <input type="number" id="valeur_id" name="valeur_id" >

                <label for="libelle">Libellé</label>
                <input type="text" name="libelle" id="libelle" value= "<?php echo $famille['libelle'];?>">



                <button type="submit" class = "btn btn-primary" name="ajouter" >Ajouter</button>
                <button type="submit" class = "btn btn-primary" name="modifier" >Modifier</button>
                <button type="submit" class = "btn btn-primary" name="supprimer" >Supprimer</button><br/>

            </form>


        <table id="tableau" class="table table-sm table-dark table-hover" weight="400px">
            <tr>
                <th>N°</th>
                <th>Libellé</th>
                <th>type</th>
                <th>statut</th>
                <th>Sel</th>
            </tr>


            <?php

            $i=1;
            foreach($familles as $i => $famille):

                //$i++;
                echo "<tr id='id".(string)$i."'>";
                echo "<td id='id".$i."'>".$famille['fam_id']."</td>";
                echo "<td >".$famille['libelle']."</td>";
                //echo "<td >".$famille['type']."</td>";
                //echo "<td >".$famille['statut']."</td>";
                echo "<td><input type='checkbox' id='suppr".(string)$i."' onclick='numeroLigne();' /></td>";
                echo"</tr>";

            endforeach;

            ?>

            </table>

    </section>
</section>




