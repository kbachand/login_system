<?php
include 'header.php';
?>

    <?php
      if (isset($_SESSION['id'])) {
        echo $_SESSION[id];
        echo $_SESSION['first_name'];
      }
      else {
        echo "You must login or signup!";
      }
     ?>

  </body>
</html>
