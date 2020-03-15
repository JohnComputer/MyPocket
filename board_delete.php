<?php
  session_start();
    $num  = $_GET["num"];
    $page = $_GET["page"];
    $board_type = $_GET["board_type"];

    $con = mysqli_connect("localhost", "user", "12345", "drawworld");
    $sql = "select * from $board_type where num=$num";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);

    $id = $row["id"];
    $copied_name = $row["file_copied"];

  if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
  if (isset($_SESSION["auth"])) $loginauth = $_SESSION["auth"];

  if($loginauth != 5){
    if ( $userid != $id )
    {
      echo("     <script> alert('본인글이아닙니다.');
                  history.go(-1)</script>
      ");
                exit;
    }
  }
	if ($copied_name)
	{
		$file_path = "./data/".$copied_name;
		unlink($file_path);
    }

    $sql = "delete from $board_type where num = $num";
    mysqli_query($con, $sql);
    mysqli_close($con);

    echo "
	     <script>
	         location.href = '$board_type.php?page=$page';
	     </script>
	   ";
?>
