<?php
//foreach($aricles as $key => $value)
//{
//echo "{$key} => {$value} ";
//}
?>
<section class="content3">
    <div class="view2" id="cm_vente">
        <div class="content_vente">
            <div class="content_titre_gray">
                <p class="txt_titre_black_left_margin">Essai gratuit 15 jours</p>
            </div>
            <!--<div class="content_slogan_blue">
                <p class="txt_slogan_blue"><strong>Nous sommes à votre écoute</strong></p>
            </div>-->
            <div class="content4">
                <p class="txt_slogan">Testez librement Well-Com CRM, découvrez la richesse fonctionnelles de notre logiciel. N'hésitez pas à contacter notre service hotline 04 55 66 88 99. Nos formateurs vous assisteront et vous accompagneront dans l'écoute de vos besoins</p>
            </div>

        </div>

        <div class="content_vente">
            <div class="imag_vente">
                <img src="<?php echo RACINE; ?>\uploads\Logo-Well-Com-Couleur.svg" alt="logo">
            </div>
        </div>
    </div>

    <div class="content_titre_blue">

        <div class="content4">
            <p class="txt_withe_centre">Veuillez vous identifier afin de valider votre demande de test.</p>
        </div>
    </div>

    <section class="content_contact">

        <div class="form_contact">
        <form method="post" action="?page=testAction">

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
                <input type="text" name="login" id="login" placeholder="Login*" />
            </div></br>

                            <div class="form">
            <input type="password" name="pwd" id="pwd" placeholder="Password*" />
                            </div></br>

            <div class="content4">
            <button type="submit" class=" btn btn-primary" name="ValTest">Valider</button>
            </div>

        </form>
        </div>
    </section>
</section>

