    <section id="CM" class="content4">


                <div class="content_titre_gray" style="width: 50%">
                    <p class="txt_titre_black_left_margin">Gestion des Articles</p>
                </div>
        <form method="POST"  action="?page=edito">

            <label for="titre">titre</label>
            <input type="text" name="titre" id="titre" value= "<?php echo $article['titre'];?>">

            <label for="type">type</label>
            <input type="text" name="type" id="type" value= "<?php echo $article['type'];?>">

            <label for="statut">statut</label>
            <input type="text"  name="statut" id="statut" value= "<?php echo $article['statut'];?>">






            <input type="number" id="valeur_id" name="valeur_id" value="valeur_id">

            <button type="submit" class = "btn btn-primary" name="ajouter" >Ajouter</button>
            <button type="submit" class = "btn btn-primary" name="modifier" >Modifier</button>
            <button type="submit" class = "btn btn-primary" name="supprimer" >Supprimer</button><br/>

            <!--<button type="submit" class=" btn btn-primary" name="OK">Valider la creation</button>-->

        </form>


        <br>







        <?php
        $i=1;
        foreach($articles as $i => $article):
        ?>
            <!--<div class="content_contact">
                <div class="content4">
                    <header>
                        <h1>
                            <a href=""><?php //echo $article['titre']; ?></a>
                        </h1>
                    </header>
                </div>
                <div class="content4">
                    <div class="form">
                    <p>Catégories :</p>
                    </div>
                    <div class="form">
                        <a href=""><?php //echo $article['type']; ?></a>
                    </div>
                </div>
                <div class="content4">
                    <div class="reseau_social2" style="background-color: gray">
                        <ul>
                            <li class="google">
                                <a href="#"><img src="<?php //echo RACINE; ?>\images\icon\icon-social-twitter.png" alt"linkedin"></a>
                            </li>
                            <li class="google">
                                <a href="#"><img src="<?php //echo RACINE; ?>\images\icon\icon-social-linkedin.png" alt"linkedin"></a>
                            </li>
                            <li class="google">
                                <a href="#"><img src="<?php //echo RACINE; ?>\images\icon\icon-social-facebook.png" alt"facebook"></a>
                            </li>
                            <li class="google">
                                <a href="#"><img src="<?php //echo RACINE; ?>\images\icon\icon-social-g+.png" alt"google"></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="view_footer">
                    <div class="content_vente" style="width: 15%; padding: 0; margin: 0;">

                        <div class="imag_logiciel">
                            <img src=".\images\Ordinateur-Slider-Accueil-mix.svg" alt="logo" style="width: 40%; padding: 0; margin: 0;">
                        </div>
                    </div>
                    <div class="content_vente" style="width: 85%;  padding: 0; margin: 0;">
                        <p class="txt_slogan" style="color: gray"><?php //echo $article['contenu']; ?></p>
                    </div>
                </div>
            </div>-->

            <div class="view_footer">
                <div class="myFooter" style="text-align: left">
                <div class="content4">
                    <header>
                        <h1>
                            <a href=""><?php echo $article['titre']; ?></a>
                        </h1>
                    </header>
                </div>
                <div class="content4">
                    <div class="form">
                    <p>Catégories :</p>
                    </div>
                    <div class="form">
                        <a href=""><?php echo $article['type']; ?></a>
                    </div>
                </div>
                <div class="content4">
                    <div class="reseau_social2" style="background-color: gray; width: auto">
                        <ul>
                            <li class="google">
                                <a href="#"><img src="<?php echo RACINE; ?>\images\icon\icon-social-twitter.png" alt"linkedin"></a>
                            </li>
                            <li class="google">
                                <a href="#"><img src="<?php echo RACINE; ?>\images\icon\icon-social-linkedin.png" alt"linkedin"></a>
                            </li>
                            <li class="google">
                                <a href="#"><img src="<?php echo RACINE; ?>\images\icon\icon-social-facebook.png" alt"facebook"></a>
                            </li>
                            <li class="google">
                                <a href="#"><img src="<?php echo RACINE; ?>\images\icon\icon-social-g+.png" alt"google"></a>
                            </li>
                        </ul>
                    </div>
                </div>
                </div>
                <div class="view2">
                    <div class="content_vente" style="width: 15%; padding: 0; margin: 0;">

                        <div class="imag_logiciel">
                            <img src=".\images\Ordinateur-Slider-Accueil-mix.svg" alt="logo" style="width: 100%; padding: 0; margin: 0;">
                        </div>
                    </div>
                    <div class="content_vente" style="width: 85%;  padding: 0; margin: 0;">
                        <p class="txt_slogan" style="color: gray"><?php echo $article['contenu']; ?></p>
                    </div>
                </div>
            </div>
<hr>

        <?php
        endforeach;

        ?>


    </section>





    <!--<script src="./theme_membres/js/coursM.js"></script>-->







        <!--<script type="text/javascript" src='theme_admin/js/cours.js'></script>-->

        <!--<script>

            function numeroLigne()
            {
                console.log(400);
                var i = 0;
                var COCHE = false;
                // Parcours les lignes du tableau
                for (i=1;i< document.getElementById("tableau").rows.length;i++)
                {
                    console.log(23);
                    // Vérifie si les cases sont cochées
                    if(document.getElementById("suppr"+i).checked)
                    {
                        // case cochée
                        COCHE = true;
                        // Recupère l'identifiant des lignes cochées
                        var valeur_id = document.getElementById("id"+i).innerHTML;
                        // Transmet la variable valeur_id dans le input hidden de la page fournisseur.php
                        document.getElementById("valeur_id").value= valeur_id;
                        //console.log(document.getElementById("valeur_id").value= valeur_id);
                    }
                }
                if(!COCHE)
                {
                    alert("Pas de case cochée");
                    //return 0;
                    console.log(30);
                }
            }






        </script>-->

