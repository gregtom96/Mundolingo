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
    <link href="../style/tutorial.css" rel="stylesheet">
</head>
    <body>
        <?php include('header.php'); ?>
        <?php include('nav.php'); ?>
        <main>
            <h2>How to share your calendar ?</h2>

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

            <h2>How to create a meeting with a student</h2>

                <p> When a student reserved a class with you, you will receive an email from him
                    with date and time of the meeting, plus his email address that you will need for steps 2 and 3.
                </p>

                <h3> 1. Sign in to Google Account</h3>

                <p> Go to <a href="https://meet.google.com/" target="_blank">Google Meet</a> 
                and sign in with your Google Account. 
                If you don't have one, you'll need to create one.
                </p>

                <h3> 2. Schedule a Meeting</h3>

                <p> Click on "Schedule a meeting". 
                    You'll be prompted to enter meeting details such as the title, date, time, and duration.
                    You will find these informations in the email you have received from the student.
                </p>

                <h3> 3. Add Guests</h3>

                <p> You'll need to add guests by entering their email addresses. 
                    Enter the email address of the student you have receive an email from.
                    He will receive an email invitation with a link to join the meeting.
                </p>

                <h3> 4. Join the meeting </h3>

                <p> Once you've started the meeting or when the scheduled time arrives, 
                    you can join the meeting by clicking on the meeting link or by entering the meeting code or nickname.
                </p>

                <h3> 5. Start the meeting </h3>

                <p> Once everyone has joined or at the scheduled time, 
                    you can start the meeting by clicking on the "Join now" button.
                </p>
        </main>
    </body>
</html>