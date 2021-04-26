<section id="CM" class="content3">

    <section class="view" id="cm_vente">
        <form method="post" action="?page=commandeLigneAction">
            <fieldset>
                <legend>Panier</legend> <!-- Titre du fieldset -->
                <label for="com_id">Commande N°</label>
                <input type="number"  name="com_id" id="com_id" value= "<?php echo $commandeLigne['com_id'];?>" >

                <label for="comL_id">CommandeLigne N°</label>
                <input type="number" id="comL_id" name="comL_id" value= "<?php echo $commandeLigne['comL_id'];?>" >

                <label>Article N°</label>
                <input type="number" id="article_id" name="article_id" value= "<?php echo $article['article_id'];?>" >

                <label for="libelle">Article</label>
                <input type="text"  name="libelle" id="libelle" value= "<?php echo $article['libelle'];?>" >

                <label for="prix">Prix HT</label>
                <input type="number"  name="prix" id="prix" value= "<?php echo $article['prixHT'];?>" >

                <label for="qte">Qté</label>
                <input type="number"  name="qte" id="qte"></br>

                <label for="sTotalLigne">Total HT</label>
                <input type="number"  name="sTotalLigne" id="sTotalLigne"></br>


                <!--<button class = "btn btn-primary" name="addLigne">Valider la selection</button>
                <button class = "btn btn-primary" name="uddateLigne">Modifier</button>
                <button class = "btn btn-primary" name="deleteLigne" value = "Supprimer" >Supprimer</button><hr></br>-->

                <button class = "btn btn-primary" name="valComLigne" onclick="calculPrix();">Ajouter au panier</button>
            </fieldset>
        </form>
    </section>


