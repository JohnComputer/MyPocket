<!DOCTYPE html>
<html>
<head>
<title>member_modify_form</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="css/zoomslider.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/component.css" />
<link rel="stylesheet" href="./dist/css/bootstrapValidator.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" />

<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript" src="./dist/js/bootstrapValidator.js"></script>
<!--/web-fonts-->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,600italic,300,300italic,700,400italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Wallpoet' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Ubuntu:400,500,700,300' rel='stylesheet' type='text/css'>
<!--//web-fonts-->

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
		<h1><a href="member_modify_form.php">Member수정</a></h1>
	</div>
</div>
<?php
   	$con = mysqli_connect("localhost", "user", "12345", "drawworld");
    $sql    = "select * from members where id='$userid'";
    $result = mysqli_query($con, $sql);
    $row    = mysqli_fetch_array($result);

		$id   = $row["id"];
    $pass = $row["pass"];
    $name = $row["name"];
    $address = $row["address"];
    $phone = $row["phone"];
    $email  = $row["email"];
    $nickname = $row["nickname"];

		$email1 = explode('@',$email);

?>
		<div class="container">

  <form class="well form-horizontal" action="member_modify.php" method="post" name="contact_form"  id="contact_form">
<fieldset>

<!-- Form Name -->
<legend><center><h2><b>Draw World</b></h2></center></legend><br>
<center><h4><b>회원정보 수정</b></h4></center><br>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >아이디</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="id" class="form-control"  type="text" value="<?=$id?>" />
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >비밀번호</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="user_password" value="<?=$pass?>" class="form-control"  type="password" />
    </div>
  </div>
</div>
<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >비밀번호 확인</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="confirm_password" value="" class="form-control"  type="password" />
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">닉네임</label>
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="nick_name" value="<?=$nickname?>" class="form-control"  type="text" />
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >주소</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="address" value="<?=$address?>" class="form-control"  type="text" />
    </div>
  </div>
</div>
<!-- 나중에 도로명 api 받아오기 -->

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">전화번호</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
        <input name="phone" value="<?=$phone?>" class="form-control" type="text" />
    </div>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4" ><br>
    <button type="button" class="btn btn-warning" onclick="javascript:history.back(-1)">되돌아가기<span class="glyphicon glyphicon-circle-arrow-left"></span></button>
    <button type="submit" class="btn btn-warning" >수정<span class="glyphicon glyphicon-send"></span></button><br><br><br>
		  <button type="button" class="btn btn-warning" style="color:black;" onclick="dele_ok()" >회원 탈퇴<span class="glyphicon glyphicon-remove"></span></button>
  </div>
</div>

</fieldset>
</form>
</div>
</body>
</html>
<script>
$(document).ready(function() {
	$('#contact_form').bootstrapValidator({
		excluded: ':disabled',
		container: 'tooltip',
			feedbackIcons: {
					valid: 'glyphicon glyphicon-ok',
					invalid: 'glyphicon glyphicon-remove',
					validating: 'glyphicon glyphicon-refresh'
			},
			fields: {
					nick_name: {
						validators: {
								 stringLength: {
										min: 2,
										max: 10,
								},
								notEmpty: {
										message: '닉네임 입력해주세요.'
								}
						}
				},
		 user_password: {
							validators: {
									 stringLength: {
											min: 4,
											max: 10,
									},
									notEmpty: {
											message: '4글자 이상 패스워드 입력해주세요.'
									}
							}
					},
						confirm_password: {
							validators: {
								identical: {
										field: 'user_password',
										message: '비밀번호가 일치하지 않습니다.'
								}
						}
					},
					address: {
							validators: {
								stringLength: {
									 min: 5,
									 max: 20,
							 },
									notEmpty: {
											message: '주소를 입력해주세요.'
									},
							}
					},
					phone: {
							validators: {
								stringLength: {
											min: 8,
											max: 15,
									notEmpty: {
											message: '전화번호를 입력해주세요.'
									 }
							}
					},

							}
					}
			})
			.on('success.form.bv', function(e) {
							$('#contact_form').data('bootstrapValidator').resetForm();
							var result = confirm('회원수정을 완료하시겠습니까?');
							if(result) { //yes
								// Prevent form submission
								e.preventDefault();
								// Get the form instance
								var $form = $(e.target);
								// BootstrapValidator instance 가져오기
								var bv = $form.data('bootstrapValidator');
								// ajax 이용 보내기
								$.post($form.attr('action'), $form.serialize(), function(result) {
								}, 'json');
								location.href = './index.php';
						}else{
							location.href = './index.php';
						}
			});
});
</script>
<script>
function dele_ok(){
  var result = confirm('정말 탈퇴 하겠습니까?');
  if(result){
      location.href='member_dele.php?id=<?=$id?>';
  }else{
  }
}
</script>
