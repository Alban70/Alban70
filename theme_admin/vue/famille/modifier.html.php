<?php //if ($erreur): var_dump($_POST);?>
<div class="alert alert-danger">
    <?php //echo $erreur; ?>
</div>
<?php //endif; ?>

<?php //if (isset($success)): ?>
<div class="alert-success">
    <?php //echo $success; ?>
</div>
<?php //endif; ?>

<?php var_dump($famille) ?>
<?php var_dump($famille) ?>

<form method="POST" action="?page=adminAction">
    <div class="form-group"

    <label for="id">id :</label>
    <input type="number" class="form-control" name="id" id="id" value= "<?php echo $famille['fam_id'];?>" >

    <label for="libelle">libelle</label>
    <input type="text" class="form-control" name="libelle" id="libelle" value= "<?php echo $famille['libelle'];?>" >

    <label for="actif">actif</label>
    <input type="text" class="form-control" name="actif" id="actif">

    <label for="type">type</label>
    <input type="text" class="form-control" name="type" id="type">

    <label for="statut">statut</label>
    <input type="text" class="form-control" name="statut" id="statut">

    </div>

    <button type="submit" class=" btn btn-primary" name="modFam">Modifier la creation</button>

</form>











