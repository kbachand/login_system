<?php
include 'header.php'
 ?>

 <?php
 if (isset($_SESSION['id'])) {
echo $_SESSION[id];
 echo "<div class='welcome_login'><h1>Welcome! $_SESSION[id] Thanks for logging in!!</h1></div>";
}
  else {
    header("Location: no_access.php");
    exit;

 }

?>
