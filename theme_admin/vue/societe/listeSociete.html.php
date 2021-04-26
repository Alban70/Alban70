    <section id="CM" class="content3">
        <section class="view3" id="cm_vente">
            <div class="content_main" style="width: 100%">
                <div class="content_titre_gray" style="width: 50%; margin-top: 50px;">
                    <p class="txt_titre_black_left_margin">Liste des sociétés</p>
                </div>
        <form method="post"  action="?page=action">
            <label for="libelle">libelle</label>
            <input type="text" name="libelle" id="libelle" value= "<?php echo $societe['nom'];?>"></br>







            <input type="hidden" id="valeur_id" name="valeur_id" value="valeur_id">
            <button class = "btn btn-primary" name="ajouter">Ajouter</button>
            <button class = "btn btn-primary" name="ListeAction">Liste des actions</button>

            <!--<button type="submit" class = "btn btn-primary" name="ajouter" >Ajouter</button>
            <button type="submit" class = "btn btn-primary" name="modifier" >Modifier</button>
            <button type="submit" class = "btn btn-primary" name="supprimer" >Supprimer</button><br/>

            <!--<button type="submit" class=" btn btn-primary" name="OK">Valider la creation</button>-->

        </form>


        <br>
        <table id="tableau" class="table table-sm table-dark table-hover" weight="400px">
            <tr>
                <th>N°</th>
                <th>Nom</th>
                <th>Adresse</th>
                <th>CP</th>
                <th>Ville</th>
                <th>Sel</th>
            </tr>


            <?php
            $i=1;
            foreach($societes as $i => $societe):

                //$i++;
                echo "<tr id='id".(string)$i."'>";
                echo "<td id='id".$i."'>".$societe['soc_id']."</td>";
                echo "<td >".$societe['nom']."</td>";
                echo "<td >".$societe['adresse1']."</td>";
                echo "<td >".$societe['cp']."</td>";
                echo "<td >".$societe['ville']."</td>";
                echo "<td><input type='checkbox' id='suppr".(string)$i."' onclick='numeroLigne();' /></td>";
                echo"</tr>";

            endforeach;

            ?>





            </table>

        </section>
    </section>





    <!--<script src="./theme_membres/js/coursM.js"></script>-->







        <!--<script type="text/javascript" src='theme_admin/js/cours.js'></script>-->

        <!--<script>

            function numeroLigne()
            {
                console.log(400);
                var i = 0;
                var COCHE = false;
                // Parcours les lignes du tableau
                for (i=1;i< document.getElementById("tableau").rows.length;i++)
                {
                    console.log(23);
                    // Vérifie si les cases sont cochées
                    if(document.getElementById("suppr"+i).checked)
                    {
                        // case cochée
                        COCHE = true;
                        // Recupère l'identifiant des lignes cochées
                        var valeur_id = document.getElementById("id"+i).innerHTML;
                        // Transmet la variable valeur_id dans le input hidden de la page fournisseur.php
                        document.getElementById("valeur_id").value= valeur_id;
                        //console.log(document.getElementById("valeur_id").value= valeur_id);
                    }
                }
                if(!COCHE)
                {
                    alert("Pas de case cochée");
                    //return 0;
                    console.log(30);
                }
            }






        </script>-->

