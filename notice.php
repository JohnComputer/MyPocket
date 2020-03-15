
<!DOCTYPE html>
<html>
<head>
<title>Notice</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
<style>
	.notice-content table{
		border-collapse: collapse;
		width: 100%;
	}
	.notice-content th, td{
		text-align: left;
		padding: 8px;
	}
	.notice-content tr:nth-child(even){background-color: #FAED7D}
	.notice-content tr:nth-child(odd){background-color: #f2f2f2}
	.notice-content th {
	  background-color: #4CAF50;
	  color: white;
	}
</style>
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
			    <h2 style="font-family: 'Single Day', cursive;"><span>여행가기전</span> <span>주의사항! </span></h2>
										<div class="clearfix"></div>
			</div>
								<div class="clearfix"></div>
		</div>
			<!-- //location-->
				<!--/breadcrumb-->
		    <div class="service-breadcrumb">
				<div class="container">
					<div class="wthree_service_breadcrumb_left">
						<ul>
							<li><a href="index.html">Home</a> <i>|</i></li>
							<li>NOTICE</li>
						</ul>
					</div>
					<div class="wthree_service_breadcrumb_right">
						<h3>NOTICE</h3>
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
				<div class="row notice-content">
					<?php
					    $url = "http://apis.data.go.kr/1262000/CountrySafetyService/getCountrySafetyList?ServiceKey=c2E7zBhyPEGWTD7crBbUcjppLUnRrIDVvgOd6g%2FGIkeGQmd6%2FNHpD3vMjYowzHknp4Ri3QMhjFtmp8cMthLysw%3D%3D";

					    $xml=simplexml_load_file($url) or die("Error: Cannot create object");
					    $items = $xml->body->items;
					    foreach($items->children() as $item) {
					      $title = $item->title;  // Title 이름 가져오기.
					      $countryName = $item->countryName;
					      $wrtDt = $item->wrtDt;  // 날짜

					      $content =  $item->content; // content가져오기.
					      $contenttitle = explode('다.',$content); // 글들이 정렬되어 있지않아서. 처음 나오는 '다.' 기준으로 짤라냄.
					      $contentTitleExplode = str_replace($title,"",$contenttitle[0]); // 마찬가지로 정렬되어있지않음 o,O 썩여있어서 제목삭제 후 저장
								echo "<table><tr><th colspan='2'>";
					      echo  "제목 : ".$title. "</th></tr>";
					      echo  "<tr><td style='width:800px;'>".$countryName."</td><td>".$wrtDt."</td>";
					      echo "<tr><td colspan='2'>".$contentTitleExplode.'다.'."</td></tr></table><br /><br />";
					    }
					    // DB 저장후 이용은 사용자 지정 IP 즉 웹사이트가 있어야 사용 가능하여 임시적으로 사용.!
					 ?>

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
