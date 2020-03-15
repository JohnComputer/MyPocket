<?php
    session_start();

    if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
    if (isset($_SESSION["username"])) $username = $_SESSION["username"];

    $cntline = $_POST["param1"];  // int
    $board_num = $_POST["board_num"];
    $board_type = $_POST["board_type"];


    $con = mysqli_connect("localhost", "user", "12345", "drawworld");
    $sql = "select * from comment where board_num=$board_num AND board_type = '$board_type' order by num desc";
    $result = mysqli_query($con, $sql);
    $total_record = mysqli_num_rows($result);

    $start = $cntline;  // cntline 오는대로 받기
    $commentline = $cntline;
    $check = $total_record - $cntline;

    if( $check > 0){

      if($check < 10){
        $commentline = $commentline + $total_record - $cntline;
      }else{
        $commentline = $cntline + 10; // 10개씩 뽑기
      }

    if($commentline >= $total_record) $cntline = $total_record;

    for($i=$start; $i < $commentline; $i++){
        mysqli_data_seek($result, $i);
        $row = mysqli_fetch_array($result);

        $comment_num = $row["num"];
        $comment = $row["comment"];
        $name = $row["name"];
        $date = $row["date"];
        $id = $row["id"];

        $con = mysqli_connect("localhost", "user", "12345", "drawworld");
        $sql = "select auth, point from members where id = '$id'";
        $memberpoint = mysqli_query($con, $sql);
        $row2 = mysqli_fetch_array($memberpoint);

        $point = $row2["point"];
        $auth = $row2["auth"];

        if($auth == 5){
          $imgsrc = '50.gif';	// 관리자 AUTH 권한 걸러내기
        }else{
          if($point > 0 && $point <= 500){
            $imgsrc = '1.gif';
          }else if($point > 500 && $point <= 1000){
            $imgsrc = '2.gif';
          }else if($point > 1000 && $point <= 2000){
            $imgsrc = '3.gif';
          }else if($point > 2000 && $point <= 3000){
            $imgsrc = '4.gif';
          }else{
            $imgsrc = '5.gif';
          }
        }
?>
<div id="commentinput" style="border: 2px solid #A566FF;">
<table style="width:100%">
    <tr style="border-bottom: 1px solid #B7F0B1;">
      <td style="width:50%">작성자 : <?=$name?> (<?=$id?>) <?php echo "<img style='width:20px; height:15px;' src='./data/".$imgsrc."' width=100% height=100%/>";?></td>
      <td style="width:30%">날짜 : <?=$date?></td>
    </tr>
    <tr>
      <td><?=$comment?></td>
      <td><?php if($userid == $id){echo "<button type='button' name='button' onclick='dele_comment($comment_num)'>삭제</button>";} ?></td>
      <!-- 보낼 때 매개변수를 줘서 넘버값을 보낸다 -->
    </tr>
  </table>
  </div>
  <br>
<?php } }?>
