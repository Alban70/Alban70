<section class="content4">


    <section class="view" id="cm_vente">
        <div class="content_main">
            <!--<div class="content_titre_gray">
                <p class="txt_titre_black_left_margin">Well-Com Solution</p>
            </div>-->
            <div class="content_slogan_blue">
                <p class="txt_slogan_blue"><strong>Prospect</strong></p>
            </div>
    </section>

    <section id="logicielContacts" class="view2">

        <div class="content_vente">

            <form method="post" action="?page=client">
                <!--<div class="membre">-->
                <fieldset>
                    <legend>Coordonnées</legend> <!-- Titre du fieldset -->
                    <input type="hidden" name="idSte" id="idSte" value= "<?php echo $societe['soc_id'];?>" />
                    <!--<div class="form">
                        <p>Société :</p>
                    </div>
                    <div class="form">
                        <?php //echo $societe['nom'];?>
                    </div>-->

                    <input type="hidden" name="idContact" id="idContact" value= "<?php //echo $contact['contact_id'];?>" >

                    <div class="form">
                        <p>Profil :</p>
                    </div>

                    <div class="form">
                        <?php //echo $contact['nom'];?>
                        <?php echo $societe['nom'];?>
                    </div>
                    <div class="form">
                        <?php //echo $contact['prenom'];?>
                    </div></br>

                    <input type="hidden" name="idCoord" id="idCoord" value= "<?php echo $coordonnees['coord_id'];?>" >

                    <div class="form">
                        <p>Email :</p>
                    </div>
                    <div class="form">
                        <?php echo $coordonnees['email'];?>
                    </div>
                    <div class="form">
                        <p>Téléphone :</p>
                    </div>
                    <div class="form">
                        <?php echo $coordonnees['tel'];?>
                    </div></br>
                    <div class="form">
                        <p>Adresse :</p>
                    </div>
                    <div class="form" style="width: 250px; !important;">
                        <?php echo $societe['adresse1'];?>
                    </div><br/>
                    <div class="form">
                        <?php echo $societe['cp'];?>
                    </div>
                    <div class="form">
                        <?php echo $societe['ville'];?>
                    </div><br/>
                </fieldset>
                <!--</div>-->
                <button class = "btn btn-primary" name="ModifSte">Modifier votre profil</button>
                <button class = "btn btn-primary" name="supprimer" value = "Supprimer" >Supprimer</button><hr>
            </form>
        </div>

    </section>

    <section class="content4" id="cm_vente">
        <form method="post" action="?page=action">

            <!--<fieldset>


        <label for="libelle">libelle</label>
        <input type="text"  name="libelle" id="libelle" value= <?php //echo $commande['libelle'];?> >


        <label for="type">type</label>
        <input type="text"  name="type" id="type" <?php //echo $commande['libelle'];?> >

        <label for="statut">statut</label>
        <input type="text"  name="statut" id="statut" <?php //echo $commande['statut'];?>>
            </fieldset>-->
            <input type="hidden" name="idSte" id="idSte" value= "<?php echo $societe['soc_id'];?>" />
            <input type="number" id="valeur_id" name="valeur_id" >
            <!--<button class = "btn btn-primary" name="ajouter">Ajouter une commande</button>-->
            <button class = "btn btn-primary" name="ajouterAction">Ajouter une action</button>
            <button class = "btn btn-primary" name="Modifier">Modifier</button>
            <button class = "btn btn-primary" name="supprimer" value = "Supprimer" >Supprimer</button><hr><br>

        </form>
    </section>



    <table id="tableau" class="table table-sm table-dark table-hover" weight="400px">
        <tr>
            <th>N°</th>
            <th>Libellé</th>
            <th>date</th>
            <th>Sel</th>
        </tr>

        <?php

        $i=1;
        foreach($actions as $i => $action):

            //$i++;
            echo "<tr id='id".(string)$i."'>";
            echo "<td id='id".$i."'>".$action['action_id']."</td>";
            //echo "<td id='id".(string)$i."'>".$famille['comL_id']."</td>";
            //echo "<td>".$famille['fam_id']."</td>";
            echo "<td>".$action['libelle']."</td>";
            echo "<td>".$action['dateCreation']."</td>";
            echo "<td><input type='checkbox' id='suppr".(string)$i."' onclick='numeroLigne();' /></td>";
            echo"</tr>";

        endforeach;

        ?>



    </table>





</section>

<!--<script src="./theme_membres/js/coursM.js"></script>-->