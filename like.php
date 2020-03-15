<?php
  $num  = $_GET["num"];
  $board_type = $_GET["board_type"];

  $con = mysqli_connect("localhost", "user", "12345", "drawworld");
  $sql = "select * from $board_type where num=$num";
  $result = mysqli_query($con, $sql);
	$row = mysqli_fetch_array($result);
		$recommand	 = $row["recommand"];
    $new_recommand = $recommand+1;

    $sql = "update $board_type set recommand=$new_recommand where num=$num";
    mysqli_query($con, $sql);

    echo("
          <script>
            window.close();
          </script>
        ");
?>
