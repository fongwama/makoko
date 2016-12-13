<?php
 	$title = "Sant&eacute; +";
     include("../include/head.php");
 ?>
	
<body>
<!-- banner -->
	<div class="banner">
		<div class="container">

            <?php include("../include/menu.php"); ?>

 			<div class="banner-info">
				<form action="pharmacies-resultat.php" method="post">
					<input type="text" name="search" value="Rechercher une pharmacie..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Your Mail...';}" required="">
					<input type="submit" value="Rechercher" >
				</form>
			</div>

			<div class="banner-info-grids">
				<div class="col-md-4 banner-info-grid">
					<div class="banner-info-grid1">
						<div class="banner-info-grid-left">
							<span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
						</div>
						<div class="banner-info-grid-right">
							<h4>Rester en bonne santé</h4>
							<p>Les bonnes pratiques</p>
							<div class="more">
								<a href="bonne_sante.php">Voir plus</a>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-4 banner-info-grid">
					<div class="banner-info-grid1">
						<div class="banner-info-grid-left">
							<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
						</div>
						<div class="banner-info-grid-right">
							<h4>Médicaments et Prix</h4>
							<p>Vérifiez votre ordonnance</p>
							<div class="more">
								<a href="medicaments.php">Voir plus</a>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-4 banner-info-grid">
					<div class="banner-info-grid1">
						<div class="banner-info-grid-left">
							<span class="glyphicon glyphicon-apple" aria-hidden="true"></span>
						</div>
						<div class="banner-info-grid-right">
							<h4>Examens médicaux</h4>
							<p>Rensignement sur les examens</p>
							<div class="more">
								<a href="examens.php?tag=radiologie">Voir plus</a>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //banner -->



<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="banner-bottom-grid">
			<div class="banner-bottom-left">
				<div class="banner-bottom-left1">
					<h3>01. Annonces santé</h3>
					<p>Temporibus autem quibusdam et aut officiis debitis aut rerum 
						necessitatibus saepe eveniet ut et voluptates 
						repudiandae sint.</p>
					<div class="more m1">
						<a href="single.php">Coup d'oeil</a>
					</div>
				</div>
			</div>
			<div class="banner-bottom-right">
				<div class="banner-bottom-right1">
					<h3>02. Les Maladies</h3>
					<p>Temporibus autem quibusdam et aut officiis debitis aut rerum 
						necessitatibus saepe eveniet ut et voluptates 
						repudiandae sint.</p>
					<div class="more m1">
						<a href="single.php">Coup d'oeil</a>
					</div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="banner-bottom-grid">
			<div class="banner-bottom-left banner-bottom-lft1">
				<div class="banner-bottom-left1">
					<h3>03. Enjeux Africains</h3>
					<p>Temporibus autem quibusdam et aut officiis debitis aut rerum 
						necessitatibus saepe eveniet ut et voluptates 
						repudiandae sint.</p>
					<div class="more m1">
						<a href="single.php">Coup d'oeil</a>
					</div>
				</div>
			</div>
			<div class="banner-bottom-right banner-bottom-rit1">
				<div class="banner-bottom-right1">
					<h3>04. Les Institutions</h3>
					<p>Temporibus autem quibusdam et aut officiis debitis aut rerum 
						necessitatibus saepe eveniet ut et voluptates 
						repudiandae sint.</p>
					<div class="more m1">
						<a href="single.php">Coup d'oeil</a>
					</div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //banner-bottom -->
<!-- about -->
	<div class="about">
		<div class="container">
			<h3>Mot du Ministre</h3>
			<h3>de la santé Congolaise</h3>
			<p class="et">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, 
				consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt 
				ut labore et dolore magnam aliquam quaerat voluptatem.</p>
			<div class="about-grid">
				<div class="col-md-4 about-grid">
					<img src="../images/5.jpg" alt=" " class="img-responsive" />
					<p>Mr le Ministre Dean FAIRBANKS</p>
					<ul>
						<li><a href="#" class="facebook"></a></li>
						<li><a href="#" class="twitter"></a></li>
						<li><a href="#" class="g"></a></li>
						<li><a href="#" class="in"></a></li>
					</ul>
				</div>
				<div class="col-md-4 about-grid abt-grid">
					<h2>Avantages du Site</h2>
					<ul>
						<li><a href="#">Labore et dolore magnam</a></li>
						<li><a href="#">Qui dolorem ipsum quia</a></li>
						<li><a href="#">Neque porro quisquam est</a></li>
						<li><a href="#">Dolore magnam aliquam</a></li>
						<li><a href="#">Velit ut labore et dolore</a></li>
					</ul>
					<h2>Contribution au bien être</h2>
					<ul>
						<li><a href="#">Labore et dolore magnam</a></li>
						<li><a href="#">Qui dolorem ipsum quia</a></li>
						<li><a href="#">Neque porro quisquam est</a></li>
						<li><a href="#">Dolore magnam aliquam</a></li>
						<li><a href="#">Velit ut labore et dolore</a></li>
					</ul>
				</div>
				<div class="col-md-4 about-grid abt-grid1">
					<h1>La ville de votre choix</h1>
					<div class="banner-bottom-video-grid-left">
						<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingOne">
									<h4 class="panel-title">
										<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
											Ville de Brazzaville
										</a>
									</h4>
								</div>
								<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
									<div class="panel-body">
										<p>Arrondissements</p>
										<ul class="bz">
											<li class="a1"><a href="#">Makélékélé</a></li>
											<li class="a2"><a href="#">Bacongo</a></li>
											<li class="a3"><a href="#">Moungali</a></li>
											<li class="a4"><a href="#">Poto-Poto</a></li>
											<li class="a5"><a href="#">Ouenze</a></li>
											<li class="a6"><a href="#">Moukondo</a></li>
											<li class="a7"><a href="#">Talangai</a></li>
											<li class="a8"><a href="#">Madibou</a></li>
											<li class="a9"><a href="#">Ngangalingolo</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingTwo">
									<h4 class="panel-title">
										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
											Ville de Pointe-Noire
										</a>
									</h4>
								</div>
								<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
									<div class="panel-body">
										<p>Arrondissements</p>
										<ul class="bz">
											<li class="a1"><a href="#">Makélékélé</a></li>
											<li class="a2"><a href="#">Bacongo</a></li>
											<li class="a3"><a href="#">Moungali</a></li>
											<li class="a4"><a href="#">Poto-Poto</a></li>
											<li class="a5"><a href="#">Ouenze</a></li>
											<li class="a6"><a href="#">Moukondo</a></li>
											<li class="a7"><a href="#">Talangai</a></li>
											<li class="a8"><a href="#">Madibou</a></li>
											<li class="a9"><a href="#">Ngangalingolo</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingThree">
									<h4 class="panel-title">
										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
											Ville de Dolisie
										</a>
									</h4>
								</div>
								<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
									<div class="panel-body">
										<p>Arrondissements</p>
										<ul class="bz">
											<li class="a1"><a href="#">Makélékélé</a></li>
											<li class="a2"><a href="#">Bacongo</a></li>
											<li class="a3"><a href="#">Moungali</a></li>
											<li class="a4"><a href="#">Poto-Poto</a></li>
											<li class="a5"><a href="#">Ouenze</a></li>
											<li class="a6"><a href="#">Moukondo</a></li>
											<li class="a7"><a href="#">Talangai</a></li>
											<li class="a8"><a href="#">Madibou</a></li>
											<li class="a9"><a href="#">Ngangalingolo</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingFour">
									<h4 class="panel-title">
										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
											Ville de Nkayi
										</a>
									</h4>
								</div>
								<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
									<div class="panel-body">
										<p>Arrondissements</p>
										<ul class="bz">
											<li class="a1"><a href="#">Makélékélé</a></li>
											<li class="a2"><a href="#">Bacongo</a></li>
											<li class="a3"><a href="#">Moungali</a></li>
											<li class="a4"><a href="#">Poto-Poto</a></li>
											<li class="a5"><a href="#">Ouenze</a></li>
											<li class="a6"><a href="#">Moukondo</a></li>
											<li class="a7"><a href="#">Talangai</a></li>
											<li class="a8"><a href="#">Madibou</a></li>
											<li class="a9"><a href="#">Ngangalingolo</a></li>
										</ul>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //about -->
<!-- welcome -->
	<div class="welcome">
		<div class="container">
			<h3>Personnages à la Une !</h3>
			<p class="et">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, 
				consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt 
				ut labore et dolore magnam aliquam quaerat voluptatem.</p>
			<div class="welcome-grids">
				<div class="col-md-6 welcome-grid">
					<div class="welcome-grid-left">
						<h4>Directeur de la santé publique</h4>
						<p>Adipisci velit, sed quia non numquam eius modi tempora incidunt 
							ut labore et dolore magnam aliquam quaerat voluptatem</p>
					</div>
					<div class="welcome-grid-right">
						<img src="../images/1.jpg" alt=" " class="img-responsive" />
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 welcome-grid">
					<div class="welcome-grid-right aliquam">
						<img src="../images/2.jpg" alt=" " class="img-responsive" />
					</div>
					<div class="welcome-grid-left non">
						<h4>D.G des hopitaux de base</h4>
						<p>Adipisci velit, sed quia non numquam eius modi tempora incidunt 
							ut labore et dolore magnam aliquam quaerat voluptatem</p>
					</div>
					
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="welcome-grids">
				<div class="col-md-6 welcome-grid">
					<div class="welcome-grid-left">
						<h4>Doyen de la Faculté SS</h4>
						<p>Adipisci velit, sed quia non numquam eius modi tempora incidunt 
							ut labore et dolore magnam aliquam quaerat voluptatem</p>
					</div>
					<div class="welcome-grid-right">
						<img src="../images/3.jpg" alt=" " class="img-responsive" />
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 welcome-grid">
					<div class="welcome-grid-right aliquam">
						<img src="../images/4.jpg" alt=" " class="img-responsive" />
					</div>
					<div class="welcome-grid-left non">
						<h4>président des affaires de médecine</h4>
						<p>Adipisci velit, sed quia non numquam eius modi tempora incidunt 
							ut labore et dolore magnam aliquam quaerat voluptatem</p>
					</div>
					
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //welcome -->

<!-- testimonials -->
	<div class="testimonials">
		<div class="container">
			<h3>Les Partenaires</h3>
			<p class="et">Ces partenaires sont ceux qui ont passé du temps à développer ce site web pour les intérêts de la population Congolaise dans ce domaine médical.
			   Nous remercions leur colaboration ainsi que leur dévouement dans le développement des solutions libres pour le bien être de tous.</p>
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div class="testimonials-grid">
								<div class="col-md-6 testimonials-grid-left">
									<div class="testimonials-grid-left1">
										<img src="../images/6.png" alt=" " class="img-responsive" />
									</div>
									<div class="testimonials-grid-right1">
										<p><span><a href="http://fongwama.com">Fongwama</a></span>, la Plateforme de développement libre des solutions Congolaises et Africaines par les Congolais.☺</p>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="col-md-6 testimonials-grid-left">
									<div class="testimonials-grid-left1">
										<img src="../images/7.png" alt=" " class="img-responsive" />
									</div>
									<div class="testimonials-grid-right1">
										<p><span><a href="http://ecair.com">Ecair</a></span>, pour la compagnie d'aviation Congolaise, meilleurs dans le service du vol.☺</p>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</li>
						<li>
							<div class="testimonials-grid">
								<div class="col-md-6 testimonials-grid-left">
									<div class="testimonials-grid-left1">
										<img src="../images/a.png" alt=" " class="img-responsive" />
									</div>
									<div class="testimonials-grid-right1">
										<p><span><a href="http://azurcongo.com">Azur Congo</a></span>. Un opérateur de téléphonie mobile assurant le bien être des Congolais et des pays d'où il est installé.☺</p>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="col-md-6 testimonials-grid-left">
									<div class="testimonials-grid-left1">
										<img src="../images/f.png" alt=" " class="img-responsive" />
									</div>
									<div class="testimonials-grid-right1">
										<p><span><a href="http://azurcongo.com">FCRM</a></span>, la Fondation Congolaise pour la Recherche Médicale. La source des informations fiables qui contribuent à votre bien être.☺</p>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</li>
						<li>
							<div class="testimonials-grid">
								<div class="col-md-6 testimonials-grid-left">
									<div class="testimonials-grid-left1">
										<img src="../images/s.png" alt=" " class="img-responsive" />
									</div>
									<div class="testimonials-grid-right1">
										<p><span><a href="http://azurcongo.com">Solution Kings</a></span>, une startup congolaise spécialisée dans tout type de solutions logicielles, libres et/ou commercialisées. Ils sont les pilotes du présent Projet Santé +.☺</p>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="col-md-6 testimonials-grid-left">
									<div class="testimonials-grid-left1">
										<img src="../images/9.png" alt=" " class="img-responsive" />
									</div>
									<div class="testimonials-grid-right1">
										<p><span><a href="http://yekolab.com">Yekolab</a></span>, un centre de formation en TIC, un incubateur, un rêve réalisé grâce à celui ci.☺</p>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</section>
		</div>
	</div>
<!-- //testimonials -->
<!-- footer -->
	<div class="footer">
		<?php include("../include/footer.php"); ?>
	</div>
<!-- //footer -->
 </body>
</html>