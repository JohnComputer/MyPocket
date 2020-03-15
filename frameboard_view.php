<!DOCTYPE html>
<html>
<head>
  <title>여행지도</title>
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
  	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,600italic,300,300italic,700,400italic' rel='stylesheet' type='text/css'>
  	<link href='//fonts.googleapis.com/css?family=Wallpoet' rel='stylesheet' type='text/css'>
  	<link href='//fonts.googleapis.com/css?family=Ubuntu:400,500,700,300' rel='stylesheet' type='text/css'>
    	<link href="https://fonts.googleapis.com/css?family=Single+Day&display=swap" rel="stylesheet" type='text/css'>


</head>

<body>

  <div class="banner-inner-board">
    <header>
      <?php include "header.php";?>
      <!-- header.php 파일 불러오기 -->
    </header>
  <!--banner-info-->
    <div class="banner-info">
      <h1><a href="#">게시판</a></h1>
    </div>
  </div>
  <div class="service-breadcrumb">
  <div class="container">
    <div class="wthree_service_breadcrumb_left">
      <ul>
        <li><a href="index.php">Home</a> <i>|</i></li>
        <li>게시글</li>
      </ul>
    </div>
    <div class="wthree_service_breadcrumb_right">
      <h3>Board</h3>
    </div>
    <div class="clearfix"> </div>
  </div>
</div>
<section>
<?php
    if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
    if (isset($_SESSION["username"])) $username = $_SESSION["username"];
    if (isset($_SESSION["auth"])) $loginauth = $_SESSION["auth"];
    //관리자 권환을 준다.

	$num  = $_GET["num"];
	$page  = $_GET["page"];


	$con = mysqli_connect("localhost", "user", "12345", "drawworld");
	$sql = "select * from iframeboard where num=$num";
	$result = mysqli_query($con, $sql);

	$row = mysqli_fetch_array($result);

	$id      = $row["id"];
	$name      = $row["name"];
	$regist_day = $row["regist_day"];
	$subject    = $row["subject"];
	$content    = $row["content"];
	$hit          = $row["hit"];
  $recommand      = $row["recommand"];
  $frameadd     = $row["frameadd"];

	$new_hit = $hit + 1;
	$sql = "update iframeboard set hit=$new_hit where num=$num";
	mysqli_query($con, $sql);

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
<div class="container-fluid ">
<div class="row content">
  <div class="col-sm-2 sidenav">
  </div>
  <div class="col-sm-8 text-left">
    <div class="car-condition">
      <h3>Board</h3>
<div style="border-bottom: 1px solid #333333;">
      <table>
          <tr>
            <td>제목 : <?=$subject?></td>
          </tr>
          <tr>
            <td>작성자 : <?=$name?> (<?=$id?>) <?php echo "<img style='width:20px; height:15px;' src='./data/".$imgsrc."' width=100% height=100%/>";?></td>
            <td>날짜 : <?=$regist_day?></td>
          </tr>
          <tr>
            <td>조회수 : <?=$hit?></td>
          </tr>
        </table>
      </div>
    <table>
          <tr>
            <td>
              <?php
              if($frameadd != ""){
                echo "<iframe src=$frameadd width='700' height='600'></iframe>";
              }
        				?>
              </td>
              </tr>
              <tr>
                <td><?=$content?></td>
              </tr>

  </table>
    <center>
      <button onclick="location.href='iframeboard.php?page=<?=$page?>'">목록</button>
      <button onclick="location.href='frameboard_make.php'">글쓰기</button>
    </center>
    </div>
  </div>
</div>
</div>

</section>
<div class="footer">
      <?php include "footer.php";?>
</div>
<script src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/jquery.flexisel.js"></script>
<script src="js/bootstrap.js"></script>
</body>

</html>
