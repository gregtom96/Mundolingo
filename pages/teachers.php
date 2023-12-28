<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="icon" type="image/vnd.icon" href="../images/favicon.ico">
		<title>Teach U</title>
		<link href="../style/header.css" rel="stylesheet">
        <script src="../scripts/header.js" defer></script>
        <link href="../style/nav.css" rel="stylesheet">
		<link href="../style/teachers.css" rel="stylesheet">
	</head>

    <body>
		<?php include('header.php'); ?>
        <?php include('nav.php'); ?>
		<main>
			<h2>Meet your teachers</h2>
			<article>
				<img src="../images/Rocio.jpg" alt="Rocio">
				<h3> Rocio </h3>
				<p>
					Rocio is a 28 years old teacher from Argentina.
					In 2024, she obtained her degree from the "Profesorado Superior de Lenguas Vivas de Salta".
					She started teaching english a few years ago besides her studies, and has helped a lot of 
					students from all around the world to strengthen their communication, writing and listening skills.
					She is used to work with people from different age, and always listen to them in order to help them achieve their goal.
				</p>
			</article>
		</main>
    </body>
</html>