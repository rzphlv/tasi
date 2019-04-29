 <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                <!-- modul admin -->
                    <li>
                        <a href="#"><i class="fa fa-user"></i> Administrator<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo base_url('admin/user') ?>">Data Admin</a></li>
                            <li><a href="<?php echo base_url('admin/user/tambah') ?>">Tambah Admin</a></li>  
                        </ul>                    
                    </li>   
              <!-- modul mahasiswa -->
                    <li>
                        <a href="#"><i class="fa fa-user"></i> Mahasiswa<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo base_url('admin/user') ?>">Data Mahasiswa</a></li>
                            <li><a href="<?php echo base_url('admin/user/tambah') ?>">Tambah Mahasiswa</a></li>  
                        </ul>                    
                    </li>
                    <!-- modul dosen -->
                    <li>
                        <a href="#"><i class="fa fa-user"></i> Dosen<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo base_url('admin/user') ?>">Data Dosen</a></li>
                            <li><a href="<?php echo base_url('admin/user/tambah') ?>">Tambah Dosen</a></li>  
                        </ul>                    
                    </li>    
                    <!-- modul refrensi TA -->
                    <li>
                        <a href="#"><i class="fa fa-book"></i> Referensi T.A<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo base_url('admin/user') ?>">Data Referensi T.A</a></li>
                            <li><a href="<?php echo base_url('admin/user/tambah') ?>">Tambah Referensi TA</a></li>  
                        </ul>                    
                    </li> 
                </ul>
               
            </div>
         
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2><?php echo $title ?></h2>   
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
