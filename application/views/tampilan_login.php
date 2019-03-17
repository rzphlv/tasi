<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>MtaGeo | Log in</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php base_url() ?>assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php base_url() ?>assets/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php base_url() ?>assets/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?php base_url() ?>assets/plugins/iCheck/square/blue.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="<?php base_url() ?>assets/font/sanspro.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="<?php base_url() ?>Beranda"><b>Login </b>MtaGeo</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form action="../../index2.html" method="post" onsubmit="return cekform();">
      <div class="form-group has-feedback">
        <input type="email" name="email" id="email" class="form-control" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <input type="password" name="password" id="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>

      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox">&nbsp&nbspRemember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">
           <i class="fa fa-sign-in"></i>&nbsp
           Sign In
          </button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <div class="text-center">
      <p>- OR -</p>
    </div>
    <div class="row">
      <div class="col-xs-8">
       <div class="text-left">
        <a href="<?php echo base_url();?>Lupapas" class="btn bg-red btn-block btn-flat">
         <i class="fa fa-key"></i>
         I Forgot My Password
        </a>
       </div>
      </div>
      <!-- /.col -->
      <div class="col-xs-4">
       <div class="text-right">
        <a href="<?php echo base_url();?>Register"  class="btn bg-green btn-block btn-flat">
         <i class="fa fa-user"></i>&nbsp
         Register
        </a>
       </div>
      </div>
      <!-- /.col -->
    </div>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
<!-- jQuery 3 -->
<script src="<?php base_url() ?>assets/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php base_url() ?>assets/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
<script type="text/javascript">
 function cekform()
 {
  if (!$("#email").val())
  {
   alert('Maaf email tidak boleh kosong');
   $("#email").focus();
   return false;
  }

  if (!$("#password").val())
  {
   alert('Maaf password tidak boleh kosong');
   $("#password").focus();
   return false;
  }
 }
 </script>
</body>
</html>
