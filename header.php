<?php
session_start();
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login System</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
  </head>
  <body>

    <header>
      <nav>
        <ul>
          <li><a href="index.php">HOME</a></li>
          <?php
          if (isset($_SESSION['id'])) {
              echo "<form action='includes/logout.inc.php'>
                  <button>LOG OUT</button>
                </form> <li><a href='accesspage.php'>ACCESS</a></li>";
;
          }
          else {
            echo "<form action='includes/login.inc.php' method='POST'>
                <input type='text' name='uid' placeholder='Username'>
                <input type='password' name='pwd' placeholder='Password'>
                <button type='submit'>LOGIN</button>
              </form> <li><a href='signup.php'>SIGNUP</a></li>";
          }
           ?>
        </ul>
      </nav>
    </header>
