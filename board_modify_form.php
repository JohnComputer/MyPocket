<!DOCTYPE html>
<html>
<head>
  <title>board_modify_form</title>
  <!-- for-mobile-apps -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <!-- //for-mobile-apps -->
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
  <link rel="stylesheet" type="text/css" href="css/zoomslider.css" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <link rel="stylesheet" type="text/css" href="css/component.css" />
  <!-- 폰트어썸 아이콘 -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" />
  <script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
  <!--/web-fonts-->
  	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,600italic,300,300italic,700,400italic' rel='stylesheet' type='text/css'>
  	<link href='//fonts.googleapis.com/css?family=Wallpoet' rel='stylesheet' type='text/css'>
  	<link href='//fonts.googleapis.com/css?family=Ubuntu:400,500,700,300' rel='stylesheet' type='text/css'>
<!--//web-fonts-->
</head>
<script>
  function check_input() {
      if (!document.board_form.modiSubject.value)
      {
          alert("제목을 입력하세요!");
          document.board_form.modiSubject.focus();
          return;
      }
      if (!document.board_form.modiContent.value)
      {
          alert("내용을 입력하세요!");
          document.board_form.modiContent.focus();
          return;
      }
      document.board_form.submit();
   }
</script>
</head>
<body>
  <div class="banner-inner-board">
    <header>
      <?php include "header.php";?>
      <!-- header.php 파일 불러오기 -->
    </header>
  <!--banner-info-->
    <div class="banner-info">
      <h1><a href="index.html">게시판</a></h1>
    </div>
  </div>
  <div class="service-breadcrumb">
  <div class="container">
    <div class="wthree_service_breadcrumb_left">
      <ul>
        <li><a href="index.html">Home</a> <i>|</i></li>
        <li>게시글 수정</li>
      </ul>
    </div>
    <div class="wthree_service_breadcrumb_right">
      <h3>수정</h3>
    </div>
    <div class="clearfix"> </div>
  </div>
</div>
<section>
<?php
	$num  = $_GET["num"];
	$page = $_GET["page"];
  $board_type = $_GET["board_type"];

	$con = mysqli_connect("localhost", "user", "12345", "drawworld");
	$sql = "select * from $board_type where num=$num";
	$result = mysqli_query($con, $sql);
	$row = mysqli_fetch_array($result);

	$id      = $row["id"];
	$name      = $row["name"];
	$regist_day = $row["regist_day"];
	$subject    = $row["subject"];
	$content    = $row["content"];
	$file_name    = $row["file_name"];
	$file_type    = $row["file_type"];
	$file_copied  = $row["file_copied"];
	$hit          = $row["hit"];
  $recommand      = $row["recommand"];

  if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];

  if ( $userid != $id )
  {
      echo("     <script> alert('본인글이아닙니다.');
                  history.go(-1)</script>
      ");
              exit;
  }
?>
<div class="container-fluid ">
<div class="row content">
  <div class="col-sm-2 sidenav">
  </div>
  <div class="col-sm-8 text-left">
    <div class="car-condition">
      <h3>Board</h3>

<form  name="board_form" method="post" action="./board_modify.php?num=<?=$num?>&page=<?=$page?>&board_type=<?=$board_type?>" enctype="multipart/form-data">
      <table align="center">
          <tr>
            <td>제목 : <input type="text" name="modiSubject" value="<?=$subject?>"></td>
          </tr>
          <tr>
            <td>작성자 : <?=$name?></td>
            <td>날짜 : <?=$regist_day?></td>
          </tr>
          <tr>
            <td>내용 :</td>
            <td><textarea name="modiContent" rows="10" cols="100"><?=$content?></textarea></td>
          </tr>
          <tr>
            <td>미디어 추가 :</td>
            <td><input type="file" name="modiFile" value="">
            <?php
              if($file_name) {
                  echo "이전파일 : ".$file_name;
                }
            ?></td>

          </tr>
        </table>
        <center>
          <button type="button" onclick="check_input()">수정완료</button>
          <button type="button" onclick="javascript:history.back(-1)">되돌아가기</button>
        </center>
      </form>

    </div>
  </div>
</div>
</div>

</section>
<footer>
    <?php include "footer.php";?>
</footer>
</body>
</html>
