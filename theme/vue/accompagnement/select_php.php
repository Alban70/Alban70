<div class="content4" style="width: 100%; height: auto; background-color: lightgray;">
    <div class="content_contact">
        <form method="POST" enctype="multipart/form-data" action="?page=adminAction">

            <div class="form">
                <label> catégories : </label> <select class="form-control form-control-sm" name="famille">
                    <option value="0">Sélectionnez...</option>
                    <?php foreach ($familles as $famille): ?>
                        <option value="<?php echo $famille['fam_id']; ?>"
                                selected><?php echo $famille['libelle']; ?></option>
                    <?php endforeach; ?>

                </select>
            </div>
            <br>

            <div class="form">
                <button type="submit" class=" btn btn-primary" name="addArticle">Rechercher</button>
            </div>

        </form>
    </div>
</div>