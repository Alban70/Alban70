<?php
//foreach($aricles as $key => $value)
//{
//echo "{$key} => {$value} ";
//}
?>
<section class="content4">
    <div class="view2" id="cm_vente">
        <div class="content_vente">
            <div class="content_titre_gray">
                <p class="txt_titre_black_left_margin">Essai gratuit 15 jours</p>
            </div>
            <div class="content_slogan_blue">
                <p class="txt_slogan_blue"><strong>Faites confiance à des spécialistes</strong></p>
            </div>
            <div class="content4">
                <p class="txt_slogan">Veuillez vous identifier afin de valider votre demande de test gratuit.</p>
            </div>

        </div>
        <div class="content_vente">
            <div class="imag_vente" style="margin-top: 60px">
                <img src="<?php echo RACINE; ?>\uploads\Logo-Well-Com-Couleur.svg" alt="logo">
            </div>
        </div>
    </div>
    <?php if ($message): ?>
        <div>
            <?php echo $message; ?>
        </div>
    <?php endif; ?>
    <section class="content_contact">
        <form method="post" id="register" name="register">

            <div class="form">
            <input type="text" name="ste" id="ste" placeholder="Entreprise*" />
            </div>

            <div class="form">
            <input type="text" name="tel" id="tel" placeholder="Téléphone*" /></br>
            </div></br>

                <div class="form">
            <input type="text" name="nom" id="nom" placeholder="Nom*" />
                </div>

                    <div class="form">
            <input type="text" name="prenom" id="prenom" placeholder="Prénom*" /></br>
                    </div></br>

                        <div class="form">
            <input type="email" name="email" id="email" placeholder="Email*" />
                        </div>
            <div class="form">
            <input type="text" name="loginNew" id="loginNew" placeholder="Login*" />
            </div></br>
                            <div class="form">
            <input type="password" name="pwd" id="pwd" placeholder="Password*" />
                            </div></br>

            <div class="content4">
            <button type="submit" class=" btn btn-primary" name="OK">Valider</button>
            </div>

        </form>

    </section>
</section>

