<?php
  session_start(); /* 3ekiname tin session */
  session_unset(); /* stamatame tin session */
  session_destroy(); /* katastrefoume tin session etsi wste na min eimaste log in*/
  header("Location: index.php"); /* epistrofi stin arxiki selida */
?>
