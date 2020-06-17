<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <header>
        <nav class="nav-header-main">
            <a class="header-logo" href="#">
                <img src="./img/AGE-ADVERT.png" alt="logo" 
                style="height:50px;width:60px;float:left;">
            </a>
            <ul>
                <li><a href="./index.php">Home</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">About me</a></li>
                <li><a href="#">Contact Me</a></li>
            </ul>
            <div class="header-login">
                <?php
                    if (isset($_SESSION['userId'])) {
                        echo '<form action="includes/logout.inc.php" method="post">
                                <button type="submit" name="logout-submit">Logout</button>
                              </form>';
                    }
                    else {
                        echo '<form action="./includes/login.inc.php" method="post">
                                <input type="text" name="mailuid" placeholder="Username/Email..." id="">
                                <input type="password" name="pwd" placeholder="Pasword..." id="">
                                <button type="submit" name="login-submit">Login</button>
                                <a href="./signup.php" style="margin-right:10px;color: white; font-size: 1.rem;float:left;">Signup</a>
                              </form>';
                    }
                ?>
            </div>
        </nav>
    </header>
</body>
</html>