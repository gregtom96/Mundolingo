<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="icon" type="image/vnd.icon" href="../images/favicon.ico">
		<title>Mundolingo</title>
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
				<img src="../images/Greg.png" alt="Greg">
				<h3> Greg </h3>
				<p>
					Greg is a 27 years old teacher from France.
					He has been travelling in a lot of countries all over the world,
					to strengthen his communication skills.
					Currently living in Argentina, he can teach both French and Spanish.
				</p>
			</article>
		</main>
    </body>
</html>