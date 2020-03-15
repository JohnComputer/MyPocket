<!DOCTYPE html>
<html>
<head>
  <title>message_box</title>
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
        <li>쪽지함</li>
      </ul>
    </div>
    <div class="wthree_service_breadcrumb_right">
      <h3>Message</h3>
    </div>
    <div class="clearfix"> </div>
  </div>
</div>

<section>

    <div class="container">
      <div class="row">
        <h3 style="padding-top:30px;">수신함</h3>
        <table id="customers" style="padding-top:20px">
          <tr>
            <th style="width:50px">번호</th>
            <th>내용</th>
            <th style="width:100px">보낸이</th>
            <th style="width:200px">보낸날짜</th>
            <th style="width:200px">기능</th>
          </tr>

          <?php
          if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
          if (isset($_SESSION["username"])) $username = $_SESSION["username"];

          $con = mysqli_connect("localhost", "user", "12345", "drawworld");
          $sql = "select * from message where rv_id = '$userid'";
          $result = mysqli_query($con, $sql);
          $total_record = mysqli_num_rows($result); // 전체 글 수

          for ($i=0; $i<$total_record; $i++)
          {
          mysqli_data_seek($result, $i);
          // 가져올 레코드로 위치(포인터) 이동
          $row = mysqli_fetch_array($result);

          $rv_num = $row["num"];
          $send_id = $row["send_id"];
          $content = $row["content"];
          $rv_date = $row["regist_day"];
          $checking = $row["checking"];
           ?>
           <tr  <?php if($checking==1){echo "style='color:red;'";}?>>
             <td style="width:50px; text-align:center;"><?=$i+1?></td>
             <td><?=$content?></td>
             <td style="width:100px; text-align:center;"><?=$send_id?></td>
             <td style="width:200px"><?=$rv_date?></td>
             <td style="width:200px"><input style="width:90px;" type="button" value="읽음" onclick="read_message(<?=$rv_num?>)"/>
               <input style="width:90px;" type="button" value="답장" onclick="send_message('<?=$send_id?>')" /></td>
           </tr>
         <?php } ?>
        </table>

      </div>
    </div>

      <div class="container">
        <div class="row">
          <h3 style="padding-top:30px;">송신함</h3>
          <table id="customers" style="padding-top:20px">
            <tr>
              <th style="width:50px">번호</th>
              <th>내용</th>
              <th style="width:100px">받는이</th>
              <th style="width:200px">보낸날짜</th>
            </tr>

            <?php
            if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
            if (isset($_SESSION["username"])) $username = $_SESSION["username"];

            $con = mysqli_connect("localhost", "user", "12345", "drawworld");
            $sql = "select * from message where send_id = '$userid'";
            $result = mysqli_query($con, $sql);
            $total_record = mysqli_num_rows($result); // 전체 글 수

            for ($j=0; $j<$total_record; $j++)
            {
            mysqli_data_seek($result, $i);
            // 가져올 레코드로 위치(포인터) 이동
            $row = mysqli_fetch_array($result);

            $rv_num = $row["num"];
            $rv_id = $row["rv_id"];
            $content = $row["content"];
            $send_date = $row["regist_day"];

             ?>
             <tr>
               <td style="width:50px; text-align:center;"><?=$j+1?></td>
               <td><?=$content?></td>
               <td style="width:100px; text-align:center;"><?=$rv_id?></td>
               <td style="width:200px; text-align:center;"><?=$send_date?></td>
             </tr>
            <?php } ?>
          </table>

        </div>
      </div>


      <div class="row" style="padding-top: 20px">
    </div>
  </div>
  <center>
    <input style="width:150px;" type="button" value="쪽지 보내기" onclick="send_message('')" /></td>
  </center>
</section>
<div class="footer">
  <?php include "./footer.php";?>
</div>
</body>
</html>
<script src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/jquery.flexisel.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript">
function read_message(x) {
  var numberdata = x;
  $.ajax({
       type: "POST",
       url: './read_message.php',
       data:{action:'call_this',
        num : numberdata},
        success:function() {
           window.location.reload();
        }
  });
}
</script>
<script type="text/javascript">
function send_message(id) {
  window.open("message_form.php?rece_id="+id,
      "messageopen",
       "left=700,top=300,width=500,height=300,scrollbars=no,resizable=yes");
}
</script>
