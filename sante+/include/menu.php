<?php
{
 ?>

<!-- header -->
<div class="header">
    <div class="logo">
        <a href="index.php"><img src="../images/logo-mini.png" width="235" height="70"/></a>
    </div>
    <div class="top-nav">
        <span class="menu"><img src="../images/menu.png" alt=" " /></span>
        <ul class="nav">
            <li class="<?= set_active('index') ?>"><a href="index.php">Accueil</a></li>
            <li class="<?= set_active('pharmacies') ?>"><a href="../vues/pharmacies.php">Pharmacies</a></li>
            <li class="<?= set_active('soumettre') ?>"><a href="../vues/soumettre.php">Soumettre</a></li>
            <li class="<?= set_active('labo') ?>"><a href="../vues/labo.php">Lab numérique</a></li>
            <li class="<?= set_active('telecharger') ?>"><a href="../vues/telecharger.php">Application</a></li>
            <li class="<?= set_active('contact') ?>"><a href="../vues/contact.php">Contact</a></li>
        </ul>
        <!-- script-for-menu -->
        <script>
            $( "span.menu" ).click(function() {
                $( "ul.nav" ).slideToggle( 300, function() {
                    // Animation complete.
                });
            });
        </script>
        <!-- /script-for-menu -->
    </div>
    <div class="clearfix"> </div>
</div>
<!-- //header -->
    <?php
}
?>