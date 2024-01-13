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
    <link href="../style/share_calendar.css" rel="stylesheet">
    <script src="https://www.paypal.com/sdk/js?client-id=ATSsgmmMP_e0Re6tNGuWBHJACGxVMymoMPCqbiswFBdhRN7WlzuJlTSdNS1oF8E4SMErvDJSLuxoM5Sv&currency=EUR"></script>
</head>
    <body>
        <?php include('header.php'); ?>
        <?php include('nav.php'); ?>
        <main>
            <h2>Are you a teacher ?</h2>

            <p>To enable your students to book a lesson with you, <strong>you need to share your google calendar with them.</strong> <br/>
            We will guide you to do so throw this tutorial.
            </p>

            <h3> 1. Open Google Calendar </h3>

            <p>Go to Google Calendar and log in to your Google account.</p>

            <h3> 2. Select your calendar </h3>

            <p>On the left side, locate the calendar you want to share. 
            Click on the three dots next to the calendar name, then select "Settings and sharing".
            </p>

            <h3> 3. Configure Calendar settings</h3>

            <p>Under "Access permissions," make sure your calendar is set to "Make available to public." <br/>
            Under “Share with specific people or groups”, click on “Add people and groups”. 
            Enter the email adress of the student and set “Permissions” to “Make changes to events”. Repeat this step for every student.
            </p>

            <h3> 4. Send us the embed code </h3>

            <p>After adjusting your calendar settings, scroll down to the "Integrate calendar" section. <br/>
            Copy the iframe code under "Embed code." and send it to gregzi96@gmail.com. <br/>
            You will receive an email from us when your google calendar will be added to the website.
            </p>

        </main>
    </body>
</html>