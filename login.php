<?php include('server.php') ?> <!-- Me autin tin entoli tha xrisimopioisoume oti kwdika iparxei sto server.php -->
<!DOCTYPE html>
<html>
  <head>
    <title>Σύνδεση</title> <!-- Titlos tis selidas -->
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

    <!-- Container -->
    <div style="font-size: 120%;">
    <br><br>
    <div class="header">
    	<h2>Σύνδεση</h2>
    </div>
    <form method="post" action="login.php">
    	<?php include('errors.php'); ?>
    	<div class="input-group">
    		<label>Όνομα Χρήστη:</label>
    		<input type="text" name="username" >
    	</div>
    	<div class="input-group">
    		<label>Κωδικός Πρόσβασης:</label>
    		<input type="password" name="password">
    	</div>
    	<div class="input-group">
    		<button type="submit" class="btn" name="login_user">Σύνδεση</button>
    	</div>
    	<p>
    		Δεν είστε ακόμα μέλος<b>;</b> <a href="register.php">Εγγραφείτε</a>
    	</p>
    </form>
    </div>
  </body>
</html>
