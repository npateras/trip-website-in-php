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
      <p style="font-size:25px; text-align:center;">Θεσσαλονίκη</p>
      <p style="padding:15px; text-align:left;">Στη Βόρεια Ελλάδα, με έδρα της τη Μακεδονία, υπάρχει μια πόλη που όμοιά της δεν υπάρχει σε ολόκληρη την Ελλάδα. Μια τεράστια πολιτισμική «μαρμίτα» είναι η Θεσσαλονίκη, όπου όνειρα, ιδέες, οράματα και τάσεις κοχλάζουν υπόγεια σε μία εναλλακτική σκηνή. Μες στο πλήθος και στους δρόμους, θα διαβάσετε την ιστορία της: Θερμαϊκός κόλπος, Λευκός Πύργος, λεωφόρος Νίκης, πλατεία Αριστοτέλους, οδός Μητροπόλεως, οδός Τσιμισκή, Λαδάδικα, Αγορά Μοδιάνο, Μπιτ Παζάρ, Άνω Πόλη. Χιλιάδες χρόνια τώρα αυτή η πόλη-λιμάνι του Βορρά αποτελεί σημείο συνάντησης ανθρώπων με διαφορετικές κουλτούρες. Η Θεσσαλονίκη είναι κιμπάρισσα και δεν κρατάει μυστικά. Σπουδαία αξιοθέατα, καφέ, μπαρ, παραδοσιακές ταβέρνες, γκουρμέ εστιατόρια, έντονη νυχτερινή ζωή – όλα συναντιούνται εδώ, στην πεντάμορφη «νύφη του Θερμαϊκού». Απλά και γενναιόδωρα, θα σας χαρίσει τις καλύτερες στιγμές της.</p>
      <div style="align:middle;"><div style="float:left; padding:30px; margin-right:15px; display:inline;"><a href="https://www.tripadvisor.com.gr/Attraction_Review-g189473-d243235-Reviews-White_Tower_of_Thessaloniki-Thessaloniki_Thessaloniki_Region_Central_Macedonia.html"><img src="thess-1.jpg"></a></div><div style="float:left; padding:30px; margin-right:15px; display:inline;"><a href="https://www.tripadvisor.com.gr/Attraction_Review-g189473-d243212-Reviews-Church_of_Agios_Dimitrios-Thessaloniki_Thessaloniki_Region_Central_Macedonia.html"><img src="thess-2.jpg"></a></div></div>

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
          <td>16/2/2018</td>
          <td>Θεσσαλονίκη</td>
          <td>€15</td>
        </tr>
        <tr>
          <td>Aegean</td>
          <td>22/2/2018</td>
          <td>Θεσσαλονίκη</td>
          <td>€20</td>
        </tr>
        <tr>
          <td>Ryan Air</td>
          <td>24/3/2018</td>
          <td>Θεσσαλονίκη</td>
          <td>€5</td>
        </tr>
        <tr>
          <td>Blue Air</td>
          <td>5/4/2018</td>
          <td>Θεσσαλονίκη</td>
          <td>€10</td>
        </tr>
      </table>
      <br><br>
      <div style="margin:0; text-align:center;"><form action="KataxwrisiEkdromis.php"><input style="font-size:25px; background:#43D1AF;" type="submit" value="Πατήστε εδώ για να επιλέξετε μια εκδρομή"></form></div>
  </body>
</html>
