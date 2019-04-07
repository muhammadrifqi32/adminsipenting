<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <!-- <meta http-equiv="refresh" content="30"> -->
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
                        <a href="<?php echo base_url();?>user" class="logo">
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
            <?php
            $this->load->view('user/atasdashboard');
            ?>
        </nav>
    </header>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <?php
    $this->load->view('user/menudashboard');
    ?>
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
                    <h4 class="page-title">Dashboard</h4>
                </div>
                <div class="col-7 align-self-center">
                    <div class="d-flex align-items-center justify-content-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="#">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
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
                            <h4 class="card-title"></h4>
                            <p align="justify">Tanaman kelapa sawit atau yang memiliki nama latin <i>elaeis guinensis jack</i> merupakan tumbuhan tropis yang tergolong dalam famili Palmae dan berasal dari Nigeria, Afrika Barat. Meskipun demikian, dapat tumbuh di luar daerah asalnya, termasuk di Indonesia. Sampai saat ini Indonesia merupakan salah satu produsen utama minyak sawit dunia atau yang dikenal dengan <i>Crude Palm Oil</i> (CPO) selain Malaysia dan Nigeria. Menurut Fauzi dkk. (2006) tanaman kelapa sawit mulai berbunga dan membentuk buah setelah berumur 2-3 tahun. Buah akan menjadi masak sekitar 5-6 bulan setelah penyerbukan. Proses pematangan buah kelapa sawit dapat dilihat dari perubahan warna kulit buahnya. Buah akan berubah menjadi merah jingga ketika masak. Pada saat buah masak, kandungan minyak pada daging buah telah maksimal. Jika terlalu matang, buah kelapa sawit akan jatuh dari tangkai tandannya.</p>
                            <p align="justify">Ada beberapa tingkatan kematangan dari tandan buah segar (TBS) yang dipanen. Tingkat kematangan tersebut sangat mempengaruhi mutu panen, termasuk kualitas minyak sawit yang dihasilkan. Yaitu mentah, matang, dan terlewat matang. Untuk mengetahui tingkat kematangan TBS masih dilakukan dengan cara konvensional, yaitu dengan melihat perubahan warna dan jumlah brondolan yang jatuh. Saat buah telah dipanen, buah akan dikumpulkan sebelum diangkut truk ke pabrik seperti pada gambar 1.1. Pada proses ini sering terjadi kendala, dimana ada buah yang layak dan tidak layak untuk diangkut ke pabrik. Buah yang layak untuk diangkut adalah buah yang telah matang dan terlewat matang, sementara buah mentah tidak layak untuk diolah. Tentunya hanya buah yang layak untuk diolah yang akan diangkut truk untuk dibawa ke pabrik. Akan tetapi, untuk saat ini buah yang tidak layak angkut tetap ikut terangkut ke pabrik.</p>
                            <p align="justify">Di era globalisasi seperti sekarang, teknologi bisa dimanfaatkan untuk mempermudah pendeteksian kematangan TBS. Salah satu teknologi yang bisa digunakan adalah pengolahan citra digital. Munir (2004) menyatakan pengolahan citra atau yang lebih dikenal dengan gambar adalah pemrosesan citra, khususnya dengan menggunakan komputer, menjadi citra yang kualitasnya lebih baik. Dengan memanfaatkan kamera untuk mengambil gambar, bisa didapatkan informasi yang dibutuhkan.</p>
                            <p align="justify">Berdasarkan masalah diatas, maka dilakukanlah penelitian untuk membuat aplikasi pendeteksi kematangan TBS kelapa sawit dengan memanfaatkan citra. Dengan menggunakan citra dapat memberi informasi mengenai tingkat kematangan TBS yang layak dan tidak layak untuk diangkut ke pabrik. Tingkat kematangan TBS ditentukan oleh warna, oleh karena itu digunakan metode ekstraksi warna <i>Red, Green dan Blue</i> (RGB) untuk mendapatkan nilai numerik dari citra TBS (Kusumanto dan Tompunu, 2011). Setelah nilai numerik dari citra TBS didapatkan, kemudian dilakukan pengklasifikasian menggunakan algoritma <i>K-Nearest Neighbor</i> (K-NN) untuk mendapatkan prediksi kematangan TBS berdasarkan data yang sudah ada (Halela, Nurhadiyono, & Rahmanti, 2016). Hasil yang didapat setelah aplikasi mengolah citra akan disajikan menggunakan sistem operasi android dan akan menampilkan apakah TBS tersebut layak untuk diangkut atau tidak.</p>
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