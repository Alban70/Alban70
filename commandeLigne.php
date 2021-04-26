<section id="CM" class="content3">

    <section class="view" id="cm_vente">
        <form method="post" action="?page=commandeLigneAction">
            <fieldset>
                <legend>Panier</legend> <!-- Titre du fieldset -->
                <label for="id2">Commande N°</label>
                <input type="number"  name="id" id="id" value= "76" >

                <label for="id2">CommandeLigne N°</label>
                <input type="number" id="id2" name="id2" value= "93" >

                <label>Article N°</label>
                <input type="number" id="valeur_id" name="valeur_id" >

                <label for="libelle">Article</label>
                <input type="text"  name="libelle" id="libelle">

                <label for="prix">Prix HT</label>
                <input type="decimal"  name="prix" id="prix">

                <label for="qte">Qté</label>
                <input type="number"  name="qte" id="qte"></br>

                <label for="sTotalLigne">Total HT</label>
                <input type="decimal"  name="sTotalLigne" id="sTotalLigne"></br>


                <!--<button class = "btn btn-primary" name="addLigne">Valider la selection</button>
                <button class = "btn btn-primary" name="uddateLigne">Modifier</button>
                <button class = "btn btn-primary" name="deleteLigne" value = "Supprimer" >Supprimer</button><hr></br>-->

                <button class = "btn btn-primary" name="ValCom" onclick="valideArticle();">Valider</button>
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

    <tr id='id1'><td id='id1'>1</td><td >test gratuit 15 jours</td><td >0.00</td><td><input type='checkbox' id='suppr1' onclick='numeroL();' /></td></tr><tr id='id2'><td id='id2'>6</td><td >azerty</td><td >12.00</td><td><input type='checkbox' id='suppr2' onclick='numeroL();' /></td></tr><tr id='id3'><td id='id3'>9</td><td >formation</td><td >15.00</td><td><input type='checkbox' id='suppr3' onclick='numeroL();' /></td></tr><tr id='id4'><td id='id4'>16</td><td >Contact Manager</td><td >20.00</td><td><input type='checkbox' id='suppr4' onclick='numeroL();' /></td></tr><tr id='id5'><td id='id5'>17</td><td >Vente</td><td >20.00</td><td><input type='checkbox' id='suppr5' onclick='numeroL();' /></td></tr><tr id='id6'><td id='id6'>18</td><td >Marketing</td><td >20.00</td><td><input type='checkbox' id='suppr6' onclick='numeroL();' /></td></tr><tr id='id7'><td id='id7'>19</td><td >Service Client</td><td >20.00</td><td><input type='checkbox' id='suppr7' onclick='numeroL();' /></td></tr><tr id='id8'><td id='id8'>20</td><td >Gestion</td><td >20.00</td><td><input type='checkbox' id='suppr8' onclick='numeroL();' /></td></tr><tr id='id9'><td id='id9'>21</td><td >test gratuit valable 15 jours </td><td >0.00</td><td><input type='checkbox' id='suppr9' onclick='numeroL();' /></td></tr><tr id='id10'><td id='id10'>43</td><td >test alban 12</td><td >0.00</td><td><input type='checkbox' id='suppr10' onclick='numeroL();' /></td></tr>
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


            




            </table>


    </section>-->


