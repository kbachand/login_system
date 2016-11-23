<?php
include 'header.php';
?>
<body>
  <div class="welcome">
    <?php

      if (isset($_SESSION['id'])) {
    echo "<h1>Thanks for checking out the site!</h1>";
     }
      else {
        echo "<div class='intro_page'><h1>You must login or signup!</h1></div>";
      }
     ?>
</div>
  </body>
</html>
