<section id="CM" class="content3">
    <section class="view3" id="cm_vente">

            <div class="content_titre_gray" style="width: 50%">
                <p class="txt_titre_black_left_margin">Gestion des Familles</p>
            </div>


            <form method="POST" enctype="multipart/form-data">
                <label for="valeur_id">valeur_id</label>
                <input type="number" id="valeur_id" name="valeur_id" >

                <label for="libelle">Libellé</label>
                <input type="text" name="libelle" id="libelle" value= "<?php //echo $famille['libelle'];?>">


                <!--<a class="btn btn-primary" href="<?php echo \Lib\Application::$racine ?>theme_adminPo/web/famille/add">Ajouter</a>-->
                <button type="submit" class = "btn btn-primary" name="modifier" formaction ="<?php echo \Lib\Application::$racine ?>theme_adminPo/web/famille/add">Ajouter</button>
                <!--<button type="submit" class = "btn btn-primary" name="ajouter" >Ajouter</button>-->
                <!--<a href="<?php echo \Lib\Application::$racine ?>theme_adminPo/web/famille/modify"><button type="submit" class = "btn btn-primary" name="modifier" >Modifier</button></a>-->
                <button type="submit" class = "btn btn-primary" name="modifier" formaction ="<?php echo \Lib\Application::$racine ?>theme_adminPo/web/famille/edit">Modifier</button>
                <a class="btn btn-primary" href="<?php echo \Lib\Application::$racine ?>theme_adminPo/web/famille/delete">Supprimer</a>
                <!--<button type="submit" class = "btn btn-primary" name="modifier" >Modifier</button>
                <button type="submit" class = "btn btn-primary" name="supprimer" >Supprimer</button>-->
                <br/>

            </form>

        <table id="tableau" class="table table-sm table-dark table-hover" weight="400px">
            <tr>
                <th>N°</th>
                <th>Libe</th>
                <!--<th>date</th>
                <th>Sel</th>-->
            </tr>


            <?php

            $i=1;
            foreach($familles as $i => $famille):

                echo "<tr id='id".(string)$i."'>";
                echo "<td>".$famille->getFamId()."</td>";
                echo "<td >".$famille->getLibelle()."</td>";
                echo "<td><input type='checkbox' id='suppr".(string)$i."' onclick='numeroLigne();' /></td>";
                echo"</tr>";

            endforeach;

            ?>




            </table>

    </section>
</section>







