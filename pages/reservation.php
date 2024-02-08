<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/vnd.icon" href="../images/favicon.ico">
        <title>Mundolingo</title>
        <link href="../style/reservation.css" rel="stylesheet">
        <link href="../style/header.css" rel="stylesheet">
        <script src="../scripts/header.js" defer></script>
        <link href="../style/nav.css" rel="stylesheet">
        <script src="https://www.paypal.com/sdk/js?client-id=ATecrMoU7ipg_Jz5Tom2fLVMDN_oEdpmTWcK4uZs1fi4G7bvx5fQZyouw_ExH9jNw2FUGvq3R3eV7EuU&currency=EUR"></script>
        <script src="../scripts/functions.js" defer></script>
        <script src="../scripts/main.js" defer></script>
    </head>

    <body>
        <?php include('header.php'); ?>
        <?php include('nav.php'); ?>
        <main>
            <h2>Make your reservation</h2>
            <section>
                <p>
                    <label for="class">Choose your class :</label>
                    <select name="class" id="class" required>
                        <option value="introduction">Introduction class (free)</option>
                        <option value="lesson">Lesson</option>
                    </select>
                </p>
                <p>
                    <label for="language">Choose your language :</label>
                    <select name="language" id="language" required>
                        <option value="english">English</option>
                        <option value="french">French</option>
                        <option value="spanish">Spanish</option>
                    </select>
                </p>
                <!--
                <p>
                    <label for="teacher">Choose your teacher :</label>
                    <select name="teacher" id="teacher" required>
                        <option value="Greg">Greg</option>
                    </select>
                </p>
                <p>
                    <button onclick="firstStep()"> Go ! </button>
                </p>-->
            </section>
        </main>
    </body>
</html>