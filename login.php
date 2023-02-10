<?php

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
// else {
//     echo('Connected! ');
// }

$sql = "SELECT * FROM `login` WHERE username = '$username' AND password1 = '$password'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);

if($row ['username'] == $username && $row ['password1'] == $password){

    echo"<script>setTimeout(()=>{alert('Welcome!')},500);</script>";
    echo"<script>window.setTimeout(function() {window.location.href='patientpanel.html';},1000);</script>";
    
}

else{
    echo "<script>alert('Check your credentials')</script>";
    echo "<script>location.replace('login.html')</script>";

}


