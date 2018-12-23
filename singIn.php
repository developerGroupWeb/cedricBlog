<!doctype html>
<html lang="en">
	<head>
	<!-- Required meta tags -->
	<?php include 'pills/cssLink.php' ?>

	<title>coaching</title>
	</head>
<body>
	<?php include 'template/nav.php' ?>

	<div  class="px-5 col-sm-8 offset-sm-2 col-lg-4 offset-lg-4 my-5 bg-light py-4" style="border-top: 4px solid #00ace6;">
		<div class="row"><h4 class="text-center mx-auto">CONNEXION</h4></div>
		<form class="" action="" method="post">
		  <div class="form-group row">
		    <label for="email">Email</label>
		    <input type="email" class="form-control" id="email" placeholder="Entez votre email">
		    <span class="error"></span>
		  </div>
		  <div class="form-group row">
		    <label for="password">Mot de passe</label>
		    <input type="password" class="form-control" id="password" placeholder="Votre mot de passe">
		    <span class="error"></span>
		  </div>
		  <div class="form-group form-check row">
		    <input type="checkbox" class="form-check-input" id="check">
		    <label class="form-check-label" for="check">Se souvenir de moi</label>
		  </div>
		  <button type="submit" class="btn btn-primary w-100">Identification</button>
		</form>

		<div class="row my-3"><a href="mdpOublié.php" class="text-center  text-muted mx-auto">Identifiant ou mot de passe oublié ? </a></div>

		<div class="row"><a href="singUp.php" class="btn btn-outline-primary w-100 text-uppercase">Créer un compte gratuit</a></div>
	</div>

	<?php include 'template/footer.php' ?>

	<?php include 'pills/jsLink.php' ?>
</body>
</html>