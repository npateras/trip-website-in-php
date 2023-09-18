<?php include('server.php') ?> <!-- Me autin tin entoli tha xrisimopioisoume oti kwdika iparxei sto server.php -->
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="style.css"> <!-- Tha xrisimopioisoume styling gia css apo to style.css -->
    <title>Ταξιδιωτικό Γραφείο</title> <!-- O titlos pou tha emfanizete sto tab -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <meta charset="UTF-8">
    <style>
      table {
          font-family: arial, sans-serif;
          border-collapse: collapse;
          width: 100%; }
      td, th {
          border: 1px solid #dddddd;
          text-align: left;
          padding: 8px; }
      tr:nth-child(even) {
          background-color: #dddddd; }
    </style>
  </head>
  <body>
      <ul> <!-- To Menu tis selidas -->
				<li><a href="index.php">
          <img style="width:21px; height:19px;" src="home.png" alt="">
        </a></li>
				<li><a href="Contact.php">Επικοινωνία</a></li>
        <li><a href="KataxwrisiEkdromis.php">Καταχώρηση Εκδρομής</a></li>
        <?php //Ean sto session yparxei to username kai den einai NULL (isset) tote simenei oti o xristis einai logged in giauto tha emfanizei kai ta analoga koumpia sto menu
          if(isset($_SESSION['username'])) {
            echo '<a class="register-login" href="logout.php">Αποσυνδέση</a><a class="register-login-slash"><b>|</b></a><a class="register-login" href="profile.php">Προφίλ</a>'; }
          else {
            echo '<a class="register-login" href="login.php">Σύνδεση</a><a class="register-login-slash"><b>/</b></a><a class="register-login" href="register.php">Εγγραφή</a>'; } ?>
			</ul>

      <br><br><br><br>
      <p style="font-size:25px; text-align:center;">Κύπρος - Πάφος</p>
      <p style="padding:15px; text-align:left;">Η Πάφος είναι μια πόλη στη νοτιοδυτική ακτή της Μεσογείου. Κατοικείται από τη νεολιθική εποχή, έχει αρκετές τοποθεσίες που σχετίζονται με τη λατρεία της θεάς Αφροδίτης, της οποίας η μυθική γενέτειρα ήταν στην Παλιά Πάφο (Κούκλια). Η Νέα Πάφος είναι η σύγχρονη πόλη που ενσωματώνει το λιμάνι και τα αρχαία ερείπια τάφων, φρουρίων, θεάτρων και βιλών στο Αρχαιολογικό Πάρκο Πάφου.</p>
      <div style="align:middle;"><div style="float:left; padding:30px; margin-right:15px; display:inline;"><a href="https://en.wikipedia.org/wiki/Petra_tou_Romiou"><img src="cyprus-1.jpg"></a></div><div style="float:left; padding:30px; margin-right:15px; display:inline;"><a href="https://el.wikipedia.org/wiki/%CE%9A%CE%AC%CF%83%CF%84%CF%81%CE%BF_%CF%84%CE%B7%CF%82_%CE%A0%CE%AC%CF%86%CE%BF%CF%85"><img src="cyprus-2.jpg"></a></div><div style="float:left; padding:30px; margin-right:15px; display:inline;"><a href="https://www.cyprusisland.net/cyprus-beaches/blue-lagoon-beach"><img src="cyprus-3.jpg"></a></div></div>

      <table>
        <tr><th>Προτεινόμενα Εισητήρια (Εκπτώσεις):</th></tr>
        <tr>
          <th>Eταιρεία:</th>
          <th>Ημ/νια (Αναχώρηση):</th>
          <th>Ταξίδι:</th>
          <th>Τιμή:</th>
        </tr>
        <tr>
          <td>Cobalt</td>
          <td>20/3/2018</td>
          <td>Κύπρος - Πάφος</td>
          <td>€50</td>
        </tr>
        <tr>
          <td>Aegean</td>
          <td>25/2/2018</td>
          <td>Κύπρος - Πάφος</td>
          <td>€40</td>
        </tr>
        <tr>
          <td>Cobalt</td>
          <td>30/2/2018</td>
          <td>Κύπρος - Πάφος</td>
          <td>€60</td>
        </tr>
        <tr>
          <td>Aegean</td>
          <td>12/4/2018</td>
          <td>Κύπρος - Πάφος</td>
          <td>€25</td>
        </tr>
      </table>
      <br><br>
      <div style="margin:0; text-align:center;"><form action="KataxwrisiEkdromis.php"><input style="font-size:25px; background:#43D1AF;" type="submit" value="Πατήστε εδώ για να επιλέξετε μια εκδρομή"></form></div>
  </body>
</html>
