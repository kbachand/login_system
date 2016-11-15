<?php
include 'header.php';
?>

    <?php
       $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
       if(strpos($url, 'error=empty') !== false){
         echo "All fields are required!";
       }
       elseif(strpos($url, 'error=username') !== false){
         echo "Username already exists!";
       }


      if (isset($_SESSION['id'])) {
        echo $_SESSION[id];
      }
      else {
        echo "You are not logged in!";
      }
     ?>
    <?php
     if (isset($_SESSION['id'])) {
       echo "You are already logged in!";
     }
     else {
       echo "<form action='includes/signup.inc.php' method='POST'>
           <input type='text' name='first' placeholder='Firstname'><br>
           <input type='text' name='last' placeholder='Lastname'><br>
           <input type='text' name='uid' placeholder='Username'><br>
           <input type='password' name='pwd' placeholder='Password'><br>
           <button type='submit'>SIGN UP</button>
         </form>";
     }
     ?>

  </body>
</html>
