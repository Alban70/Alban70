<section class="content3">
    <div class="view2" id="cm_vente">
        <div class="content_vente">
            <div class="content_titre_gray">
                <p class="txt_titre_black_left_margin">Découvrez notre gamme ?</p>
            </div>
            <!--<div class="content_slogan_blue">
                <p class="txt_slogan_blue"><strong>Nous sommes à votre écoute</strong></p>
            </div>-->
            <div class="content4">
                <p class="txt_slogan">Well-Com solution vous propose son logiciel CRM décliné sous forme de module selon vos besoins fonctionnels,  Testez et découvrez librement la richesse notre gamme. N'hésitez pas à contacter notre service client au 04 55 66 88 99. Nos conseillers sauront vous accompagner dans l'éxpressions de vos besoins</p>
            </div>

        </div>

        <div class="content_vente">
            <div class="imag_vente">
                <img src="<?php echo RACINE; ?>\uploads\Logo-Well-Com-Couleur.svg" alt="logo">
            </div>
        </div>
    </div>

    <!--<section class="view" id="cm_vente">
        <form method="post" action="?page=commandeLigne">

                <label for="soc_id">Société N°</label>
                <input type="number"  name="soc_id" id="soc_id" value= "<?php //echo $commande['soc_id'];?>" >

                <label for="com_id">Commande N°</label>
                <input type="number" id="com_id" name="com_id" value= "<?php //echo $commande['com_id'];?>" >

                <!--<label for="valeur_id">Article N°</label>
                <input type="number" id="valeur_id" name="valeur_id" >


               <button type="submit" class = "btn btn-primary" name="addComL">Ajouter</button>

        </form>
    </section>-->



    <section class="menu_fonct3">

        <div class="content_titre_blue">
            <div class="content4">
            <p class="txt_titre_white_centre">TARIFS</p>
        </div>
            <div class="content4">
            <p class="txt_withe_centre">Choisissez les modules en fonction des besoins pour chacun de vos collaborateurs.</p>
        </div>
        </div>
        <?php

        $i=1;
        foreach($articles as $i => $article):

        ?>
        <div class="content_footer">
            <form method="post" action="?page=commandeLigne">
                <div class="content4" >
                <ul class="cta-tarifs" style="background-color: white" >



                       <li class= 'fonct_tarifs'>
                            <div class="content4" style="background-color: #ffc107">
                                <div class="imag_bandeau">
                                    <img src="<?php echo RACINE; ?>\images\icon\sign-icon.png" alt="logo">
                                </div>

                                <div class="fonction_tarif">
                                    <input type="hidden"  name="soc_id" id="soc_id" value= "<?php echo $commande['soc_id'];?>" >
                                    <input type="hidden" id="com_id" name="com_id" value= "<?php echo $commande['com_id'];?>" >

                                    <input type="hidden" name="article_id" id="article_id" value="<?php echo $article['article_id'] ?>" >
                                    <a href="HomePageCRMv2.html" class="txt_lien_white"
                                       ;><?php echo $article['libelle'] ?></a><br>

                                    <span style="color: white"><?php echo $article['prixHT'] ?>€HT\Mois</span>
                                </div>
                            </div>
                            <div class="content4" style="background-color: lightgray;">

                            <div class="content_cm">
                                <ul class ="ul_center_sm">
                                    <li class="txt_tarif">Gestion &amp; Suivi d’affaires</li>
                                    <li class="txt_tarif">Pilotage des Objectifs commerciaux</li>
                                    <li class="txt_tarif">Automatisation des processus spécifiques</li>
                                    <li class="txt_tarif">Géolocalisation</li>
                                    <li class="txt_tarif">Partage de documents</li>
                                    <li class="txt_tarif">Reporting commercial</li>
                                </ul>
                            </div>

                            <div class="content4" id="cal">
                                <div class="content_center" style="background-color: #4A89DC">
                                    <div class="content_padding_top_button">


                                        <button class="btn btn-primary" name="addComL" onclick="articleL();"
                                                style="background-color: #ffc107; !important;">Choisissez ce produit
                                        </button>
                                    </div>
                                </div>
                            </div>


                        </li>

                </ul>
                </div>
            </form>
        </div>
        <?php
        endforeach;

        ?>
    </section>

