<?php include('server.php') ?>
<?php
  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "Θα πρέπει να συνδεθείτε πρώτα!";
  	header('location: login.php'); }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php"); } ?>
<!DOCTYPE html>
<html>
  <head>
  	<title>Προφίλ</title> <!-- Titlos tis selidas -->
    <link rel="stylesheet" type="text/css" href="LoginRegisterStyle.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon tis selidas -->
    <meta charset="UTF-8"> <!-- Metatropi twn xaraktirwn tis selidas se UTF-8 -->
  </head>
  <body>
    <ul> <!-- To Menu tis selidas -->
      <li><a href="index.php">
        <img style="width:21px; height:19px;" src="home.png" alt="">
      </a></li>
      <li><a href="Contact.php">Επικοινωνία</a></li>
      <li><a href="KataxwrisiEkdromis.php">Καταχώρηση Εκδρομής</a></li>
      <?php
        if(isset($_SESSION['username'])) {
          echo '<a class="register-login" href="logout.php">Αποσυνδέση</a><a class="register-login-slash"><b>|</b></a><a class="register-login" href="profile.php">Προφίλ</a>'; }
        else {
          echo '<a class="register-login" href="login.php">Σύνδεση</a><a class="register-login-slash"><b>/</b></a><a class="register-login" href="register.php">Εγγραφή</a>'; } ?>
    </ul>
    <?php $con = mysqli_connect('127.0.0.1','root',''); mysqli_select_db ($con,'kratiseis'); mysqli_set_charset($con, "utf8"); ?>
    <div style="font-size: 120%;">  <!-- Gia na kanoume ta grammata na fenontai pio megala -->
    <br><br> <!-- 2 kenes grammes -->
        <div class="header">
        	<h2>Προφίλ</h2>
        </div>
        <div class="content">
        <!-- logged in user information -->
        <?php  if (isset($_SESSION['username'])) : ?>
        	<p>Καλωσόρισες, <strong><?php echo $_SESSION['username']; ?></strong></p>
        	<p> <a href="profile.php?logout='1'" style="color: red;">Αποσυνδέση</a> </p>
        <?php endif ?>
        <?php
          //Sindesi stin vasi
          $con = mysqli_connect('127.0.0.1','root','');
          mysqli_select_db ($con,'ekdromes');
          mysqli_set_charset($con, "utf8");

          $data=$_SESSION['username'];
          $sql = "SELECT Fullname, Phone_Number, Email, Arrival, Departure, Trip, Hmeres_Diamonis, Tickets, Teliki_Timi FROM kataxwriseis WHERE username='$data'";
          $result = $con->query($sql);



          if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                  echo "<p class='box'><br><br>" . "<div style='color:black;background-color: #00908B;'>Email:" . $row["Email"]."<br>" . "Τηλέφωνο: " . $row["Phone_Number"]."<br>" . "Άφιξη: " . $row["Arrival"]."<br>" . "Αναχώρηση: " . $row["Departure"]."<br>" . "Ταξίδι: " . $row["Trip"]."<br>" . "Ημερές Διαμονής: ".$row["Hmeres_Diamonis"]."<br>" . "<ins>Τελική Τιμή: €<b>" . $row["Teliki_Timi"]."</b>"."</b><br>" . "</ins></div></p>";
              }
          } else {
            echo "<br>Έχετε 0 καταχωρήσεις";
          }
          $con->close();
        ?>
    </div>
  </div>
  </body>
</html>
