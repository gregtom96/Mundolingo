<header>
    <div class="titre">
        <h1>Teach U</h1>
    </div>
    
    <div class="menu_contextuel">
        <div class="user_info">
            <img src="../images/logo_user.png" alt="logo_user" onclick="toggleMenu()">
            <p><?php echo htmlspecialchars($_SESSION['LOGGED_USER']); ?></p>
        </div>
        <div class="sub_menu_wrap" id="subMenu">
            <div class="sub_menu">
                <img src="../images/logo_logout.png" alt="logo_logout">
                <a href="logout.php"> Logout </a>
            </div>
        </div>
    </div>
</header>