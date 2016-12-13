<?php
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
							<li class="active"><a href="pharmacies.php">Pharmacies</a></li>
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
		<div class="container">
			<div class="news-grid">
				<div class="col-md-8 blog-left">

					<?php
					$search = $_POST["search"];
					if (isset($search)){
					$req = $pdo->prepare('SELECT * FROM finalepharmacie WHERE nom LIKE ? ORDER BY id DESC');
					$req->execute(array('%'.$search.'%'));
					$count = $req->rowCount();
					if($count>=1){
						while($donnees = $req->fetch(PDO::FETCH_OBJ)){
						?>
						<div class="blog-left-grid">
							<a href="single.php?tag=<?php echo $donnees->id; ?>"><?php echo $donnees->nom; ?>
								<?php echo $donnees->adresse; ?></a>
						<?php
					}
					}
						else{
							echo 'Aucun resultat trouvé pour '.'<b>" '.$search.' "<b>';
						}
					}

					?>
					</div>
					</div>
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