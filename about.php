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
    <title>Ger's Garage | About Us</title>
</head>

<body>



    <div class="banner" style="background-image:url('img/3031141.jpg');">
        <div class="overlay"></div>
        <nav>
            <div class="logo"><a href="index.php"> Ger's Garage</a></div>

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
                <div></div>
                <div></div>
                <div></div>
            </div>
        </nav>
        <script src="script.js"> </script>
        <div class="txt">
            <h2>Let's get acquainted</h2>
        </div>

    </div>
    <div class="container">
        <h3>What we do</h3>
        <div class="flex-container">
            <div>
                <img src="img/png/007-crane-1.png" width="65px" alt="">
                <h4>Car Rescue </h4>
                <p>We pick you up 24/7</p>
                <p>Wherever you are</p>
            </div>
            <div>
                <img src="img/png/037-car-wash-3.png" width="65px" alt="">
                <h4>Car Wash</h4>
                <p>We will make your car</p>
                <p>Shine bright like a diamond</p>
            </div>
            <div>
                <img src="img/png/017-check.png" width="70px" alt="">
                <h4>Complete Check-up </h4>
                <p>We make sure everything is ok</p>
                <p>Don't you worry luv</p>
            </div>
        </div>
        <div class="flex-container">
            <div>
                <img src="img/png/007-crane-1.png" width="65px" alt="">
                <h4>Car on the Truck </h4>
                <p>We pick you up 24/7</p>
                <p>Wherever you are</p>
            </div>
            <div>
                <img src="img/png/037-car-wash-3.png" width="65px" alt="">
                <h4>Car Taking a Shower</h4>
                <p>We will make your car</p>
                <p>Shine bright like a diamond</p>
            </div>
            <div>
                <img src="img/png/017-check.png" width="65px" alt="">
                <h4>Car on the Sheet </h4>
                <p>We make sure everything is ok</p>
                <p>Don't you worry luv</p>
            </div>
        </div>

        <h3>Who we are </h3>
        <div class="flex-container">
            <div class="flex-div">
                <h4>Our Mission</h4>
                <p>Rich in mystery hydrogen atoms citizens of distant epochs descended from astronomers take root and
                    flourish finite but unbounded. Realm of the galaxies Apollonius of Perga white dwarf rings of Uranus
                    tingling of the spine with pretty stories for which there's little good evidence. Network of
                    wormholes dream of the mind's eye made in the interiors of collapsing stars laws of physics bits of
                    moving fluff permanence of the stars and billions upon billions upon billions upon billions upon
                    billions upon billions upon billions.</p>
            </div>
            <div class="flex-div">
                <h4>Our Vision</h4>
                <p>Rich in mystery hydrogen atoms citizens of distant epochs descended from astronomers take root and
                    flourish finite but unbounded. Realm of the galaxies Apollonius of Perga white dwarf rings of Uranus
                    tingling of the spine with pretty stories for which there's little good evidence. Network of
                    wormholes dream of the mind's eye made in the interiors of collapsing stars laws of physics bits of
                    moving fluff permanence of the stars and billions upon billions upon billions upon billions upon
                    billions upon billions upon billions.</p>
            </div>

        </div>

    </div>

    <div class="maps">
        <h3>Find Us</h3>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2381.844273032701!2d-6.261063984857355!3d53.346043782436006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48670e84cfcc9cbf%3A0x689c7d1c132a0ddf!2sCCT%20College%20Dublin!5e0!3m2!1sen!2sie!4v1592746759440!5m2!1sen!2sie"
            width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
            tabindex="0"></iframe>
    </div>

    <div class="footer">
        <h4>Sign-Up to be updated</h4>

        <div class="footer-container">
            <form action="">
                <input type="text" placeholder="Name and Last Surname">
                <input type="text" placeholder="E-mail">
                <button>Submit</button>
            </form>
        </div>
        <ul>
            <li><a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-instagram"></a></li>
        </ul>
        <div class="footer-info">
            <p>CCT College Dublin</p>
            <p> 30 - 34 Westmoreland St. Dublin 2</p>
            <p>Ireland</p>
            <p> +353 1 6333444</p>
            <p> info@cct.ie</p>
        </div>


    </div>
</body>

</html>