<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Teach U By Rocio</title>
        <link href="../style/reservation.css" rel="stylesheet">
        <link href="../style/header.css" rel="stylesheet">
        <script src="../scripts/header.js" defer></script>
        <link href="../style/nav.css" rel="stylesheet">
		<script src="../scripts/functions.js" defer></script>
		<script src="../scripts/main.js" defer></script>  
    </head>

    <body>
        <?php include('header.php'); ?>
        <?php include('nav.php'); ?>
        <main>
            <h2>Make your reservation</h2>
            <section>
                <form method="get" action="">
                    <p>
                        <label for="teacher">Choose your teacher</label>
                        <select name="teacher" id="teacher" required>
                            <option value="Rocio">Rocio</option>
                            <option value="Carolina">Carolina</option>
                            <option value="Gisele">Gisele</option>
                        </select>
                    </p>
                    <p>
                        <label for="date">Choose a schedule for your class</label>
                        <input type="date" id="date" name="date" required>
                    </p>
                    <p>
                        <label for="time">At what time ?</label>
                        <input type="time" id="time" name="time" required>
                    </p>
                    <p>
                        <button>Reserve your class</button>
                    </p>
                </form>
            </section>
        </main>
    </body>
</html>