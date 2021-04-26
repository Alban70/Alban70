<section id="CM" class="content3">
        <form method="POST" enctype="multipart/form-data">
    <input type="hidden" id="valeur_id" name="valeur_id" value="">
            <a href=""><button class = "btn btn-primary" name="">test</button></a><hr>
    <a href="?action=ajouterFamille"><button class = "btn btn-primary" name="ok" >Ajouter</button></a>
            <a href="?page=marketing&action=index"><button class = "btn btn-primary" name="Modifier">Modifier</button></a>
            <a href="?action=supprimer"><button class = "btn btn-primary" name="supprimer" value = "Supprimer" >Supprimer</button></a><hr>
    <br>
        <table id="tableau" class="table table-sm table-dark table-hover" weight="400px">
            <tr>
                <th>Libellé</th>
                <th>date</th>
            </tr>


            <tr><td id='id0'>1</td><td>logiciel crm</td><td>2018-01-20 00:00:00</td><td><input type='checkbox' id='suppr0' onclick='numeroLigne();' /></td></tr><tr><td id='id1'>2</td><td>logiciel sage</td><td>2018-01-20 21:00:29</td><td><input type='checkbox' id='suppr1' onclick='numeroLigne();' /></td></tr><tr><td id='id2'>3</td><td>test 15 jours gratuit</td><td>2018-01-21 08:49:56</td><td><input type='checkbox' id='suppr2' onclick='numeroLigne();' /></td></tr>





                      <tr>

          <td>logiciel crm</td>
          <td>2018-01-20 00:00:00</td>

           </tr>
          <tr>

          <td>logiciel sage</td>
          <td>2018-01-20 21:00:29</td>

           </tr>
          <tr>

          <td>test 15 jours gratuit</td>
          <td>2018-01-21 08:49:56</td>

           </tr>
            </table>
        </form>
    </section>





        <!--<script type="text/javascript" src='theme_admin/js/cours.js'></script>-->

        <script>

            function numeroLigne()
            {
                console.log(22);
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






        </script>



