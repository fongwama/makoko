<?php
include'../ADMIN/traitement/connexion.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Medical Clinic a Medical Hospital Category Flat Bootstarp Resposive Website Template | News :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Medical Clinic Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="icon" type="image/png" href="images/favicon.png" />
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!--<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Archivo+Narrow:400,400italic,700,700italic' rel='stylesheet' type='text/css'>-->
</head>
	
<body>
<!-- banner -->
	<div class="banner1">
		<div class="container">
<!-- header -->
			<div class="header">	
					<div class="logo">
					   <a href="index.php"><img src="images/logo-mini.png" width="255" height="100"/></a>
					</div>
					<div class="top-nav">
						<span class="menu"><img src="images/menu.png" /></span>
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
		<div align="center"><h2 class="titreProduit">Examens Médicaux</h2></div><br><br><br>
		<div class="container">

			<div class="news-grid">
				<div class="col-md-8 blog-left">
					<div class="blog-left-grid">
						<!-- <div class="blog-leftl">
							<h4>August <span>15</span></h4>
							<a href="#"><i class="glyphicon glyphicon-tags" aria-hidden="true"></i>10</a>
						</div> -->

						<?php
						if(isset($_GET['tag'])){
						$req = $bdd->prepare('SELECT * FROM finaleexamen WHERE categuorie=? ORDER BY id DESC');
						$req->execute(array($_GET['tag']));
						while ($donnees = $req->fetch()) {
						?>
						<div class="blog-leftr">
							<a href="single.php">
								<img src="images/banner-bg.png" alt=" " width="100" height="50" class="img-responsive"/></a>

							<p class="paraExamen"><?php echo $donnees['description']; ?></p>
							<ul class="examenBondeBottom">
								<li><a href="#"><i class="glyphicon glyphicon-user"
												   aria-hidden="true"></i><?php echo $donnees['nom']; ?></a></li>
												   aria-hidden="true"></i><?php echo $donnees['nom']; ?></a></li>
								<li><a href="#"><i class="glyphicon glyphicon-tags"
												   aria-hidden="true"></i><?php echo $donnees['prix']; ?> FCFA</a></li>
								<li><a href="#"><i class="glyphicon glyphicon-tags"
												   aria-hidden="true"></i><?php echo $donnees['lieu']; ?></a></li>
								<!-- <li><a href="#"><i class="glyphicon glyphicon-comment" aria-hidden="true"></i>10 Comments</a></li> -->
							</ul>
							<!-- <div class="more m1">
								<a href="single.php">Learn More</a>
							</div> -->
						</div>
						<div class="clearfix"></div>
					</div>
					<?php
					}
					}
					?>

				</div>

				<div class="col-md-4 blog-right">
					 <h3>Categories</h3>
					<ul>
						<?php
						$req = $bdd->query('SELECT * FROM finaleservice ORDER BY id DESC');
						while($donnees = $req->fetch()) {
						?>
						<li><a href="examens.php?tag=<?php echo $donnees['servicename']; ?>"><?php echo $donnees['servicename']; ?></a></li>
							<?php
						}
						?>
					</ul>



					 <div class="recent">
						<h3>Nous vous recommandons</h3>
						<div class="recent-grids">
							<div class="recent-grid">
								<div class="wom">
									<a href="#"><img src="images/6.jpg" alt=" " class="img-responsive" /></a>
								</div>
								<div class="wom-right">
									<h4><a href="#">Integer rutrum ante eu</a></h4>
									<p>Mauris fermentum dictum magna. Sed laoreet aliquam leo. 
										Ut tellus dolor, dapibus eget.</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="recent-grid">
								<div class="wom">
									<a href="#"><img src="images/7.jpg" alt=" " class="img-responsive" /></a>
								</div>
								<div class="wom-right">
									<h4><a href="#">Integer rutrum ante eu</a></h4>
									<p>Mauris fermentum dictum magna. Sed laoreet aliquam leo. 
										Ut tellus dolor, dapibus eget.</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="recent-grid">
								<div class="wom">
									<a href="#"><img src="images/8.jpg" alt=" " class="img-responsive" /></a>
								</div>
								<div class="wom-right">
									<h4><a href="#">Integer rutrum ante eu</a></h4>
									<p>Mauris fermentum dictum magna. Sed laoreet aliquam leo. 
										Ut tellus dolor, dapibus eget.</p>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>


				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //news -->
<!-- footer -->
	<div class="footer">
		<?php include("include/footer.php"); ?>
	</div>
<!-- //footer -->
<!-- for bootstrap working -->
		<script src="js/bootstrap.js"> </script>
<!-- //for bootstrap working -->
</body>
</html>