<?php
    $num   = $_GET["num"];

    $con = mysqli_connect("localhost", "user", "12345", "drawworld");
    $sql = "delete from members where num = $num";
    mysqli_query($con, $sql);

    mysqli_close($con);

    echo "
	     <script>
	         location.href = 'admin.php';
	     </script>
	   ";
?>
