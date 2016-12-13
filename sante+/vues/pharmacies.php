<?php
	$title = "Pharmacies";
	include("../include/head.php");
include_once("../../dashboard/lib/dao/f_select_pharma.php");
?>

<body>
<!-- banner -->
<div class="banner1">
	<div class="container">
		<?php include("../include/menu.php"); ?>
	</div>
</div>
<!-- //banner -->
<!-- news -->
<div class="news">
	<div class="container">
		<div class="news-grid">
			<div class="col-md-8 blog-left">

				<?php
				while($donnees = $req->fetch()) {
					?>
					<div class="blog-left-grid">
						<div class="blog-leftl">
							<h4>August <span>15</span></h4>
							<a href="#"><i class="glyphicon glyphicon-tags" aria-hidden="true"></i>10</a>
						</div>

						<div class="blog-leftr">
							<a href=""><img src="../../dashboard/images/pharma-image/<?php echo $donnees['image'] ?>" alt=" " class="img-responsive"/></a>

							<p class="parapharma"><?php echo $donnees['adresse']; ?><br>
								<?php echo $donnees['ville']; ?><br>
								<?php echo $donnees['quartier']; ?></p>

							<ul>
								<li><a href="#"><i class="glyphicon glyphicon-user" aria-hidden="true"></i><?php echo $donnees['nom']; ?></a>
								</li>
								<li><a href="#"><i class="glyphicon glyphicon-tags" aria-hidden="true"></i><?php echo $donnees['tel']; ?></a></li>
							</ul>
							<div class="more m1">
								<a href="single.php?tag=<?php echo $donnees['id']; ?>">savoir plus</a>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<?php
				}
				?>

			</div>
			<div class="col-md-4 blog-right">
				<div class="recent">
					<h3>Nous vous recommanderons</h3>
					<div class="recent-grids">
						<div class="recent-grid">
							<div class="wom">
								<a href="#"><img src="../images/6.jpg" alt=" " class="img-responsive" /></a>
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
								<a href="#"><img src="../images/7.jpg" alt=" " class="img-responsive" /></a>
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
								<a href="#"><img src="../images/8.jpg" alt=" " class="img-responsive" /></a>
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
	<?php include("../include/footer.php"); ?>
</div>
<!-- //footer -->
<!-- for bootstrap working -->
<script src="../js/bootstrap.js"> </script>
<!-- //for bootstrap working -->
</body>
</html>