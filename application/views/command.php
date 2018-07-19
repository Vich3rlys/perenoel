<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min4.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/style.css">
</head>
<body>
	<div class="container">
		<div class="jumbotron warrper text-center">
			<h1>Votre commande</h1>
		</div>
		<div class="row">
			<div class="col-lg-4">

				<!-- fomrulaire de commande -->
				<form method="POST">
					<p>Veiller remplir</p>
					<label>Nom</label>
					<input type="text" name="name" class="form-control">
					<label>Prenom</label>
					<input type="text" name="first_ame" class="form-control">
					<label>Votre jouer</label>
					<select name="jouer" class="form-control">
						<option>1</option>
						<option>1</option>
						<option>1</option>
						<option>1</option>			
						<option>1</option>			
						<option>1</option>			
						<option>1</option>			
						<option>1</option>			
					</select>
					<label>Message</label>
					<textarea name="msg" class="form-control m-2"></textarea>
					<input type="submit" name="" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" id="showModal"></input>

					<!-- Modal -->
					<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
							</div>
							<div class="modal-body">
							<p>Votre commande est bien envoyer</p>
							</div>
							<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							</div>
						</div>
						</div>
					</div>

				</form>
			</div>

			<div class="col-lg-6 p-5">
				<h1>Chistmas</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<a href="#" class="btn btn-succes">S'inscrire</a>
			</div>

		</div>
	</div>
	<script src="<?php echo base_url()?>assets/js/jquery.js"></script>
	<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/tether.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/app.js"></script>
</body>
</html>