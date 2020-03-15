<!DOCTYPE html>
<html>
<head>
  <title>관리자 모드</title>
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
  <link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,600italic,300,300italic,700,400italic' rel='stylesheet' type='text/css'>
  <link href='//fonts.googleapis.com/css?family=Wallpoet' rel='stylesheet' type='text/css'>
  <link href='//fonts.googleapis.com/css?family=Ubuntu:400,500,700,300' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/css?family=Single+Day&display=swap" rel="stylesheet" type='text/css'>
  <script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>

</head>
<body>

  <div class="banner-inner-board">
    <header>
      <?php include "header.php";?>
      <!-- header.php 파일 불러오기 -->
    </header>
  <!--banner-info-->
    <div class="banner-info">
      <h1><a href="#">쪽지함</a></h1>
    </div>
  </div>
  <div class="service-breadcrumb">
  <div class="container">
    <div class="wthree_service_breadcrumb_left">
      <ul>
        <li><a href="index.php">Home</a> <i>|</i></li>
        <li>회원관리</li>
      </ul>
    </div>
    <div class="wthree_service_breadcrumb_right">
      <h3>Members</h3>
    </div>
    <div class="clearfix"> </div>
  </div>
  </div>

  <section>

      <div class="container">
        <div class="row">
          <h3 style="padding-top:30px;">회원관리</h3>
          <table id="customers" style="padding-top:20px">
            <tr>
              <th style="width:50px">번호</th>
              <th>아이디</th>
              <th>이름</th>
              <th>point</th>
              <th>회원종류</th>
              <th style="width:150px">가입날짜</th>
              <th style="width:50px">수정</th>
              <th style="width:50px">삭제</th>
            </tr>

            <?php
            $con = mysqli_connect("localhost", "user", "12345", "drawworld");
          	$sql = "select * from members order by num desc";
          	$result = mysqli_query($con, $sql);
          	$total_record = mysqli_num_rows($result); // 전체 회원 수

          	$number = $total_record;

             while ($row = mysqli_fetch_array($result))
             {
              $num         = $row["num"];
          	  $id          = $row["id"];
          	  $name        = $row["name"];
          	  $point       = $row["point"];
              $auth       = $row["auth"];
              $regist_day  = $row["regist_day"];
             ?>
             <tr>
               <form method="post" action="admin_member_update.php?num=<?=$num?>">
               <td style="width:50px; text-align:center;"><?=$number?></td>
               <td><?=$id?></td>
               <td style="width:100px; text-align:center;"><?=$name?></td>
               <td style="width:200px"><input type="text" name="point" value="<?=$point?>"></td>
               <td style="width:200px"><input type="text" name="auth" value="<?=$auth?>"></td>
               <td><?=$regist_day?></td>
               <td><button type="submit">수정</button></td>
               <td><button type="button" onclick="location.href='admin_member_delete.php?num=<?=$num?>'">삭제</button></td>
             	</form>
             </tr>
             <?php
              	   $number--;
                }
             ?>
          </table>
        </div>
      </div>

        <div class="row" style="padding-top: 20px">
  </section>

  <div class="footer">
    <?php include "./footer.php";?>
  </div>
</body>
</html>
