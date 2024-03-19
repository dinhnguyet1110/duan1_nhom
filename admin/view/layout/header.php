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
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>Trang quản trị</title>
    <!-- Custom CSS -->
    <link href="assets/libs/flot/css/float-chart.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>

    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
 
    <div id="main-wrapper">
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b class="logo-icon p-l-10 p-t-20">
                            <img src="assets/images/logo-icon.png" alt="homepage" class="light-logo" />  
                        </b>
                        <span class="logo-text h2 text-white p-t-30">
                            ADMIN                          
                        </span>                       
                    </a>
                   
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               
                            </a>
                        </li>
                    </ul>
                    <ul class="navbar-nav float-right">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                <!-- <a class="dropdown-item" href="indexx.php?act=thongtin_tk"><i class="ti-user m-r-5 m-l-5"></i>Thông tin tài khoản</a>
                               
                                <a class="dropdown-item" href="indexx.php?act=update_tk"><i class="ti-settings m-r-5 m-l-5"></i>Cập nhật tài khoản</a> -->
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?php unset($_SESSION['user']); ?>login.php"><i class="fa fa-power-off m-r-5 m-l-5"></i>Thoát</a>
                                <div class="dropdown-divider"></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="indexx.php" aria-expanded="false"><i class="fas fa-genderless"></i><span class="hide-menu">Quản trị</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="indexx.php?act=list_theloai" aria-expanded="false"><i class="fas fa-genderless"></i><span class="hide-menu">Thể loại</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="indexx.php?act=list_phim" aria-expanded="false"><i class="fas fa-genderless"></i><span class="hide-menu">Phim</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="indexx.php?act=list_lichchieu" aria-expanded="false"><i class="fas fa-genderless"></i><span class="hide-menu">Lịch chiếu</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="indexx.php?act=list_khunggio" aria-expanded="false"><i class="fas fa-genderless"></i><span class="hide-menu">Khung giờ chiếu</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="indexx.php?act=list_phongchieu" aria-expanded="false"><i class="fas fa-genderless"></i><span class="hide-menu">Phòng chiếu phim</span></a></li>               
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="indexx.php?act=list_taikhoan" aria-expanded="false"><i class="fas fa-genderless"></i><span class="hide-menu">Tài khoản</span></a></li>        
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="indexx.php?act=list_binhluan" aria-expanded="false"><i class="fas fa-genderless"></i><span class="hide-menu">Bình luận</span></a></li>  
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="indexx.php?act=list_bongnuoc" aria-expanded="false"><i class="fas fa-genderless"></i><span class="hide-menu">Bỏng nước</span></a></li>   
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="indexx.php?act=list_ve" aria-expanded="false"><i class="fas fa-genderless"></i><span class="hide-menu">Quản lý đặt vé</span></a></li>     
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="indexx.php?act=list_thongke" aria-expanded="false"><i class="fas fa-genderless"></i><span class="hide-menu">Thống kê</span></a></li>                                                                           
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        