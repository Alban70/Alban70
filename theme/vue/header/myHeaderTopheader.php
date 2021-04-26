<section class="topheader">
    <div class="logo">
        <a href="<?php echo RACINE; ?>">WC</a>
    </div>
    <div class="reseau_social2">
    <?php
    include THEME .'vue/social/reseauSociaux.php';
    ?>
    </div>



    <div class="coordonnees2">
        <ul>
            <li class="tel">
                <img src="<?php echo RACINE; ?>\images\icon\tel-icon.png" alt"facebook">
                <a href="#">04 42 65 12 55</a>
            </li>
            <li class="email">
                <img src="<?php echo RACINE; ?>\images\icon\mail-icon.png" alt"facebook">
                <!--<a href="<?php echo RACINE; ?>contact">Contact@well-com-solutions.com</a>-->
                <a href="<?php echo RACINE; ?>societe/contact" class="txt_lien_blue">Contact@well-com-solutions.com</a>
            </li>
        </ul>
    </div>

    <div class="essai2">
        <div class="demo">
            <a href="connexion2.php" class="myButton_crm">Démonstration</a>
        </div>
        <div class="demo">
            <a href="FonctionnaliteCRM.php" class="myButton_crm">Essai gratuit</a>
        </div>
        <!--<div class="demo">
            <a href="connexion2.php" class="myButton_crm">Connexion</a>
        </div>-->
        <?php if (isset($_SESSION['auth']) AND $_SESSION['auth'] === true) : ?>
            <div class="demo">
                <a href="?page=deconnexion" class="myButton_crm">Déconnexion</a>
            </div>
        <?php else: ?>
            <div class="demo">
                <a href="membres.php" class="myButton_crm">Connexion</a>
                <!--<a href="<?php echo RACINE; ?>\theme_adminPo\Web\app.php" class="myButton_crm">Connexion</a>-->
            </div>
        <?php endif; ?>

    </div>
</section>

