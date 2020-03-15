<!DOCTYPE html>
<html>
<head>
<title>Draw World</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<!-- link style css / bootstrap / 폰트어썸  -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/zoomslider.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" />
	<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
	<!-- 신규요소 지원 여부 검토 -->

<!--/web-fonts-->
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,600italic,300,300italic,700,400italic' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Wallpoet' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Ubuntu:400,500,700,300' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Single+Day&display=swap" rel="stylesheet" type='text/css'>

	<style>
	.customers table{
	  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	  border-collapse: collapse;
	}

	.customers td, th {
	  border: 1px solid #ddd;
		overflow:hidden;
	}
	.customers th {
	  text-align: center;
	  background-color: #4CAF50;
	  color: white;
	}
	</style>
</head>


<body>

<!-- header -->
	<div id="demo-1">
		<div class="demo-inner-content">
		<header>
		<!-- header.php 파일 불러오기 -->
		<?php include "header.php";?>
		</header>

		<!-- pixelMap, ammap,worldLow 에 Svg 방식으로 만들어 놓음  -->
			<script type="text/javascript" src="./js/ammap.js"></script>
			<script type="text/javascript" src="./js/worldLow.js"></script>
			<script type="text/javascript" src="./js/pixelMap.js"></script>
			<div id="map" style="width: 100%; padding: 0; margin: 0; background-color: rgba(80,80,80,1); height: 600px;"></div>
		<!--//banner-info-->
		</div>
	</div>

	<div class="slider1">
		<div class="arrival-grids">
			<!-- fixelDemo 화면 돌아가기 -->
			<ul id="flexiselDemo1">

				<li>
				<!-- 700*540 사이즈 제공 -->
					<a href="single.html"><img src="images/US_main.jpg" alt=""/>
						<div class="caption">
							<h3><a href="./usboard.php">USA</a></h3>
							<span>게시판</span>
						</div>
					</a>
				</li>

				<li>
					<a href="single.html"><img src="images/CAN_main.jpg" alt=""/>
						<div class="caption">
							<h3><a href="./canadaboard.php">CANADA</a></h3>
							<span>게시판</span>
						</div>
					</a>
				</li>

					<li>
						<a href="single.html"><img src="images/VIE_main.jpg" alt=""/>
							<div class="caption">
								<h3><a href="./vietnamboard.php">VIETNAM</a></h3>
								<span>게시판</span>
							</div>
						</a>
					</li>

					<li>
						<a href="single.html"><img src="images/AUS_main.jpg" alt=""/>
							<div class="caption">
								<h3><a href="#">Australia</a></h3>
								<span>게시판</span>
							</div>
						</a>
					</li>

				<li>
					<a href="single.html"><img src="images/JAP_main.jpg" alt=""/>
						<div class="caption">
							<h3><a href="./japanboard.php">Japan</a></h3>
							<span>게시판</span>
						</div>
					</a>
				</li>
			</ul>
		</div>
	</div>


	<!-- Services -->
	<div class="updates-agile">
		<div class="container">
		      <h3 class="tittle" style="font-family: 'Single Day', cursive;">여행 정보마당</h3>
		<div class="inner_tabs">
		<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
						<ul id="myTab" class="nav nav-tabs" role="tablist">
							<!-- 부트스트랩 UI 충돌 방지 // 직접 개발 Api data-toggle 이용 -->
							<li role="presentation" class=""><a href="#updates" id="updates-tab" role="tab" data-toggle="tab" aria-controls="updates" aria-expanded="false">인기 게시물</a></li>
							<li role="presentation" class=""><a href="#expert" role="tab" id="expert-tab" data-toggle="tab" aria-controls="expert" aria-expanded="false">세계 지도</a></li>
							<li role="presentation" class="active"><a href="#video-text" role="tab" id="video-text-tab" data-toggle="tab" aria-controls="video-text" aria-expanded="false">여행 Video</a></li>

						</ul>

						<div id="myTabContent" class="tab-content">
							<div role="tabpanel" class="tab-pane fade" id="updates" aria-labelledby="updates-tab">

									<table class="customers col-md-12">
										<h3 style="text-align:center; font-family: 'Single Day';">한국 인기 게시물</h3><br />
										<tr>
											<th style="width:50px">순위</td>
											<th>제목</td>
											<th style="width:100px">글쓴이</td>
											<th style="width:70px">조회수</td>
											<th style="width:70px">추천수</td>
										</tr>
									<?php
									$con = mysqli_connect("localhost", "user", "12345", "drawworld");
									$sql = "select * from koreaboard order by hit desc";
									$result = mysqli_query($con, $sql);
									$total_record = mysqli_num_rows($result); // 전체 글 수

									for($i=0; $i<5; $i++){

									mysqli_data_seek($result, $i);
									$row = mysqli_fetch_array($result);
									$cnt = $i+1;
									$num    		= $row["num"];
									$name    		= $row["name"];
									$subject     = $row["subject"];
									$hit         = $row["hit"];
									$recommand = $row["recommand"];
									?>
										 <tr>
											 <td><?=$cnt?></td>
											 <td><a href="./board_view.php?num=<?=$num?>&page=1&board_type=koreaboard"><?=$subject?></a></td>
											 <td><?=$name?></td>
											 <td><?=$hit?></td>
											 <td><?=$recommand?></td>
										 </tr>
									 <?php } ?>
									 </table><br /><br />

									 <table class="customers col-md-12">
								 		<h3 style="text-align:center; font-family: 'Single Day';">미국 인기 게시물</h3><br />
								 		<tr>
								 			<th style="width:50px">순위</td>
								 			<th>제목</td>
								 			<th style="width:100px">글쓴이</td>
								 			<th style="width:70px">조회수</td>
								 			<th style="width:70px">추천수</td>
								 		</tr>
								 	<?php
								 	$con = mysqli_connect("localhost", "user", "12345", "drawworld");
								 	$sql = "select * from USboard order by hit desc";
								 	$result = mysqli_query($con, $sql);
								 	$total_record = mysqli_num_rows($result); // 전체 글 수

								 	for($i=0; $i<5; $i++){

								 	mysqli_data_seek($result, $i);
								 	$row = mysqli_fetch_array($result);
								 	$cnt = $i+1;
									$num    		= $row["num"];
								 	$name    		= $row["name"];
								 	$subject     = $row["subject"];
								 	$hit         = $row["hit"];
								 	$recommand = $row["recommand"];
								 	?>
								 		 <tr>
								 			 <td><?=$cnt?></td>
								 			 <td><a href="./board_view.php?num=<?=$num?>&page=1&board_type=usboard"><?=$subject?></a></td>
								 			 <td><?=$name?></td>
								 			 <td><?=$hit?></td>
								 			 <td><?=$recommand?></td>
								 		 </tr>
								 	 <?php } ?>
								 	 </table> <br /><br />

									 <table class="customers col-md-12">
										 <h3 style="text-align:center; font-family: 'Single Day';">캐나다 인기 게시물</h3><br />
										 <tr>
											 <th style="width:50px">순위</td>
											 <th>제목</td>
											 <th style="width:100px">글쓴이</td>
											 <th style="width:70px">조회수</td>
											 <th style="width:70px">추천수</td>
										 </tr>
									 <?php
									 $con = mysqli_connect("localhost", "user", "12345", "drawworld");
									 $sql = "select * from canadaboard order by hit desc";
									 $result = mysqli_query($con, $sql);
									 $total_record = mysqli_num_rows($result); // 전체 글 수

									 for($i=0; $i<5; $i++){

									 mysqli_data_seek($result, $i);
									 $row = mysqli_fetch_array($result);
									 $cnt = $i+1;
									 $num    		= $row["num"];
									 $name    		= $row["name"];
									 $subject     = $row["subject"];
									 $hit         = $row["hit"];
									 $recommand = $row["recommand"];
									 ?>
											<tr>
												<td><?=$cnt?></td>
												<td><a href="./board_view.php?num=<?=$num?>&page=1&board_type=canadaboard"><?=$subject?></a></td>
												<td><?=$name?></td>
												<td><?=$hit?></td>
												<td><?=$recommand?></td>
											</tr>
										<?php } ?>
										</table>

							</div>
							<script type="text/javascript">
									function mapset() {
							      $.ajax({
							           type: "POST",
							           url: './indexmap.php',
							           data:{action:'call_this',
											 		param1 : document.getElementById('mapselect').value},
							           success:function(html) {
													  document.getElementById('mapview').innerHTML = html;
							           }
							      });
							 }
							</script>
							<div role="tabpanel" class="tab-pane fade" id="expert" aria-labelledby="expert-tab">
								<div class="select-box">
								   <div class="select-city-for-local-ads ads-list">
									<label>Select City</label>
										<select id="mapselect" name="mapselect">
												<option value="null">Select World</option>
															<option value="KR">Korea</option>
															<option value="US">USA</option>
															<option value="JP">JAPAN</option>
															<option value="CN">CHINA</option>
															<option value="VN">VIETNAM</option>
															<option value="CA">CANADA</option>
						            </select>
								</div>
								<div class="search-product ads-list">
									<div class="search find">
										  <input type="submit" value="Find world" onclick="mapset()">
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
							     <!--/dealers-accordion -->
								<div class="dealers-accordion w3l" id="mapview">
										<!-- map 들어올 자리 -->
								</div>
							</div>



							<div role="tabpanel" class="tab-pane fade active in" id="video-text" aria-labelledby="video-text-tab">

								<div class="news-updates">

									<div class="update-info-w3l">
										<div class="col-md-5 tab-image">
											<iframe width="560" height="315" src="https://www.youtube.com/embed/3Gbc-365ly8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
										</div>
										<div class="col-md-7 tab-info">
										<h4><a href="#">베트남 하노이 여행 가이드. 이거 하나만 보면 감 다잡음.</a></h4>
											  							<p>하노이의 위치, 하노이에 어떤 곳이 있는까? 올드쿼터? 프렌치쿼터? 하롱베이나 사파는 뭐야? 하노이 여행 계획을 어떻게 짜야 할까?</p>
										</div>
										<div class="clearfix"></div>
									</div>


									<div class="update-info-w3l two">
										<div class="col-md-7 tab-info two">
										    <h4><a href="#">해외여행 입국심사 쉽게 통과하는 방법 - 까다로운(?) 캐나다 입국심사</a></h4>
											<p>Hi bros and sis!
												영어 알려주는 남자 영알남 입니다!
												이번 영상은 지난번 미국 입국심사와 비슷한 캐나다 입국심사 팁 영상입니다!
												캐나다나 영미권 국가 여행을 계획하시는 분들께 유용한 영상이 될 것 같습니다!
												영상을 잘 보시고 꼭 잘 대처해 보시기 바랍니다!
												</p>
										</div>
										<div class="col-md-5 tab-image">
											<iframe width="560" height="315" src="https://www.youtube.com/embed/-vUbleYA1Tk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
										</div>

										<div class="clearfix"></div>
									</div>

								 </div>

							</div>


						</div>
					</div>
				</div>
            </div>
		</div>
		<div class="clearfix"></div>
		<!-- //Services -->
			<!-- footer -->
			<div class="footer">
				<?php include "footer.php";?>
			</div>
<script src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/jquery.zoomslider.min.js"></script>
<!-- https://samples.openweathermap.org/data/2.5/weather?q=London,uk&appid=894a6f869873e8bbf051468cfea10159 -->
			<script type="text/javascript">
				$(window).load(function() {
						$("#flexiselDemo1").flexisel({
						visibleItems: 4,
						animationSpeed: 1000,
						autoPlay: true,
						autoPlaySpeed: 3000,
						pauseOnHover:true,
						enableResponsiveBreakpoints: true,
						responsiveBreakpoints: {
						portrait: {
						changePoint:480,
						visibleItems: 1
						},
						landscape: {
						changePoint:640,
						visibleItems: 2
						},
						tablet: {
						changePoint:768,
						visibleItems: 3
						}
					}
				});
			});
			</script>
								<script type="text/javascript" src="js/jquery.flexisel.js"></script>
					<script src="js/bootstrap.js"></script>


</body>
</html>
