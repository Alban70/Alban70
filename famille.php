<section id="CM" class="content3">
    <section class="view3" id="cm_vente">
        <div class="content_main" style="width: 100%">
            <div class="content_titre_gray" style="width: 50%">
                <p class="txt_titre_black_left_margin">Gestion des Familles</p>
            </div>

            <form method="POST" action="?page=famille">
                <input type="number" id="valeur_id" name="valeur_id" >

                <label for="libelle">Libellé</label>
                <input type="text" name="libelle" id="libelle" value= "logiciel crm">



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


            <tr id='id0'><td id='id0'>1</td><td >logiciel crm</td><td><input type='checkbox' id='suppr0' onclick='numeroLigne();' /></td></tr><tr id='id1'><td id='id1'>2</td><td >logiciel sage</td><td><input type='checkbox' id='suppr1' onclick='numeroLigne();' /></td></tr><tr id='id2'><td id='id2'>3</td><td >test 15 jours </td><td><input type='checkbox' id='suppr2' onclick='numeroLigne();' /></td></tr><tr id='id3'><td id='id3'>4</td><td >prestation</td><td><input type='checkbox' id='suppr3' onclick='numeroLigne();' /></td></tr><tr id='id4'><td id='id4'>6</td><td >crm</td><td><input type='checkbox' id='suppr4' onclick='numeroLigne();' /></td></tr><tr id='id5'><td id='id5'>8</td><td >Marketing</td><td><input type='checkbox' id='suppr5' onclick='numeroLigne();' /></td></tr><tr id='id6'><td id='id6'>9</td><td >Gestion</td><td><input type='checkbox' id='suppr6' onclick='numeroLigne();' /></td></tr><tr id='id7'><td id='id7'>10</td><td >test today</td><td><input type='checkbox' id='suppr7' onclick='numeroLigne();' /></td></tr><tr id='id8'><td id='id8'>11</td><td >prestation</td><td><input type='checkbox' id='suppr8' onclick='numeroLigne();' /></td></tr><tr id='id9'><td id='id9'>12</td><td >test allbano</td><td><input type='checkbox' id='suppr9' onclick='numeroLigne();' /></td></tr>
            </table>

    </section>
</section>




