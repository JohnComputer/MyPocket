
<!DOCTYPE html>
<html>
<head>
<title>여행지도 그리기</title>
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
						<h1><a href="index.html">게시판</a></h1>
					</div>
				</div>
				<div class="service-breadcrumb">
				<div class="container">
					<div class="wthree_service_breadcrumb_left">
						<ul>
							<li><a href="index.html">Home</a> <i>|</i></li>
							<li>여행지도</li>
						</ul>
					</div>
					<div class="wthree_service_breadcrumb_right">
						<h3>여행지도</h3>
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
				<form name="board_make" method="post" action="frameboard_insert.php" enctype="multipart/form-data">
					<table align="center">
						<tr>
							<td>작성자 :</td>
							<td><?=$username?></td>
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
						<td>아이프레임 추가 :</td>
						<td><input style="width:100%" type="text" name="frameaddress"></td>
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
			<!-- footer -->
	<div class="footer">
				<?php include "footer.php";?>
	</div>

<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>


</body>
</html>
