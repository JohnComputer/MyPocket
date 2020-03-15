<?php
  session_start();

    $id = $_GET["id"];

    $con = mysqli_connect("localhost", "user", "12345", "drawworld");
    $sql = "delete from members where id = '$id'";
    mysqli_query($con, $sql);
    mysqli_close($con);

    echo "
	     <script>
	         location.href = 'logout.php';
	     </script>
	   ";
?>
