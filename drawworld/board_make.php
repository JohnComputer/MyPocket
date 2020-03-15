
<!DOCTYPE html>
<html>
<head>
<title>board_make</title>
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

<script>
  function check_input() {
      if (!document.board_make.subject.value)
      {
          alert("제목을 입력하세요!");
          document.board_make.subject.focus();
          return;
      }
      if (!document.board_make.content.value)
      {
          alert("내용을 입력하세요!");
          document.board_make.content.focus();
          return;
      }
      document.board_make.submit();
   }
</script>

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
						<h1><a href="#">게시판</a></h1>
					</div>
				</div>
				<div class="service-breadcrumb">
				<div class="container">
					<div class="wthree_service_breadcrumb_left">
						<ul>
							<li><a href="index.php">Home</a> <i>|</i></li>
							<li>Make board</li>
						</ul>
					</div>
					<div class="wthree_service_breadcrumb_right">
						<h3>Make board</h3>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
<section>
	<div class="container-fluid ">
  <div class="row content">
    <div class="col-sm-2 sidenav">
    </div>
    <div class="col-sm-8 text-left">
			<div class="car-condition">
				<h3>Board</h3>
				<form name="board_make" method="post" action="board_insert.php" enctype="multipart/form-data">
					<table align="center">
						<tr>
							<td>작성자 :</td>
							<td><?=$username?></td>
						</tr>
						<tr>
							<td>게시판 선택</td>
							<td><select name="board_type">
								<option value="canadaboard" selected>캐나다</option>
								<option value="usboard">미국</option>
								<option value="koreaboard">한국</option>
								<option value="japanboard">일본</option>
								<option value="vietnamboard">베트남</option>
								<option value="chinaboard">중국</option>
							</select></td>
						</tr>
						<tr>
							<td>제목</td>
							<td><input name="subject" type="text" maxlength="15" required/></td>
						</tr>

					<tr>
						<td>내용 :</td>
						<td><textarea name="content" rows="10" cols="100" required></textarea></td>
					</tr>
					<tr>
						<td>미디어 추가 :</td>
						<td><input type="file" name="upfile"></td>
					</tr>

			</table>
			<center>
				<button type="button" onclick="check_input()">완료</button>
				<button type="button" onclick="javascript:history.back(-1)">되돌아가기</button>
			</center>
				</form>
			</div>
    </div>
    <div class="col-sm-2 sidenav">
    </div>
  </div>
</div>
</section>

		<div class="clearfix"></div>
		<!-- //Services -->
	        <!-- //find new cars -->
			<!-- footer -->
	<div class="footer">
				<?php include "footer.php";?>
	</div>

<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>


</body>
</html>
