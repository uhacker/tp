<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>Const Login</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="format-detection" content="telephone=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <script type="text/javascript" src="http://localhost/tp/Application/Admin/Public/common/jquery-1.8.3.min.js"></script>
  <link rel="alternate icon" type="image/png" href="http://localhost/tp/Application/Admin/Public/assets/i/favicon.png">
  <link rel="stylesheet" href="http://localhost/tp/Application/Admin/Public/assets/css/amazeui.min.css"/>
  <link rel="stylesheet" href="http://localhost/tp/Application/Admin/Public/common/common.css"/>
  <link rel="stylesheet" href="http://localhost/tp/Application/Admin/Public/login/login.css"/>
  <script src="http://localhost/tp/Application/Admin/Public/assets/js/amazeui.min.js"></script>
  <script src="http://localhost/tp/Application/Admin/Public/assets/js/app.js"></script>
  <link rel="icon" type="image/png" href="http://localhost/tp/Application/Admin/Public/assets/i/favicon.png">
  <link rel="apple-touch-icon-precomposed" href="http://localhost/tp/Application/Admin/Public/assets/i/app-icon72x72@2x.png">
  <link rel="stylesheet" href="http://localhost/tp/Application/Admin/Public/assets/css/amazeui.min.css"/>

</head>
<body>
<div class="header">
  <div class="am-g">
    <h3>Const登录</h3>
  </div>
  <hr />
</div>
<div class="content">
  <div class="am-g">
    <div class="am-u-sm-12">
      <h3>Sign In</h3>
      <div class="am-u-sm-11 am-form am-u-sm-centered">
        <div class="am-form-group am-form-icon formItem">
          <i class="am-icon-envelope-o"></i>
          <input type="email" name="email" id="email" class="am-form-field" value="13163204608@163.com" placeholder="Email">
        </div>
        <div class="am-form-group am-form-icon formItem">
          <i class="am-icon-lock"></i>
          <input type="password" name="password" id="password" class="am-form-field" value="123456" placeholder="Password">
        </div>
        <div class="am-cf goLogin" data-am-popover="{content: '密码错误！'}">
          <button type="button" class="am-btn am-btn-block">登 陆</button>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
<script>
$(function(){
  var email = $('#email');
  var password = $('#password');
  var login = $('.goLogin');
  login.bind('click', function(){
    $('.am-popover').removeClass('am-active');
    if(valid_email()){
      if(password.val() != ''){
        password.css('border','1px solid #ccc');
        password.css('border','1px solid #ccc');
        var load = "<i class='am-icon-spinner am-icon-spin'></i>"
        login.find('button').addClass('am-disabled').text('登 陆 中').append(load);
        setTimeout(function(){
          $.ajax({
              type:"post",
              async:false,
              url:"http://localhost/tp/index.php/admin/Login/login",
              dataType:"json",
              data:{
                email: email.val(),
                password: password.val()
              },
              success: function(res) {
                if(res){
                  location.href="http://localhost/tp/index.php/admin/Index/index";
                }else{
                  console.log('ee');
                  $('.am-popover').addClass('am-active');
                  login.find('button').removeClass('am-disabled').text('登录');
                  setTimeout(function(){
                    $('.am-popover').removeClass('am-active');
                  }, 1800);
                }
              },
              error: function(err) {
                console.log(err);
              }
          });
        }, 200);
      }else{
        password.focus().css('border','1px solid red');
      }
    }
  });

  function valid_email(){
    var patt = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    var value = email.val();
    var valid = patt.test(value);
    if(!valid){
      email.focus().css('border','1px solid red');
    }else{
      return true;
    }
  }
});
</script>
</html>