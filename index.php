<?php 

session_start(); 

//utiliser db_local ou db_online en fonction du cas
include('pages/db_local.php');

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

	// On récupère tout le contenu de la table users
	$sqlQuery = 'SELECT * FROM users';
	$usersStatement = $db->prepare($sqlQuery);
	$usersStatement->execute();
	$users = $usersStatement->fetchAll();

    if(isset($_POST['email']) && isset($_POST['password'])) //si les 2 champs ont été remplis
    {
        foreach($users as $user)
        {
            if($user['email']===$_POST['email'] && $user['password']===$_POST['password'])
            {
                $_SESSION['LOGGED_USER']=$user['full_name'];
				header('Location: pages/reservation.php');
            }
            else 
            {
                $errorMessage = sprintf('The informations sent do not allow you to be identified : (%s/%s)',
                    $_POST['email'],
                    $_POST['password']
                );
            }
        }
    }
?>

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
			<div class="formulaire">
				<nav>	
					<ul>
						<li>
							<a href="index.php">Login</a>
						</li>
						<li>
							<a href="pages/register.php">Register</a>
						</li>
					</ul>
				</nav>
				<form method="post" action="index.php">
					<p>
						<label for="email">Email</label> : 
						<input type="email" name="email" id="email">
					</p>
					<p>
						<label for="password">Password</label> :
						<input type="password" name="password" id="password">
					</p>
					<!-- Doit afficher un message d'erreur d'authentification -->
					<div class="error_msg">
						<?php if(isset($errorMessage)) : ?>
							<?php echo $errorMessage; ?>
						<?php endif; ?>
					</div>
					<div class="login_button">
						<button type="submit">Login</button>
					</div>
				</form>
			</div>
		</main>
	</body>
</html>