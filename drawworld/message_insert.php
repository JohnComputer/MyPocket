<meta charset='utf-8'>
<?php
    $send_id = $_POST['send_id'];
    $rv_id = $_POST['rv_id'];
    $messagebox = $_POST['messagebox'];

	   $regist_day = date("Y-m-d (H:i)");  // 현재의 '년-월-일-시-분'을 저장


	$con = mysqli_connect("localhost", "user", "12345", "drawworld");
	$sql = "select * from members where id='$rv_id'";
	$result = mysqli_query($con, $sql);
	$num_record = mysqli_num_rows($result);

	if($num_record)
	{
		$sql = "insert into message (send_id, rv_id, content,  regist_day) ";
		$sql .= "values('$send_id', '$rv_id', '$messagebox', '$regist_day')";
		mysqli_query($con, $sql);  // $sql 에 저장된 명령 실행
	} else {
		echo("
			<script>
			alert('수신 아이디가 잘못 되었습니다!');
			history.go(-1)
			</script>
			");
		exit;
	}

	mysqli_close($con);                // DB 연결 끊기

	echo "
	   <script>
	    self.close();
	   </script>
	";
?>
