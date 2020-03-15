<?php
  session_start();

    $comment_num = $_GET["comment_num"];
    $num  = $_GET["num"];
    $page = $_GET["page"];
    $board_type = $_GET["board_type"];

    $con = mysqli_connect("localhost", "user", "12345", "drawworld");
    $sql = "delete from comment where num = $comment_num";
    mysqli_query($con, $sql);
    mysqli_close($con);

    echo "
	     <script>
	         location.href = 'board_view.php?num=$num&page=$page&board_type=$board_type';
	     </script>
	   ";
?>
