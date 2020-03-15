<?php

    $num   = $_GET["num"];
    $auth = $_POST["auth"];
    $point = $_POST["point"];

    $con = mysqli_connect("localhost", "user", "12345", "drawworld");
    $sql = "update members set point=$point, auth=$auth where num=$num";
    mysqli_query($con, $sql);

    mysqli_close($con);

    echo "
	     <script>
	         location.href = 'admin.php';
	     </script>
	   ";
?>
