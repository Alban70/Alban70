    <section id="CM" class="content3">
        <section class="view3" id="cm_vente">
            <div class="content_main" style="width: 100%">
                <div class="content_titre_gray" style="width: 50%">
                    <p class="txt_titre_black_left_margin">Gestion des Articles</p>
                </div>
        <form method="POST"  action="?page=article">

            <label for="libelle">libelle</label>
            <input type="text" name="libelle" id="libelle" value= "test gratuit 15 jours">

            <label for="designation">designation</label>
            <input type="text" name="designation" id="designation" value= "">

            <label for="prixHT">prix HT</label>
            <input type="decimal"  name="prixHT" id="prixHT" value= "0.00">

            <label for="tva">tva</label>
            <input type="decimal" name="tva" id="tva" value= "0.00">

            <label for="prixTTC">prix TTC</label>
            <input type="decimal"  name="prixTTC" id="prixTTC" value= "0.00"><br/>





            <input type="number" id="valeur_id" name="valeur_id" value="valeur_id">

            <button type="submit" class = "btn btn-primary" name="ajouter" >Ajouter</button>
            <button type="submit" class = "btn btn-primary" name="modifier" >Modifier</button>
            <button type="submit" class = "btn btn-primary" name="supprimer" >Supprimer</button><br/>

            <!--<button type="submit" class=" btn btn-primary" name="OK">Valider la creation</button>-->

        </form>


        <br>
        <table id="tableau" class="table table-sm table-dark table-hover" weight="400px">
            <tr>
                <th>N°</th>
                <th>Libellé</th>
                <th>Désignation</th>
                <th>Sel</th>
            </tr>


            <tr id='id0'><td id='id0'>1</td><td >test gratuit 15 jours</td><td ></td><td><input type='checkbox' id='suppr0' onclick='numeroLigne();' /></td></tr><tr id='id1'><td id='id1'>6</td><td >azerty</td><td ></td><td><input type='checkbox' id='suppr1' onclick='numeroLigne();' /></td></tr><tr id='id2'><td id='id2'>9</td><td >formation</td><td ></td><td><input type='checkbox' id='suppr2' onclick='numeroLigne();' /></td></tr><tr id='id3'><td id='id3'>16</td><td >Contact Manager</td><td ></td><td><input type='checkbox' id='suppr3' onclick='numeroLigne();' /></td></tr><tr id='id4'><td id='id4'>17</td><td >Vente</td><td ></td><td><input type='checkbox' id='suppr4' onclick='numeroLigne();' /></td></tr><tr id='id5'><td id='id5'>18</td><td >Marketing</td><td ></td><td><input type='checkbox' id='suppr5' onclick='numeroLigne();' /></td></tr><tr id='id6'><td id='id6'>19</td><td >Service Client</td><td ></td><td><input type='checkbox' id='suppr6' onclick='numeroLigne();' /></td></tr><tr id='id7'><td id='id7'>20</td><td >Gestion</td><td ></td><td><input type='checkbox' id='suppr7' onclick='numeroLigne();' /></td></tr><tr id='id8'><td id='id8'>21</td><td >test gratuit valable 15 jours </td><td ></td><td><input type='checkbox' id='suppr8' onclick='numeroLigne();' /></td></tr><tr id='id9'><td id='id9'>43</td><td >test alban 12</td><td ></td><td><input type='checkbox' id='suppr9' onclick='numeroLigne();' /></td></tr>




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
