<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/vnd.icon" href="../images/favicon.ico">
        <title>Teach U</title>
        <link href="../style/reservation.css" rel="stylesheet">
        <link href="../style/header.css" rel="stylesheet">
        <script src="../scripts/header.js" defer></script>
        <link href="../style/nav.css" rel="stylesheet">
        <script src="https://www.paypal.com/sdk/js?client-id=ATSsgmmMP_e0Re6tNGuWBHJACGxVMymoMPCqbiswFBdhRN7WlzuJlTSdNS1oF8E4SMErvDJSLuxoM5Sv&currency=EUR"></script>
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
                        <label for="class">Choose your class :</label>
                        <select name="class" id="class" required>
                            <option value="introduction">Introduction class (free)</option>
                            <option value="lesson">Lesson</option>
                        </select>
                    </p>
                    <p>
                        <label for="teacher">Choose your teacher :</label>
                        <select name="teacher" id="teacher" required>
                            <option value="Rocio">Rocio</option>
                            <option value="Carolina">Carolina</option>
                            <option value="Gisele">Gisele</option>
                        </select>
                    </p>
                    <p>
                        <button>Go !</button>
                    </p>
                </form>
            </section>
        </main>
    </body>
</html>