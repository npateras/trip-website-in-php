<?php include('server.php') ?> <!-- Me autin tin entoli tha xrisimopioisoume oti kwdika iparxei sto server.php -->
<!DOCTYPE html>
<html>
<head>
  <title>Εγγραφή</title> <!-- Titlos tis selidas -->
  <link rel="stylesheet" type="text/css" href="LoginRegisterStyle.css">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon tis selidas -->
  <meta charset="UTF-8"> <!-- Metatropi twn xaraktirwn tis selidas se UTF-8 -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
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
  <div style="font-size: 120%;">
  <br><br>
  <div class="header">
  	<h2>Εγγραφή</h2>
  </div>

  <form method="POST" action="register.php">
  	<?php include('errors.php'); ?> <!-- Me autin tin entoli tha xrisimopioisoume oti kwdika iparxei sto errors.php. Edw ola mas ta provlimata sxetika me tous elexous tha efanizontai panw apo tin forma -->
  	<div class="input-group">
  	  <label>Όνομα Χρήστη:</label>
  	  <input type="text" name="username" id="username" value="<?php echo $username; ?>">
  	</div>
    <div class="input-group">
      <label>Ονοματεπώνυμο:</label>
      <input type="text" name="fullname" id="fullname" value="<?php echo $fullname; ?>">
    </div>
    <div class="input-group">
  	  <label>Διεύθυνση:</label>
  	  <input type="text" name="address" id="address" value="<?php echo $address; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email:</label>
  	  <input type="email" name="email" id="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Κωδικός Πρόσβασης:</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Επιβεβαίωση Κωδικού Πρόσβασης:</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Εγγραφή</button>
  	</div>
    <script  src="preventspaces.js"></script> <!-- Gia kapio logo den douleve to js ean den to evaza akrivos katw apo tin forma, me auto to js tha empodisoume ton xristi na valei spaces sta katalilla pedia -->
  	<p>
  		Είστε ήδη μέλος<b>;</b> <a href="login.php">Συνδεθείτε</a>
  	</p>
  </form>
  </div>
</body>
</html>
