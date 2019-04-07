<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url();?>assets2/assets/images/favicon.png">
    <title>SIPENTING NGAWIT</title>
    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets2/assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets2/dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-navbarbg="skin6" data-theme="light" data-layout="vertical" data-sidebartype="full" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                        <i class="ti-menu ti-close"></i>
                    </a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-brand">
                        <a href="<?php echo base_url();?>Welcome/" class="logo">
                            <!-- Logo icon -->
                            <b class="logo-icon">
                                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                                <!-- Dark Logo icon -->
                                <img src="<?php echo base_url();?>assets2/assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                                <!-- Light Logo icon -->
                                <img src="<?php echo base_url();?>assets2/assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text -->
                            <span class="logo-text">
                                <!-- dark Logo text -->
                                <img src="<?php echo base_url();?>assets2/assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                                <!-- Light Logo text -->
                                <img src="<?php echo base_url();?>assets2/assets/images/logo-light-text.png" class="light-logo" alt="homepage" />
                            </span>
                        </a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="ti-more"></i>
                </a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <?php include 'atas.php'; ?>
        </nav>
    </header>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <?php include 'menu.php'; ?>
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-5 align-self-center">
                    <h4 class="page-title">Tutorial</h4>
                </div>
                <div class="col-7 align-self-center">
                    <div class="d-flex align-items-center justify-content-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="<?php echo base_url();?>Welcome/">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Tutorial</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-12">
                    <div class="card card-body">
                        <h4 class="card-title">Sekilas Tentang Sawit</h4>
                        <h5 class="card-subtitle"></h5>
                        <div class="card-body">
                            <div>
                                Klik salah satu menu upload, dengan kotak atau tanpa kotak. Disesuaikan dengan data training yang akan diupload.
                                <div style="margin-bottom: 5px;">
                                    <span style="font-size: small; font-weight:bold;">Step 1:</span>
                                    <input value="Klik Untuk Melihat Isi" type="button" onclick="if (this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display != '') { this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display = ''; this.innerText = ''; this.value = 'Tutup'; } else { this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display = 'none'; this.innerText = ''; this.value = 'Klik Untuk Melihat Isi'; }">
                                </div>
                                <div style="margin: 0px; padding: 10px; border: 1px inset;">
                                    <div style="display: none;"> 
                                        <img src="<?php echo base_url();?>tutor/dashboard.png" class="img-thumbnail" alt="Cinque Terre"> 
                                    </div>
                                </div>
                            </div>
                            <div>
                                <hr>
                                Setelah menu upload terbuka, kemudian klik <i>browse</i> untuk mencari file yang akan diupload. File yang diupload harus berekstensi .zip
                                <div style="margin-bottom: 5px;">
                                    <span style="font-size: small; font-weight:bold;">Step 2:</span>
                                    <input value="Klik Untuk Melihat Isi" type="button" onclick="if (this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display != '') { this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display = ''; this.innerText = ''; this.value = 'Tutup'; } else { this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display = 'none'; this.innerText = ''; this.value = 'Klik Untuk Melihat Isi'; }">
                                </div>
                                <div style="margin: 0px; padding: 10px; border: 1px inset;">
                                    <div style="display: none;"> 
                                        <img src="<?php echo base_url();?>tutor/menuupload.png" class="img-thumbnail" alt="Cinque Terre"> 
                                    </div>
                                </div>
                            </div>
                            <div>
                            Untuk file yang diupload nama file harus disesuaikan. Jika ingin mengupload data training dengan kondisi dengan kotak, maka nama file-nya adalah <b><u>"data_trainingtanpakotak"</u></b>. Sebaliknya,Jika ingin mengupload data training dengan kondisi dengan kotak, maka nama file-nya adalah <b><u>"data_trainingtanpakotak".</u></b>                                
                                <div style="margin-bottom: 5px;">
                                    <span style="font-size: small; font-weight:bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    <input value="Klik Untuk Melihat Isi" type="button" onclick="if (this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display != '') { this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display = ''; this.innerText = ''; this.value = 'Tutup'; } else { this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display = 'none'; this.innerText = ''; this.value = 'Klik Untuk Melihat Isi'; }">
                                </div>
                                <div style="margin: 0px; padding: 10px; border: 1px inset;">
                                    <div style="display: none;">
                                    <center><img src="<?php echo base_url();?>tutor/uploadzip.png" class="img-thumbnail" alt="Cinque Terre"></center>                                          
                                    </div>
                                </div>
                            </div>
                            <div>                                
                                File yang diupload merupakan folder yang telah diubah ekstensinya menjadi .zip, merupakan <b><u>data training</u></b> sesuai dengan kondisi yang akan diupload, dan berisi dua folder. Yaitu, <b><u>layakangkut</u></b> dan <b><u>tidaklayakangkut</u></b>. Setiap folder tersebut berisi foto TBS menyesuaikan dengan nama folder. 
                                <div style="margin-bottom: 5px;">
                                    <span style="font-size: small; font-weight:bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    <input value="Klik Untuk Melihat Isi" type="button" onclick="if (this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display != '') { this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display = ''; this.innerText = ''; this.value = 'Tutup'; } else { this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display = 'none'; this.innerText = ''; this.value = 'Klik Untuk Melihat Isi'; }">
                                </div>
                                <div style="margin: 0px; padding: 10px; border: 1px inset;">
                                    <div style="display: none;"> 
                                        <center><img src="<?php echo base_url();?>tutor/folder.png" class="img-thumbnail" alt="Cinque Terre"></center> 
                                    </div>
                                </div>
                            </div>
                            <div>
                                Kemudian, klik tombol <i>Upload</i>, tunggu beberapa saat sementara aplikasi meng-<i>upload gambar</i>. Jika gambar telah ter-<i>upload</i>, maka akan muncul tampilan seperti berikut.
                                <div style="margin-bottom: 5px;">
                                    <span style="font-size: small; font-weight:bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    <input value="Klik Untuk Melihat Isi" type="button" onclick="if (this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display != '') { this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display = ''; this.innerText = ''; this.value = 'Tutup'; } else { this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display = 'none'; this.innerText = ''; this.value = 'Klik Untuk Melihat Isi'; }">
                                </div>
                                <div style="margin: 0px; padding: 10px; border: 1px inset;">
                                    <div style="display: none;"> 
                                        <img src="<?php echo base_url();?>tutor/klikupload.png" class="img-thumbnail" alt="Cinque Terre"> 
                                    </div>
                                </div>
                            </div>
                            <div>Jika gambar telah ter-<i>upload</i>, maka akan muncul tampilan seperti berikut.
                                <div style="margin-bottom: 5px;">
                                    <span style="font-size: small; font-weight:bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    <input value="Klik Untuk Melihat Isi" type="button" onclick="if (this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display != '') { this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display = ''; this.innerText = ''; this.value = 'Tutup'; } else { this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display = 'none'; this.innerText = ''; this.value = 'Klik Untuk Melihat Isi'; }">
                                </div>
                                <div style="margin: 0px; padding: 10px; border: 1px inset;">
                                    <div style="display: none;"> 
                                        <img src="<?php echo base_url();?>tutor/uploadsuccess.png" class="img-thumbnail" alt="Cinque Terre"> 
                                    </div>
                                </div>
                            </div>
                            <div>
                                <hr>
                                Untuk memasukkan data ke <i>database</i>, klik menu tabel data training dan sesuaikan dengan data yang telah diupload.
                                <div style="margin-bottom: 5px;">
                                    <span style="font-size: small; font-weight:bold;">Step 3:</span>
                                    <input value="Klik Untuk Melihat Isi" type="button" onclick="if (this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display != '') { this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display = ''; this.innerText = ''; this.value = 'Tutup'; } else { this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display = 'none'; this.innerText = ''; this.value = 'Klik Untuk Melihat Isi'; }">
                                </div>
                                <div style="margin: 0px; padding: 10px; border: 1px inset;">
                                    <div style="display: none;"> 
                                        <img src="<?php echo base_url();?>tutor/bukatabel.png" class="img-thumbnail" alt="Cinque Terre"> 
                                    </div>
                                </div>
                            </div>
                            <div>Kemudian klik tombol <i>input</i>, tunggu beberapa saat
                                <div style="margin-bottom: 5px;">
                                    <span style="font-size: small; font-weight:bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    <input value="Klik Untuk Melihat Isi" type="button" onclick="if (this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display != '') { this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display = ''; this.innerText = ''; this.value = 'Tutup'; } else { this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display = 'none'; this.innerText = ''; this.value = 'Klik Untuk Melihat Isi'; }">
                                </div>
                                <div style="margin: 0px; padding: 10px; border: 1px inset;">
                                    <div style="display: none;"> 
                                        <img src="<?php echo base_url();?>tutor/klikinput.png" class="img-thumbnail" alt="Cinque Terre"> 
                                    </div>
                                </div>
                            </div>
                            <div>Data training telah dimasukkan ke database.
                                <div style="margin-bottom: 5px;">
                                    <span style="font-size: small; font-weight:bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    <input value="Klik Untuk Melihat Isi" type="button" onclick="if (this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display != '') { this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display = ''; this.innerText = ''; this.value = 'Tutup'; } else { this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display = 'none'; this.innerText = ''; this.value = 'Klik Untuk Melihat Isi'; }">
                                </div>
                                <div style="margin: 0px; padding: 10px; border: 1px inset;">
                                    <div style="display: none;"> 
                                        <img src="<?php echo base_url();?>tutor/inputsuccess.png" class="img-thumbnail" alt="Cinque Terre"> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                All Rights Reserved by Nice admin. Designed and Developed by
                <a href="https://wrappixel.com">WrapPixel</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="<?php echo base_url();?>assets2/assets/libs/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="<?php echo base_url();?>assets2/assets/libs/popper.js/dist/umd/popper.min.js"></script>
<script src="<?php echo base_url();?>assets2/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="<?php echo base_url();?>assets2/assets/extra-libs/sparkline/sparkline.js"></script>
<!--Wave Effects -->
<script src="<?php echo base_url();?>assets2/dist/js/waves.js"></script>
<!--Menu sidebar -->
<script src="<?php echo base_url();?>assets2/dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="<?php echo base_url();?>assets2/dist/js/custom.min.js"></script>
<!--This page JavaScript -->
<!--chartis chart-->
<script src="<?php echo base_url();?>assets2/assets/libs/chartist/dist/chartist.min.js"></script>
<script src="<?php echo base_url();?>assets2/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
<script src="<?php echo base_url();?>assets2/dist/js/pages/dashboards/dashboard1.js"></script>
</body>

</html>