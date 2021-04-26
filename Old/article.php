<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined variable: action in C:\xampp\htdocs\wcMVCp\inc\article.php on line <i>45</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0009</td><td bgcolor='#eeeeec' align='right'>354672</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='C:\xampp\htdocs\wcMVCp\admin.php' bgcolor='#eeeeec'>...\admin.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0314</td><td bgcolor='#eeeeec' align='right'>408600</td><td bgcolor='#eeeeec'>include( <font color='#00bb00'>'C:\xampp\htdocs\wcMVCp\inc\article.php'</font> )</td><td title='C:\xampp\htdocs\wcMVCp\admin.php' bgcolor='#eeeeec'>...\admin.php<b>:</b>43</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0314</td><td bgcolor='#eeeeec' align='right'>425032</td><td bgcolor='#eeeeec'>listeArticle(  )</td><td title='C:\xampp\htdocs\wcMVCp\inc\article.php' bgcolor='#eeeeec'>...\article.php<b>:</b>10</td></tr>
</table></font>
<pre class='xdebug-var-dump' dir='ltr'>
<small>C:\xampp\htdocs\wcMVCp\inc\article.php:45:</small><font color='#3465a4'>null</font>
</pre>    <section id="CM" class="content3">
        <section class="view3" id="cm_vente">
            <div class="content_main" style="width: 100%">
                <div class="content_titre_gray" style="width: 50%">
                    <p class="txt_titre_black_left_margin">Gestion des Articles</p>
                </div>
        <form method="POST" enctype="multipart/form-data" action="">

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


                <label>  Cours : </label> <select style="width: 300px" class="form-control" name="fam_id">
                    <option value="0" >Sélectionnez...</option>
                    <br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined variable: familles in C:\xampp\htdocs\wcMVCp\theme_admin\vue\article\listeArticle.html.php on line <i>27</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0009</td><td bgcolor='#eeeeec' align='right'>354672</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='C:\xampp\htdocs\wcMVCp\admin.php' bgcolor='#eeeeec'>...\admin.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0314</td><td bgcolor='#eeeeec' align='right'>408600</td><td bgcolor='#eeeeec'>include( <font color='#00bb00'>'C:\xampp\htdocs\wcMVCp\inc\article.php'</font> )</td><td title='C:\xampp\htdocs\wcMVCp\admin.php' bgcolor='#eeeeec'>...\admin.php<b>:</b>43</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0314</td><td bgcolor='#eeeeec' align='right'>425032</td><td bgcolor='#eeeeec'>listeArticle(  )</td><td title='C:\xampp\htdocs\wcMVCp\inc\article.php' bgcolor='#eeeeec'>...\article.php<b>:</b>10</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0890</td><td bgcolor='#eeeeec' align='right'>462840</td><td bgcolor='#eeeeec'>include( <font color='#00bb00'>'C:\xampp\htdocs\wcMVCp\theme_admin\vue\article\listeArticle.html.php'</font> )</td><td title='C:\xampp\htdocs\wcMVCp\inc\article.php' bgcolor='#eeeeec'>...\article.php<b>:</b>47</td></tr>
</table></font>
<br />
<font size='1'><table class='xdebug-error xe-warning' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Warning: Invalid argument supplied for foreach() in C:\xampp\htdocs\wcMVCp\theme_admin\vue\article\listeArticle.html.php on line <i>27</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0009</td><td bgcolor='#eeeeec' align='right'>354672</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='C:\xampp\htdocs\wcMVCp\admin.php' bgcolor='#eeeeec'>...\admin.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0314</td><td bgcolor='#eeeeec' align='right'>408600</td><td bgcolor='#eeeeec'>include( <font color='#00bb00'>'C:\xampp\htdocs\wcMVCp\inc\article.php'</font> )</td><td title='C:\xampp\htdocs\wcMVCp\admin.php' bgcolor='#eeeeec'>...\admin.php<b>:</b>43</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0314</td><td bgcolor='#eeeeec' align='right'>425032</td><td bgcolor='#eeeeec'>listeArticle(  )</td><td title='C:\xampp\htdocs\wcMVCp\inc\article.php' bgcolor='#eeeeec'>...\article.php<b>:</b>10</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0890</td><td bgcolor='#eeeeec' align='right'>462840</td><td bgcolor='#eeeeec'>include( <font color='#00bb00'>'C:\xampp\htdocs\wcMVCp\theme_admin\vue\article\listeArticle.html.php'</font> )</td><td title='C:\xampp\htdocs\wcMVCp\inc\article.php' bgcolor='#eeeeec'>...\article.php<b>:</b>47</td></tr>
</table></font>

                </select>


            <input type="hidden" id="valeur_id" name="valeur_id" value="valeur_id">

            <a href="?page=article&action=ajouterArticle"><button class = "btn btn-primary" name="Ajouter">Ajouter</button></a>
            <a href="?page=article&action=modifierArticle"><button class = "btn btn-primary" name="Modifier">Modifier</button></a>
            <a href="http://localhost/wcMVCp/article/deleteArticle"><button class = "btn btn-primary" name="supprimer" value="supprimer">Supprimer</button></a><hr>

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


            <tr><td id='id0'>1</td><td>test gratuit 15 jours</td><td></td><td><input name='check' type='checkbox' id='suppr0' onclick='numeroLigne();' /></td></tr><tr><td id='id1'>2</td><td>ffff</td><td></td><td><input name='check' type='checkbox' id='suppr1' onclick='numeroLigne();' /></td></tr><tr><td id='id2'>3</td><td>sss</td><td></td><td><input name='check' type='checkbox' id='suppr2' onclick='numeroLigne();' /></td></tr><tr><td id='id3'>4</td><td>ddd</td><td></td><td><input name='check' type='checkbox' id='suppr3' onclick='numeroLigne();' /></td></tr><tr><td id='id4'>5</td><td>ccc</td><td></td><td><input name='check' type='checkbox' id='suppr4' onclick='numeroLigne();' /></td></tr><tr><td id='id5'>6</td><td>azerty</td><td></td><td><input name='check' type='checkbox' id='suppr5' onclick='numeroLigne();' /></td></tr><tr><td id='id6'>7</td><td>aaaaazzzz</td><td></td><td><input name='check' type='checkbox' id='suppr6' onclick='numeroLigne();' /></td></tr><tr><td id='id7'>8</td><td>azertyter crm</td><td></td><td><input name='check' type='checkbox' id='suppr7' onclick='numeroLigne();' /></td></tr><tr><td id='id8'>9</td><td>formation</td><td></td><td><input name='check' type='checkbox' id='suppr8' onclick='numeroLigne();' /></td></tr>




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

