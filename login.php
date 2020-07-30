<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie-edge" />
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css" />



    <title>Ger's Garage | Login</title>
</head>

<body>
    <header>
        <nav>
            <div class="logo"><a href="index.php">Ger's Garage</a></div>
            <ul class="nav-links">
                <li><a>+353 1 6333444</a> </li>
                <li><a href="about.php">About Us</a></li>
                <?php
                if (isset($_SESSION['userId'])) {
                    
                    echo '<li><a href="userdash.php"><i class="fa fa-user-o" aria-hidden="true"></i>My Profile </a></li>';
                    echo '<li><a href="includes/logout.inc.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>';
                } else {
                    echo '<li><a href="userdash.php"><i class="fa fa-user-o" aria-hidden="true"></i>My Profile </a></li>';
                }

                ?>
                <li><a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-instagram"></a></li>
            </ul>
            <div class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        </nav>
        <div class="flex-container">
            <div class="flex-div">
                <h3> Login here</h3>
                <form action="includes/login.inc.php" method="POST">
                    <input type="email" name="umail" placeholder="E-mail">
                    <input type="password" name="pwd" placeholder="Password">
                    <input type="submit" name="login-submit" value="Login">
                    <div class="rememberme">
                        <input type="checkbox" name="remember" id="remember"><label for="remember">Remember me </label>
                    </div>
                </form>
            </div>
            <div class="flex-div">
                <h3>Create Account</h3>
                <form action="includes/signup.inc.php" method="POST">
                    <input type="text" name="uname" placeholder="Username">
                    <input type="text" name="umail" placeholder="E-mail">
                    <input type="password" name="pwd" placeholder="Password">
                    <input type="password" name="pwd-repeat" placeholder="Confirm password">
                    <input  type="submit" name="signup-submit" value="Create Account">
                </form>
            </div>
        </div>
    </header>
    <script src="script.js"> </script>
</body>

</html>