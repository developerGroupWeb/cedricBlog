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
		<div class="row"><h4 class="text-center mx-auto text-uppercase">Créer un compte</h4></div>
		<form class="" action="" method="post">
		  <div class="form-group row">
		    <label for="fName">Votre Prénom</label>
		    <input type="name" class="form-control" id="fName" placeholder="Entez votre prénom">
		    <span class="error"></span>
		  </div>
		  <div class="form-group row">
		    <label for="lName">Votre nom</label>
		    <input type="name" class="form-control" id="lName" placeholder="Entez votre nom">
		    <span class="error"></span>
		  </div>
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
		  
		  <button type="submit" class="btn btn-primary w-100">Créer</button>
		</form>

		<div class="row mt-4"><a href="singIn.php" class="btn btn-outline-primary w-100 text-uppercase">Se connecter</a></div>
	</div>

	<?php include 'template/footer.php' ?>

	<?php include 'pills/jsLink.php' ?>
</body>
</html>