<?php
if (isset($_SESSION['username'])) {
	echo "Welcome";
}
else{
	echo "You must log in first";
	echo"<script>location.replace('doctorlogin.html')</script>";
}

 ?>
