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

            <section class="view" id="cm_vente">

                    <div class="content_main">

                        <form method="post" action="?action=modifier">
                            <!--<div class="membre">-->
                <fieldset>
                    <legend>Vos coordonnées</legend> <!-- Titre du fieldset -->
                    <div class="form">
                    <label for="societe">Société :</label>
                    <input type="text" name="societe" id="societe" value= "plastivel france" />
                    </div><br/>

                    <div class="form">
                    <!--<label for="adresse1">Adresse :</label>
                    <input type="text" name="adresse1" id="adresse1" value= "rue du parc" />
                    </div>-->
                        <label>Adresse :</label>
                        <textarea name="adresse" placeholder="Commentaires">
                    </textarea>
                    </div>

                        <br/>
                    <div class="form">
                    <label for="cp">Cp:</label>
                    <input type="text" name="cp" id="cp" value= "83000" />
                    </div>
                    <div class="form">
                    <label for="ville">Ville :</label>
                    <input type="text" name="ville" id="ville" value= "toulon" /></br>
                    </div><br/>
                </fieldset>
                <!--</div>-->
                    <a href="?page=marketing&action=index"><button class = "btn btn-primary" name="Modifier">Modifier</button></a>
                    <a href="?action=supprimer"><button class = "btn btn-primary" name="supprimer" value = "Supprimer" >Supprimer</button></a><hr>
                        </form>
                    </div>


                <div class="content_main">
                <form method="post" action="?action=modifier">
                    <!--<div class="membre">-->
                        <fieldset>
                            <legend>Votre profil</legend> <!-- Titre du fieldset -->

                            <div class="form_civilite">
                    <label for="civilite">Civilité :</label>
                    <input type="radio" value="homme" id="male"> <label for="male">M</label>
                    <input type="radio" value="femme" id="female"> <label for="female">Mme</label>
                            </div>


                        <div class="form">
                    <label for="nom">Nom :</label>
                    <input type="text" name="nom" id="nom" value= "gester" >
                        </div>

                            <div class="form">
                    <label for="prenom">Prénom :</label>
                    <input type="text" name="prenom" id="prenom" value= "alban" >
                            </div>

                                <div class="form">
                    <label for="email">E-mail :</label>
                    <input type="email" name="email" id="email" value= "alban.gester@gmail.com" >
                                </div>

                                    <!--<div class="form">
                    <label for="login">Login :</label>
                    <input type="text" name="login" id="login" value= "alban" >
                                    </div>-->

                                        <div class="form">
                    <label for="pass">Password :</label>
                    <input type="password" name="pwd" id="pwd" value= "$2y$10$gSctX0IN7AWEzNOrh/lTRuWY.zm4bTZIYgM1Ne9xmo7Yt9ZrXflAW" >
                                        </div>

                    <!--<label for="pays">Pays :</label>
                    <input type="text" name="pays" id="pays" value= ""/> </br>

                    <label for="profil">Profil ?</label>
                    <!--<input type="text" name="profil" onfocus="consultant();" id="profil" value=   />
                    <input type="text" name="profil"  id="profil" value= "" /> </br>-->

                    </fieldset>
                    <!--</div>-->
<a href="?page=marketing&action=index"><button class = "btn btn-primary" name="Modifier">Modifier</button></a>
<a href="?action=supprimer"><button class = "btn btn-primary" name="supprimer" value = "Supprimer" >Supprimer</button></a><hr>

                    <!--<input type="submit" name="ok" value="Modifier" >
                    <input type = 'button' name = 'supprimer' value = "Supprimer" onclick = "document.location.href = 'sup_membre.php'">-->
            </form>
                </div>
</section>

    <section class="view" id="cm_vente">
        <form method="post" action="">

            <fieldset>
                <legend>Panier</legend> <!-- Titre du fieldset -->

        <label for="libelle">libelle</label>
        <input type="text"  name="libelle" id="libelle" value= Test gratuit >


        <label for="type">type</label>
        <input type="text"  name="type" id="type" Test gratuit >

        <label for="statut">statut</label>
        <input type="text"  name="statut" id="statut" >
            </fieldset>

            <input type="hidden" id="valeur_id" name="valeur_id" value="">
            <a href="?page=article&action=ajouterArticle"><button class = "btn btn-primary" name="Ajouter">Ajouter</button></a>
            <a href="?page=marketing&action=index"><button class = "btn btn-primary" name="Modifier">Modifier</button></a>
            <a href="?action=supprimer"><button class = "btn btn-primary" name="supprimer" value = "Supprimer" >Supprimer</button></a><hr>
            <br>

    </form>
    </section>



    <table id="tableau" class="table table-sm table-dark table-hover" weight="400px">
        <tr>
            <th>N°</th>
            <th>Libellé</th>
            <th>date</th>
            <th>Sel</th>
        </tr>

        <br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined variable: commandes in C:\xampp\htdocs\wcMVCp\theme_membres\vue\acceuil_membres.html.php on line <i>156</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0089</td><td bgcolor='#eeeeec' align='right'>358896</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='C:\xampp\htdocs\wcMVCp\membres.php' bgcolor='#eeeeec'>...\membres.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0718</td><td bgcolor='#eeeeec' align='right'>426384</td><td bgcolor='#eeeeec'>include( <font color='#00bb00'>'C:\xampp\htdocs\wcMVCp\inc\acceuil_membres.php'</font> )</td><td title='C:\xampp\htdocs\wcMVCp\membres.php' bgcolor='#eeeeec'>...\membres.php<b>:</b>62</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0718</td><td bgcolor='#eeeeec' align='right'>442816</td><td bgcolor='#eeeeec'>indexAction(  )</td><td title='C:\xampp\htdocs\wcMVCp\inc\acceuil_membres.php' bgcolor='#eeeeec'>...\acceuil_membres.php<b>:</b>9</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0888</td><td bgcolor='#eeeeec' align='right'>485840</td><td bgcolor='#eeeeec'>include( <font color='#00bb00'>'C:\xampp\htdocs\wcMVCp\theme_membres\vue\acceuil_membres.html.php'</font> )</td><td title='C:\xampp\htdocs\wcMVCp\inc\acceuil_membres.php' bgcolor='#eeeeec'>...\acceuil_membres.php<b>:</b>112</td></tr>
</table></font>
<br />
<font size='1'><table class='xdebug-error xe-warning' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Warning: Invalid argument supplied for foreach() in C:\xampp\htdocs\wcMVCp\theme_membres\vue\acceuil_membres.html.php on line <i>156</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0089</td><td bgcolor='#eeeeec' align='right'>358896</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='C:\xampp\htdocs\wcMVCp\membres.php' bgcolor='#eeeeec'>...\membres.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0718</td><td bgcolor='#eeeeec' align='right'>426384</td><td bgcolor='#eeeeec'>include( <font color='#00bb00'>'C:\xampp\htdocs\wcMVCp\inc\acceuil_membres.php'</font> )</td><td title='C:\xampp\htdocs\wcMVCp\membres.php' bgcolor='#eeeeec'>...\membres.php<b>:</b>62</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0718</td><td bgcolor='#eeeeec' align='right'>442816</td><td bgcolor='#eeeeec'>indexAction(  )</td><td title='C:\xampp\htdocs\wcMVCp\inc\acceuil_membres.php' bgcolor='#eeeeec'>...\acceuil_membres.php<b>:</b>9</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0888</td><td bgcolor='#eeeeec' align='right'>485840</td><td bgcolor='#eeeeec'>include( <font color='#00bb00'>'C:\xampp\htdocs\wcMVCp\theme_membres\vue\acceuil_membres.html.php'</font> )</td><td title='C:\xampp\htdocs\wcMVCp\inc\acceuil_membres.php' bgcolor='#eeeeec'>...\acceuil_membres.php<b>:</b>112</td></tr>
</table></font>






        <tr id='id0'><td id='id0'>1</td><td >test gratuit 15 jours</td><td><input type='checkbox' id='suppr0' onclick='numeroLigne();' /></td></tr>
    </table>





</section>

<!--<script src="./theme_membres/js/coursM.js"></script>-->