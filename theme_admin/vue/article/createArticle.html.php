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

    <div class="form">
    <label for="libelle">libelle</label>
    <input type="text" name="libelle" id="libelle">
    </div><br>

    <div class="form">
    <label for="designation">designation</label>
    <input type="text" name="designation" id="designation">
    </div><br>

    <div class="form">
    <label for="prixHT">prix HT</label>
    <input type="decimal" name="prixHT" id="prixHT" value="0.00">
    </div><br>

    <div class="form">
    <label for="tva">tva</label>
    <input type="decimal" name="tva" id="tva" value="19.60">
    </div><br>

    <div class="form">
    <label for="prixTTC">prix TTC</label>
    <input type="decimal" name="prixTTC" id="prixTTC" value="0">
    </div><br>

    <div class="form">
    <label for="actif">actif</label>
    <input type="text" name="actif" id="actif"  value="Oui">
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
        <label>  Famille : </label> <select class="form"  name="famille">
            <option value="0">Sélectionnez...</option>
            <?php foreach ($familles as $famille): ?>
                <option value="<?php echo $famille['fam_id']; ?>" selected><?php echo $famille['libelle']; ?></option>
            <?php endforeach; ?>

        </select>
    </div><br>

    <div class="form">
        <button type="submit" class=" btn btn-primary" name="addArticle">Valider</button>
        <button type="submit" class=" btn btn-primary" name="annuleAricle">Annulé</button>
    </div>
    </div>



    </form>
</section>

    <!--<div class="form">
        <label>  Famille : </label> <select class="form-control"  name="famille">
            <option value="0">Sélectionnez...</option>
            <?php //foreach ($familles as $famille): ?>
                <option value="<?php //echo $famille['fam_id']; ?>" <?php //if ($id == $famille['fam_id']): ?>selected <?php //endif; ?>><?php //echo $famille['libelle']; ?></option>
            <?php //endforeach; ?>

        </select>
    </div><br>-->


