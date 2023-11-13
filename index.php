<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Teach U by Rocio</title>
		<link href="style/index.css" rel="stylesheet">
	</head>
	
	<body>
		<main>
			<div class="title">
				<h1>Teach U By Rocio</h1>
				<h2>Travel. Communicate. Share.</h2>
			</div>
			<section>	
				<form method="post" action="pages/reservation.php">
					<h2>Log in</h2>
					<p>
						<label for="email">Email</label> : 
						<input type="email" name="email" id="email">
					</p>
					<p>
						<label for="password">Password</label> :
						<input type="password" name="password" id="password">
					</p>

					<!-- Doit afficher un message d'erreur d'authentification -->
					<?php if(isset($errorMessage)) : ?>
                		<?php echo $errorMessage; ?>
            		<?php endif; ?>
					
					<p class="login_button">
						<button type="submit">Login</button>
					</p>
				</form>
			</section>
		</main>
	</body>
</html>