<?php
if(isset($_POST['book-submit'])){ // calling the action from submit button
    require 'dbh.inc.php'; //calling connection to the database
    
// variables

$fname = $_POST['fname'];
$umail = $_POST['umail'];
$uphone = $_POST['uphone'];
$problem = $_POST['problem'];
$booktype = $_POST['booktype'];
$bookdate = $_POST['bookdate'];
$booktime = $_POST['booktime'];
$ucomments = $_POST['ucomments'];
// maybe I need to create a variable for the foreign key user id
if(empty($fname) || empty($umail) || empty($uphone) || empty($problem) || empty($btype) || empty($bdate) || empty($btime) ){
     header("Location: ../newbooking.php?error?=emptyfieldsyo");
    // empty function
}

// SQL Function that sends the info to the table.
$sql = "INSERT INTO bookings (u_name, u_mail, u_phone, car_problem, vehicle_type, booking_date, booking_time, u_comment ) VALUES (?, ?, ?, ?, ?, ?, ?, ? );";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("Location: ../signup.php?error=sqlerror");
                exit();
            } else {

                mysqli_stmt_bind_param($stmt, "ssssssss", $fname, $umail, $uphone, $problem, $btype, $bdate, $btime, $ucomments);
                mysqli_stmt_execute($stmt);
                header("Location: ../newbooking.php?booking=success");
                exit();
            }


mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
else{
    header("Location: ../newbooking.php");
    exit();  
}