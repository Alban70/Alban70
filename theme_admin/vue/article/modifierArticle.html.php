<!--<section class="contant3"

<form method="POST" action="?page=adminAction">
<div class="form-group"

    <label for="id">id :</label>
    <input type="number" class="form-control" name="id" id="id" value= "<?php //echo $article['article_id'];?>" >

    <label for="libelle">libelle</label>
    <input type="text" class="form-control" name="libelle" id="libelle" value= "<?php //echo $article['libelle'];?>">

    <label for="designation">designation</label>
    <input type="text" class="form-control" name="designation" id="designation">

    <label for="prixHT">prix HT</label>
    <input type="decimal" class="form-control" name="prixHT" id="prixHT" value="0">

    <label for="tva">tva</label>
    <input type="decimal" class="form-control" name="tva" id="tva" value="0">

    <label for="prixTTC">prix TTC</label>
    <input type="decimal" class="form-control" name="prixTTC" id="prixTTC" value="0">

    <label for="actif">actif</label>
    <input type="text" class="form-control" name="actif" id="actif">

    <label for="type">type</label>
    <input type="text" class="form-control" name="type" id="type">

</div>

        <button type="submit" class=" btn btn-primary" name="modArticle">Valider la creation</button>

</form>
</section>-->

<section class="content3">
    <div class="alert alert-danger">
        <?php //echo $erreur; ?>
    </div>
    <?php //endif; ?>

    <?php //if (isset($success)): ?>
    <div class="alert-success">
        <?php //echo $success; ?>
    </div>
    <?php //endif; ?>
    <div class="content_contact">
        <form method="POST" enctype="multipart/form-data" action="?page=adminAction">

            <input type="hidden" name="id" id="id" value= "<?php echo $article['article_id'];?>" >
            <div class="form">
                <label for="libelle">libelle</label>
                <input type="text" name="libelle" id="libelle" value= "<?php echo $article['libelle'];?>">
            </div><br>

            <div class="form">
                <label for="designation">designation</label>
                <input type="text" name="designation" id="designation" value= "<?php echo $article['designation'];?>">
            </div><br>

            <div class="form">
                <label for="prixHT">prix HT</label>
                <input type="decimal" name="prixHT" id="prixHT" value= "<?php echo $article['prixHT'];?>">
            </div><br>

            <div class="form">
                <label for="tva">tva</label>
                <input type="decimal" name="tva" id="tva" value= "<?php echo $article['tva'];?>">
            </div><br>

            <div class="form">
                <label for="prixTTC">prix TTC</label>
                <input type="decimal" name="prixTTC" id="prixTTC" value= "<?php echo $article['prixTTC'];?>">
            </div><br>

            <div class="form">
                <label for="actif">actif</label>
                <input type="text" name="actif" id="actif"  value= "<?php echo $article['actif'];?>">
            </div><br>

            <div class="form">
                <label for="type">type</label>
                <input type="text" name="type" id="type">
            </div><br>

            <div class="form">
                <label for="statut">Statut</label>
                <input type="text" name="statut" id="statut">
            </div><br>

            <div class="form">
                <label>  Famille : </label> <select name="famille">
                    <option value="0">Sélectionnez...</option>
                    <?php foreach ($familles as $famille): ?>
                        <option value="<?php echo $famille['fam_id']; ?>" <?php if ($id == $famille['fam_id']): ?>selected <?php endif; ?>><?php echo $famille['libelle']; ?></option>
                    <?php endforeach; ?>

                </select>
            </div><br>

            <div class="form">
                <button type="submit" class=" btn btn-primary" name="modArticle">Valider</button>
                <button type="submit" class=" btn btn-primary" name="annuleAricle">Annulé</button>
            </div>
    </div>



    </form>
</section>
