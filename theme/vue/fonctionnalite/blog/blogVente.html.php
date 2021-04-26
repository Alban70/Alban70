<?php
include './theme/vue/blog.nav.html.php';
?>
<?php
$i=1;
foreach($articles as $i => $article):
?>
<div class="content4">
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
</div>
<?php
endforeach;

?>


