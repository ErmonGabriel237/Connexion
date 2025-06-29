<?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    
// +----------+--------------+------+-----+---------+----------------+
// | Field    | Type         | Null | Key | Default | Extra          |
// +----------+--------------+------+-----+---------+----------------+
// | id       | int(11)      | NO   | PRI | NULL    | auto_increment |
// | username | varchar(20)  | NO   | UNI | NULL    |                |
// | email    | varchar(200) | NO   | UNI | NULL    |                |
// | password | varchar(20)  | NO   |     | NULL    |                |
// +----------+--------------+------+-----+---------+----------------+
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/main.css">
    <title>Connexion - Accceuil</title>
</head>
<body>
    <div class="header">
        <div class="logo"><a href="/">Connexion</a></div>
        <nav>
            <div class="nav-links">
                <ul>
                    <li class="current"><a href="#">Accceuil</a></li>
                    <li><a href="#">Service</a></li>
                    <li><a href="#">A propos</a></li>
                </ul>
            </div>
        </nav>
        <div class="btnConn">
            <?php if (!isset($_SESSION['user_id'])):?>
                    <a href="./app/auth/login.php" class="btn log">Se connecter</a>
                    <a href="./app/auth/reg.php" class="btn sign">S'enregistrer</a>
                <?php else: ?>
                    <a href="#" class="btn log">Dashboard</a>
            <?php endif;?>
        </div>
    </div>
    <div class="main">
        <div class="container">
            <h1>Bienvenue!</h1>
            <p>EG DEV</p>
        </div>
    </div>
</body>
</html>