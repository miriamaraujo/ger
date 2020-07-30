<?php
if(isset($_POST['book_submit'])){ // calling the action from submit button
    require 'dbh.inc.php'; //calling connection from database
    
// variables
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$umail = $_POST['umail'];
$uphone = $_POST['uphone'];
$uphone2 = $_POST['uphone2'];
$problem = $_POST['problem'];
$booktype = $_POST['booktype'];
$bookdate = $_POST['bookdate'];
$booktime = $_POST['booktime'];
$ucomments = $_POST['ucomments'];
// maybe I need to create a variable for the foreign key user id
if(){
    // empty function
}

// function that checks if are there spots available

}