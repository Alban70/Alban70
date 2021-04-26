<div class="content4" style="width: 100%; height: auto; background-color: lightgray;">
    <div class="content_contact">
        <form method="POST" enctype="multipart/form-data" action="">

            <div class="form">
            <label for="pays">Choisisser le jeu ---- > </label><br />
            <select name="Jeux" id="Jeux">
                <option value="Wow">  <a href="<?php echo RACINE; ?>accompagnement/index">Installation</a> </option>
                <option value="Gta Sa"> <a href="<?php echo RACINE; ?>accompagnement/deploiement" class="txt_lien_blue">Déploiement</a></option>
                <option value="Gta Vcity"><a href="Accueil.html">Gta Vice City</a></option>
                <option value="Gta LC stories">Gta liberty city stories</option>
                <option value="Gta VC stories">Gta Vice City Stories</option>
                <option value="Gta III">Gta III</option>
                <option value="Gta IV">Gta IV</option>
                <option value="Gta Chinatow W">Gta Chinatown Wars</option>
            </select>
            </div>


            <div class="form">
                <button type="submit" class=" btn btn-primary" name="add">Rechercher</button>
            </div>

        </form>
    </div>
</div>