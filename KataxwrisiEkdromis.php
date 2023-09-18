<?php include('server.php') ?> <!-- Me autin tin entoli tha xrisimopioisoume oti kwdika iparxei sto server.php -->
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
				<li><a href="Contact.php">Επικοινωνία</a></li>
        <li><a class="activebutton" href="KataxwrisiEkdromis.php">Καταχώρηση Εκδρομής</a></li>
        <?php
          if(isset($_SESSION['username'])) {
            echo '<a class="register-login" href="logout.php">Αποσυνδέση</a><a class="register-login-slash"><b>|</b></a><a class="register-login" href="profile.php">Προφίλ</a>'; }
          else {
            echo '<a class="register-login" href="login.php">Σύνδεση</a><a class="register-login-slash"><b>/</b></a><a class="register-login" href="register.php">Εγγραφή</a>'; } ?>
        </ul>
        <script>
  			  //Elexos twn pediwn ean exoun simplirothei
  				function Check() {
            var Fullname = document.forms["TripForm"]["name"].value;
            var Phone = document.forms["TripForm"]["phone-number"].value;
            var Arrival = document.forms["TripForm"]["arrival"].value;
            var Departure = document.forms["TripForm"]["departure"].value;
            var EmailAddress = document.forms["TripForm"]["email"].value;
            var Tickets = document.forms["TripForm"]["tickets"].value;
            if (Fullname == "") {
  						alert("Δεν έχετε συμπληρώσει όλα τα υποχρεωτικά πεδία");
  						return false;
  					}
            if (Phone == "") {
  						alert("Δεν έχετε συμπληρώσει όλα τα υποχρεωτικά πεδία");
  						return false;
  					}
            if (Arrival == "") {
  						alert("Δεν έχετε συμπληρώσει όλα τα υποχρεωτικά πεδία!");
  						return false;
  					}
            if (Departure == "") {
  						alert("Δεν έχετε συμπληρώσει όλα τα υποχρεωτικά πεδία!");
  						return false;
  					}
            if (EmailAddress == "") {
  						alert("Δεν έχετε συμπληρώσει όλα τα υποχρεωτικά πεδία!");
  						return false;
  					}
            if (Tickets == "") {
  						alert("Δεν έχετε συμπληρώσει όλα τα υποχρεωτικά πεδία!");
  						return false;
  					}


            if (Tickets == "0") {
  						alert("Δεν μπορείτε να επιλέξετε 0 εισητήρια!");
  						return false;
  					}
            if (Departure < Arrival) {
  						alert("Η ημερομηνία που έχετε επιλέξει για αναχώρηση\nδεν πρέπει να έιναι πριν απο την άφιξη!");
  						return false;
  					}
  					else if (Departure == Arrival) {
  						alert("Πρέπει να μείνετε τουλάχιστον 1 ημέρα!");
  						return false;
  					}
          }
        </script>
      <br><br><br><br>
      <div class="box" style="max-width:530px; position:relative; left:400px; float:left;">
        <form name="TripForm" action="KataxwrisiEkdromis-CONFIRM.php" target="_blank" onsubmit="return Check();" method="post">
            Καταχώρηση Εκδρομής:
            <hr class="Line">
            <input type="text" name="name" id="name" placeholder="Ονοματεπώνυμο *">
            <input type="tel" name="phone-number" id="phone-number" placeholder="Τηλέφωνο *">
            <input type="email" name="email" id="email" placeholder="Email *">
            <hr class="Line">
            <label for="trip" style="font-size:15px;">Επιλογή Εκδρομής:</label><b style="color:red;font-size:15px;">*</b>
            <select name="trip" id="trip"/>
					    <option>----</option>
  						<option id="trip-cyp">Κύπρος - Πάφος</option>
  						<option id="trip-thes">Θεσσαλονίκη</option>
  						<option id="trip-krit">Κρήτη - Χανιά</option>
  					</select>
            <hr class="Line">
            <label for="arrival" style="font-size:15px;">Αφιξη: </label><b style="color:red;font-size:15px;">*</b>
            <input type="date" name="arrival" id="arrival">
            <label for="departure" style="font-size:15px;">Αναχώρηση:</label><b style="color:red;font-size:15px;">*</b>
            <input type="date" name="departure" id="departure">
            <hr class="Line">
            <label for="tickets" style="font-size:15px;">Επιλογή Εισητηρίων:</label><b style="color:red;font-size:15px;">*</b>
					  <input type="number" name="tickets" id="tickets" min="0" max="50">
            <input type="submit" value="Υποβολή">
            <br><br><div style="font-size: 17px;text-align: center;">Τα πεδία με <b style="color: red;">*</b> είναι υποχρεωτικά!</div>
        </form>
      </div>
      <div class="box" style="max-width:500px; position:relative; right:400px; float:right;">
        <ins>Πληροφορίες για τις τιμές (Ανα Ημέρα)</ins>:<br>
        <p style="font-size:20px;">● Κύπρος - Πάφος: €65</p>
        <p style="font-size:20px;">● Θεσσαλονίκη: €45</p>
        <p style="font-size:20px;">● Κρήτη - Χανιά: €60</p>
      </div>
      <div class="footer">
        <p class="left"><ins><b>Πληροφορίες</ins>:</b><br><b style="font-size:18px;">Διεύθυνση:</b> <o style="font-size:15px;">Λ. Βύρωνος 23 & Γαλιλαίου</p>
        <p class="right"><b style="font-size:25px;"><ins>Τηλέφωνο</ins>:</b><o style="font-size:15px;"> 24020040<br><b style="font-size:25px;"><ins>Fax</ins>: </ins></b><o style="font-size:15px;">24020041</p>
        <p class="centered"><b style="font-size:25px;"><ins>Ώρες Εργασίας</ins>:</b><br><o style="font-size:15px;">Δευτέρα - Παρασκευή (11:00 – 19:00)</p>
      </div>
  </body>
</html>
