<meta charset="utf-8">
<?php
    session_start();
    if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
    else $userid = "";
    if (isset($_SESSION["username"])) $username = $_SESSION["username"];
    else $username = "";

    if ( !$userid )
    {
        echo("
                    <script>
                    alert('게시판 글쓰기는 로그인 후 이용해 주세요!');
                    history.go(-1)
                    </script>
        ");
                exit;
    }

    $subject = $_POST["subject"];
    $content = $_POST["content"];
    $frameaddress = $_POST["frameaddress"];

	$subject = htmlspecialchars($subject, ENT_QUOTES);
	$content = htmlspecialchars($content, ENT_QUOTES);

	$regist_day = date("Y-m-d (H:i)");  // 현재의 '년-월-일-시-분'을 저장

  if(isset($_POST["frameaddress"])){
    $data_file = explode('"',$frameaddress);
    $temp = $data_file[1];
  }else{
    $data_file = "";
  }


	$con = mysqli_connect("localhost", "user", "12345", "drawworld");

	$sql = "insert into iframeboard (id, name, subject, content, regist_day, recommand, hit, frameadd) ";
	$sql .= "values('$userid', '$username', '$subject', '$content', '$regist_day', 0, 0, '$temp')";
	mysqli_query($con, $sql);  // $sql 에 저장된 명령 실행

	echo "
	   <script>
	    location.href = 'iframeboard.php';
	   </script>
	";
?>
