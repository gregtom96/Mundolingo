<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teach U By Rocio</title>
    <link href="../style/header.css" rel="stylesheet">
    <script src="../scripts/header.js" defer></script>
    <link href="../style/nav.css" rel="stylesheet">
    <link href="../style/online_class.css" rel="stylesheet">
    <script src="https://www.paypal.com/sdk/js?client-id=ATSsgmmMP_e0Re6tNGuWBHJACGxVMymoMPCqbiswFBdhRN7WlzuJlTSdNS1oF8E4SMErvDJSLuxoM5Sv&currency=EUR"></script>
</head>
    <body>
        <?php include('header.php'); ?>
        <?php include('nav.php'); ?>
        <main>
            <h2>Connect to your class</h2>

            <div id="paypal-button-container"></div>
            
            <script src="../scripts/paiement.js"></script>
        </main>
    </body>
</html>