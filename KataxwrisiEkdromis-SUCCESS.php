<?php include('server.php') ?> <!-- Me autin tin entoli tha xrisimopioisoume oti kwdika iparxei sto server.php -->
<!DOCTYPE html>
<html>
    <head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>Ταξιδιωτικό Γραφείο</title>
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon tis selidas -->
	</head>
	<body>
	<!--Periexwmena tou menu mas-->
      <ul>
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
      <?php
        $servername="localhost"; $username="root"; $password=""; $dbname="ekdromes";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        //Sindesi stin vasi
        $con = mysqli_connect('localhost','root','');
        mysqli_select_db ($con,'ekdromes');
        mysqli_set_charset($con, "utf8");

        //Metafora twn dedomenwn pu eixan ta pedia stin KRATISI.php se metavlites tis php
        $Username = $_SESSION['username'];
        $Fullname = $_POST['name'];
        $Email = $_POST['email'];
        $Arrival = $_POST['arrival'];
        $Departure = $_POST['departure'];
        $PhoneNumber = $_POST['phone-number'];
        $Trip = $_POST['trip'];
        $Tickets = $_POST['tickets'];

        //Den xrisimopioisa tin idia diadikasia me to KRATISI.php gia na ypologisw tin diafora twn imerominiwn dioti to sigkikrimeno den doulevw sto Firefox, alla mono sto Chrome
        $ArrivalChanged = new DateTime($Arrival);
        $DepartureChanged = new DateTime($Departure);
        $interval = $ArrivalChanged->diff($DepartureChanged);
        $Days=$interval->format('%a');

        if ($Trip=="Κύπρος - Πάφος"){$Timi_Tickets=($Tickets*65);} elseif ($Trip=="Πάτρα"){$Timi_Tickets=($Tickets*30);} elseif ($Trip=="Θεσσαλονίκη"){$Timi_Tickets=($Tickets*45);} elseif ($Trip=="Κρήτη - Χανιά"){$Timi_Tickets=($Tickets*60);}
        $Teliki_Timi=(($Timi_Tickets)*$Days);

        $sql = "insert into kataxwriseis (Username,Fullname,Phone_Number,Email,Arrival,Departure,Trip,Hmeres_Diamonis,Tickets,Teliki_Timi) values ('$Username','$Fullname','$PhoneNumber','$Email','$Arrival','$Departure','$Trip','$Days','$Tickets','$Teliki_Timi')";
        mysqli_query($con, $sql);
        echo "<br><br>";
        echo "<div class='box' style='max-width: 550px;'>Η καταχώρηση σας έχει δημιουργηθει!"."<br><hr class='Line'><br>" . "• Όνομα Χρήστη: <o style='font-size:22px;background-color: yellow;'>". $Username ."</o></br>• Ονοματεπώνυμο: <o style='font-size:22px;background-color: yellow;'>". $Fullname ."</o></br>• Email: <o style='font-size:22px;background-color: yellow;'>".$Email . "</o><br>• Τηλέφωνο: <o style='font-size:22px;background-color: yellow;'>".$PhoneNumber . "</o><br>• Άφιξη: <o style='font-size:22px;background-color: yellow;'>".$Arrival . "</o><br>• Αναχώρηση: <o style='font-size:22px;background-color: yellow;'>".$Departure . "</o><br>• Ημερές Διαμονής: <o style='font-size:22px;background-color: yellow;'>".$Days."</o><br><br>" . "<ins style='font-size:35px;'>Τελική Τιμή: €<b><o style='background-color: yellow;'>" . $Teliki_Timi."</o></b>"."</b></ins></div>";
      ?>
	</body>
</html>
