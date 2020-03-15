<?php
    $id   = $_POST["id"];
    $pass = $_POST["user_password"];
    $name = $_POST["name"];
    $nickname = $_POST["nick_name"];
    $email  = $_POST["email"];
    $mailweb = $_POST["mail_web"];
    $address = $_POST["address"];
    $phone = $_POST["phone"];
    $memtype = $_POST["memtype"];

    $email .= $mailweb;
    $regist_day = date("Y-m-d (H:i)");  // 현재의 '년-월-일-시-분'을 저장


    $con = mysqli_connect("localhost", "user", "12345", "drawworld");
    mysqli_set_charset($con, 'utf8');

	$sql = "insert into members(id, pass, name, nickname, address, phone, email, regist_day, auth, point) ";
	$sql .= "values('$id', '$pass', '$name','$nickname','$address','$phone', '$email', '$regist_day', $memtype , 0)";

	mysqli_query($con, $sql);  // $sql 에 저장된 명령 실행
    mysqli_close($con);

    echo "
	      <script>
	          location.replace(index.php);
	      </script>
	  ";
?>
