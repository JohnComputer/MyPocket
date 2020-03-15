<?php

    $id   = $_POST["id"];
    $pass = $_POST["user_password"];
    $nickname = $_POST["nick_name"];
    $address = $_POST["address"];
    $phone = $_POST["phone"];

    $con = mysqli_connect("localhost", "user", "12345", "drawworld");

    $sql = "update members set pass='$pass', nickname='$nickname' , address='$address', phone='$phone'";
    $sql .= " where id='$id'";
    mysqli_query($con, $sql);

    mysqli_close($con);

    // echo "
	  //     <script>
	  //         location.href = 'index.php';
	  //     </script>
	  // ";
?>
