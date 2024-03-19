<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from pixner.net/boleto/demo/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Nov 2023 17:10:37 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="user/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="user/assets/css/all.min.css">
    <link rel="stylesheet" href="user/assets/css/animate.css">
    <link rel="stylesheet" href="user/assets/css/flaticon.css">
    <link rel="stylesheet" href="user/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="user/assets/css/odometer.css">
    <link rel="stylesheet" href="user/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="user/assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="user/assets/css/nice-select.css">
    <link rel="stylesheet" href="user/assets/css/jquery.animatedheadline.css">
    <link rel="stylesheet" href="user/assets/css/main.css">

    <link rel="shortcut icon" href="user/assets/images/favicon.png" type="image/x-icon">

    <title>NTN Ceminas</title>


</head>

<body>
 <!-- ==========Preloader========== -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ==========Preloader========== -->
    <!-- ==========Overlay========== -->
    <div class="overlay"></div>
    <a href="#0" class="scrollToTop">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- ==========Overlay========== -->

    <!-- ==========Header-Section========== -->
    <header class="header-section">
        <div class="container">
            <div class="header-wrapper">
                <div class="logo">
                    <a href="index.php">
                        <img src="user/assets/images/logo/logo2.png" alt="logo">
                    </a>
                </div>
                <ul class="menu">
                    <li>
                        <a href="index.php" class="active">Trang chủ</a>                     
                    </li>
                    <li>
                        <a>Thể loại</a>
                        <ul class="submenu" name="idtl">
                            <?php foreach ($listtheloai as $tl) : ?>
                                <?php extract($tl) ?>
                            <li>
                                <?php $linktl="index.php?act=phim&idtl=".$id; 
                                 echo  '<a href="'.$linktl.'">'.$nametl.'</a>'; ?>
                            </li>
                            <?php endforeach ?> 
                                                  
                        </ul>
                    </li>
                    
                    
                    <li>
                         <a href="">Phim</a>
                        <!-- <ul class="submenu" name="status">
                            <li>
                                <a href="" >Phim đang chiếu</a>
                            </li>
                            <li>
                                <a href="">Phim sắp ra mắt</a>
                            </li>
                        </ul> -->
                    </li>
                    <li>
                        <a href="#0">Page</a>
                    </li>
                    <li>
                        <a href="#0">Giới thiệu</a>
                       
                    </li>
                    <li>
                        <a href="">Liên hệ</a>
                    </li>

                    <?php
                            if(isset($_SESSION['user'])){
                                extract($_SESSION['user']);
                    ?>
                        <ul class="menu">
                            <li>
                                <a href=""><i class="far fa-user"></i> Hello <?php echo $user?></a>
                                <ul class="submenu">
                                    <li>
                                        <a href="index.php?act=tttk">Thông tin tài khoản</a>
                                    </li>
                                    <li>
                                        <a href="index.php?act=update_tk">Cập nhật tài khoản</a>
                                    </li>
                                    <li>
                                        <a href="index.php?act=lichsu_ve">Lịch sử đặt vé</a>
                                    </li>
                                    <li>
                                        <a href="index.php?act=dangxuat">Đăng xuất</a>
                                    </li>
                            
                                </ul>
                            </li>
                        </ul>
                    <?php }else { ?>
                        <li class="header-button pr-0">
                            <a href="index.php?act=dangnhap">Đăng nhập</a>
                        </li>
                    <?php
                    }
                    ?>
                        
                </ul>
                <div class="header-bar d-lg-none">
					<span></span>
					<span></span>
					<span></span>
				</div>
            </div>
        </div>
    </header>