<section class="content3">
    <div class="view2" id="cm_vente">
        <div class="content_vente">


            <div class="content_titre_blue">
                <div class="content4">
                    <p class="txt_titre_white_centre">PRODUIT</p>
                </div>
                <div class="content4">
                    <p class="txt_withe_centre">Vous avez sélectionné ce produit</p>
                </div>
            </div>
            <div class="content_footer">
                <form method="post" action="?page=commandeLigne">
                    <div class="content4">

                        <ul class="cta-tarifs" style="background-color: white">

                                <li class="fonct_tarifs">
                                    <div class="content4" style="background-color: #ffc107">
                                        <div class="imag_bandeau">
                                            <img src="<?php echo RACINE; ?>\images\icon\sign-icon.png" alt="logo">
                                        </div>

                                        <div class="fonction_tarif">
                                            <!--<input type="hidden"  name="soc_id" id="soc_id" value= "<?php //echo $commande['soc_id'];?>" >-->
                                            <input type="hidden" id="com_id" name="com_id" value= "<?php echo $commandeLigne['com_id'];?>" >
                                            <input type="number" id="id2" name="id2" value= "<?php echo $commandeLigne['comL_id'];?>" >
                                            <input type="number" id="valeur_id" name="valeur_id" value="<?php echo $article['article_id'];?>" ></br>

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
                                                    <button class="btn btn-primary" name="addComL"
                                                            style="background-color: #ffc107; !important;">Annuler
                                                    </button>
                                                </div>
                                            </div>
                                        </div>


                                </li>

                        </ul>


                    </div>

                </form>
            </div>



        </div>

        <div class="content_vente">

            <form method="post" action="?page=commandeLigneAction">

                    <label for="id2">Commande N°</label>
                    <input type="number"  name="id" id="id" value= "<?php echo $commandeLigne['com_id'];?>" >

                    <label for="id2">CommandeLigne N°</label>
                    <input type="number" id="id2" name="id2" value= "<?php echo $commandeLigne['comL_id'];?>" >

                    <label>Article N°</label>
                    <input type="number" id="valeur_id" name="valeur_id" value="<?php echo $article['article_id'];?>" ></br>

                    <a href="HomePageCRMv2.html" class="txt_lien_white" style="color: gray"
                       ;><?php echo $article['libelle'] ?></a><br>

                    <span style="color: gray"><?php echo $article['prixHT'] ?>€HT\Mois</span></br>




                    <div class="content4" id="cal">
                        <div class="content_center" style="background-color: #4A89DC">
                            <div class="fonct_txt_HP">
                                <p style="color: white;">Quantité :</p>
                            </div>
                            </br>
                            <div class="form">
                                <input type="number" name="qte" id="qte" value=""
                                       style="width: 90px; background-color: white; !important;"/>
                            </div>
                            <!--<div class="add">-->
                            <div class="content_contact">

                                <div class="addbt">
                                    <div id="dPlus" class="containerPlus">

                                        <div class="bars1"></div>
                                        <div class="bars2"></div>
                                        <div class="bars3"></div>

                                    </div>

                                </div>
                                <div class="addbt">

                                    <div id="dMoins" class="containerMoins">

                                        <div class="bars1"></div>
                                        <div class="bars2"></div>
                                        <div class="bars3"></div>

                                    </div>

                                </div>
                                <!--</ul>-->
                            </div>

                            <div class="content4">
                                <div class="fonct_txt_HP">
                                    <p style="color: white;">Total HT:</p>
                                </div>
                                </br>
                                <div class="form">
                                    <input type="decimal"  name="sTotalLigne" id="sTotalLigne" value=""
                                           style="width: 90px; background-color: white; !important;"/>
                                    <div class="form">
                                        <p style="color: white;">€</p>
                                    </div>
                                </div>

                            </div>
                            <div class="content_padding_top_button">
                                <button class = "btn btn-primary" name="ValCom" onclick="valideArticle();">Valider</button>
                            </div>
                        </div>
                    </div>
            </form>

        </div>

    </div>
</section>



