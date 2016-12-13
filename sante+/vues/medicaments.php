<?php
$title = "Liste des médicaments et prix";
include_once("../../dashboard/lib/dao/f_select_produces.php");
include_once("../include/head.php");
?>

<body>
<!-- banner -->
	<div class="banner1">
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
							<li><a href="telecharger.php">Application</a></li>
							<li><a href="contact.php">Contact</a></li>
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
		</div>
	</div>
<!-- //banner -->
<!-- news -->
	<div class="news">
		<div align="center"><h2 class="titreProduit">Liste de Médicaments et Prix</h2></div><br><br><br>
		<div class="container">

			<div class="news-grid">
				<div class="col-md-8 blog-left">
					<?php
					while($donnees = $req->fetch()) {
					?>
					<div class="blog-left-grid">
						<div class="blog-leftl">
							<h4>August <span>29</span></h4>
							<a href="#"><i class="glyphicon glyphicon-tags" aria-hidden="true"></i>10</a>
						</div>
						<div class="blog-leftr">
							<a href="single.php"><img src="../../dashboard/images/traitement/produit-image/<?php echo $donnees['image'] ?>" alt=" " width="200" height="100" class="img-responsive" /></a>
							<p><?php echo $donnees['maladie'];?></p>
							<ul class="medicBondeBottom">
								<li><a href="#"><i class="glyphicon glyphicon-user" aria-hidden="true"></i><?php echo $donnees['nom']; ?></a></li>
								<li><a href="#"><i class="glyphicon glyphicon-tags" aria-hidden="true"></i><?php echo $donnees['prix']; ?></a></li>
							</ul>
							<!-- <div class="more m1">
								<a href="single.php">Learn More</a>
							</div> -->
						</div>
						<div class="clearfix"> </div>
					</div>
						<?php
					}
					?>
				</div>
				<div class="col-md-4 blog-right">

				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //news -->
<!-- footer -->
	<div class="footer">
		<?php include("../include/footer.php"); ?>
	</div>
<!-- //footer -->
<!-- for bootstrap working -->
		<script src="js/bootstrap.js"> </script>
<!-- //for bootstrap working -->
</body>
</html>