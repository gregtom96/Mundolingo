<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../style/menu_contextuel.css" rel="stylesheet">
    <script src="../scripts/menu_contextuel.js" defer></script>
</head>
<body>
    <div class="menu_contextuel">
        <div class="user_info">
            <img src="../images/logo_user.png" alt="logo_user" onclick="toggleMenu()">
            <p><?php echo $_SESSION['LOGGED_USER']; ?></p>
        </div>
        <div class="sub-menu-wrap" id="subMenu">
            <div class="sub-menu">
                <img src="../images/logo_logout.png" alt="logo_logout">
                <a href="logout.php"> Logout </a>
            </div>
        </div>
    </div>
</body>
</html>