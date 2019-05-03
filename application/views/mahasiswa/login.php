<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login</title>
  <link rel="stylesheet" href="<?php base_url() ?>assets/loginstyle.css">
  <link rel="stylesheet" href="<?php base_url() ?>assets/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php base_url() ?>assets/plugins/iCheck/square/blue.css">
  <link rel="stylesheet" href="<?php base_url() ?>assets/font/sanspro.css">
  <link rel="icon" type="image/png" href="<?php base_url() ?>assets/gambar/favicon.png">
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php base_url() ?>assets/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?php base_url() ?>assets/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="<?php base_url() ?>assets/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php base_url() ?>css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php base_url() ?>images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper auth-page">
      <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auto-form-wrapper">
              <form action="<?php echo base_url('')?>" method="post" onsubmit="return cekform();">
                <div class="form-group">
                  <label class="label">Email</label>
                  <div class="input-group">
                    <input type="email" id="email" name='email' class="form-control" placeholder="....@student.itera.ac.id" required>
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="label">Password</label>
                  <div class="input-group">
                    <input type="password" id="password" name='password' class="form-control" placeholder="*********" required>
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <button class="btn btn-primary submit-btn btn-block">Login</button>
                </div>
                <div class="text-center">
           <p><font color="#1a1816">- Atau -</font></p>
						    </div>
						    <div  class="form-group d-flex justify-content-center">
						      <div class="col-xs-8">
						       <div class="text-center " >
						        
                    <a href="<?php echo base_url();?>Lupapas" >
						         <i class="text-black text-small" ></i>
                     <div class="text-center">
						         <p>Lupa Password</p>
                     </div>
						        </a>
                    
						       </div>
                  </div>
                  </div>
                 
						      <!-- /.col -->
						     
                <div class="form-group d-flex justify-content-center">
                  <div class="form-check form-check-flat mt-0">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" checked> Keep me signed in
                    </label>
                  </div>
                </div>
                <div class="text-block text-center my-3">
                  <span class="text-small font-weight-semibold">Not a member ?</span>
                  <a href="<?php echo base_url('register') ?>" class="text-black text-small">Create new account</a>
                </div>
              </form>
            </div>
            
            <ul class="auth-footer">
              <li>
                <a href="#">Conditions</a>
              </li>
              <li>
                <a href="#">Help</a>
              </li>
              <li>
                <a href="#">Terms</a>
              </li>
            </ul>
            <p class="footer-text text-center">copyright © 2018 Kelompok 4. All rights reserved.</p>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="<?php base_url() ?>assets/js/vendor.bundle.base.js"></script>
  <script src="<?php base_url() ?>assets/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="<?php base_url() ?>js/off-canvas.js"></script>
  <script src="<?php base_url() ?>js/misc.js"></script>
  
  <script type="text/javascript">
 function cekform()
 {
  if (!$("#email").val() && !$("#password").val()) {
    alert('Email dan Password tidak boleh kosong');
    $("#email").focus();
    $("#password").focus();
    return false;
  }

  if (!$("#email").val())
  {
   alert('Email tidak boleh kosong');
   $("#email").focus();
   return false;
  }

  if (!$("#password").val())
  {
   alert('Password tidak boleh kosong');
   $("#password").focus();
   return false;
  }

 }
 </script>
  <!-- endinject -->
</body>

</html>