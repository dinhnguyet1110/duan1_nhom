
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
    
    <!-- ==========Sign-In-Section========== -->
    <section class="account-section bg_img" data-background="assets/images/account/account-bg.jpg">
        <div class="container">
            <div class="padding-top padding-bottom">
                <div class="account-area">
                    <div class="section-header-3">
                        <span class="cate">Xin chào</span>
                        <h2 class="title">Chào mừng trở lại</h2>
                    </div>
                    <form class="account-form" action="?act=dangnhap" method="post">
                        <div class="form-group">
                            <label for="email2">Tên đăng nhập<span>*</span></label>
                            <input type="text" name="user" placeholder="Tên đăng nhập" required>
                        </div>
                        <div class="form-group">
                            <label for="pass3">Mật khẩu<span>*</span></label>
                            <input type="password" name="pass" placeholder="Mật khẩu" id="pass3" required>
                        </div>
                        <div class="form-group checkgroup">
                            <input type="checkbox" id="bal2" required checked>
                            <label for="bal2">Nhớ mật khẩu</label>
                            <a href="index.php?act=quen_mk" class="forget-pass">Quên mật khẩu</a>
                        </div>
                        <?php 
                        if(isset($thongbao) && ($thongbao != "")){
                            echo '<p style="color:red">'.$thongbao.'</p>';                    
                         }                       
                        ?>
                        <div class="form-group text-center">
                            <input type="submit" name="dangnhap" value="Đăng nhập">
                        </div>
                    </form>
                    <div class="option">
                        Bạn chưa có tài khoản ? <a href="?act=dangky">Đăng ký ngay</a>
                    </div>
                    <div class="or"><span>Hoặc</span></div>
                    <ul class="social-icons">
                        <li>
                            <a href="#0">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#0" class="active">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#0">
                                <i class="fab fa-google"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>