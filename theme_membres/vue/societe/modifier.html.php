<section class="content3" style="margin-top: 30px">
<div class="content_slogan_blue">
    <p class="txt_slogan_blue"><strong>Prospect</strong></p>
</div>
    <div class="myFooter" style="width: auto;padding: 0 30px;">
        <div class="content_footer" id="cm_vente">
            <div class="content_contact">
<form method="POST" action="?page=membreAction">


    <input type="hidden" name="idSte" id="idSte" value= "<?php echo $societe['soc_id'];?>" />
    <input type="hidden" name="idContact" id="idContact" value= "<?php echo $contact['contact_id'];?>" >
    <input type="hidden" name="idCoord" id="idCoord" value= "<?php echo $coordonnees['coord_id'];?>" >
    <input type="hidden" name="idMembre" id="idMembre" value= "<?php echo $membre['id'];?>" >


    <!--<div class="form">
        <label for="rs">Société :</label>
        <input type="text" name="rs" id="rs" value= "<?php echo $societe['nom'];?>" >
    </div>-->
    <div class="form">
        <label>Nom :</label>
    </div>
    <div class="form">
        <input type="text" name="nom" id="nom" value= "<?php echo $contact['nom'];?>" >
    </div>
    <div class="form">
        <label>Prénom :</label>
    </div>
    <div class="form">
        <input type="text" name="prenom" id="prenom" value= "<?php echo $contact['prenom'];?>" >
    </div></br>

    <div class="form">
        <label>Tél :</label>
    </div>
    <div class="form">
        <input type="text" name="tel" id="tel" value= "<?php echo $coordonnees['tel'];?>" >
    </div>
    <div class="form">
        <label>Email :</label>
    </div>
    <div class="form">
        <input type="text" name="email" id="email" value= "<?php echo $coordonnees['email'];?>" >
    </div></br>
    <div class="form">
        <label>Adresse :</label>
    </div>
    <div class="form">
        <input style="width: 590px; !important;" type="text" name="adresse1" id="adresse1" value= "<?php echo $societe['adresse1'];?>" >
    </div></br>
        <div class="form">
            <label>cp :</label>
        </div>
    <div class="form">
        <input type="text" name="cp" id="cp" value= "<?php echo $societe['cp'];?>" >
    </div>
        <div class="form">
            <label>Ville :</label>
        </div>
    <div class="form">
        <input type="text" name="ville" id="ville" value= "<?php echo $societe['ville'];?>" >
    </div></br>

        <!--<div class="form">
            <label>Login :</label>
        </div>
        <div class="form">
            <input type="text" name="login" id="login" value= "<?php //echo $membre['login'];?>" >
        </div>
        <div class="form">
            <label>Password :</label>
        </div>
        <div class="form">
            <input type="text" name="pwd" id="pwd" value= "<?php //echo $membre['pwd'];?>" >
        </div>-->



    <button class = "btn btn-primary" name="modifProfil">Valider</button>

</form>
            </div>
        </div>
    </div>
</section>










