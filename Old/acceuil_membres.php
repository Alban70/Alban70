<section class="content3">


    <section class="view" id="cm_vente">
        <div class="content_main">
            <div class="content_titre_gray">
                <p class="txt_titre_black_left_margin">Well-Com Solution</p>
            </div>
            <div class="content_slogan_blue">
                <p class="txt_slogan_blue"><strong>Commande en cours</strong></p>
            <!--</div>
            <div class="content_txt">
                <p class="txt_societe">Spécialisée dans le développement d'un gestionnaire d'application, Well-Com Solution propose aux équipes commerciales, marketing ou encore au service client une plateforme informatique permettant de créer et gérer une grande diversité d'applications spécifiques ou non.</p>
            </div>

        </div>
        <div class="imag_vente">
            <img src=".\uploads\Logo-Well-Com-Couleur.svg" class="imag_vente" alt="logo">
        </div>-->
    </section>


        <div class="membre">

            <form method="post" action="?action=modifier">

                <fieldset>
                    <legend>Vos coordonnées</legend> <!-- Titre du fieldset -->

                    <label for="societe">Société :</label>
                    <input type="text" name="societe" id="societe" value= "plastivel france" />

                    <label for="adresse1">Adresse :</label>

                    <input type="text" name="adresse1" id="adresse1" value= "rue du parc" />

                    <label for="cp">Code postal:</label>
                    <input type="text" name="cp" id="cp" value= "83000" />

                    <label for="ville">Ville :</label>
                    <input type="text" name="ville" id="ville" value= "toulon" /></br>



                    <label for="nom">Nom :</label>
                    <input type="text" name="nom" id="nom" value= "gester" >

                    <label for="prenom">Prénom :</label>
                    <input type="text" name="prenom" id="prenom" value= "alban" >

                    <label for="email">E-mail :</label>
                    <input type="email" name="email" id="email" value= "alban.gester@gmail.com" >

                    <label for="login">Login :</label>
                    <input type="text" name="login" id="login" value= "alban" >

                    <label for="pass">Password :</label>
                    <input type="password" name="pwd" id="pwd" value= "$2y$10$gSctX0IN7AWEzNOrh/lTRuWY.zm4bTZIYgM1Ne9xmo7Yt9ZrXflAW" >

                    <!--<label for="pays">Pays :</label>
                    <input type="text" name="pays" id="pays" value= ""/> </br>

                    <label for="profil">Profil ?</label>
                    <!--<input type="text" name="profil" onfocus="consultant();" id="profil" value=   />
                    <input type="text" name="profil"  id="profil" value= "" /> </br>-->

                    <input type="submit" name="ok" value="Modifier" >
                    <input type = 'button' name = 'supprimer' value = "Supprimer" onclick = "document.location.href = 'sup_membre.php'">
                </fieldset>
            </form>
    </div>
    <div class="membre">
        <form method="post" action="">
            <p>Panier</p>
        <label for="libelle">libelle</label>
        <input type="text"  name="libelle" id="libelle" value= Test gratuit >


        <label for="type">type</label>
        <input type="text"  name="type" id="type" Test gratuit >

        <label for="statut">statut</label>
        <input type="text"  name="statut" id="statut" >



        <button type="submit" class=" btn btn-primary" name="OK">Valider la creation</button><br/>

    </form>


    <input type="hidden" id="valeur_id" name="valeur_id" value="">
    <a href="?page=article&action=ajouterArticle"><button class = "btn btn-primary" name="Ajouter">Ajouter</button></a>
    <a href="?page=marketing&action=index"><button class = "btn btn-primary" name="Modifier">Modifier</button></a>
    <a href="?action=supprimer"><button class = "btn btn-primary" name="supprimer" value = "Supprimer" >Supprimer</button></a><hr>
    <br>
    <table id="tableau" class="table table-sm table-dark table-hover" weight="400px">
        <tr>

            <th>N°</th>
            <th>Libellé</th>
            <th>Sélection</th>
        </tr>


        <tr><td> id='id0'>1</td><td>test gratuit 15 jours</td><td><input type='checkbox' id='suppr' //.(string)//0. ;'  /></td></tr>    </table>


</section>

<!--<script src="./theme_membres/js/coursM.js"></script>-->