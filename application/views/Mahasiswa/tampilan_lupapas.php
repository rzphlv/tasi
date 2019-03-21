<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SITA | Forgot Password</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php base_url() ?>assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php base_url() ?>assets/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php base_url() ?>assets/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?php base_url() ?>assets/plugins/iCheck/square/blue.css">

  <!-- Google Font -->
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


<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="<?php base_url() ?>Beranda"><b>LUPA PASSWORD </b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Masukan alamat email anda dan kami akan mengirimkan link untuk mereset password anda.</p>

    <form action="forgot-password" method="post">
	<input type="hidden" name="_token" value="2v49hmejLdOjUMoJ2TbD4MqaTetD3aXp33v2ktnx">
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email" name="email" required="">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-5 pull-right">
          <button type="submit" class="btn btn-primary btn-block btn-flat">
           <i class="fa fa-send"></i>&nbspKirim Kode
          </button>
        </div>
        <div class="col-xs-6">
         <div class="text-left">
          <a href="<?php echo base_url();?>Login" class="btn bg-yellow btn-block btn-flat">
           <i class="fa fa-chevron-left"></i>
           Kembali ke Login
          </a>
         </div>
        </div>
      </div>
    </form>
    <div class="row">

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
 }
 </script>
</body>
</html>
