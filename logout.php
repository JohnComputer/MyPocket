<?php
  session_start();
  unset($_SESSION["userid"]);
  unset($_SESSION["username"]);
  unset($_SESSION["userpoint"]);
  unset($_SESSION["auth"]);

  echo("
       <script>
          location.href = 'index.php';
         </script>
       ");
?>
