<section class="content3">
    <section class="content3">
        <div class="view2" id="cm_vente">
            <div class="content_vente">
                <div class="content_titre_gray">
                    <p class="txt_titre_black_left_margin">Restons en contact</p>
                </div>
                <!--<div class="content_slogan_blue">
                    <p class="txt_slogan_blue"><strong>Nous sommes à votre écoute</strong></p>
                </div>-->
                <div class="content4">
                    <p class="txt_slogan">Nous sommes à votre écoute, Vous avez des questions à propos de Well-Com Solutions ? ou souhaitez une démonstration personnalisée ? Notre équipe est prête à répondre à toutes vos questions.</p>
                </div>

            </div>

            <div class="content_vente">
                <div class="imag_vente">
                    <img src="<?php echo RACINE; ?>\uploads\Logo-Well-Com-Couleur.svg" alt="logo">
                </div>
            </div>
        </div>
    </section>


    <div style="text-align:center;display:block;width:100%;max-width:600px;margin-left:auto;margin-right:auto">
        <h1>Connexion</h1>

        <?php if ($message): ?>
            <div>
                <?php echo $message; ?>
            </div>
        <?php endif; ?>
        <form method="post" id="formulaire" name="formulaire">
            <p>bonjour</p>

            <legend>Vos coordonnées</legend> <!-- Titre du fieldset -->
            <input type="hidden" name="token" value="<?php echo $token; ?>" />
            <div class="form">
            <input type="text" name="login" id="login" placeholder="Login*" /><br/>
            </div>

                <div class="form">
            <input type="password" name="pwd" id="pwd" placeholder="Password*" />
                </div><br/>

            <button type="submit" class=" btn btn-primary" name="OK">Valider</button>
            <!--<button type="submit" class=" btn btn-primary" name="OK2">S'inscrire</button>-->

        </form>
        <div class="form">
        <a class="register-link" href="?page=register">Pas encore inscrit ? Inscrivez-vous</a>
        </div>
    </div>
    <!--<section class="content_contact">
        <form action="" method="post">

            <div class="form">
                <input type="text" name="nom" placeholder="Nom*" />
            </div>

            <div class="form">
                <input type="email" name="email" placeholder="Email*" />
            </div></br>

            <div class="form">
                <input type="text" name="ste" placeholder="Entreprise*" />
            </div>

            <div class="form">
                <input type="text" name="tel" placeholder="Téléphone*" />
            </div></br>

            <div class="form">
                    <textarea type="text" placeholder="Commentaires">
                    </textarea>
            </div>

            <div class="form">
                <button type="submit" class=" btn btn-primary" name="ValTarifs">Valider</button>
            </div>

        </form>

    </section>-->
</section>

