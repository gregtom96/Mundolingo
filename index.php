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
				$_SESSION['LOGGED_USER_EMAIL']=$user['email'];
				header('Location: pages/reservation.php');
            }
            else 
            {
                $errorMessage = sprintf('The informations sent do not allow you to be identified : (%s/%s)',
                    htmlspecialchars($_POST['email']),
                    htmlspecialchars($_POST['password'])
                );
            }
        }
    }
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<!--Pour que les media queries soient pris en charge sur tous les dispositifs
		et pour que la surface d'affichage du navigateur s'adapte 
		à la largeur d'affichage de l'appareil-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="icon" type="image/vnd.icon" href="images/favicon.ico">
		<title>Mundolingo</title>
		<link href="style/index.css" rel="stylesheet">
		<link href="style/menu_accueil.css" rel="stylesheet">
	</head>
	
	<body>
		<main>
			<div class="left_element">
				<h1>Mundolingo</h1>
				<h2>Travel. Communicate. Share.</h2>
			</div>
			<div class="right_element">
				<?php include('pages/menu_accueil.php'); ?>
				<form method="post" action="index.php">
					<div class="formulaire">
						<p>
							<label for="email">Email</label> : 
							<input type="email" name="email" id="email">
						</p>
						<p>
							<label for="password">Password</label> :
							<input type="password" name="password" id="password">
						</p>
					</div>
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