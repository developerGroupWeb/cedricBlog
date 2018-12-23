<!doctype html>
<html lang="en">
	<head>
	<!-- Required meta tags -->
	<?php include 'pills/cssLink.php' ?>

	<title>coaching</title>
	</head>
<body>
	<?php include 'template/nav.php' ?>

	<section class="contact-uc-section">
		<div style="background-color: rgba(0,0,0,0.8);" class="py-5 px-2">
			<div  class="container">
				<div class="row">
					<div class="col-md-6 p-5 bg-light">
						<div class="row"><h4 class="">Contactez-nous !</h4></div>
						<div class="row"><h4 class="">
						Nous sommes là pour vous aider !</h4></div>
						<p class="row">Soumettez ce formulaire pour rejoindre notre équipe. Vous recevrez une réponse le prochain jour ouvrable.</p>
						<form class="row" action="" method="post">
						  <div class="form-group col-12">
						  	<label class="font-weight-bold row">Votre nom *</label>
						  	<div class="row">
							  	<div class="col-md-6">
							  		<div class="row">
									    <input type="name" class="form-control" id="fName" placeholder="Entez votre prénom">
									    <label for="fName" class="">Prénom</label>
									    <span class="error"></span>
									</div>
								</div>
								<div class="col-md-6 mt-3 mt-md-0">
									<div class="row">
									    <input type="name" class="form-control" id="lName" placeholder="Entez votre nom">
									    <label for="lName">Nom</label>
									    <span class="error"></span>
									</div>
								</div>
							</div>
						  </div>

						  <div class="form-group col-12">
						  	<div class="row">
							  	<label for="entreprise" class="font-weight-bold">Votre entreprise</label>
							    <input type="name" class="form-control" id="entreprise" placeholder="Votre entreprise">
							</div>
						  </div>

						  <div class="form-group col-12">
						  	<label class="font-weight-bold row">Votre adresse courriel *</label>
						  	<div class="row">
							  	<div class="col-md-6">
							  		<div class="row">
									    <input type="email" class="form-control" id="email" placeholder="Saisissez un e-mail">
									    <label for="email">Saisissez un e-mail</label>
									    <span class="error"></span>
									</div>
								</div>
								<div class="col-md-6 mt-3 mt-md-0">
									<div class="row">
									    <input type="name" class="form-control" id="cfemail" placeholder="Confirmez l’e-mail">
									    <label for="cfemail">Confirmez l’e-mail</label>
									    <span class="error"></span>
									</div>
								</div>
							</div>
						  </div>
						  <div class="form-group col-12">
						  	<div class="row">
							    <label for="message" class="font-weight-bold">Votre message *</label>
							    <textarea class="form-control" id="message" rows="3"></textarea>
							</div>
						  </div>
						  
						  <div class="col-12">
						  	<div class="row">
						  		<button type="submit" class="btn btn-primary w-100">Envoyer</button>
						  	</div>
						  </div>
						</form>
					</div>

					<div class="col-md-1 d-none d-md-block">
						<div class="row">
							<div class="mx-auto">
								<div class="" style="border: 2px solid #999999; height: 200px; margin-top: 150px;"></div>
							</div>
						</div>
						<div class="row">
							<div class="mx-auto">
								<div class="my-4" style="padding: 10px; background-color: #00ace6; border-radius: 100px;"></div>
							</div>
						</div>
						<div class="row">
							<div class="mx-auto">
								<div class="" style="border: 2px solid #999999; height: 200px;"></div>
							</div>
						</div>
					</div>

					<div class="col-md-5 bg-light p-5 mt-5 mt-md-0">
						<div class="row">
							<h4>Vous pouvez également nous joindre par ces moyens:</h4>
						</div>

						<div class="row">
							<div class="col-12">
								<p class="row"><strong>Téléphone: </strong></p>

								<p class="row">xxxxxxxxxxxx</p>
								<p class="row">xxxxxxxxxxxx</p>
							</div>
						</div>

						<div class="row">
							<div class="col-12">
								<p class="row"><strong>Courriel: </strong></p>

								<p class="row">exple@...com</p>
							</div>
						</div>

						<!--<div class="row">
							<div class="col-12">
								<p class="row"><strong>Courrier: </strong></p>

								<p class="row">---------------</p>
							</div>
						</div>-->
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php include 'template/footer.php' ?>

	<?php include 'pills/jsLink.php' ?>
</body>
</html>