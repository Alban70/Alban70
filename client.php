    <section id="CM" class="content3">
        <section class="view3" id="cm_vente">
            <div class="content_main" style="width: 100%">
                <div class="content_titre_gray" style="width: 50%; margin-top: 50px;">
                    <p class="txt_titre_black_left_margin">Liste des sociétés</p>
                </div>
        <form method="post"  action="?page=action">
            <label for="libelle">libelle</label>
            <input type="text" name="libelle" id="libelle" value= "plastivel"></br>







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


            <tr id='id0'><td id='id0'>1</td><td >plastivel</td><td >rue du parc</td><td >83000</td><td >toulon</td><td><input type='checkbox' id='suppr0' onclick='numeroLigne();' /></td></tr><tr id='id1'><td id='id1'>5</td><td >wellcom</td><td ></td><td ></td><td ></td><td><input type='checkbox' id='suppr1' onclick='numeroLigne();' /></td></tr><tr id='id2'><td id='id2'>14</td><td >test</td><td ></td><td ></td><td ></td><td><input type='checkbox' id='suppr2' onclick='numeroLigne();' /></td></tr><tr id='id3'><td id='id3'>16</td><td >test1</td><td ></td><td ></td><td ></td><td><input type='checkbox' id='suppr3' onclick='numeroLigne();' /></td></tr><tr id='id4'><td id='id4'>20</td><td >test2</td><td ></td><td ></td><td ></td><td><input type='checkbox' id='suppr4' onclick='numeroLigne();' /></td></tr><tr id='id5'><td id='id5'>24</td><td >test3</td><td ></td><td ></td><td ></td><td><input type='checkbox' id='suppr5' onclick='numeroLigne();' /></td></tr><tr id='id6'><td id='id6'>25</td><td >test4</td><td ></td><td ></td><td ></td><td><input type='checkbox' id='suppr6' onclick='numeroLigne();' /></td></tr><tr id='id7'><td id='id7'>29</td><td >bonte</td><td ></td><td ></td><td ></td><td><input type='checkbox' id='suppr7' onclick='numeroLigne();' /></td></tr><tr id='id8'><td id='id8'>30</td><td >bontal</td><td ></td><td ></td><td ></td><td><input type='checkbox' id='suppr8' onclick='numeroLigne();' /></td></tr><tr id='id9'><td id='id9'>40</td><td >biscots</td><td ></td><td ></td><td ></td><td><input type='checkbox' id='suppr9' onclick='numeroLigne();' /></td></tr><tr id='id10'><td id='id10'>42</td><td >fst</td><td ></td><td ></td><td ></td><td><input type='checkbox' id='suppr10' onclick='numeroLigne();' /></td></tr><tr id='id11'><td id='id11'>45</td><td >frenchsidetravel</td><td ></td><td ></td><td ></td><td><input type='checkbox' id='suppr11' onclick='numeroLigne();' /></td></tr>




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

