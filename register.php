<!DOCTYPE html>
<html>
<head>
<title>Draw World</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" href="./dist/css/bootstrapValidator.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" />

<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript" src="./dist/js/bootstrapValidator.js"></script>
<style>
#success_message{ display: none;}
</style>
<!--//web-fonts-->
</head>
  <body>
    <div class="container">

  <form class="well form-horizontal" action="member_insert.php" method="post" name="contact_form"  id="contact_form">
<fieldset>

<!-- Form Name -->
<legend><center><h2><b>Draw World</b></h2></center></legend><br>
<center><h4><b>회원가입</b></h4></center><br>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >아이디</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="id" placeholder="Id" class="form-control"  type="text">
    </div>
    <center>
          <input type="button" value="ID 중복확인" name="idChecked" onclick="check_id()">
    </center>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >비밀번호</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="user_password" placeholder="Password" class="form-control"  type="password">
    </div>
  </div>
</div>
<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >비밀번호 확인</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="confirm_password" placeholder="Confirm Password" class="form-control"  type="password">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" >이름</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="name" placeholder="Name" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">닉네임</label>
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="nick_name" placeholder="Nickname" class="form-control"  type="text">
    </div>
  </div>
</div>


<!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label">E-Mail</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
          <input name="email" placeholder="E-Mail Address" class="form-control"  type="text">
    <select name="mail_web" class="form-control selectpicker">
      <option value="@naver.com" selected>@naver.com</option>
      <option value="@gmail.com">@gmail.com</option>
      <option value="@hanmail.net">@hanmail.net</option>
      <option value="@nate.com">@nate.com</option>
      <option value="@nate.com">@nate.com</option>
      <option value="@ync.ac.kr">@ync.ac.kr</option>
    </select>
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >주소</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="address" placeholder="Address" class="form-control"  type="text">
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
        <input name="phone" placeholder="010-1111-1111" class="form-control" type="text">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">회원종류</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-check"></i></span>
      &nbsp&nbsp&nbsp&nbsp&nbsp
        <input type="radio" name="memtype" value="1" checked> 일반회원 &nbsp&nbsp&nbsp
        <input type="radio" name="memtype" value="2"> 기업회원 <br>
    </div>
  </div>
</div>

<!-- Select Basic -->

<!-- Success message -->
<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Success!.</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4" ><br>
    <button type="button" class="btn btn-warning" onclick="javascript:history.back(-1)">되돌아가기<span class="glyphicon glyphicon-circle-arrow-left"></span></button>
    <button type="submit" class="btn btn-warning" >확인<span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>

</fieldset>
</form>
</div>
    </div><!-- /.container -->
    <script type="text/javascript">
    function check_id() {
      window.open("member_check_id.php?id=" + document.contact_form.id.value,
          "IDcheck",
           "left=700,top=300,width=350,height=200,scrollbars=no,resizable=yes");
    }
    </script>
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
                  id: {
                    validators: {
                         stringLength: {
                            min: 2,
                            max: 10,
                        },
                        notEmpty: {
                            message: '이름 입력해주세요.'
                        }
                    }
                },
                name: {
                  validators: {
                       stringLength: {
                          min: 2,
                          max: 10,
                      },
                      notEmpty: {
                          message: '이름 입력해주세요.'
                      }
                  }
              },
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
              email: {
                  validators: {
                      notEmpty: {
                          message: '이메일을 입력해주세요.'
                      },
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
              $('#success_message').slideDown({ opacity: "show" }, "slow"); // Do something ...
                  $('#contact_form').data('bootstrapValidator').resetForm();
                  var result = confirm('회원가입을 완료하시겠습니까?');
                  if(result) { //yes
                    // Prevent form submission
                    e.preventDefault();
                    // Get the form instance
                    var $form = $(e.target);
                    // Get the BootstrapValidator instance
                    var bv = $form.data('bootstrapValidator');
                    // Use Ajax to submit form data
                    $.post($form.attr('action'), $form.serialize(), function(result) {
                    }, 'json');
                    location.href = './index.php';
                }else{
                  location.href = './index.php';
                }
          });
    });
    </script>
  </body>
</html>
