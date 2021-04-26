<section class="content3" style="margin-top: 30px">
<div class="content_slogan_blue">
    <p class="txt_slogan_blue"><strong>Nouvelle Action</strong></p>
</div>
    <div class="myFooter" style="width: auto;padding: 0 30px;">
        <div class="content_footer" id="cm_vente">
            <div class="content_contact">
                <form method="POST" enctype="multipart/form-data" action="?page=adminAction">


    <input type="hidden" name="idSte" id="idSte" value= "<?php echo $societe['soc_id'];?>" />
    <input type="hidden" name="idContact" id="idContact" value= "<?php echo $contact['contact_id'];?>" >
    <input type="hidden" name="idCoord" id="idCoord" value= "<?php echo $coordonnees['coord_id'];?>" >
    <input type="hidden" name="idMembre" id="idMembre" value= "<?php //echo $membre['id'];?>" >


    <!--<div class="form">
        <label for="rs">Société :</label>
        <input type="text" name="rs" id="rs" value= "<?php echo $societe['nom'];?>" >
    </div>-->
    <div class="form">
        <p>Profil :</p>
    </div>
    <div class="form">
        <?php echo $contact['nom'];?>
    </div>
    <div class="form">
        <p>Prénom :</p>
    </div>
    <div class="form">
        <?php echo $contact['prenom'];?>
    </div></br>

    <div class="form">
        <p>Tél :</p>
    </div>
    <div class="form">
        <?php echo $coordonnees['tel'];?>
    </div>
    <div class="form">
        <p>Email :</p>
    </div>
    <div class="form">
        <?php echo $coordonnees['email'];?>
    </div></br>
    <div class="form">
        <p>Adresse :</p>
    </div>
    <div class="form">
        <?php echo $societe['adresse1'];?>
    </div></br>
        <div class="form">
            <p>cp :</p>
        </div>
    <div class="form">
        <?php echo $societe['cp'];?>
    </div>
        <div class="form">
            <p>Ville :</p>
        </div>
    <div class="form">
        <?php echo $societe['ville'];?>
    </div></br>

                    <div class="form">
                        <label>Libellé :</label>
                    </div>
                    <div class="form">
                        <input type="text" name="libelle" id="libelle">
                    </div>
                    <div class="form">
                        <label>Désignation :</label>
                    </div>
                    <div class="form">
                        <input type="text" name="designation" id="designation">
                    </div></br>
                    <div class="form">
                        <label>Type :</label>
                    </div>
                    <div class="form">
                        <input type="text" name="type" id="type" value= "Contact">
                    </div>
                    <div class="form">
                        <label>Statut :</label>
                    </div>
                    <div class="form">
                        <input type="text" name="statut" id="statut" value= "Encours">
                    </div></br>

    <button class = "btn btn-primary" name="ValAction">Valider</button>

</form>
            </div>
        </div>
    </div>
</section>










