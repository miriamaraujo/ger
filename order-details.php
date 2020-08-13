<?php
session_start();
include "includes/booking.inc.php";
?>

<!DOCTYPE html><html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie-edge" />
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css" />



    <title>Ger's Garage | Dashboard</title>
</head>

<body>
<nav>
        <div class="logo"><a href="index.php"> Ger's Garage</a></div>

        <ul class="nav-links">
            <li><a>+353 1 6333444</a> </li>
            <li><a href="about.php">About Us</a></li>
            <?php
                if (isset($_SESSION['userId'])) {
                    
                    echo '<li><a href="userdash.php"><i class="fa fa-user-o" aria-hidden="true"></i>My Account </a></li>';
                    echo '<li><a href="includes/logout.inc.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>';
                } else {
                    echo '<li><a href="userdash.php"><i class="fa fa-user-o" aria-hidden="true"></i>My Account </a></li>';
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

    <div class="user-prof">
        <img src="img/p4.jpg" alt="" width="90px" style="border-radius: 50%;">
        <?php
        if (isset($_SESSION['userName'])) {
            echo '<h4> ' . $_SESSION['userName'] . ' </h4>';
        }
        ?>
        <a href="userdash.php" class="home-btn"><i class="fa fa-home" aria-hidden="true"></i></a>
        <a href="profile.php" class="profile-btn">My Profile</a>
        <a href="newbooking.php" class="new-book">+ New Booking</a>

    </div>


    <h3>Order Details</h3>
    
    <div class="flex-container">
        <div class="details">

       
            <h4>Flat Tyres</h4>
            <p><b>Order Number:</b> 102</p>
            <p><b>Status:</b> Booked</p>
            <p><b>Booking Date:</b> <?php echo $_SESSION['carProb'] ?> <span>- <b> Time: </b> <?php echo $_SESSION['bTime'] ?> </span></p>
            <br>

            <h4>More Details</h4>
            <p><b>Car Make:</b> <?php echo $_SESSION['vehicleMake'] ?></p>
            <p><b>Engine Type:</b> <?php echo $_SESSION['vehicleEngine'] ?></p>
            <p><b>Plan Type:</b> <?php echo $_SESSION['service_type']?></p>
            <p><b>Issues:</b> Flat Tyres</p>
            <p><b>Comments:</b> My car is so cool that it ice-creams</p>
            <p><b>Adtional Repairs:</b> This section can only be modified by Ger</p>

            <div class="btn-dtls">
                <a href="#" class="add-comment-btn"> Update Comment</a>
                <a href="bill.php" class="print-order-btn"> Print Order</a>
            </div>


        </div>

    </div>




    <div class="footer">
        <h4>Sign-Up to be updated</h4>

        <div class="footer-container">
        <form action="includes/mkt.inc.php" method="POST">
                <input type="text" name="namemkt" placeholder="Name and Last Surname">
                <input type="text" name="emailmkt" placeholder="E-mail">
                <button type="submit" name="mktsubmit">Submit</button>
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

    <script src="script.js"> </script>
</body>

</html>