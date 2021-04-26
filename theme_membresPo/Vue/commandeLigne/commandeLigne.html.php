<section id="CM" class="content3">

    <section class="view" id="cm_vente">
        <form method="post" action="?page=commandeLigneAction">
            <fieldset>
                <legend>Panier</legend> <!-- Titre du fieldset -->
                <label for="id2">Commande N°</label>
                <input type="number"  name="id" id="id" value= "<?php //echo $commandeLigne['com_id'];?>" >

                <label for="id2">CommandeLigne N°</label>
                <input type="number" id="id2" name="id2" value= "<?php //echo $commandeLigne['comL_id'];?>" >-->

                <label>Article N°</label>
                <input type="number" id="article_id" name="article_id" >

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

                <!--<button class = "btn btn-primary" name="ValCom" onclick="valideArticle();">Valider</button>-->
                <button type="submit" class = "btn btn-primary" name="modifier" formaction ="<?php echo \Lib\Application::$racine ?>theme_membresPo/web/commande/edit">Valider</button>
            </fieldset>
        </form>
    </section>



</section>
