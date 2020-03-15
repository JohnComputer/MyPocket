<?php

  $num = $_POST["num"];

  $con = mysqli_connect("localhost", "user", "12345", "drawworld");
  $sql = "update message set checking = 1 where num = $num";

  mysqli_query($con, $sql);
  mysqli_close($con);
 ?>
