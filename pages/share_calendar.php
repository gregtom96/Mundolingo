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

            <p> To enable the students to see your calendar, you have to configure it. <br/>
                We will guide you to do so throw this tutorial.
            </p>

            <h3> 1. Open Google Calendar </h3>

            <p>Go to <a href="https://calendar.google.com/" target="_blank">Google Calendar</a> and log in to your Google account.</p>

            <h3> 2. Select your Calendar </h3>

            <p> On the left side, locate the calendar you want to share.<br/>
                Click on the three dots next to the calendar name, then select "Settings and sharing".
            </p>
            <img src="../images/calendar_1.png">
            <img src="../images/calendar_2.png">

            <h3> 3. Configure Calendar settings</h3>

            <p> Under "Access permissions," check the box "Make available to public." </p>
            <img src="../images/calendar_3.png">
            <p>You're done ! Now your students can see your calendar.</p>
        </main>
    </body>
</html>