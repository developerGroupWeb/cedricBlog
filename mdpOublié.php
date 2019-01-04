<!doctype html>
<html lang="en">
	<head>
	<!-- Required meta tags -->
	<?php include 'pills/cssLink.php' ?>

	<title>coaching</title>
	</head>
<body>
	<?php include 'template/nav.php' ?>

<div style="margin-top: 180px;">

	<div  class="px-5 col-sm-8 offset-sm-2 col-lg-4 offset-lg-4 my-5 bg-light py-4" style="border-top: 4px solid #00ace6;">
		<div class="row"><h4 class="text-center mx-auto">Récupérez vos identifiants</h4></div>
		<form class="" action="" method="post" id="reset-password">
		  <div class="form-group row">
		    <label for="email">Email</label>
		    <input type="email" name="email" class="form-control" id="email" placeholder="Entez votre email">
		    <span class="error" style="color: red; font-style: italic; display: none"></span>
		  </div>
		  
		  <button type="submit" class="btn btn-primary w-100">Récupérer</button>
		</form>
	</div>
</div>

	<?php include 'template/footer.php' ?>

	<?php include 'pills/jsLink.php' ?>


<script src="js/reset_password.js"></script>
</body>
</html>