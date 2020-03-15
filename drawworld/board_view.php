<!DOCTYPE html>
<html>
<head>
  <title>board_view</title>
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
  <script type="text/javascript">
      function comment_ajax() {
        $.ajax({
             type: "POST",
             url: './comment_view.php',
             data:{action:'call_this',
              param1 : document.getElementById('cntline').value,
              board_type : document.getElementById('board_type').value,
              board_num : document.getElementById('board_num').value},
             success:function(html) {
                document.getElementById('commentinput').innerHTML += html;
             }
        });
        document.getElementById('cntline').value = Number(document.getElementById('cntline').value)+Number(10);
   }
  </script>
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

  $fileTypeC = explode('/',$file_type);

	$content = str_replace(" ", "&nbsp;", $content);
	$content = str_replace("\n", "<br>", $content);

	$new_hit = $hit + 1;
	$sql = "update $board_type set hit=$new_hit where num=$num";
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
            <td>추천수 : <?=$recommand?></td>
            <td>
              <ul>
              <li><a href="#" onclick="check_id();"><i class="far fa-thumbs-up">좋아요</i></a></li>
            </ul>
            </td>
          </tr>
        </table>
      </div>
        <table>
          <tr>
            <td>
              <?php
            					if($file_name) {
            						$real_name = $file_copied;
            						$file_path = "./data/".$real_name;
            						$file_size = filesize($file_path);

            						echo "▷ 첨부파일 : $file_name ($file_size Byte) &nbsp;&nbsp;&nbsp;&nbsp;
            			       		<a href='board_download.php?num=$num&real_name=$real_name&file_name=$file_name&file_type=$file_type'>[저장]</a><br><br>";
            			           	}
                        if($fileTypeC[0] == 'image'){
                        echo "<img src='./data/".$file_copied."' width=50% /><br>";
                        }
            				?>
              </td>
              </tr>
              <tr>
                <td><?=$content?></td>
              </tr>

</table>

    <center>
      <?php
        if (isset($_SESSION["userid"])){
        if($userid == $id or $loginauth == 5){
       ?>
      <button onclick="location.href='board_modify_form.php?num=<?=$num?>&page=<?=$page?>&board_type=<?=$board_type?>'">수정</button>
      <button onclick="dele_ok()">삭제</button>
    <?php } }?>
      <button onclick="location.href='<?=$board_type?>.php?page=<?=$page?>'">목록</button>
      <button onclick="location.href='board_make.php'">글쓰기</button>
    </center>
    </div>
  </div>
</div>
</div>

<h3 style="font-family: 'Single Day', cursive; border-bottom: 1px solid #333333;" class="text-center"> 댓글란 </h3>
<br>
<div class="container-fluid ">

<div class="row content">
  <div class="col-sm-2 sidenav">
  </div>
  <form name="comment_make" action="comment_insert.php?num=<?=$num?>&page=<?=$page?>&board_type=<?=$board_type?>" method="post">
    <div class="col-sm-8 text-center">
      <textarea name="comment" rows="5" cols="50"></textarea>
      <input type="button" onclick="check_comment()" value="댓글 입력">
    </div>
  </form>
</div>

<br>
<div class="row content">
  <div class="col-sm-2 sidenav">
  </div>
  <div class="col-sm-8 text-center">
        <div id="commentinput">

          <!-- 여기 댓글 들어간다. -->


      </div>
      <input id="cntline" name="cntline" type="number" value=0 hidden/>
      <input id="board_num" name="board_num" type="number" value=<?=$num?> hidden/>
      <input id="board_type" name="board_type" type="text" value="<?=$board_type?>" hidden/>
      <input type="submit" value="댓글 보기" onclick="comment_ajax()"/>
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
<script type="text/javascript">
function check_comment() {
    if (!document.comment_make.comment.value)
    {
        alert("댓글을 입력하세요.");
        document.comment_make.comment.focus();
        return;
    }
    document.comment_make.submit();
 }
</script>
<script type="text/javascript">
function check_id() {
  window.open("like.php?num=<?=$num?>&board_type=<?=$board_type?>",
      "IDcheck",
       "left=700,top=300,width=350,height=200,scrollbars=no,resizable=yes");
}
</script>
<script>
function dele_ok(){
  var result = confirm('정말 지우시겠습니까?');
  if(result){
      location.href='board_delete.php?num=<?=$num?>&page=<?=$page?>&board_type=<?=$board_type?>';
  }else{
  }
}
</script>
<script>
// 댓글 삭제 매개변수로 받은 후 php 와 함께 자바스크립트 변수로 값을 주어 보낸다.
function dele_comment(x){
  var result = confirm('정말 지우시겠습니까?');
  if(result){
    location.href="comment_dele.php?num=<?=$num?>&page=<?=$page?>&board_type=<?=$board_type?>&comment_num="+x;
  }else{
  }
}
</script>
</body>

</html>
