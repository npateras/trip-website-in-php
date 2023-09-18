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
      <p style="font-size:25px; text-align:center;">Κρήτη - Χανιά</p>
      <p style="padding:15px; text-align:left;">Τα Χανιά θα σας κλέψουν την καρδιά με την πρώτη ματιά. Ρωμαίοι, Βυζαντινοί, Σαρακηνοί, Ενετοί, Τούρκοι πέρασαν πριν από εσάς, δημιουργώντας αυτή την πολυπολιτισμική γωνιά της Κρήτης. Βόλτες στο λιμάνι, στον ενετικό φάρο, στο Μεγάλο Αρσενάλι, στο Κουμ Καπί, στη Χαλέπα. Διαμονή σε επαύλεις που έγιναν πολυτελείς ξενώνες και διασκέδαση σε καφέ, μπαράκια, εστιατόρια και χώρους πολιτισμού. Λίγο πιο μακριά από την πόλη το Ακρωτήρι, οι δημοφιλείς παραλίες της Αγίας Μαρίνας, του Σταλού, του Πλατανιά. Και ακόμη πιο πέρα οι παραλίες του εξωτικού Μπάλου και των Φαλάσαρνων με τα τιρκουάζ νερά. Στο νότο, το διάσημο σε όλο τον πλανήτη φαράγγι της Σαμαριάς, ο Φάραγγας, σας προσκαλεί στην περιπέτεια. Πώς χωράνε τόσες εμπειρίες σε λίγες μέρες; Δύσκολα.</p>
      <div style="align:middle;"><div style="float:left; padding:30px; margin-right:15px; display:inline;"><a href="http://www.chania-crete-greece.com/GR-akrotiri-chania.html"><img src="creete-1.jpg"></a></div><div style="float:left; padding:30px; margin-right:15px; display:inline;"><a href="http://www.chania-crete-greece.com/GR-chania-palia-poli.html"><img src="creete-2.jpg"></a></div></div>

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
          <td>11/2/2018</td>
          <td>Κρήτη - Χανιά</td>
          <td>€30</td>
        </tr>
        <tr>
          <td>Aegean</td>
          <td>19/2/2018</td>
          <td>Κρήτη - Χανιά</td>
          <td>€45</td>
        </tr>
        <tr>
          <td>Ryan Air</td>
          <td>15/3/2018</td>
          <td>Κρήτη - Χανιά</td>
          <td>€55</td>
        </tr>
        <tr>
          <td>Blue Air</td>
          <td>27/3/2018</td>
          <td>Κρήτη - Χανιά</td>
          <td>€35</td>
        </tr>
      </table>
      <br><br>
      <div style="margin:0; text-align:center;"><form action="KataxwrisiEkdromis.php"><input style="font-size:25px; background:#43D1AF;" type="submit" value="Πατήστε εδώ για να επιλέξετε μια εκδρομή"></form></div>
  </body>
</html>
