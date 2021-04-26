<div class="alert alert-danger">
    <?php //echo $erreur; ?>
</div>
<?php //endif; ?>

<?php //if (isset($success)): ?>
<div class="alert-success">
    <?php //echo $success; ?>
</div>
<?php //endif; ?>

<form method="POST" enctype="multipart/form-data" action="?page=adminAction">
<div class="form-group"
    <label for="titre">titre</label>
    <input type="text" class="form-control" name="titre" id="titre">

    <label for="contenu">contenu</label>
    <input type="text" class="form-control" name="contenu" id="contenu">

    <label for="type">type</label>
    <input type="text" class="form-control" name="type" id="type">

    <label for="statut">Statut</label>
    <input type="text" class="form-control" name="statut" id="statut">


    </div>




    <div class="form-group">

        <label>  Famille : </label> <select class="form-control" name="famille">
            <option value="0">Sélectionnez...</option>
            <?php foreach ($familles as $famille): ?>
                <option value="<?php echo $famille['fam_id']; ?>" <?php //if ($id == $famille['fam_id']): ?>selected <?php //endif; ?>><?php echo $famille['libelle']; ?></option>
            <?php endforeach; ?>

        </select>
    </div>



        <button type="submit" class=" btn btn-primary" name="addEdito">Valider la creation</button>

</form>

