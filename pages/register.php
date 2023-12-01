<?php 

session_start(); 

//utiliser db_local ou db_online en fonction du cas
include('db_local.php');

	try
	{
		//on se connecte à MySQL
		$db = new PDO(
			"mysql:host=$host;dbname=$db_name;charset=utf8", 
			$user, 
			$pwd,
			[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],
		);
	}
	catch (Exception $e)
	{
		//en cas d'erreur, on affiche un message et on arrête tout
		die('Erreur : ' . $e->getMessage());
	}
	
	// Si tout va bien, on peut continuer

    if(isset($_POST['full_name']) 
	&& isset($_POST['age'])
	&& isset($_POST['email'])
	&& isset($_POST['password'])) //si les champs ont été remplis
    {
		//on crée une variable pour confirmer que le compte a bien été crée
		$register_successfull='Your account has been created successfully. Please login.'; 

		$sqlQuery = 'INSERT INTO users(full_name, email, password, age) VALUES (:full_name, :email, :password, :age)';
		$insertUser = $db->prepare($sqlQuery);
		$insertUser->execute([
			'full_name' => $_POST['full_name'],
			'age' => $_POST['age'],
			'email' => $_POST['email'],
			'password' => $_POST['password'],
		]);
    }
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Teach U by Rocio</title>
		<link href="../style/register.css" rel="stylesheet">
		<link href="../style/menu_accueil.css" rel="stylesheet">
	</head>
	
	<body>
		<main>
			<div class="title">
				<h1>Teach U By Rocio</h1>
				<h2>Travel. Communicate. Share.</h2>
			</div>
			<div class="formulaire">	
				<?php include('menu_accueil.php'); ?>
				<form method="post" action="register.php">
                    <p>
						<label for="full_name">Full name</label> : 
						<input type="text" name="full_name" id="full_name">
					</p>
                    <p>
						<label for="age">Age</label> : 
						<input type="number" name="age" id="age">
					</p>
					<p>
						<label for="email">Email</label> : 
						<input type="email" name="email" id="email">
					</p>
					<p>
						<label for="password">Create password</label> :
						<input type="password" name="password" id="password">
					</p>
					<div class="register_success">
						<?php if(isset($register_successfull)) : ?>
							<?php echo $register_successfull; ?>
						<?php endif; ?>
					</div>
					<div class="register_button">
						<button type="submit">Register</button>
					</div>
				</form>
			</div>
		</main>
	</body>
</html>