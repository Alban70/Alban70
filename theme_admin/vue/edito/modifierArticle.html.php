<div class="alert alert-danger">
    <?php //echo $erreur; ?>
</div>
<?php //endif; ?>

<?php //if (isset($success)): ?>
<div class="alert-success">
    <?php //echo $success; ?>
</div>
<?php //endif; ?>

<form method="POST" action="?page=adminAction">
<div class="form-group"

    <label for="id">id :</label>
    <input type="number" class="form-control" name="id" id="id" value= "<?php echo $article['id'];?>" >

    <label for="titre">titre</label>
    <input type="text" class="form-control" name="titre" id="titre" value= "<?php echo $article['titre'];?>">

    <label for="contenu">contenu</label>
    <input type="text" class="form-control" name="contenu" id="contenu">

    <label for="statut">statut</label>
    <input type="text" class="form-control" name="statut" id="statut">

    <label for="type">type</label>
    <input type="text" class="form-control" name="type" id="type">

</div>

        <button type="submit" class=" btn btn-primary" name="modEdito">Valider</button>

</form>

