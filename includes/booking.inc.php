<?php
if (isset($_POST['book-submit'])) {
    require 'dbh.inc.php';

    $name = mysqli_real_escape_string($conn, $_POST['fname']);
    $mail = mysqli_real_escape_string($conn, $_POST['umail']);
    $phone = mysqli_real_escape_string($conn, $_POST['uphone']);
    $carMake = mysqli_real_escape_string($conn, $_POST['cmake']);
    $carEngine = mysqli_real_escape_string($conn, $_POST['cengine']);
    $carProb = mysqli_real_escape_string($conn, $_POST['cprob']);
    $bDate = mysqli_real_escape_string($conn, $_POST['bdate']);
    $bTime = mysqli_real_escape_string($conn, $_POST['btime']);
    $commment = mysqli_real_escape_string($conn, $_POST['comment']);

    // Query
    $query = mysqli_query($conn,  "INSERT INTO booking(u_name, u_mail, u_phone, c_make, c_eng, c_prob, b_date, b_time, comments) VALUES ('$name', '$mail', '$phone', '$carMake', '$carEngine', '$carProb', '$bDate', '$bTime', '$commment')");
    if ($query) {
        $_SESSION['id_bk'] = $db->insert_id;
        session_start();
        $_SESSION['userNamebk'] = $row['u_name'];
        $_SESSION['userMailbk'] = $row['u_mail'];
        $_SESSION['userPhonebk'] = $row['u_phone'];
        $_SESSION['vehicleMake'] = $row['c_make'];
        $_SESSION['vehicleEngine'] = $row['c_eng'];
        $_SESSION['carProb'] = $row['c_prob'];
        $_SESSION['bDate'] = $row['b_date'];
        $_SESSION['bTime'] = $row['b_time'];
        $_SESSION['comments'] = $row['comments'];
        
        header('location: ../newbooking.php?bookingsuccess');
        exit();
    } else {
        $_SESSION['error'] = "Sorry, check your inputs for errors";
    }
}
