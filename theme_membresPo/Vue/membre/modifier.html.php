<section class="content3"
<form method="POST">

    <input type="number" name="soc_id" id="soc_id" value= "<?php echo $contact->getSocId();?>" />
    <!--<input type="number" name="Contact_id" id="Contact_id" value= "<?php //echo $auteur->getContactId();?>" >
    <input type="number" name="coord_id" id="coord_id" value= "<?php //echo $coordonnees->getCoordId();?>" >
    <input type="number" name="id" id="id" value= "<?php //echo $auteur->getId();?>" >-->


    <!--<div class="form">
        <label for="rs">Société :</label>
        <input type="text" name="rs" id="rs" value= "<?php //echo $membre->getNom();?>" >
    </div>-->
        <div class="form">
            <label>Adresse :</label>
        </div>
    <div class="form">
        <input type="text" name="adresse1" id="adresse1" value= "<?php echo $membre->getAdresse1();?>" >
    </div></br>
        <div class="form">
            <label>cp :</label>
        </div>
    <div class="form">
        <input type="text" name="cp" id="cp" value= "<?php echo $membre->getCp();?>" >
    </div>
        <div class="form">
            <label>Ville :</label>
        </div>
    <div class="form">
        <input type="text" name="ville" id="ville" value= "<?php echo $membre->getVille();?>" >
    </div></br>



        <!--<div class="form">
            <label>Nom :</label>
        </div>
        <div class="form">
            <input type="text" name="nom" id="nom" value= "<?php //echo $contact->getNom();?>" >
        </div>
        <div class="form">
            <label>Prénom :</label>
        </div>
        <div class="form">
            <input type="text" name="prenom" id="prenom" value= "<?php //echo $contact->getPrenom();?>" >
        </div>
        <div class="form">
            <label>Login :</label>
        </div>
        <div class="form">
            <input type="text" name="login" id="login" value= "<?php //echo $auteur->getLogin();?>" >
        </div>
        <div class="form">
            <label>Password :</label>
        </div>
        <div class="form">
            <input type="text" name="pwd" id="pwd" value= "<?php //echo $auteur->getPass();?>" >
        </div>
        <div class="form">
            <label>Tél :</label>
        </div>
        <div class="form">
            <input type="text" name="tel" id="tel" value= "<?php //echo $coordonnees->getTel();?>" >
        </div>
        <div class="form">
            <label>Email :</label>
        </div>
        <div class="form">
            <input type="text" name="email" id="email" value= "<?php //echo $coordonnees->getEmail();?>" >
        </div>-->


    <button type="submit" class = "btn btn-primary" name="modify" formaction ="<?php echo \Lib\Application::$racine ?>theme_membresPo/web/membre/modifier">Modifier</button>

    <!--<button type="submit" class = "btn btn-primary" name="ModifSte">Modifier votre profil</button>-->
</form>
</section>










