<?php
    session_start();
    if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
    else $userid = "";
    if (isset($_SESSION["username"])) $username = $_SESSION["username"];
    else $username = "";
    if (isset($_SESSION["auth"])) $auth = $_SESSION["auth"];
    else $auth = 0;
?>
<div class="header-top">
 <!-- /header-left -->
       <div class="header-left">
   <!-- /sidebar -->
         <div id="sidebar">
          <h4 class="menu">Menu</h4>
           <ul>
           <li><a href="index.php">Home</a></li>
           <li><a href="notice.php">실시간 여행주의</a></li>
           <li><a href="compare.php">국가별 정보</a></li>
           <li><a>국가별 게시판 <i class="glyphicon glyphicon-triangle-bottom"> </i></a>
             <ul>
             <li><a href="koreaboard.php"><span>한국</span></a></li>
             <li><a href="canadaboard.php"><span>캐나다</span></a></li>
             <li><a href="usboard.php"><span>미국</span></a></li>
             <li><a href="chinaboard.php"><span>중국</span></a></li>
              <li><a href="vietnamboard.php"><span>베트남</span></a></li>
             <li class="last"><a href="japanboard.php"><span>일본</span></a></li>
          </ul>
          </li>
          <li><a href="iframeboard.php">지도 공유</a></li>
          <?php
            if(isset($_SESSION["userid"])){echo "<li><a href='message_box.php'>쪽지함</a></li>";}
           ?>
          <?php
            if($auth == 5){echo "<li><a href='admin.php'>관리자 회원관리</a></li>";}
           ?>

        </ul>
        <div id="sidebar-btn">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>

       <!-- 사이드바 관련 스크립트 -->
        <script>
           var sidebarbtn = document.getElementById('sidebar-btn');
           var sidebar = document.getElementById('sidebar');
            sidebarbtn.addEventListener('click', function () {
           if(sidebar.classList.contains('visible')){
             sidebar.classList.remove('visible');
            }else {
             sidebar.className = 'visible';
           }
           });
         </script>

       <!-- //sidebar -->
   </div>
   <!-- //header-left -->
     <div class="search-box">
<?php
  if(!$userid){
?>
       <ul>
       <!-- <li>
       <a href="#" data-toggle="modal" data-target="#myModal4"><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Select Your Location</a></li> -->
       <li><a href="./register.php" ><span class="glyphicon glyphicon-log-in"></span> Sign Up</a></li>
       <li><button id="showRight" class="navig">Login </button>
        <div class="cbp-spmenu-push">
       <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
         <h3>Login</h3>
       <div class="login-inner">
         <div class="login-top">
          <form action="./login.php" method="post">
           <input type="text" name="id" class="email" placeholder="id" required=""/>
           <input type="password" name="pass" class="password" placeholder="Password" required=""/>
           <div class="login-bottom">
             <ul>
               <li>
                   <input type="submit" value="LOGIN"/>
               </li>
             </ul>
           </div>
           <!-- <label for="brand"><span></span> Remember me</label> 아직 기능 구현 안함 Cookie로 구현해야할듯함.-->
         </form>

       </div>
       </div>
       </nav>
     </div>
 <script src="js/classie2.js"></script>
     <script>
       var menuRight = document.getElementById( 'cbp-spmenu-s2' ),
         showRight = document.getElementById( 'showRight' ),
         body = document.body;

       showRight.onclick = function() {
         classie.toggle( this, 'active' );
         classie.toggle( menuRight, 'cbp-spmenu-open' );
         disableOther( 'showRight' );
       };

       function disableOther( button ) {
         if( button !== 'showRight' ) {
           classie.toggle( showRight, 'disabled' );
         }
       }
     </script>
     <!--Navigation from Right To Left-->
         </li>
     </ul>
<?php } else{
  $con = mysqli_connect("localhost", "user", "12345", "drawworld");
  $sql = "select * from message where rv_id = '$userid' And checking = 0";
  $result = mysqli_query($con, $sql);
  $total_record = mysqli_num_rows($result); // 전체 글 수
  mysqli_close($con);
   ?>
  <ul>
  <li><span class="glyphicon glyphicon-user"></span><?=$userid?></li>&nbsp
    <li class=""><a href="message_box.php">
        <i class="fas fa-bell fa-fw"></i>
        <span class="badge badge-danger"><?=$total_record?></a></span>
    </li>&nbsp
      <li><a href="member_modify_form.php"><span class="glyphicon glyphicon-pencil">정보수정</a></li>&nbsp
  <li><a href="logout.php"><span class="glyphicon glyphicon-remove"></span>logout</a></li>&nbsp


</ul>
<?php } ?>
   </div>
 </div>
