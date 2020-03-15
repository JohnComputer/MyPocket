<!DOCTYPE html>
<head>
<meta charset="utf-8">
</head>
<body>
<h3>쪽지 보내기</h3>
<?php
session_start();
  if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];

  if(isset($_GET["rece_id"])) {
    $rece_id = $_GET["rece_id"];
  }else{
    $rece_id = "";
  }

 ?>
<form class="" action="message_insert.php" method="post">
  <div>
    <table>
      <tr>
        <td>보내는 이 : <input type="text" name="send_id" value="<?=$userid?>" readonly></td>
      </tr>
      <tr>
        <td>받는이 : <input type="text" name="rv_id" value="<?=$rece_id?>"></td>
      </tr>
      <td><textarea name="messagebox" rows="5" cols="30"></textarea></td>
    </table>
  </div>
  <input type="button" onclick="javascript:self.close();" value="되돌아가기">
  <input type="submit" value="보내기">
</form>

</body>
</html>
