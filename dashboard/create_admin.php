<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin</title>
	<link type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
</head>
<body>

				<?php
				include_once("html/menu.html");
				?>

				<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Créer un compte Administrateur</h3>
							</div>
							<div class="module-body">

								<?php
								if(isset($_GET['sms-confirm'])){?>
									<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">×</button>
										<strong>Félicitation!</strong> <?php echo $_GET['sms-confirm']; ?>
									</div>
									<?php
								}elseif(isset($_GET['sms-warning'])){?>
									<div class="alert">
										<button type="button" class="close" data-dismiss="alert">×</button>
										<strong>Attention!</strong> <?php echo $_GET['sms-warning']; ?>
									</div>

									<?php
								}
								elseif(isset($_GET['sms-error'])){?>
									<div class="alert alert-error">
										<button type="button" class="close" data-dismiss="alert">×</button>
										<strong>Attention!</strong> <?php echo $_GET['sms-error']; ?>
									</div>

									<?php
								}
								else{?>
									<div class="alert">
										<button type="button" class="close" data-dismiss="alert">×</button>
										<strong>Attention!</strong> Incluez toujours la photo de l'administrateur
									</div>

									<?php
								}
								?>

									<br />

									<form action="lib/dao/f_insert_admin.php" enctype="multipart/form-data" method="post" class="form-horizontal row-fluid">

										<div class="control-group">
											<label class="control-label" for="basicinput">Tel : </label>
											<div class="controls">
												<input type="tel" name="tel" id="basicinput" placeholder="entrez le tel ici" class="span8" required>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">password : </label>
											<div class="controls">
												<input type="text" name="password" id="basicinput" placeholder="entrez l'adresse" class="span8" required>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label">Droit de l'admin</label>
											<div class="controls">
												<label class="radio">
													<input type="radio" name="optionsRadios" id="optionsRadios1" value="super-admin" checked="">
													Super Admin (à tous les droits avec la possiblité de créer d'autres admin)
												</label> 
												<label class="radio">
													<input type="radio" name="optionsRadios" id="optionsRadios2" value="admin-simple">
													Admin simple (peut ecrir et lire dans la base de données sauf créer un administrateur)
												</label> 
												<label class="radio">
													<input type="radio" name="optionsRadios" id="optionsRadios3" value="admin-lecture">
													Admin en lecture ( se contente juste de lire les données et ne dispose aucun droit d'ecriture)
												</label>
												<label class="radio">
													<input type="radio" name="optionsRadios" id="optionsRadios4" value="admin-ecriture">
													Admin en ecriture (peut juste créer un agent,insérer un agent manuellement)
												</label>
											</div>
										</div>
										<div class="control-group">
											<div class="controls">
												<button type="submit" name="connexion" class="btn">Créer l'agent</button>
											</div>
										</div>
									</form>
							</div>
						</div>
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

	<div class="footer">
		<div class="container">
			 

			<b class="copyright">&copy; 2014 Edmin - EGrappler.com </b> All rights reserved.
		</div>
	</div>

	<script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="js/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/flot/jquery.flot.js" type="text/javascript"></script>
</body>