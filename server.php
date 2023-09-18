<?php
session_start(); /* 3ekiname tin session */

//dilwsi metavlitwn
$username = "";
$fullname = "";
$surname = "";
$address = "";
$email    = "";
$errors = array();

//sindesi stin vasi
$db = mysqli_connect('localhost', 'root', '', 'registration');
mysqli_set_charset($db, "utf8");

//EGGRAFI XRISTI
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $fullname = mysqli_real_escape_string($db, $_POST['fullname']);
  $address = mysqli_real_escape_string($db, $_POST['address']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled
  if (empty($username)) { array_push($errors, "Το Όνομα Χρήστη είναι υποχρεωτικό"); }
  if (empty($fullname)) { array_push($errors, "Το Όνομα είναι υποχρεωτικό"); }
  if (empty($address)) { array_push($errors, "Η Διεύθυνση είναι υποχρεωτική"); }
  if (empty($email)) { array_push($errors, "Το Email είναι υποχρεωτικό"); }
  if (empty($password_1)) { array_push($errors, "O Κωδικός Πρόσβασης είναι υποχρεωτικός"); }
  if ($password_1 != $password_2) {
	array_push($errors, "Οι δύο κωδικοί πρόσβασης δεν ταιριάζουν"); }
  if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $username)) {
    array_push($errors, "To Όνομα Χρήστη δεν πρέπει να περιέχει ειδικούς χαρακτήρες"); }
  if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $fullname)) {
    array_push($errors, "To Ονοματεπώνυμο δεν πρέπει να περιέχει ειδικούς χαρακτήρες"); }
  if (!preg_match('/[^Α-Ωα-ω]/', $password_1)) {
  array_push($errors, "Ο κωδικός πρόσβασης δεν πρέπει να περιέχει Ελληνικούς χαρακτήρες"); }

  // register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database
  	$query = "INSERT INTO users (Username, Email, Fullname, Address, Password)
  			  VALUES('$username', '$email', '$fullname', '$address','$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	header('location: profile.php'); }
}
//SINDESI XRISTI
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  if (empty($username)) {
  	array_push($errors, "Το Όνομα Χρήστη είναι υποχρεωτικό");
  }
  if (empty($password)) {
  	array_push($errors, "O Κωδικός Πρόσβασης είναι υποχρεωτικός"); }
  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  header('location: profile.php');
  	}else {
  		array_push($errors, "Λάθος συνδυασμός ονόματος χρήστη/κωδικού πρόσβασης");
  	}
  }
} ?>
