<?php include('server.php') ?> <!-- Me autin tin entoli tha xrisimopioisoume oti kwdika iparxei sto server.php -->
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Ταξιδιωτικό Γραφείο</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <meta charset="UTF-8">
  </head>
  <body>
      <ul> <!-- To Menu tis selidas -->
				<li><a href="index.php">
          <img style="width:21px; height:19px;" src="home.png" alt="">
        </a></li>
				<li><a class="activebutton" href="Contact.php">Επικοινωνία</a></li>
        <li><a href="KataxwrisiEkdromis.php">Καταχώρηση Εκδρομής</a></li>
        <?php
          if(isset($_SESSION['username'])) {
            echo '<a class="register-login" href="logout.php">Αποσυνδέση</a><a class="register-login-slash"><b>|</b></a><a class="register-login" href="profile.php">Προφίλ</a>'; }
          else {
            echo '<a class="register-login" href="login.php">Σύνδεση</a><a class="register-login-slash"><b>/</b></a><a class="register-login" href="register.php">Εγγραφή</a>'; } ?>
			</ul>

      <br><br><br><br>
      <div class="box">
        <form name="form">
            Επικοινωνήστε μαζί μας:
            <hr class="Line">
            <input type="text" name="name" placeholder="Ονοματεπώνυμο">
            <input type="email" name="email" placeholder="Email">
            <input type="text" name="subject" placeholder="Θέμα">
            <textarea name="details" placeholder="Λεπτομέριες"></textarea>
            <input type="submit" value="Υποβολή">
        </form>
      </div>
      <div class="footer">
        <!-- Oi pio katw plirofories den einai alitheis kai xrisimopoithikan san paradeigma -->
        <p class="left"><ins><b>Πληροφορίες</ins>:</b><br><b style="font-size:18px;">Διεύθυνση:</b> <o style="font-size:15px;">Λ. Βύρωνος 23 & Γαλιλαίου</p>
        <p class="right"><b style="font-size:25px;"><ins>Τηλέφωνο</ins>:</b><o style="font-size:15px;"> 24020040<br><b style="font-size:25px;"><ins>Fax</ins>: </ins></b><o style="font-size:15px;">24020041</p>
        <p class="centered"><b style="font-size:25px;"><ins>Ώρες Εργασίας</ins>:</b><br><o style="font-size:15px;">Δευτέρα - Παρασκευή (11:00 – 19:00)</p>
      </div>
  </body>
</html>
