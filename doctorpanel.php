<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="doctorpanel.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Panel</title>
</head>
<body>
    <aside>
     
        <ul class="sidebar_menu">   
            <li>
                <a href="#">
                    <i class='bx bxs-dashboard'></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-calendar' ></i>
                    <span>Appointments</span>
                    <i class='bx bx-chevron-right' ></i>
                </a>
                <ul class="submenu">    
                    <li><a href="#">View Appointment</a></li>
                    <li><a href="#">Pending Appointments</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <box-icon type='solid' name='user-detail'></box-icon>
                    <span>Profile</span>
                </a>
            </li>
            <li>
                <a href="logout.php">
                    <i class='bx bx-log-out'></i>
                    <span>Log Out</span>
                </a>
            </li>
        </ul>
    </aside>

  <section id="welcome">
    <h1 class="slide-left">Welcome<br>
        <?php
            include 'connect.php';
            $sql = "SELECT username FROM staff";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            echo  "" . $_SESSION['username'] . "";
        ?>
    </h1>
    <p class="slide-left">Catch up with what you missed while you were away. </p>
  </section>
  <section id="profile">
      <form>
          <input type="text" name="">
      </form>
  </section>

  

</body>
</html>
<?php
include 'doc-sessioncheck.php';
?>