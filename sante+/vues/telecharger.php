<?php
    $title = "Application";
    include("../include/head.php");
?>

<body>
<!-- banner -->
<div class="banner">
    <div class="container">
        <!-- header -->
        <div class="header">
            <div class="logo">
                <a href="index.php"><img src="../images/logo-mini.png" width="235" height="70"/></a>
            </div>
            <div class="top-nav">
                <span class="menu"><img src="../images/menu.png" alt=" " /></span>
                <ul class="nav">
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="pharmacies.php">Pharmacies</a></li>
                    <li><a href="soumettre.php">Soumettre</a></li>
                    <li><a href="labo.php">Lab numérique</a></li>
                    <li class="active"><a href="telecharger.php">Application</a></li>
                    <li><a href="contact.php">Contact</a></li>
<!--                    <li><a href="langue.php">Lingala</a></li>-->
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

<!-- footer -->
<div class="download">

    <div class="video">
        <video src="../video/santeplus.mp4" controls autoplay loop width="300"></video>
    </div>
    <div class="btnS">
        <h3>Télécharger l'application Santé +</h3>
        <div class="btnTeleLocal">
            <a href="../download/sante+.apk"><img src="../images/logo-mini.png" width="135" height="74"></a>
        </div>
        <div class="btnTelePs">
            <a href="https://play.google.com/store/search?q=densipara" target="_blank"><img src="../images/ps.jpg" width="135" height="74"></a>
        </div>
    </div>
</div>
<!-- //footer -->
<!-- for bootstrap working -->
<script src="js/bootstrap.js"> </script>
<!-- //for bootstrap working -->
</body>
</html>