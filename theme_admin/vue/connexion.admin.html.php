
<section class="content3">


    <section class="view" id="cm_vente">
        <div class="content_main">
            <div class="content_titre_gray">
                <p class="txt_titre_black_left_margin">Well-Com Solution</p>
            </div>
            <div class="content_slogan_blue">
                <p class="txt_slogan_blue"><strong>Faites confiance à des spécialistes</strong></p>
            </div>
            <div class="content_txt">
                <p class="txt_societe">Spécialisée dans le développement d'un gestionnaire d'application, Well-Com Solution propose aux équipes commerciales, marketing ou encore au service client une plateforme informatique permettant de créer et gérer une grande diversité d'applications spécifiques ou non.</p>
            </div>

        </div>
        <div class="imag_vente">
            <img src=".\uploads\Logo-Well-Com-Couleur.svg" class="imag_vente" alt="logo">
        </div>
    </section>


    <div style="text-align:center;display:block;width:100%;max-width:600px;margin-left:auto;margin-right:auto">
        <h1>Connexion</h1>

        <?php if ($erreur): ?>
            <div>
                <?php echo $erreur;     var_dump($user); ?>
            </div>
        <?php endif; ?>
        <form method="post" id="formulaire" name="formulaire">
            <p>bonjour</p>
            <!--<fieldset>-->
            <legend>Vos coordonnées</legend> <!-- Titre du fieldset -->
            <input type="hidden" name="token" value="<?php echo $token; ?>" />
            <label for="login">Login :</label>
            <input type="text" name="login" id="login" />
            <label for="pwd">Password :</label>
            <input type="password" name="pwd" id="pwd"  /><br/>
            <button name="submit" id="submit">Valider</button>

        </form>
        <p> <a href="mPcreat_membre.php" class="myButton_crm">s'inscrire</a></p>
        <!--</fieldset>-->
    </div>
</section>

