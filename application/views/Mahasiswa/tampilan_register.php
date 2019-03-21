<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SITA | Registration</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php base_url() ?>assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php base_url() ?>assets/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php base_url() ?>assets/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php base_url() ?>assets/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?php base_url() ?>assets/plugins/iCheck/square/blue.css">
  <link rel="stylesheet" href="<?php base_url() ?>assets/font/sanspro.css">
</head>

<!-- ADD THE CLASS layout-boxed TO GET A BOXED LAYOUT -->
<style type="text/css">
            #latarbelakang {
                background-image: url('http://localhost/mtageo/assets/dist/img/bacground.jpg');
                background-repeat: repeat;
            }
        </style>
<body id="latarbelakang" class="latarbelakang hold-transition skin-blue layout-boxed sidebar-mini">
<!-- Site wrapper -->
<div>
 &nbsp
</div>
<div class="wrapper">
 <div>
  &nbsp
 </div>
 <header class="main-header">
  <div class="container base">
    <div class="container">
        <div class="row ">
          <div class="col-md-1">
              <a href="<?php base_url() ?>">
                <img src="<?php base_url() ?>assets/dist/img/logo-itera-oke.png" width="70px" style="margin-bottom:10px; ">
              </a>
          </div>
          <div class="col-md-5">
            <h3>Sistem Informasi Tugas Akhir</h3>
            <h5>Teknik Sipil</h5>
          </div>
        </div>
    </div>
  </div>


<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="<?php base_url() ?>Register"><b>Register</b></a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Masukan nama, NIM, email dan password </p>

    <form action="../../index.html" method="post" onsubmit="return cekform()">
      <div class="form-group has-feedback">
        <input type="text" name="name" id="name" class="form-control" placeholder="Nama" required="">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>

       <div class="form-group has-feedback">
        <input type="text" name="nim" id="nim" class="form-control" placeholder="NIM" required="">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <input type="email" name="email" id="email" class="form-control" placeholder="Email" required="">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" id="password" class="form-control" placeholder="Password" required="">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      
      
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn bg-green btn-block btn-flat">
           <i class="fa fa-user"></i>&nbsp
           Register
          </button>
        </div>
        <!-- /.col -->
      </div>
    </form>

  
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

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
  if (!$("#name").val())
  {
   alert('Maaf full name tidak boleh kosong');
   $("#name").focus();
   return false;
  }

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

  if (!$("#rpassword").val())
  {
   alert('Maaf pengulangan password tidak boleh kosong');
   $("#rpassword").focus();
   return false;
  }
 }
 </script>
</body>
</html>
