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
                    alert('댓글 달기는 로그인 후 이용해 주세요!');
                    history.go(-1)
                    </script>
        ");
                exit;
    }

    $comment = $_POST["comment"];

    $board_type = $_GET["board_type"];
    $board_num = $_GET["num"];
    $page = $_GET["page"];

	$regist_day = date("Y-m-d (H:i)");  // 현재의 '년-월-일-시-분'을 저장



	$con = mysqli_connect("localhost", "user", "12345", "drawworld");
	$sql = "insert into comment (board_num, board_type, comment, name, date, id) ";
	$sql .= "values($board_num, '$board_type', '$comment', '$username', '$regist_day', '$userid')";
	mysqli_query($con, $sql);  // $sql 에 저장된 명령 실행

  echo("
              <script>
              location.href='board_view.php?num=$board_num&page=$page&board_type=$board_type';
              </script>
  ");
          exit;
?>
