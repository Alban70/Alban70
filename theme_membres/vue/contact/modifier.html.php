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

<div class="content_main">
    <form method="POST" action="?page=membreAction">
        <!--<div class="membre">-->
        <fieldset>
            <legend>Votre profil</legend> <!-- Titre du fieldset -->

            <label for="id">id :</label>
            <input type="number" class="form-control" name="id" id="id" value= "<?php echo $contact['contact_id'];?>" >

            <div class="form_civilite">
                <label for="civilite">Civilité :</label>
                <input type="radio" value="homme" id="male" name="genre"> <label for="male">M</label>
                <input type="radio" value="femme" id="female" name="genre"> <label for="female">Mme</label>
            </div>


            <div class="form">
                <label for="nom">Nom :</label>
                <input type="text" name="nom" id="nom" value= "<?php echo $contact['nom'];?>" >
            </div>

            <div class="form">
                <label for="prenom">Prénom :</label>
                <input type="text" name="prenom" id="prenom" value= "<?php echo $contact['prenom'];?>" >
            </div>

            <div class="form">
                <label for="email">E-mail :</label>
                <input type="email" name="email" id="email" value= "<?php echo $coordonnees['email'];?>" >
            </div>

            <div class="form">
                <label for="tel">tél :</label>
                <input type="tel" name="tel" id="tel" value= "<?php echo $coordonnees['tel'];?>" >
            </div>

            <!--<div class="form">
                    <label for="login">Login :</label>
                    <input type="text" name="login" id="login" value= "<?php echo $membre['login'];?>" >
                                    </div>-->

            <div class="form">
                <label for="pass">Password :</label>
                <input type="password" name="pwd" id="pwd" value= "<?php echo $membre['pwd'];?>" >
            </div>

            <!--<label for="pays">Pays :</label>
            <input type="text" name="pays" id="pays" value= ""/> </br>

            <label for="profil">Profil ?</label>
            <!--<input type="text" name="profil" onfocus="consultant();" id="profil" value=   />
            <input type="text" name="profil"  id="profil" value= "" /> </br>-->

        </fieldset>
        <!--</div>-->
        <button type="submit" class=" btn btn-primary" name="modifContact">Modifier</button>

        <!--<input type="submit" name="ok" value="Modifier" >
        <input type = 'button' name = 'supprimer' value = "Supprimer" onclick = "document.location.href = 'sup_membre.php'">-->
    </form>
</div>











