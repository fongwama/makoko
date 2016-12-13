<?php
$title = "";
include_once("../../dashboard/lib/dao/connexion.php");
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
	<div class="single">
		<div class="container">
			<div class="single-grid">
				<div class="col-md-8 blog-left">
					<?php
					if(isset($_GET['tag'])){
					$req = $pdo->prepare('SELECT * FROM finalepharmacie WHERE id =? ORDER BY id DESC ');
					$req->execute(array($_GET['tag']));
					while($donnees = $req->fetch()) {
					?>
					<div class="blog-left-grid">
						<div class="blog-leftl">
							<h4>August <span>15</span></h4>
							<a href="#"><i class="glyphicon glyphicon-tags" aria-hidden="true"></i>10</a>
						</div>
						<div class="blog-leftr">
							<img src="../images/15.jpg" alt=" " class="img-responsive"/>

							<p><?php echo $donnees['adresse']; ?><br>
								<?php echo $donnees['ville']; ?><br>
								<?php echo $donnees['quartier']; ?></p>
							<ul>
									<li><a href="#"><i class="glyphicon glyphicon-user" aria-hidden="true"></i><?php echo $donnees['nom']; ?></a>
									</li>
									<li><a href="#"><i class="glyphicon glyphicon-tags" aria-hidden="true"></i><?php echo $donnees['tel']; ?></a></li>

							</ul>
						</div>


						<div class="map">
							<iframe src="<?php echo $donnees['gps']; ?>" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
						<div class="clearfix"></div>
						<?php
						}
						}

						?>

					</div>
				</div>
				<div class="col-md-4 blog-right">

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
<!-- //single -->
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