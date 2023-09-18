<?php include('server.php') ?> <!-- Me autin tin entoli tha xrisimopioisoume oti kwdika iparxei sto server.php -->
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="style.css"> <!-- Tha xrisimopioisoume styling gia css apo to style.css -->
    <title>Ταξιδιωτικό Γραφείο</title> <!-- O titlos pou tha emfanizete sto tab -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <meta charset="UTF-8">
  </head>
  <body>
      <ul> <!-- To Menu tis selidas -->
				<li><a class="activebutton" href="index.php">
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
      <div style="font-size:25px; text-align:center;">« Προτεινόμενες Εκδρομές: »</div><br>
      <div class="slideshow-container border">
        <div class="mySlides fade">
          <div class="numbertext">1 / 3</div> <!-- Autos einai o arithmos tis eikonas pou parousiazete sto slideshow kai xrisimopia to css numbertext -->
          <a href="cyprus.php" target="_blank"> <!-- Dimiourgoume ena link stin eikona etsi wste otan tin patisei o xristis na metavei stin analogi protinomeni ekdromi -->
            <img src="slideshow-1.jpg" style="width:100%">
          </a>
          <div class="SlideshowCaption">Κύπρος</div> <!-- Einai to keimeno sto slideshow katw aristera -->
        </div>

        <div class="mySlides fade">
          <div class="numbertext">2 / 3</div> <!-- Autos einai o arithmos tis eikonas pou parousiazete sto slideshow kai xrisimopia to css numbertext -->
          <a href="thessaloniki.php" target="_blank"> <!-- Dimiourgoume ena link stin eikona etsi wste otan tin patisei o xristis na metavei stin analogi protinomeni ekdromi -->
            <img src="slideshow-3.jpg" style="width:100%">
          </a>
          <div class="SlideshowCaption">Θεσσαλονίκη</div> <!-- Einai to keimeno sto slideshow katw aristera -->
        </div>

        <div class="mySlides fade">
          <div class="numbertext">3 / 3</div> <!-- Autos einai o arithmos tis eikonas pou parousiazete sto slideshow kai xrisimopia to css numbertext -->
          <a href="creete.php" target="_blank"> <!-- Dimiourgoume ena link stin eikona etsi wste otan tin patisei o xristis na metavei stin analogi protinomeni ekdromi -->
            <img src="slideshow-4.jpg" style="width:100%">
          </a>
          <div class="SlideshowCaption">Κρήτη</div> <!-- Einai to keimeno sto slideshow katw aristera -->
        </div>
      </div>
      <br>

      <script>
        var slideIndex = 0; //Me auto to slideshow tha arxizei apo tin proti eikona, 0=proti, 1=defteri, 2=triti
        showSlides(); //Kaloume tin sinartisi

        function showSlides() {
          var i; //dilwsi metavlitis i
          var slides = document.getElementsByClassName("mySlides");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none"; //Me to slides.length 3eroume posa einai ta slides
            }
          slideIndex++; //Proxorame sto epomeno slide
            if (slideIndex > slides.length) {slideIndex = 1}
          slides[slideIndex-1].style.display = "block";
          setTimeout(showSlides, 4000); //Allagi eikonas kathe 4 deuterolepta
      }
      </script>
  </body>
</html>
