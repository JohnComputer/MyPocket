<!DOCTYPE html>
<html>
<head>
<title>여행 정보</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
		<script type="text/javascript">
				function myAjax() {
		      $.ajax({
		           type: "POST",
		           url: './mapdata.php',
		           data:{action:'call_this',
						 		param1 : document.getElementById('codename').value},
		           success:function(html) {
								  document.getElementById('mapinput').innerHTML = html;
		           }
		      });
		 }
		</script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="css/zoomslider.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/component.css"

<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />

<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
<!--/web-fonts-->
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,600italic,300,300italic,700,400italic' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Wallpoet' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Ubuntu:400,500,700,300' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Single+Day&display=swap" rel="stylesheet" type='text/css'>
<!--//web-fonts-->
</head>

<body>
<!--/banner-section-->
			<div class="banner-inner-compare">
			<header>
					<?php include "header.php";?>
					<!-- header.php 파일 불러오기 -->
			</header>
		    <!--banner-info-->
			<div class="banner-info">
			  <h1 ><a href="index.html">Draw World</span> </a></h1>
			    <h2 style="font-family: 'Single Day', cursive;"><span>여행</span> <span>정보 </span></h2>
										<div class="clearfix"></div>
			</div>
								<div class="clearfix"></div>
		</div>

				<!--/breadcrumb-->
		    <div class="service-breadcrumb">
				<div class="container">
					<div class="wthree_service_breadcrumb_left">
						<ul>
							<li><a href="index.html">Home</a> <i>|</i></li>
							<li>여행 정보</li>
						</ul>
					</div>
					<div class="wthree_service_breadcrumb_right">
						<h3>world information</h3>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		<!--//breadcrumb-->
		   <!--/notice-car -->
	 <script type="text/javascript" src="./js/ammap.js"></script>
	 <script type="text/javascript" src="./js/worldLow.js"></script>
	 <script type="text/javascript" src="./js/pixelMapCom.js"></script>

		<div class="notice-page w3l">
			<div class="container">
				<div class="row">
					<h3 class="tittle">여행지를 선택하세요</h3>
					<div id="map" style="width: 100%; padding: 0; margin: 0; background-color: rgba(80,80,80,1); height: 600px;"></div>
					<!-- <form class="" action="compare.php" method="post">

					</form> -->

					<center>
						ISO :&nbsp&nbsp<input id="codename" name="codename" type="text" value="CA" readonly/>
										<input id="mapclick" type="submit" value="찾기" onclick="myAjax()"/>
					</center>
					<!-- 읽을 수만있게 -->
					<div id="mapinput">

					</div>
				</div>
		</div>
	<!--//sell-price-grids -->
	</div>
		<!-- //sell-car -->
	<!-- footer -->
	<div class="footer">
		<?php include "footer.php";?>
	</div>

<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>

</body>
</html>
<?php
		if(isset($_GET["world_index"])){
					$world_index = $_GET["world_index"];
			echo "<script>
							document.getElementById('codename').value = '$world_index';
							myAjax();
						</script>";
		}
 ?>
