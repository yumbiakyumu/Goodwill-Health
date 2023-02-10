<?php
session_start();
$password = $_POST['password'];
$username = $_POST['username'];


$db = "localhost";
$dbuser =  "root";
$dbpass = "";
$db = "goodwill";

$conn = new mysqli ('localhost',$dbuser,$dbpass,$db);
if ($conn-> connect_error) {
    echo 'ERROR - 404';
}

$sql = "SELECT * FROM `staff` WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);


if($row ['username'] == $username && $row ['password'] == $password){
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['success'] = "You have logged in";

    echo"<script>setTimeout(()=>{alert('Welcome!')},500);</script>";
    echo"<script>window.setTimeout(function() {window.location.href='doctorpanel.php';},1000);</script>";
    
}

else{
    echo "<script>alert('Check your credentials')</script>";
    echo "<script>location.replace('doctorlogin.html')</script>";

}