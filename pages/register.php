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
	&& isset($_POST['password'])
	&& isset($_POST['profile'])) //si les champs ont été remplis
    {
		//on crée une variable pour confirmer que le compte a bien été crée
		$register_successfull='Your account has been created successfully. Please login.'; 

		$sqlQuery = 'INSERT INTO users(full_name, email, password, age, profile) VALUES (:full_name, :email, :password, :age, :profile)';
		$insertUser = $db->prepare($sqlQuery);
		$insertUser->execute([
			'full_name' => $_POST['full_name'],
			'age' => $_POST['age'],
			'email' => $_POST['email'],
			'password' => $_POST['password'],
			'profile' => $_POST['profile'],
		]);
    }
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="icon" type="image/vnd.icon" href="../images/favicon.ico">
		<title>Mundolingo</title>
		<link href="../style/register.css" rel="stylesheet">
		<link href="../style/menu_accueil.css" rel="stylesheet">
	</head>
	
	<body>
		<main>
			<div class="left_element">
				<img src="../images/logo.png" alt="logo_website">
				<h1>Mundolingo</h1>
				<h2>Travel. Communicate. Share.</h2>
			</div>
			<div class="right_element">	
				<?php include('menu_accueil.php'); ?>
				<form method="post" action="register.php">
					<div class="formulaire">
						<div class="item">
							<label for="full_name">Full name</label> : 
						</div>
						<div class="item">
							<input type="text" name="full_name" id="full_name">
						</div>
						<div class="item">
							<label for="age">Age</label> : 
						</div>
						<div class="item">
							<input type="number" name="age" id="age">
						</div>
						<div class="item">	
							<label> You are a </label> :
						</div>
						<div class="item">
							<input type="radio" name="profile" value="student" id="student">
							<label for="student"> Student </label><br/>
							<input type="radio" name="profile" value="teacher" id="teacher">
							<label for="teacher"> Teacher </label><br/>
						</div>
						<div class="item">
							<label for="email">Email</label> : 
						</div>
						<div class="item">
							<input type="email" name="email" id="email">
						</div>
						<div class="item">
							<label for="password">Create password</label> :
						</div>
						<div class="item">
							<input type="password" name="password" id="password">
						</div>
					</div>
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