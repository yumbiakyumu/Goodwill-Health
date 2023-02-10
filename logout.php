<?php
  session_start();
  session_destroy();
  echo "You have been logged out.";
  echo "<script>location.replace('Index.html')</script>";
?>