<!DOCTYPE html>
<html>
<head>
<title>chinaboard</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" />
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="css/zoomslider.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/component.css" />
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />

<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
<!--/web-fonts-->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,600italic,300,300italic,700,400italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Wallpoet' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Ubuntu:400,500,700,300' rel='stylesheet' type='text/css'>
<!--//web-fonts-->

</head>
<body>
<!--/banner-section-->
<div class="banner-inner-board">
	<header>
		<?php include "header.php";?>
		<!-- header.php 파일 불러오기 -->
	</header>

<!--banner-info-->
	<div class="banner-info">
		<h1><a href="chinaboard.php">중국 게시판</a></h1>
	</div>
</div>
			<!-- //get-->
			<section>
<?php
if(isset($_GET["setting"])){
			$setting = $_GET["setting"];	// 세팅값 확인 (검색, 정렬 여러가지 기능)
}
else {
			$setting = "num";
}
if (isset($_GET["searching_type"])) {
		$searching_type = $_GET["searching_type"];
		$searching = $_GET["searching"];
}
 ?>
  <div class="container">
		<div class="wthree_service_breadcrumb_left">
			<ul>
				<li><a href="index.html">Home</a> <i>|</i></li>
				<li>china Board</li>
			</ul>
		</div>
		<div class="wthree_service_breadcrumb_right">
			<h3>china Board</h3>
		</div>
		<div class="row" style="padding-top:60px">
			<div style="float: right;">
				<form name="selectTable" method="get" action='chinaboard.php'>
					<table>
						<tr>
							<td>정렬 방식</td>
							<td><select onchange="this.form.submit()"name="setting">
							<option value="num" <?php if($setting == "num")echo "selected" ?>>등록순</option>
							<option value="hit" <?php if($setting == "hit")echo "selected" ?>>조회순</option>
							<option value="recommand" <?php if($setting == "recommand")echo "selected" ?>>추천순</option>
						</select></td>
						</tr>
					</table>
			</form>
			</div>
		</div>
    <div class="row">
      <table id="customers" style="padding-top:20px">
        <tr>
          <th style="width:50px">번호</th>
          <th>제목</th>
          <th style="width:100px">글쓴이</th>
          <th style="width:200px" class="visible-md">등록일</th>
					<th style="width:50px">추천수</th>
          <th style="width:50px">조회</th>
        </tr>
      <?php

        if (isset($_GET["page"]))
        $page = $_GET["page"];
        else
        $page = 1;

				if(isset($_GET["searching_type"])){
					if($searching_type == "name"){
						$con = mysqli_connect("localhost", "user", "12345", "drawworld");
						$sql = "select * from chinaboard where $searching_type = '$searching'";
						$result = mysqli_query($con, $sql);
						$total_record = mysqli_num_rows($result); // 전체 글 수
					}else{
						$searching = $searching.'%';
						$con = mysqli_connect("localhost", "user", "12345", "drawworld");
						$sql = "select * from chinaboard where $searching_type like '$searching'";
						$result = mysqli_query($con, $sql);
						$total_record = mysqli_num_rows($result); // 전체 글 수
					}
				}else{
					if($setting == "num"){
						$con = mysqli_connect("localhost", "user", "12345", "drawworld");
						$sql = "select * from chinaboard order by num desc";
						$result = mysqli_query($con, $sql);
						$total_record = mysqli_num_rows($result); // 전체 글 수
					}else if($setting == "hit"){
						$con = mysqli_connect("localhost", "user", "12345", "drawworld");
						$sql = "select * from chinaboard order by hit desc";
						$result = mysqli_query($con, $sql);
						$total_record = mysqli_num_rows($result); // 전체 글 수
					}else if($setting == "recommand"){
						$con = mysqli_connect("localhost", "user", "12345", "drawworld");
						$sql = "select * from chinaboard order by recommand desc";
						$result = mysqli_query($con, $sql);
						$total_record = mysqli_num_rows($result); // 전체 글 수
					}
				}


        $scale = 10;

        // 전체 페이지 수($total_page) 계산
        if ($total_record % $scale == 0)
        $total_page = floor($total_record/$scale);
        else
        $total_page = floor($total_record/$scale) + 1;

        // 표시할 페이지($page)에 따라 $start 계산
        $start = ($page - 1) * $scale;

        $number = $total_record - $start;

        for ($i=$start; $i<$start+$scale && $i < $total_record; $i++)
        {
        mysqli_data_seek($result, $i);
        // 가져올 레코드로 위치(포인터) 이동
        $row = mysqli_fetch_array($result);
        // 하나의 레코드 가져오기
        $num         = $row["num"];
        $id          = $row["id"];
        $name    		= $row["name"];
        $subject     = $row["subject"];
        $regist_day  = $row["regist_day"];
        $hit         = $row["hit"];
				$recommand	 = $row["recommand"];
				// 수정하자
        if ($row["file_name"])
        $file_image = "<img src='./img/file.gif'>";
        else
        $file_image = " ";

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
        <tr>
          <td style="text-align: center;"><?=$number?></td>
          <td><a href="board_view.php?num=<?=$num?>&page=<?=$page?>&board_type=chinaboard"><?=$subject?><?php if($file_image!=" "){echo"&nbsp&nbsp&nbsp<i class='fas fa-file'></i>";} ?></a></td>
          <td style="text-align: center;"><?php echo "<img style='width:20px; height:15px;' src='./data/".$imgsrc."' width=100% height=100%/>";?><?=$name?></td>
          <td class="visible-md" style="text-align: center;"><?=$regist_day?></td>
					<td style="text-align: center;"><?=$recommand?></td>
          <td style="text-align: center;"><?=$hit?></td>
        </tr>
      <?php
      $number--;
      }
      mysqli_close($con);
      ?>
      </table>
    </div>
    <div class="row" style="padding-top: 20px">
      <div class="col-md-4 blog-pagenat" >
				<ul>
    <?php
    if ($total_page>=2 && $page >= 2)
    {
    $new_page = $page-1;
    echo "<li><a class='frist' href='chinaboard.php?page=$new_page&setting=$setting'>Prev</a><a href='#'></a></li>";
    }
    else
    echo "&nbsp;";

    // 게시판 목록 하단에 페이지 링크 번호 출력
    for ($i=1; $i<=$total_page; $i++)
    {
    if ($page == $i)     // 현재 페이지 번호 링크 안함
    {
      echo "<li><a href='#' style='color:red;'>$i</a></li>";
      }
      else
      {
        echo "<li><a href='chinaboard.php?page=$i&setting=$setting'> $i </a></li>";
      }
    }
    if ($total_page>=2 && $page != $total_page)
    {
    $new_page = $page+1;
      echo "<li><a class='last' href='chinaboard.php?page=$new_page&setting=$setting'>Next</a></li>";
    }
    ?>
	</ul>
  </div>
	<div class="col-md-4">
		<form action="chinaboard.php" method="get">
			<table>
				<tr>
					<td>
						<select name="searching_type">
							<option value="subject" selected>제목</option>
							<option value="name">글쓴이</option>
						</select>
					</td>
					<td><input type="text" name="searching"></td>
					<td><input type="submit" value="검색"></td>
				</tr>
			</table>
		</form>
  </div>
  <div class="col-md-4 text-right">
    <?php
    if($userid) {
    ?>
    <button onclick="location.href='board_make.php'">글쓰기</button>
    <?php
    } else {
    ?>
    <a href="javascript:alert('로그인 후 이용해 주세요!')"><button>글쓰기</button></a>
    <?php
    }
    ?>
    </div>
  </div>
</div>
			</section>
			<div class="clearfix" style="padding-bottom: 50px"> </div>
		<!-- footer -->
	<div class="footer">
		<?php include "./footer.php";?>
	</div>

					<script src="js/jquery-1.11.1.min.js"></script>
					<script type="text/javascript" src="js/jquery.flexisel.js"></script>
					<script src="js/bootstrap.js"></script>


</body>
</html>
