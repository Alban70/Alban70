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




<form method="POST">
    <div class="form-group"

    <label for="id">id :</label>
    <input type="number" class="form-control" name="fam_id" id="fam_id" value= "<?php echo $famille_edit->getFamId(); ?>" >

    <label for="libelle">libelle</label>
    <input type="text" class="form-control" name="libelle" id="libelle" value= "<?php echo $famille_edit->getLibelle(); ?>" >

    <label for="actif">actif</label>
    <input type="text" class="form-control" name="actif" id="actif" value= "<?php echo $famille_edit->getActif(); ?>" >

    <label for="type">type</label>
    <input type="text" class="form-control" name="type" id="type" value= "<?php echo $famille_edit->getType(); ?>" >

    <label for="statut">statut</label>
    <input type="text" class="form-control" name="statut" id="statut" value= "<?php echo $famille_edit->getStatut(); ?>" >

    </div>

    <!--<button type="submit" class=" btn btn-primary" name="update">Modifier</button>-->
    <button type="submit" class = "btn btn-primary" name="modifier" formaction ="<?php echo \Lib\Application::$racine ?>theme_adminPo/web/famille/modify">Modifier</button>

</form>











