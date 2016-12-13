<?php
	$title = "Soumettre";
	include("../include/head.php");
?>
	
<body>
<!-- banner -->
	<div class="banner1">
		<div class="container">
			<?php include("../include/menu.php"); ?>
		</div>
	</div>
<!-- //banner -->
<!-- contact -->
	<div class="contact">
		<div class="container">
			<h3>Une pharmacie oubliée?</h3>
			<h3>Soumettez nous la</h3>
			<p class="et">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, 
				consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt 
				ut labore et dolore magnam aliquam quaerat voluptatem.</p>
			<div class="contact-grid">
				<div class="col-md-8 contact-grid-left">
					<form action="../../dashboard/lib/dao/f_insert_pharma_user.php" method="post">

						<input type="text" name="nom" placeholder="Nom de pharmacie"  required>

						<input type="email" name="email" placeholder="email de pharmacie"  required>

						<input type="text" name="tel" placeholder="Telephone de pharmacie" required>

						<textarea type="text" name="message" placeholder="message"  required></textarea>
						<input type="submit" value="Envoyer" >
					</form>
				</div>
				<div class="col-md-4 contact-grid-right">
					<h4>Example</h4>
					<p>Pharma Care</p>
					<ul>
						<li>Adresse   : 35, rue de Palmiers Mfilou Moutabala</li>
						<li>Telephone : +242 06 627 7512</li>
						<li>Message   : Salut, je suis XYZ et je vous contacte qu sujet de...</li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<!--<div class="map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d47913.08775277497!2d2.11280225!3d41.361743!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a498e7672e0317%3A0x36127a984f4c05d5!2sL&#39;Hospitalet+de+Llobregat%2C+Barcelona%2C+Spain!5e0!3m2!1sen!2sin!4v1439363529826" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>-->
		</div>
	</div>
<!-- //contact -->


<!-- footer -->
	<div class="footer">
		<?php include("../include/footer.php"); ?>
	</div>
<!-- //footer -->

</body>
</html>